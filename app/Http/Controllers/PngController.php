<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PngController extends Controller
{
    function PngToJpg()  {
        return \view('PNG.png-to-jpg'); 
    }
    function PngToJPEG()  {
        return \view('PNG.png-to-jpeg'); 
    }
    function PngToWEBP()  {
        return \view('PNG.png-to-webp');    
    }
    function PngToHEIC()  {
        return \view('PNG.png-to-heic');
    }

}
