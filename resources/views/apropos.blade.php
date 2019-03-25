@extends('layout')

@section('title', 'À propos')


@section('content')

<main>
    <h1  data-aos="fade-down" >À propos</h1>
    <div class="gridIntro">
        
        <p data-aos="fade-up">Je suis un finissant du Collège de Maisonneuve en Intégration Multimédia. Au cours de ma formation j'ai pu toucher à plusieurs sphères faisant partie de l'univers des multimédias tel que la conception 3D, le développement de jeux, cependant c'est pour le web que j'ai développé une passion. J'aime participer à la création d'expériences utilisateurs attrayantes et accrocheuses front-end ainsi qu'au développement back-end.</p>
        <p data-aos="fade-left">Ce portfolio a entre autres été créé dans le cadre d'un projet de recherche sommatif de ma technique. Le back-end a été réalisé à l'aide du framework PHP Laravel et le front-end est fait grâce à du JS et jQuery. Le design a été réalisé avec HTML & CSS.</p>
        <p data-aos="fade-right">Mon portfolio est présentement en construction et dans les semaines à venir je vais y intégrer d'autres éléments à mesure que j'acquiers plus de connaissances avec le framework Laravel comme une interface administrateur afin de pouvoir effectuer la gestion de mes projets.</p>
    </div>
</main>
<div class="comps">
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
</div>
@endsection