<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projet;
use App\Collaborateur;
use App\Image;

class ProjetsController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->except(['show']);
    }


    public function index(){


        $projets = Projet::all();

        $technologiesList =Projet::first()->technologies;

        $technologies = explode(',', $technologiesList);

  

        return view('projets.index', compact('projets','technologies'));
    }

    public function create(){

        return view('projets.create');
    }

    public function show(Projet $projet) {

        
        $technologiesList =$projet->technologies;

        $technologies = explode(',', $technologiesList);

        $collaborateurs = projet::find($projet->id)->collaborateurs;

        $images = $projet->images;

        

        return view('projets.show', compact('projet', 'technologies', 'collaborateurs', 'images'));
    }

    public function edit(Projet $projet) {

        return view('projets.edit', compact('projet'));
    }

    public function destroy(Projet $projet){

        $projet->delete();
        return redirect('/projets');
    }

    public function update(Projet $projet) {

       
        $projet->update(request(['titre', 'description', 'collaborateurs', 'technologies']));

        return redirect('/projets');
    }

    public function store() {
        
       $attributes = request()->validate([
            'titre'=> ['required', 'min:3', 'max:255'],
            'description'=> ['required', 'min:3'],
            'collaborateurs'=>['required', 'min:3'],
            'technologies'=> ['required', 'min:3']
        ]);

        Projet::create($attributes);


        return redirect('/projets');
    }


}
