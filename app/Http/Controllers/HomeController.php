<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // invoke Cuando queremos que el controlador administre una ruta
    public function __invoke()
    {
        return view('home');
    }
}
