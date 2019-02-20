<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projet;

class ProjetsController extends Controller
{
    //
    public function index(){


        $projets = Projet::all();


        return view('projets.index', compact('projets'));
    }

    public function create(){

        return view('projets.create');
    }

    public function show(Projet $projet) {

        return view('projets.show', compact('projet'));
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
