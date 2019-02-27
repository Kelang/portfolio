<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Project;

class PagesController extends Controller
{
    public function accueil() {
        $projets = Projet::all();
        return view('accueil', compact('$projets'));
    }

    public function apropos() {
        return view('apropos');
    }

}
