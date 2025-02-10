<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function resume()
    {
        return view('pages.resume');
    }

    public function services()
    {
        return view('pages.services');
    }
}
