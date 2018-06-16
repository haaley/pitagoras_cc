<?php

namespace App\Http\Controllers;

use App\Http\Repositories\PostRepository;
use App\Post;
use Illuminate\Http\Request;
use XblogConfig;


class HomeController extends Controller
{
    protected $postRepository;
    protected $telegramRepository;

    /**
     * Create a new controller instance.
     *
     * @param PostRepository $postRepository
     * @param TelegramRepository $telegramRepository
     * id
     * user_id
     * category_id
     * title
     * descripttion
     * slug
     * figure
     * content
     * html_content
     * status
     * view_counts
     * deleted_at
     * ordem
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = Post::withoutGlobalScopes()->whereHasMeta('notice-meta')->take(6)->get();
        if (empty($posts)) {
            foreach ($posts as $p) {
                $post[] = $p;
            }
            $meta = $this->postRepository->getMetaAll('notice-meta', $post);
        } else
            $post = false;
        return view('index', compact('post', 'meta'));
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));
        if ($key == '')
            return back()->withErrors("Não foi encontrado");
        $page_size = XblogConfig::getValue('page_size', 7);
        $key = "%$key%";
        $posts = Post::where('title', 'like', $key)
            ->orWhere('description', 'like', $key)
            ->with(['tags', 'category'])
            ->withCount('comments')
            ->orderBy('view_count', 'desc')
            ->paginate($page_size);
        $posts->appends($request->except('page'));
        return view('search', compact('posts'));
    }

    public function projects()
    {
        return view('projects');
    }

    public function achieve()
    {
        $posts = $this->postRepository->achieve();
        $posts_count = $this->postRepository->postCount();
        return view('achieve', compact('posts', 'posts_count'));
    }

    public function sobre()
    {
        return view('site.about.index');
    }


    public function research()
    {
        return view('site.research.index');
    }

    public function researchSingle(Request $request)
    {
        $slug = $request->slug;

        return view('site.research.single', compact('slug'));
    }

    public function curso()
    {
        return view('site.curso.index');
    }

    public function cursoSingle(Request $request)
    {
        $slug = $request->slug;

        return view('site.curso.single', compact('slug'));
    }

    public function docente()
    {
        $docentes = docentesFake();
        return view('site.docente.index', compact('docentes'));
    }

    public function docenteSingle(Request $request)
    {
        $slug = $request->slug;
        $docentes = docentesFake();

        foreach ($docentes as $prof) {
           if ($prof->url === $slug) {
               $professor = $prof;
           }
        }        

        return view('site.docente.single', compact('slug', 'professor'));
    }

    public function discente()
    {
        $discentes = docentesFake();
        return view('site.discente.index', compact('discentes'));
    }
    
    public function discenteSingle(Request $request)
    {
        $slug = $request->slug;
        
        return view('site.discente.single', compact('slug'));
    }

    public function contato()
    {
        return view('site.contact.index');
    }
    
    public function projetos()
    {
        return view('site.projetos.index', compact('discentes'));
    }
}
