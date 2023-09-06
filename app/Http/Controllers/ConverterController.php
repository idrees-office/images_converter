<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConverterController extends Controller
{
    function JpgToJPEG()  {
        return \view('jpg-to-jpeg'); 
    }
}
