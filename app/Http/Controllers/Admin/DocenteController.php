<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Repositories\CategoryRepository;
use App\Http\Requests;
use Illuminate\Http\Request;
use XblogConfig;
use App\Traits\UploadAvatarDocente;
use Illuminate\Http\UploadedFile;
use App\Docente;

class DocenteController extends Controller
{
    use UploadAvatarDocente;

    const PATH_AVATAR = '/site/img/avatar';

    protected $categoryRepository;

    /**
     * DocenteController constructor.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:docentes',
            'description' => 'required|unique:docentes',
        ]);
        $avatar = $request->file('avatar');

        $name_avatar = $this->saveAvatarDocente($avatar,self::PATH_AVATAR);

        $dados = $request->all();
        unset($dados['_token']);
        $dados['slug'] = str_slug($dados['name'],'-');
        $dados['avatar'] = self::PATH_AVATAR.'/'.$name_avatar;        

        if (is_null($name_avatar))
            return back()->with('error', 'Docente ' . $request['name'] . ' não foi cadastrado');

        if (Docente::create($dados))
            return back()->with('success', 'Docente ' . $request['name'] . ' foi cadastrado com sucesso');
        else
            return back()->with('error', 'Docente ' . $request['name'] . ' não foi cadastrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Category $category
     * @return mixed
     * @internal param int $id
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories',
        ]);

        if ($this->categoryRepository->update($request, $category)) {
            return redirect()->route('admin.categories')->with('success', 'Categorias ' . $request['name'] . ' alterada com sucesso');
        }

        return back()->withInput()->withErrors('Categoria ' . $request['name'] . ' não foi alterada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return mixed
     * @internal param int $id
     */
    public function destroy(Category $category)
    {
        if ($category->posts()->withoutGlobalScopes()->count() > 0) {
            return redirect()->route('admin.categories')->withErrors($category->name . ' O seguinte categoria não pode ser excluída');
        }
        $this->categoryRepository->clearCache();
        if ($category->delete())
            return back()->with('success', $category->name . ' excluido com sucesso');
        return back()->withErrors($category->name . ' exclusão falhou');
    }
}
