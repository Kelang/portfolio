@extends('layout')

@section('title', 'Projets')

    

@section('content')
    <h1>Mes projets</h1>
    <a href="/projets/create"><input type="button" value="Ajouter un projet"></a>
<ul>
@foreach($projets as $projet)
<li>
    <a href="/projets/{{$projet->id}}">{{$projet->titre}}</a>
</li>
    @endforeach
</ul>

@endsection 