<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Repositories\DocentesRepository;
use App\Http\Requests;
use Illuminate\Http\Request;
use XblogConfig;
use App\Traits\UploadAvatarDocente;
use Illuminate\Http\UploadedFile;
use App\Docente;

class DocenteController extends Controller
{


    /**
     * DocenteController constructor.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(DocentesRepository $docentesRepository)
    {
        $this->docentesRepository = $docentesRepository;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.docentes.create');
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
        ]);

        if ($this->docentesRepository->create($request))
            return back()->with('success', 'Docente ' . $request['name'] . ' foi criada com sucesso');
        else
            return back()->with('error', 'Docente ' . $request['name'] . ' não foi criada');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Docente $docente)
    {
        return view('admin.docentes.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Category $category
     * @return mixed
     * @internal param int $id
     */
    public function update(Request $request, Docente $docente)
    {


        if ($this->docentesRepository->update($request, $docente)) {
            return redirect()->route('admin.docentes')->with('success', 'Docente ' . $request['name'] . ' alterado com sucesso');
        }

        return back()->withInput()->withErrors('Docente ' . $request['name'] . ' não foi alterado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return mixed
     * @internal param int $id
     */
    public function destroy(Docente $docente)
    {
 
        $this->docentesRepository->clearCache();
        if ($docente->delete())
            return back()->with('success', $docente->name . ' excluido com sucesso');
        return back()->withErrors($docente->name . ' exclusão falhou');
    }
}
