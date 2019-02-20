<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Project;

class PagesController extends Controller
{
    public function accueil() {
        return view('accueil');
    }

    public function apropos() {
        return view('apropos');
    }

    public function contact() {
        return view('contact');
    }

}
