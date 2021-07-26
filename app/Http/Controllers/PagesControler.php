<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControler extends Controller
{
    //homepage
    public function index()
    {
        return view('index');
    }
}
