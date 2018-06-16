<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/19
 * Time: 17:41
 */
namespace App\Http\Repositories;

use App\Configuration;
use App\Page;
use Illuminate\Http\Request;
use Parsedown;

/**
 * Class PageRepository
 * @package App\Http\Repository
 */
class PageRepository extends Repository
{
    static $tag = 'page';
    protected $parseDown;

    public function __construct()
    {
        $this->parseDown = new Parsedown();
    }

    public function model()
    {
        return app(Page::class);
    }

    /**
     * @param $name string
     * @return mixed
     */
    public function get($name)
    {
        $page = $this->remember('page.one.' . $name, function () use ($name) {
            return Page::where('name', $name)->with('configuration')->withCount(['comments'])->first();
        });

        if (!$page)
            abort(404);
        return $page;
    }

    public function getAll()
    {
        $page = $this->remember('page.all.', function () {
            return Page::select(['id', 'name', 'display_name'])->with('configuration')->get();
        });

        if (!$page)
            abort(404);
        return $page;
    }

    public function getWithMeta($meta)
    {
        $page = $this->remember('page.all.meta', function () use ($meta) {
            return Page::whereHasMeta($meta)->get();
        });

        if (!$page)
            abort(404);
        return $page;
    }

    public function getWithoutMeta()
    {
        $page = $this->remember('page.not.meta', function () {
            return Page::select(['name', 'display_name'])->where('standard', '=', 0)->get();
        });

        if (!$page)
            abort(404);
        return $page;
    }

    public function setStandard()
    {
        $page = Page::all();
        foreach($page as $p) {
            $dados = ['name'=> 'blank', 'status'=> 1, 'breadcrumbs'=> 'blank > blank', 'background' => 'blank.jpg', 'search' => 0, 'like' => 0];
            $serializa = json_encode(serialize($dados));

            $p->setMeta('page-meta', $serializa);
        }

    }


    /**
     * @param Request $request
     * @return Page
     */
    public function create(Request $request)
    {
        $this->clearCache();
        $page = Page::create(array_merge(
            $request->except('_token'),
            ['html_content' => $this->parseDown->text($request->get('content'))]
        ));

        $page->saveConfig($request->all());
        return $page;
    }

    public function update(Request $request, Page $page)
    {
        $this->clearCache();
        $page->saveConfig($request->all());
        return $page->update(array_merge(
            $request->except('_token'),
            ['html_content' => $this->parseDown->text($request->get('content'))]
        ));
    }

    public function tag()
    {
        return PageRepository::$tag;
    }
}