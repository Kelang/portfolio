@extends('layout')

@section('title', 'À propos')


@section('content')

<main>
    <h1  data-aos="fade-down" >À propos</h1>
    <div class="gridIntro">
        
        <p data-aos="fade-up">Je suis un finissant du Collège de Maisonneuve en Intégration Multimédia. Au cours de ma formation j'ai pu touché à plusieurs sphères faisant partie de l'univers des multimédias tel que la conception 3D, le développement de jeux, cependant c'est pour le web que j'ai développé une passion. J'aime participé à la création d'expériences utilisateur attrayantes front-end ainsi qu'au développement back-end.</p>
        <p data-aos="fade-left">Ce portfolio est entre autre créé dans le cadre d'un projet de recherche sommatif de ma technique. Le back-end est réalisé à l'aide du cadriciel PHP Laravel et le front-end est fait grâce à du JS, jQuery. Le design a été réalisé avec HTML & CSS.</p>
        <p data-aos="fade-right">Mon portfolio est encore en construction et dans les semaines à venir je vais y intégrer d'autre éléments à mesure que j'acquiers plus de connaissances avec le cadriciel Laravel comme une interface administrateur afin de pouvoir gérer l'ajout de nouveaux projets.</p>
    </div>
    <h2 data-aos="fade-up">Compétences</h2>
    <div class="gridCompetences" data-aos="fade-up">
            
        <span>HTML</span>
        <span>CSS</span>
        <span>SASS</span>
        <span>PHP</span>
        <span>JS</span>
        <span>MySQL</span>
        <span>Laravel</span>
        <span>Blade</span>
        <span>GIT</span>
        <span>Unity C#</span>
    </div>
</main>
@endsection