<?php

namespace App\Http\Controllers;
use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire(){
        return view('inscription');
    }

    public function traitement() {
 
        request()->validate([
            'nom' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
    
        ], [
            'password.min' => 'Pour des raisons de sécurité, votre mot de passe 
            doit faire :min caractère.'
        ]);
    
        $utilisateur = Utilisateur::create([ 
            'nom' => request('nom'),
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),  
        ]);

        if ($utilisateur){
            return redirect('/connexion'); 
        } 
        
        return "Merci pour votre inscription " . request('nom');
    }
}
