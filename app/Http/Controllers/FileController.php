<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class FileController extends Controller
{
    public function getdownload($cv){
        $file_path = public_path('download/'.$cv);
        return response()->download($file_path);
    }
}
