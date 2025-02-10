<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;

        $categories = Category::all();
        $clients = Client::when($type, function ($query, $type) {
            return $query->where('category_id', $type);
        })->get();
        return view('client.index', compact('clients', 'categories'));
    }
}
