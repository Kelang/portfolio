<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Project;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function apropos() {
        return view('apropos');
    }

    public function contact() {
        return view('contact');
    }

    public function projets() {

        $projects = Project::all();

        return $projects;

        return view('projets');
    }
}
