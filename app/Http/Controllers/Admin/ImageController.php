<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ImageRepository;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    protected $imageRepository;

    /**
     * ImageController constructor.
     * @param $imageRepository
     */
    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function images()
    {
        $images = $this->imageRepository->getAll();
        $image_count = $this->imageRepository->count();
        return view('admin.images', compact('images','image_count'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function uploadImage(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|max:5000'
        ]);
        $type = $request->input('type', null);

        if ($type != null && $type == 'xrt') {
            return $this->imageRepository->uploadImageToLocal($request, false);
        } else {
            if ($this->imageRepository->uploadImageToLocal($request, true))
                return back()->with('success', 'Upload realizado com sucesso');
            return back()->withErrors('Erro ao realizar o upload');
        }
    }
}
