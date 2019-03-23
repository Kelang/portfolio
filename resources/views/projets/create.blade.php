@extends('admin_layout')

@section('title', 'Nouveau Projet')

@section('content')
    
<main>
    <h1 data-aos="fade-down">Nouveau projet</h1>
    <div class="formulaire">
    <form method="POST" action="/projets">
        {{ csrf_field() }}
    <div class="formField">
        <label for="titre" class='labelInfos'>Titre du projet</label>
    <input type="text" name="titre" id="" value="{{old('titre')}}"  size="75">
    </div>

    <div class="formField">
        <label for="descriptionAccueil" class='labelInfos'>Description Accueil</label>
    <textarea name="descriptionAccueil" id="" cols="30" rows="10">{{old('descriptionAccueil')}}</textarea>
    </div>

    <div class="formField">
        <label for="descriptionPage" class='labelInfos'>Description Projet</label>
    <textarea name="descriptionPage" id="" cols="30" rows="10">{{old('descriptionPage')}}</textarea>
    </div>
        
    <div class="formField">
        <label for="technologies" class='labelInfos'>Technologies employées</label>
    <input type="text" name="technologies" id="" value="{{old('technologies')}}" size="75">
    </div>

    <div class="formField">
        <label for="categorie" class='labelInfos'  size="35">Catégorie du projet</label>
    <input type="text" name="categorie" id="" value="{{old('categorie')}}" size="75">
    </div>

    <div class="formField">
        <label for="dateCreation" class='labelInfos'  size="35">Année de création du projet</label>
    <input type="text" name="dateCreation" id="" value="{{old('dateCreation')}}" size="75">
    </div>

    <div>
        <input id='btnSoumettre' type="submit" value="Creer projet">
    </div>

    @if ($errors->any())

    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
    @endif

    </form>
    </div>
</main>
@endsection