<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('index');
    }
}
