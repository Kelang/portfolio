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
                        <input type='text' id='nomContact' name='nom'>
                        <label for='nomContact' class='labelInfos'>Nom</label>
                    </div>
                    <div id='prenom'>
                        <input type='text' id='prenomContact' name='prenom'>
                        <label for='prenomContact' class='labelInfos'>Prénom</label>
                    </div>
                </div>
                <input type='email' id='courrielContact' name='email'>
                <label for='courrielContact' class='labelInfos'>Courriel</label>
                <input type="text" id='telephoneContact' name='telephone'>
                <label for='telephoneContact' class='labelInfos'>Téléphone</label>
                <div class="textArea">
                        <textarea name="message" id="" cols="90" rows="5"></textarea>
                </div>

                
                <input  type=submit name=cmd id='btnSoumettre' class='.hvr-radial-out' value=Envoyer>
        </form>
    </div>
</main>
@endsection