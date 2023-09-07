<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConverterController extends Controller
{
    function JpgToJPEG()  {
        return \view('jpg-to-jpeg'); 
    }


    function JpgToWEBP()  {
        return \view('jpg-to-webp');    
    }

    
    function JpgToHEIC()  {
        return \view('jpg-to-heic');
    }

}
