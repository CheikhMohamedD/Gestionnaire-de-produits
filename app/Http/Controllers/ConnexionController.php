<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function index(){
        return view('accueil');
    }

    public function bienvenue(){

        if(auth()->guest()){
            flash("connexion requise pour voir la page.")->error();
            return redirect('/connexion');

        }

        return view('accueil');
    }

    public function deconnexion(){
        auth()->logout();

        flash("DECONNEXION REUSSIE. A BIENTOT.")->success();

        return redirect('');
    }

    public function form(){
        return view('connexion');
    }

    public function traite(){

        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

       $resultat =  auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

       if ($resultat){
           flash("CONNEXION REUSSIE. BIENVENUE SUR LA PLATEFORME")->success();
           return redirect('/accueil');
       }


        return back()->withInput()->withErrors([
            'email' => 'identifiants incorrects.'
        ]);
    }
}
