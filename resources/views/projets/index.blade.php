@extends('layout')

@section('style')

@endsection

@section('title', 'Projets')

    

@section('content')
    <h1>Mes projets</h1>
    <a href="/projets/create"><input type="button" value="Ajouter un projet"></a>
<ul>
@foreach($projets as $projet)
<li>
    <a href="/projets/{{$projet->id}}">{{$projet->titre}}</a>
    <a href="/projets/{{$projet->id}}/edit"><input type="button" value="Edit"></a>
    
    
    <ul>
        @foreach($technologies as $technologie)
        <li>{{$technologie}}</li>
        @endforeach
    </ul>
    

    <div>
        {{$projet->description}}
    </div>

    
    <div>
        {{$projet->categorie}}
    </div>

    <div>
        {{$projet->dateCreation}}
    </div>

    <form method ="POST" action="/projets/{{$projet->id}}">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <input type="submit" value="Suppression du projet">
    </form>

    
</li>
    @endforeach
</ul>

@endsection 