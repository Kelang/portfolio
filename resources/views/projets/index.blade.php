@extends('layout')

@section('style')

@endsection

@section('title', 'Projets')

    

@section('content')
<main>
    <h1>Mes projets</h1>
    <a href="/projets/create"><input class="boutonAdmin" type="button" value="Ajouter un projet"></a>
    <div class="adminList">
    @foreach($projets as $projet)
    <div class="adminListItems">
        <a id="title" href="/projets/{{$projet->id}}">{{$projet->titre}}</a>

        <div id="boutonActions">
        <a href="/projets/{{$projet->id}}/edit"><input class="boutonAdmin" type="button" value="Edit"></a>
        
        <form method ="POST" action="/projets/{{$projet->id}}">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            <input type="submit" id="boutonDelete" value="Suppression du projet">
        </form>
    </div>
    </div>
        @endforeach
    </div>
</main>
@endsection 