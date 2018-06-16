<?php

namespace App\Http\Controllers\Admin;

use App\File;
use App\Http\Controllers\Controller;
use App\Http\Repositories\ImageRepository;
use App\Http\Repositories\UnknownFileRepository;
use Illuminate\Http\Request;

class FileController extends Controller
{
    protected $imageRepository;
    protected $unknownFileRepository;

    /**
     * ImageController constructor.
     * @param ImageRepository $imageRepository
     * @param UnknownFileRepository $unknownFileRepository
     */
    public function __construct(ImageRepository $imageRepository,
                                UnknownFileRepository $unknownFileRepository)
    {
        $this->imageRepository = $imageRepository;
        $this->unknownFileRepository = $unknownFileRepository;
    }

    public function files()
    {
        $files = $this->unknownFileRepository->getAllFiles();
        return view('admin.files', compact('files'));
    }


    public function uploadFile(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
        ]);
        $type = $request->get('type');

        if ($type) {
            return $this->uploadTypeFile($request);
        }

        if ($this->upload($request, $this->getTag($request)))
            return back()->with('success', 'Upload feito com sucesso');
        return back()->withErrors('Falha no envio');
    }

    public function uploadTypeFile(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
            'type' => 'required',
        ]);
        if ($this->upload($request, $request->get('type')))
            return back()->with('success', 'Upload feito com sucesso');
        return back()->withErrors('Falha no envio');
    }

    public function deleteFile(Request $request)
    {
        $key = $request->get('key');
        $type = File::where('key', $key)->firstOrFail()->type;
        $this->unknownFileRepository->setTag($type);
        $result = $this->unknownFileRepository->delete($key);
        if ($result) {
            return back()->with('success', 'excluido com sucesso');
        }
        return back()->with('success', 'exclusão falhou');
    }

    public function deleteFileLocalFile(Request $request)
    {
        $key = $request->get('key');
        $type = File::where('key', $key)->firstOrFail()->type;
        $this->unknownFileRepository->setTag($type);
        $result = $this->unknownFileRepository->deleteLocal($key);
        if ($result) {
            return back()->with('success', 'excluido com sucesso');
        }
        return back()->with('success', 'exclusão falhou');
    }

    private function upload(Request $request, $type)
    {
        $this->unknownFileRepository->setTag($type);
        return $this->unknownFileRepository->upload($request);
    }

    private function getTag(Request $request)
    {
        $tag = $request->file('file')->getClientOriginalExtension();
        if (!$tag) {
            $tag = 'unknown';
        }
        return $tag;
    }
}
