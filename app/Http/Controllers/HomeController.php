<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class HomeController extends Controller
{
    function index()
    {

        $data = Movies::all();
        // dump($data);
        return view('home.index', ['data' => $data]);
    }
}
