@extends('layout')

@section('title', 'Projets')

@section('content')
    <h1>Mes projets</h1>

    @foreach ($projects as $project)

    <li>{{$project->title}}</li>
    @endforeach

@endsection