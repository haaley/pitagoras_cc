<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/19
 * Time: 17:41
 */
namespace App\Http\Repositories;

use App\Configuration;
use App\Post;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Lufficc\MarkDownParser;

/**
 * design for cache
 *
 *
 * Class PostRepository
 * @package App\Http\Repository
 */
class PostRepository extends Repository
{

    protected $markDownParser;

    static $tag = 'post';

    /**
     * PostRepository constructor.
     * @param MarkDownParser $markDownParser
     */
    public function __construct(MarkDownParser $markDownParser)
    {
        $this->markDownParser = $markDownParser;
    }

    public function model()
    {
        return app(Post::class);
    }

    public function count()
    {
        $count = $this->remember($this->tag() . '.count', function () {
            return $this->model()->withoutGlobalScopes()->count();
        });
        return $count;
    }

    /**
     * @param int $page
     * @return mixed
     */
    public function pagedPostsWithoutGlobalScopes($page = 20)
    {
        $posts = $this->remember('post.WithOutContent.' . $page . '' . request()->get('page', 1), function () use ($page) {
            return Post::withoutGlobalScopes()
                ->whereDoesntHave('meta', function ($q) {
                    $q->where('key', '=', 'notice-meta');
                })
                ->orderBy('created_at', 'desc')
                ->select(['id', 'title', 'slug', 'deleted_at', 'published_at', 'status'])
                ->paginate($page);
        });
        return $posts;
    }

    public function pagedPostsWithoutGlobalScopesWithMeta($nameMeta, $page = 20)
    {
        $posts = $this->remember('post.WithOutContent.WithMeta' . $nameMeta . request()->get('page', 1), function () use ($page, $nameMeta) {
            $post = Post::withoutGlobalScopes()->whereHasMeta($nameMeta)->paginate($page);
            $this->cachePostForPaginate($post, $nameMeta);
            return $post;
        });
        if (!$posts)
            abort('404');
        return $posts;
    }

    /**
     * @param int $page
     * @return mixed
     */
    public function pagedPosts($page = 7)
    {
        $posts = $this->remember('post.page.' . $page . '' . request()->get('page', 1), function () use ($page) {
            return Post::select(Post::selectArrayWithOutContent)->with(['tags', 'category'])->withCount('comments')->orderBy('created_at', 'desc')->paginate($page);
        });
        return $posts;
    }

    public function pagedPostsWithoutMeta($page = 7)
    {
        $posts = $this->remember('post.page.without.meta' . $page . '' . request()->get('page', 1), function () use ($page) {
            return Post::select(Post::selectArrayWithOutContent)
                ->whereDoesntHave('meta', function($q) {
                    $q->where('key', '=', 'notice-meta');
                })
                ->with(['tags', 'category'])->withCount('comments')->orderBy('created_at', 'desc')->paginate($page);
        });
        return $posts;
    }

    /**
     * @param $slug string
     * @return Post
     */
    public function get($slug)
    {
        $post = $this->remember('post.one.' . $slug, function () use ($slug) {
            return Post::where('slug', $slug)->with(['tags', 'category', 'configuration'])->withCount('comments')->firstOrFail();
        });
        return $post;
    }

    public function hotPosts($count = 5)
    {
        $posts = $this->remember('post.achieve.' . $count, function () use ($count) {
            return Post::select([
                'title',
                'slug',
                'published_at',
                'view_count',
            ])->whereDoesntHave('meta', function ($q) {
                $q->where('key', '=', 'meta');
            })->withCount('comments')->orderBy('view_count', 'desc')->limit($count)->get();
        });
        return $posts;
    }

    public function achieve()
    {
        $posts = $this->remember('post.achieve', function () {
            return Post::select([
                'id',
                'title',
                'slug',
                'created_at',
            ])->orderBy('created_at', 'desc')->get();
        });
        return $posts;
    }

    public function recommendedPosts(Post $post)
    {
        $recommendedPosts = $this->remember('post.recommend.' . $post->slug, function () use ($post) {
            $category = $post->category;
            $tags = [];
            foreach ($post->tags as $tag) {
                array_push($tags, $tag->name);
            }
            $recommendedPosts = Post
                ::where('category_id', $category->id)
                ->Where('id', '<>', $post->id)
                ->orderBy('view_count', 'desc')
                ->select(Post::selectArrayWithOutContent)
                ->limit(5)
                ->get();
            return $recommendedPosts;
        });
        return $recommendedPosts;
    }

    public function postCount()
    {
        $count = $this->remember('post-count', function () {
            return Post::count();
        });
        return $count;
    }

    public function getWithoutContent($post_id)
    {
        $post = $this->remember('post.one.wc.' . $post_id, function () use ($post_id) {
            return Post::where('id', $post_id)->select(Post::selectArrayWithOutContent)->first();
        });
        if (!$post)
            abort(404);
        return $post;
    }

    public function lastPost()
    {
        $post = $this->remember('post.last', function () {
            return Post::select([
                'title',
                'slug',
                'published_at',
                'view_count',])->get()->last();
        });

        return $post;
    }

    /**
     * @param Request $request
     * @return mixed
     */

    public function create(Request $request)
    {
        $this->clearAllCache();

        $ids = [];
        $tags = $request['tags'];
        if (!empty($tags)) {
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                array_push($ids, $tag->id);
            }
        }
        $status = $request->get('status', 0);
        if ($status == 1) {
            $request['published_at'] = Carbon::now();
        }

        $post = auth()->user()->posts()->create(
            array_merge(
                $request->except(['_token', 'description']),
                [
                    'html_content' => $this->markDownParser->parse($request->get('content'), false),
                    'description' => $this->markDownParser->parse($request->get('description'), false),
                ]
            )
        );
        $post->tags()->sync($ids);

        $post->saveConfig($request->all());

        return $post;
    }

    public function createWithMeta(Request $request, array $meta, $nameMeta)
    {
        $this->clearAllCache();

        $meta = json_encode(serialize($meta));
        $ids = [];
        $tags = $request['tags'];
        if (!empty($tags)) {
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                array_push($ids, $tag->id);
            }
        }
        $status = $request->get('status', 0);
        if ($status == 1) {
            $request['published_at'] = Carbon::now();
        }

        $post = auth()->user()->posts()->create(
            array_merge(
                $request->except(['_token', 'description']),
                [
                    'html_content' => $this->markDownParser->parse($request->get('content'), false),
                    'description' => $this->markDownParser->parse($request->get('description'), false),
                ]
            )
        );
        $post->tags()->sync($ids);

        $post->setMeta($nameMeta, $meta);

        $post->saveConfig($request->all());

        return $post;
    }

    /**
     * @param Request $request
     * @param Post $post
     * @return bool|int
     */

    public function update(Request $request, Post $post)
    {
        $this->clearAllCache();

        $ids = [];
        $tags = $request['tags'];
        if (!empty($tags)) {
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                array_push($ids, $tag->id);
            }
        }
        $post->tags()->sync($ids);

        $status = $request->get('status', 0);
        if ($status == 1) {
            $request['published_at'] = Carbon::now();
        }

        $post->saveConfig($request->all());

        return $post->update(
            array_merge(
                $request->except(['_token', 'description']),
                [
                    'html_content' => $this->markDownParser->parse($request->get('content'), false),
                    'description' => $this->markDownParser->parse($request->get('description'), false),
                ]
            ));
    }

    public function updateWithMeta(Request $request, Post $post, array $meta, $nameMeta)
    {
        $this->clearAllCache();

        $ids = [];
        $tags = $request['tags'];
        if (!empty($tags)) {
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                array_push($ids, $tag->id);
            }
        }
        $post->tags()->sync($ids);

        $status = $request->get('status', 0);
        if ($status == 1) {
            $request['published_at'] = Carbon::now();
        }

        $meta = json_encode(serialize($meta));
        $post->setMeta($nameMeta, $meta);

        $post->saveConfig($request->all());

        return $post->update(
            array_merge(
                $request->except(['_token', 'description']),
                [
                    'html_content' => $this->markDownParser->parse($request->get('content'), false),
                    'description' => $this->markDownParser->parse($request->get('description'), false),
                ]
            ));
    }

    public function tag()
    {
        return PostRepository::$tag;
    }

    public function cachePostForPaginate($model, $nameMeta)
    {
        $meta = $this->getMetaAll($nameMeta, $model);
         foreach($model as $key => $m) {
            array_unshift($meta[$key], $m->id);
        }
        array_walk($meta, function (& $item) {
            $item['id'] = $item[0];
            unset($item['0']);
        }); // falta ainda trabalhar o cache

    }
}