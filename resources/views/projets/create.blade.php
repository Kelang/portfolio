@extends('layout')

@section('title', 'Nouveau Projet')

@section('content')
    

<form method="POST" action="/projets">
    {{ csrf_field() }}
<div>
    <label for="titre">Titre du projet</label>
<input type="text" name="titre" id="" value="{{old('titre')}}">
</div>

<div>
    <label for="collaborateurs">Collaborateurs</label>
<input type="text" name="collaborateurs" id="" value="{{old('collaborateurs')}}">
</div>

<div>
    <label for="description">Description du projet</label>
<textarea name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
</div>
    
<div>
    <label for="technologies">Technologies employées</label>
<input type="text" name="technologies" id="" value="{{old('technologies')}}">
</div>

<div>
    <input type="submit" value="Creer projet">
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
@endsection