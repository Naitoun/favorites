<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome';
        return view('pages.index')->with('title', $title);
    }
    public function add() {
        $title = 'Adding a new item';
        return view('pages.add', compact('title'));
    }
    public function favlist() {
        // To pass multiple data just pass an array instead
        $title = 'Your list';
        return view('pages.favlist', compact('title'));
    }
}
