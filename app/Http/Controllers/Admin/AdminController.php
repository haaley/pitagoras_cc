<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\CommentRepository;
use App\Http\Repositories\ImageRepository;
use App\Http\Repositories\MapRepository;
use App\Http\Repositories\PageRepository;
use App\Http\Repositories\PostRepository;
use App\Http\Repositories\TagRepository;
use App\Http\Repositories\UserRepository;
use App\Http\Controllers\TelegramRepository;
use App\Http\Requests;
use App\Ip;
use App\Post;
use App\Docente;
use DB;
use App\User;
use Illuminate\Http\Request;
use League\HTMLToMarkdown\HtmlConverter;
use Lufficc\Post\PostHelper;

class AdminController extends Controller
{
    use PostHelper;
    protected $postRepository;
    protected $commentRepository;
    protected $userRepository;
    protected $tagRepository;
    protected $categoryRepository;
    protected $pageRepository;
    protected $imageRepository;
    protected $mapRepository;

    /**
     * AdminController constructor.
     * @param PostRepository $postRepository
     * @param CommentRepository $commentRepository
     * @param UserRepository $userRepository
     * @param CategoryRepository $categoryRepository
     * @param TagRepository $tagRepository
     * @param PageRepository $pageRepository
     * @param ImageRepository $imageRepository
     * @param MapRepository $mapRepository
     * * @param $telegramRepository
     * @internal param MapRepository $mapRepository
     */
    public function __construct(PostRepository $postRepository,
                                CommentRepository $commentRepository,
                                UserRepository $userRepository,
                                CategoryRepository $categoryRepository,
                                TagRepository $tagRepository,
                                PageRepository $pageRepository,
                                ImageRepository $imageRepository,
                                MapRepository $mapRepository)
    {
        $this->postRepository = $postRepository;
        $this->commentRepository = $commentRepository;
        $this->userRepository = $userRepository;
        $this->categoryRepository = $categoryRepository;
        $this->tagRepository = $tagRepository;
        $this->pageRepository = $pageRepository;
        $this->imageRepository = $imageRepository;
        $this->mapRepository = $mapRepository;
    }

    public function index()
    {
        $info = [];
        $info['post_count'] = $this->postRepository->count();
        $info['notice_count'] = count($this->postRepository->pagedPostsWithoutGlobalScopesWithMeta('notice-meta'));
        $info['comment_count'] = $this->commentRepository->count();
        $info['user_count'] = $this->userRepository->count();
        $info['category_count'] = $this->categoryRepository->count();
        $info['tag_count'] = $this->tagRepository->count();
        $info['page_count'] = $this->pageRepository->count();
        $info['image_count'] = $this->imageRepository->count();
        $info['ip_count'] = Ip::count();
        $response = view('admin.index', compact('info'));

        if (($failed_jobs_count = DB::table('failed_jobs')->count()) > 0) {
            $failed_jobs_link = route('admin.failed-jobs');
            $response->withErrors(['failed_jobs' => "You have $failed_jobs_count failed jobs.<a href='$failed_jobs_link'>View</a>"]);
        }
        return $response;
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function saveSettings(Request $request)
    {
        $inputs = $request->except('_token');
        $this->mapRepository->saveSettings($inputs);
        return back()->with('success', 'Salvo com sucesso');
    }

    public function posts()
    {
        $posts = $this->postRepository->pagedPostsWithoutGlobalScopes();
        return view('admin.posts', compact('posts'));
    }

    public function comments(Request $request)
    {
        $comments = Comment::withoutGlobalScopes()->where($request->except(['page']))->orderBy('created_at', 'desc')->paginate(20);
        $comments->appends($request->except('page'));
        return view('admin.comments', compact('comments'));
    }

    public function tags()
    {
        $tags = $this->tagRepository->getAll();
        return view('admin.tags', compact('tags'));
    }

    public function categories()
    {
        $categories = $this->categoryRepository->getAll();
        return view('admin.categories', compact('categories'));
    }

    public function docentes(Request $request)
    {
        $docentes = Docente::all();
        return view('admin.docentes')->with(compact('docentes'));
    }

    public function users(Request $request)
    {
        $users = User::where($request->except(['page']))->paginate(20);
        $users->appends($request->except('page'));
        return view('admin.users', compact('users'));
    }

    public function pages()
    {
        $pages = $this->pageRepository->getWithoutMeta();

        $pageStandard = $this->pageRepository->getWithMeta('page-meta');

        return view('admin.pages', compact('pages', 'pageStandard'));
    }

    public function notice()
    {
        $notice = $this->postRepository->pagedPostsWithoutGlobalScopesWithMeta('notice-meta');
        $metas = $this->postRepository->getMetaAll('notice-meta', $notice);
        return view('admin.notice.index', compact('notice', 'metas'));
    }

    public function noticeCreate()
    {
        $postHasMeta = \App\Post::has('meta')->get();
        $postHasMeta = $this->postRepository->getMetaAll('notice-meta', $postHasMeta->last());
        $postHasMeta = empty($postHasMeta[0]) ? $postHasMeta = [] : $postHasMeta[0] ;
        isset($postHasMeta['ordem']) ? $postHasMeta['ordem'] = $postHasMeta['ordem'] + 1 : $postHasMeta['ordem'] = 1;
        return view('admin.notice.create', ['categories' => $this->categoryRepository->getAll(), 'meta' => $postHasMeta]);
    }

    public function noticeStore(Request $request)
    {
        $v = [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'slug' => 'required|unique:posts',
            'data' => 'required',
            'figure' => 'required|image|max:5000',
        ];
        $this->validate($request, $v);
        $meta = [
            'categoria' => 'noticia',
            'ordem' => $request->ordem,
            'data' => $request->data
        ];
        $post = $this->postRepository->createWithMeta($request, $meta, 'notice-meta');
        if ($post) {
            $img = $this->imageRepository->uploadImageToLocal($request, null, true);
        }
        if ($img) {
            return redirect('admin/noticia')->with('Sucesso', "Post $post cadastrado com sucesso");
        }
        return back()->withErrors("Erro, Post não foi cadastrado");

    }

    public function noticeEdit($id)
    {
        $post = Post::withoutGlobalScopes()->find($id);

        $this->checkPolicy('update', $post);

        $post->description = (new HtmlConverter(['header_style' => 'atx']))->convert($post->description);

        $metaPost = unserialize(json_decode($post->getMeta('notice-meta')));

        if (empty($metaPost['ordem'])) {
            $postHasMeta = \App\Post::has('meta')->get();
            $postHasMeta = unserialize(json_decode($postHasMeta->last()->getMeta('notice-meta'), 'JSON_PRETTY_PRINT'));
            isset($postHasMeta['ordem']) ? $metaPost['ordem'] = $postHasMeta['ordem'] + 1 : $metaPost['ordem'] = 1;
        }

        return view('admin.notice.edit', [
            'post' => $post,
            'categories' => $this->categoryRepository->getAll(),
            'tags' => $this->tagRepository->getAll(),
            'meta' => $metaPost
        ]);
    }

    public function noticeUpdate(Request $request, $id)
    {
        $post = Post::withoutGlobalScopes()->find($id);
        $this->checkPolicy('update', $post);
        $v = [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'slug' => 'required'
        ];

        $this->validate($request, $v);
        $categoria = Category::find($post->category_id);
        $data = unserialize(json_decode($post->getMeta('notice-meta')));
        $data['data'] = $request->data;
        $data['ordem'] = $request->ordem;

        $meta = [
            'categoria' => $categoria->name,
            'data' => $data['data'],
            'ordem' => $data['ordem']
        ];

        if ($this->postRepository->updateWithMeta($request, $post, $meta, 'notice-meta')) {
            return redirect('admin/noticia')->with('success', 'Notícia ' . $request['name'] . ' modificada com sucesso');
        } else
            return redirect('admin/noticia')->withErrors('Erro: ' . $request['name'] . ' não foi modificado');
    }

    public function noticeDestroy($id)
    {
        $post = Post::withoutGlobalScopes()->findOrFail($id);
        $redirect = route('admin.notice.index');

        if (request()->has('redirect'))
            $redirect = request()->input('redirect');

        if ($post->trashed()) {
            $result = $post->forceDelete();
            $post->delete(); // delete attached meta data;

        } else {
            $result = $post->delete();
            $post->delete();  // delete attached meta data;

        }
        if ($result) {
            $this->postRepository->clearAllCache();
            return redirect($redirect)->with('success', 'Excluído com sucesso');

        } else
            return redirect($redirect)->withErrors('Exclusão falhou');
    }

    public function noticeShow($slug)
    {
        $post = $this->postRepository->get($slug);
        $recommendedPosts = $this->postRepository->recommendedPosts($post);
        $comments = $this->commentRepository->getByCommentable('App\Post', $post->id);
        $category = \App\Category::all();
        $tag = \App\Tag::all();
        $this->onPostShowing($post);
        return view('admin.notice.show', compact('post', 'comments', 'recommendedPosts', 'category', 'tag', 'author'));
    }

    public function ips(Request $request)
    {
        $ips = Ip::withoutGlobalScopes()->where($request->except(['page']))->withCount(
            ['comments' => function ($query) {
                $query->withTrashed();
            }]
        )->with(['user'])->orderBy('user_id', 'id')->paginate(20);
        $ips->appends($request->except('page'));
        return view('admin.ips', compact('ips'));
    }

    public function failedJobs()
    {
        $failed_jobs = DB::table('failed_jobs')->get();
        return view('admin.failed_jobs', compact('failed_jobs'));
    }

    public function flushFailedJobs()
    {
        $result = DB::table('failed_jobs')->delete();
        if ($result) {
            return back()->with('success', "Flush $result failed jobs");
        }
        return back()->withErrors("Flush failed jobs failed");
    }

}
