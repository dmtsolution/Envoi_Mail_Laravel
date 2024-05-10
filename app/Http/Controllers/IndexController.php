<?php

namespace App\Http\Controllers;

use App\Mail\EnvoiMail;
use Illuminate\Support\Facades\Mail; 
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        return view("index");
    }

    public function Envoi(Request $request){

        $request->validate([
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required'
        ], [
            'email.required' => 'Veuillez saisir votre adresse e-mail.',
            'email.email' => 'Veuillez saisir une adresse e-mail valide.',
            'objet.required' => 'Veuillez saisir l\'objet de votre message.',
            'message.required' => 'Veuillez saisir votre message.'
        ]);

        $destinataires = ['dmtwoleu@gmail.com', 'iwejruth@gmail.com', 'Rabbysydney516@gmail.com'];
    
        $details = [
            'email' => $request->email,
            'body' => $request->message
        ];
    
        Mail::to($destinataires)->send(new EnvoiMail($details));
    
        return redirect()->back()->with('success', 'Votre message a bien été envoyé !');
    }
    

    
}
