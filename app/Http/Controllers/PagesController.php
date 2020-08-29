<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Return the index home view
    public function index() {
        return view('pages.index');
    }
}
