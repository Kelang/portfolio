@extends('layout')


@section('style')

@endsection


@section('content')
    
<main>

    <div class="gridPresentation">

        <div id="presentation" data-aos="fade-up">
            <span>Bonjour, je suis </span><br>
            <span>Kevin Langlois</span><br>
            <span>un développeur web</span><br>
            <span>full stack.</span>
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
<footer></footer>

@endsection