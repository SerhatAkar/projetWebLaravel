<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use ZipArchive;
use Zipper;

class download extends Controller
{
 
    public function getDownload()
    
    {
        $files = glob(public_path('/images/*'));
        Zipper::make('/documents/pictures.zip')->add($files);
    
        return response()->download(public_path('/documents/pictures.zip'));
    }
}