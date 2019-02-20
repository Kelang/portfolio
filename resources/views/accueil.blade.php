@extends('layout')


@section('title', 'Accueil')

    


@section('content')
    
<main>

    <div class="gridPresentation">

            <div id="presentation">
                <h1>
                    <span>Bonjour, je suis </span><br>
                    <span>Kevin Langlois</span><br>
                    <span>un développeur web</span><br>
                    <span>full stack.</span>
                </h1>
                
            </div>
        
            <div id="portfolio">
                <p><i class="fas fa-long-arrow-alt-down"></i></p>
                
            </div>
        
        </div>



    <section data-aos="fade-up" id="projets">
        <h2>Mes récents projets</h2>
        <div class="projetLayout">
            <div class="projetsList">
                <div class="projetItem" id="projet1">
                    <h3>Le Fol Espoir</h3>
                    <div class="projetInfo">
                        <p>Catégorie</p>
                        <p>Année</p>
                        <p>Site web</p>
                        <p>2018</p>
                    </div>
                </div>
                <div class="projetItem" id="projet2">
                    <h3>Conquête Royale</h3>
                    <div class="projetInfo">
                            <p>Catégorie</p>
                            <p>Année</p>
                            <p>Animation</p>
                            <p>2018</p>
                        </div>
                </div>

                <div class="projetItem" id="projet3">
                        <h3>Conquête Royale (Jeu)</h3>
                        <div class="projetInfo">
                                <p>Catégorie</p>
                                <p>Année</p>
                                <p>Jeu</p>
                                <p>2018</p>
                            </div>
                    </div>
                    
            </div>
            <div class="projetsGalery">

                    <div class="projetImage">
                        <div id="media1">
                                <img src="media/projets/folEspoir.png" alt="">
                        </div>
                        
                    </div>
                    <div class="projetImage">
                        <div id="media2">
                                <img src="media/projets/filmImg.jpg" alt="">
                        </div>
                        
                    </div>
                    <div class="projetImage">
                            <div id="media3">
                                    <img src="media/projets/jeu.png" alt="">
                            </div>
                            
                        </div>
                </div>



        </div>
    </section>

</main>
<footer></footer>

@endsection