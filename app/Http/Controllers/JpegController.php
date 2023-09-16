<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JpegController extends Controller
{
    
    function JPEGToJpg()  {
        return \view('JPEG.jpeg-to-jpg'); 
    }
    function JPEGToPNG()  {
        return \view('JPEG.jpeg-to-png'); 
    }
    function JPEGToWEBP()  {
        return \view('JPEG.jpeg-to-webp');    
    }
    function JPEGToHEIC()  {
        return \view('JPEG.jpeg-to-heic');
        
    }
}
