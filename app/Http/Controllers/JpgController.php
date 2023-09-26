<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class JpgController extends Controller
{
    function JpgToPng()  {
        return \view('JPG.jpg-to-png'); 
    }
    function JpgToJPEG()  {
        return \view('JPG.jpg-to-jpeg'); 
    }
    function JpgToWEBP()  {
        return \view('JPG.jpg-to-webp');    
    }
    function JpgToHEIC()  {
        return \view('JPG.jpg-to-heic');
    }
    function JpgToGIF()  {
        return \view('JPG.jpg-to-gif');
    }

    function JpgToTIFF()  {
        return \view('JPG.jpg-to-tiff');
    }
    
    function JpgToAVIF()  {
        return \view('JPG.jpg-to-avif');
    }


}
