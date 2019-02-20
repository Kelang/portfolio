@extends('layout')

@section('content')

<h1>{{$projet->titre}}</h1>

<div>
    {{$projet->description}}
</div>
<div>
    {{$projet->collaborateurs}}
</div>

<div>
    {{$projet->technologies}}
</div>
<a href="/projets/{{$projet->id}}/edit"><input type="button" value="Edit"></a>
<a href="/projets"><input type="button" value="Retour"></a>


@endsection