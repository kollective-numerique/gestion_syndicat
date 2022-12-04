<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('accueil');
    }
    public function reglement()
    {
        return view('reglement');
    }
    public function adhesion()
    {
        return view('adhesion');
    }
}
