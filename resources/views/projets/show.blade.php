@extends('layout')

@section('content')
<main>

        <h1 data-aos="fade-down">{{$projet->titre}}</h1>
        <div data-aos="fade-right" class="technologies">
            @foreach($technologies as $technologie)
            <span>{{$technologie}}</span>
            @endforeach
        </div>
       <div class="topImg">
            <img data-aos="fade-up" src="/media/projets/{{$projet->id}}.png" alt="">
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
        @if($images->count())
            @foreach($images as $image)
                @if($image->type == 'image')
                <img data-aos="fade-up" src="/{{$image->chemin}}" alt="{{$image->alt}}">
                @elseif($image->type == 'video')
                <video controls>
                    <source src="/{{$image->chemin}}" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture video.
                </video>
                @endif
            @endforeach
            </div>
       @endif
</main>
@endsection