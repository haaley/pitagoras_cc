<?php
namespace App\Traits;
use Illuminate\Http\UploadedFile;

trait UploadAvatarDocente
{
    private function saveAvatarDocente(UploadedFile $file, $path = '/img/avatar')
    {
        $extension = $file->getClientOriginalExtension();
        $newName = date('dmy').time().'.'.$extension;

        if (!move_uploaded_file($file->getPathname(),public_path($path.'/'.$newName))){
            return null;
        }

        return $newName;
    }
}
