<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class JpgPngController extends Controller
{
    function JpgToPng()  {
        return \view('jpg-to-png'); 
    }
}
