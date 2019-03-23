@extends('layout')


@section('style')

@endsection


@section('content')
    
<main>

    <div class="gridPresentation">
        <div id="parallax-container">
            
            <svg data-aos="fade-right" width="100" height="100" viewBox="0 0 10 10" id="svg1">
                    <circle cx="5" cy="5" r="1.5" stroke="white" stroke-width=".3" fill="none" />
                    <circle cx="8" cy="4" r="1" stroke="white" stroke-width=".2" fill="none" />
            </svg>
            
            <svg data-aos="fade-up"  width="100" height="100" viewBox="0 0 10 10" id="svg4">
                    <circle cx="8" cy="4" r="1" stroke="white" stroke-width=".2" fill="none" />
            </svg>

            <svg data-aos="fade-left"  width="100" height="100" viewBox="0 0 10 10" id="svg2">
                    <path fill-rule="evenodd" stroke="white" stroke-width=".5" transform="rotate(45)"
                d="M6,-1  h3 v3 h-3 z "/>
            </svg>

            <svg data-aos="fade-down"  width="100" height="100" viewBox="0 0 10 10" id="svg3">
                <path fill-rule="evenodd" stroke="white" stroke-width=".5"
                d="M1,2  h4 v4 h-4 z
                "/>
        </svg>
        </div>

        <div id="presentation" data-aos="fade-up">
            <span>Bonjour, je suis </span><br>
            <span>Kevin Langlois</span><br>
            <span>un développeur web</span><br>
            <span>junior.</span>
        </div>
    
        <div id="portfolio">
            <p><i class="fas fa-long-arrow-alt-down"></i></p>
        </div>
    
    </div>

    <section data-aos="fade-up" id="projets">
        <h2>Mes récents projets</h2>
        <div class="projetLayout">
            <div class="projetsList">

            @foreach($projets as $projet)
            <div class="projetItem" id="projet{{$projet->id}}">
                 <h3>{{$projet->titre}}</h3>
                <div class="projetInfo">
                    <p>Catégorie</p>
                    <p>Année</p>
                    <p>{{$projet->categorie}}</p>
                    <p>{{$projet->dateCreation}}</p>
                </div>
            <section id="projetDescription{{$projet->id}}" class="descriptionProjet">
                <p>{{$projet->descriptionAccueil}}</p>
                <a href="/projets/{{$projet->id}}"><input type="button" value="Visiter" id="boutonVisiter"></a>
            </section>

            </div>
            @endforeach         
            </div>
            
            <div class="projetsGalery">
            @foreach($projets as $projet)
                <div class="projetImage">
                    <div id="media{{$projet->id}}">
                        <img src="media/projets/{{$projet->id}}.png" alt="">
                    </div>  
                </div>
            @endforeach 
            </div>
                          
        </div>
    </section>

</main>
@endsection