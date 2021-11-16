<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function show()
    {
        return response()->download(storage_path('app/oleksii.webp'), 'Picture Downloading');
    }
}
