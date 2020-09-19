<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class PagesController extends Controller
{
    // Return the index home view
    public function index() {
        $restaurants = Restaurant::all();
        return view('pages.index', compact('restaurants'));
    }
}
