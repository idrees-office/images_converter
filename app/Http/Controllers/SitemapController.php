<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    function SiteMap() {
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }
}




