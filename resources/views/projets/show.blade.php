@extends('layout')

@section('content')
<main>

        <h1 data-aos="fade-down">{{$projet->titre}}</h1>
        <div data-aos="fade-up" class="technologies">
            @foreach($technologies as $technologie)
            <span>{{$technologie}}</span>
            @endforeach
        </div>
       <div class="topImg">
            <img src="media/projets/{{$projet->id}}.png" alt="">
       </div>
       <h2 data-aos="fade-up">Collaborateurs</h2>
       <div data-aos="fade-up" class="collaborateurs">
            <ul>
                @foreach($collaborateurs as $collaborateur)
                <li>
                <a href="{{$collaborateur->site}}">{{$collaborateur->prenom}} {{$collaborateur->nom}}</a>
                </li>
                @endforeach


            </ul>
     </div>
    


       <div data-aos="fade-right" class="description">
       <p>{{$projet->descriptionPage}}</p>
       </div>
        
       <div class="galerie">

        
        @foreach($images as $image)
        
       <img data-aos="fade-up" src="/{{$image->chemin}}" alt="{{$image->alt}}">
        @endforeach
       </div>

 

     

       

@endsection