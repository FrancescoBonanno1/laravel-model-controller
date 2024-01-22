<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $links = config('store.someLinks');
        return view('welcome', compact('links'));
    }
}