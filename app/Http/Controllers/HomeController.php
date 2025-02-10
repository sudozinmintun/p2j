<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::inRandomOrder()->take(8)->get();
        return view('welcome', compact('clients'));
    }
}
