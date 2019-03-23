@extends('admin_layout')

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
        
        <form method ="POST" action="/projets/{{$projet->id}}" class="deleteProjet">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            <input type="submit" id="boutonDelete" value="Suppression du projet">
        </form>
    </div>
    </div>
        @endforeach
    </div>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</main>
@endsection 