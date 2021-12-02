<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('file');
        $newFile = $file->move(public_path('images'), Str::random().'.'.$file->extension());

        return [
            'url' => '/images/'.$newFile->getFilename()
        ];
    }
}
