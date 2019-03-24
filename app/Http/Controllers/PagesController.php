<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Projet;
use App\Mail\ContactCreated;
use Mail;
class PagesController extends Controller
{
    public function accueil() {
        $projets = Projet::all();
        
        return view('accueil', compact('projets'));
    }

    

    public function apropos() {
        return view('apropos');
    }

    public function contact(){
        return view('contact');
    }

    public function envoyer(Request $request){
        
        $this->validate($request, ['email' =>'required|email',
                                    'message' => 'min:10',
                                    'nom' => 'min:2',
                                    'prenom' =>'min:2',
                                    'telephone' => 'min:3'
                                   ]);
         /*                           
        $data = array(
            'email' => $request->email,
            'bodyMessage' => $request->message,
            'nom' => $request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone
        );

        Mail::send('emails.contact-created',$data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('k.langlois001@gmail.com');
            $message->subject('Nouveau Contact');
        });*/

        Mail::to('k.langlois001@gmail.com')->send(new ContactCreated($request));

        return redirect('/contact');
    }

}
