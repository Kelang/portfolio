@component('mail::message')

<h3>Nouveau message de contact</h3>
<br>
<div>De: {{$email->prenom}} {{$email->nom}}</div>
<br>
<div>email: {{$email->email}}</div>
<br>
<div>telephone: {{$email->telephone}}</div>
<br>
<div>message: {{$email->message}}</div>


@endcomponent
