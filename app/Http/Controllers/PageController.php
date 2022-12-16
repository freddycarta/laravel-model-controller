<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        // $movies = ['title' => 'title 1'];
        return view('home');
    }
}
