@extends('layout')

@section('title', 'Nouveau Projet')

@section('content')
    
<main>
    <h1 data-aos="fade-down">Nouveau projet</h1>
    <div class="formulaire">
    <form method="POST" action="/projets">
        {{ csrf_field() }}
    <div class="formField">
        <label for="titre" class='labelInfos'>Titre du projet</label>
    <input type="text" name="titre" id="" value="{{old('titre')}}">
    </div>

    <div class="formField">
        <label for="collaborateurs" class='labelInfos'>Collaborateurs</label>
    <input type="text" name="collaborateurs" id="" value="{{old('collaborateurs')}}">
    </div>

    <div class="formField">
        <label for="description" class='labelInfos'>Description du projet</label>
    <textarea name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
    </div>
        
    <div class="formField">
        <label for="technologies" class='labelInfos'>Technologies employées</label>
    <input type="text" name="technologies" id="" value="{{old('technologies')}}">
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