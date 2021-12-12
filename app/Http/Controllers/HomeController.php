<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    public function deleteFromPublic()
    {
        if (File::exists(public_path('uploads/apple.jpg'))) {
            File::delete(public_path('uploads/apple.jpg'));
            dd('File is deleted!');
        }else{
            dd('File not found!');
        }
    }

    public function deleteFromStorage()
    {
        if (Storage::exists('uploads/apple.jpg')) {
            Storage::delete('uploads/apple.jpg');
            dd('File is deleted!');
        }else{
            dd('File not found!');
        }
    }
}
