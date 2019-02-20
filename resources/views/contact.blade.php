@extends('layout')

@section('title', 'Contact')

@section('content')
<h1 data-aos="fade-down">Contact</h1>
<main>
    <form action="" method="POST" data-aos="fade-up">

            <div id='nomPrenom'>

                <div id='nom'>
                    <input type='text' id='sNomAuteur' name='sNomAuteur'>
                    <label for='sNomAuteur' class='labelInfos'>Nom</label>
                </div>
                <div id='prenom'>
                    <input type='text' id='sPrenomAuteur' name='sPrenomAuteur'>
                    <label for='sPrenomAuteur' class='labelInfos'>Prénom</label>
                </div>
            </div>
            <input type='email' id='sCourrielAuteur' name='sCourrielAuteur'>
            <label for='sCourrielAuteur' class='labelInfos'>Courriel</label>
            <div class="textArea">
                    <textarea name="" id="" cols="90" rows="5"></textarea>
            </div>
            
            <input  type=button name=cmd id='btnSoumettre' class='.hvr-radial-out' value=Envoyer>
    </form>
</main>
@endsection