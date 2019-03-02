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
           <img data-aos="fade-up" src="media/projets/folEspoir.png" alt="Le Fol Espoir Accueil">
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
           <p>Dans le cadre du cours de développement web, mon équipe et moi-même avions comme mandat de développer une application web pour le département d'art et lettre du Collège de Maisonneuve. Le site devait permettre aux utilisateurs de consulter les oeuvres littéraires et visuels réalisés par les étudiants ainsi que de leur permettre de soumettre leur oeuvre afin qu'elle soit présenté sur le site. Les administreurs du site devaient être en mesure de gérer le contenu à l'aide d'une interface. Nous avions 15 semaines afin d'intégrer et d'implémenter notre application. Nous avons donc procéder avec la méthode agile Scrum en subdivisant le travail à réaliser en Sprints. J'ai travaillé en tant que développeur front-end au début du projet en participant à la réalisation du logo ainsi que des maquettes finales du site. Du côté back-end, j'ai réalisé le formulaire de soumission d'oeuvre.</p>
       </div>
        
       <div class="galerie">
           <img data-aos="fade-up" src="media/fol_espoir/oeuvres.png" alt="Gabarit des oeuvres">
           <img data-aos="fade-up" src="media/fol_espoir/texte.png" alt="Gabarit d'un texte">
           <img data-aos="fade-up" src="media/fol_espoir/aPropos.png" alt="A propos">
           <img data-aos="fade-up" src="media/fol_espoir/formulaire.png" alt="Formulaire">
           <img data-aos="fade-up" src="media/fol_espoir/recherche.png" alt="Recherche">
       </div>

 

     

       

@endsection