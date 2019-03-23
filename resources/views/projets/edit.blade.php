@extends('admin_layout')

@section('content')
<main>
    <h1 data-aos="fade-down">Modifier</h1>
    <form method="POST" action="/projets/{{$projet->id}}">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
    <div>
        <label for="titre">Titre du projet</label>
    <input type="text" name="titre" id="" value="{{$projet->titre}}" size="75">
    </div>

    <div>
        <label for="collaborateurs">Collaborateurs</label>
    <input type="text" name="collaborateurs" id="" value="{{$projet->collaborateurs}}" size="75">
    </div>

    <div>
        <label for="descriptionAccueil">Description Accueil</label>
    <textarea name="descriptionAccueil" id="" cols="10" rows="10" >{{$projet->descriptionAccueil}}</textarea>
    </div>

    <div>
        <label for="descriptionPage">Description Projet</label>
        <textarea name="descriptionPage" id="" cols="10" rows="10" >{{$projet->descriptionPage}}</textarea>
        </div>
        
    <div>
        <label for="technologies">Technologies employées</label>
    <input type="text" name="technologies" id="" value="{{$projet->technologies}}" size="75">
    </div>

    <div>
        <input class="boutonAdmin" type="submit" value="Mise à jour du projet">
        
    </div>
    </form>
    <br>
    <form class="deleteProjet" method ="POST" action="/projets/{{$projet->id}}">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <input class="boutonAdmin" type="submit" value="Suppression du projet">
    </form>
</main>
@endsection