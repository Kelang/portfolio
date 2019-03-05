@extends('layout')

@section('title', 'Contact')

@section('content')
<main>
    <h1 data-aos="fade-down">Contact</h1>
    <div class="formulaire">
        <form action="/contact" method="POST" data-aos="fade-up">
        {{ csrf_field() }}
                <div id='nomPrenom'>

                    <div id='nom'>
                        <input type='text' id='sNomAuteur' name='nom'>
                        <label for='sNomAuteur' class='labelInfos'>Nom</label>
                    </div>
                    <div id='prenom'>
                        <input type='text' id='sPrenomAuteur' name='prenom'>
                        <label for='sPrenomAuteur' class='labelInfos'>Prénom</label>
                    </div>
                </div>
                <input type='email' id='sCourrielAuteur' name='email'>
                <label for='sCourrielAuteur' class='labelInfos'>Courriel</label>
                <div class="textArea">
                        <textarea name="message" id="" cols="90" rows="5"></textarea>
                </div>
                
                <input  type=submit name=cmd id='btnSoumettre' class='.hvr-radial-out' value=Envoyer>
        </form>
    </div>
</main>
@endsection