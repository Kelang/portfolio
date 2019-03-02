@extends('layout');

@section('content')

<form method="POST" action="/projets/{{$projet->id}}">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
<div>
    <label for="titre">Titre du projet</label>
<input type="text" name="titre" id="" value="{{$projet->titre}}">
</div>

<div>
    <label for="collaborateurs">Collaborateurs</label>
<input type="text" name="collaborateurs" id="" value="{{$projet->collaborateurs}}">
</div>

<div>
    <label for="description">Description du projet</label>
<textarea name="description" id="" cols="30" rows="10" >{{$projet->descriptionAccueil}}</textarea>
</div>
    
<div>
    <label for="technologies">Technologies employées</label>
<input type="text" name="technologies" id="" value="{{$projet->technologies}}">
</div>

<div>
    <input type="submit" value="Mise à jour du projet">
    
</div>
</form>

<form method ="POST" action="/projets/{{$projet->id}}">
    {{ csrf_field() }}
    {{method_field('DELETE')}}
    <input type="submit" value="Suppression du projet">
</form>

@endsection