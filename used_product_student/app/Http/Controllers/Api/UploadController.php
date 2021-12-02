<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\ProductsComments;
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
