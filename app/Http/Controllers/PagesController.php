<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel';
        return view('pages.index', compact('title'));
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about', compact('title'));
    }

    public function services() {
        $title = 'Our Services';
        return view('pages.services', compact('title'));
    }
}

