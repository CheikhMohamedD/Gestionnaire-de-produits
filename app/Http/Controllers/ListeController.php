<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liste;

class ListeController extends Controller
{
    public function add(){
        return view ('ajout');
   }

    public function index(){
        $listes = Liste::all();
        return view('liste', compact('listes'));
    }

    public function cree(){
        return view('ajout');
    }

    public function store(Request $request){
    $input = $request->all();


    Liste::create($input);
    return redirect('/liste');
    }

    public function detail($id){
        $liste = Liste::find($id);
        if(!$liste){
            return response("Aucun apprenant trouvé avec l'identifiant $id", 404);
        }

        return view('/detail')->with('liste',$liste);
    }


    public function updateForm($id){
        $liste=Liste::find($id);
        return view('/modifier')->with('liste',$liste);
    }

    public function modifier(Request $request, $id){
        $liste=Liste::find($id);
        $liste['nom'] = $request->input('nom');
        $liste['prix'] = $request->input('prix');
        $liste['description'] = $request->input('description');
        $liste['stock'] = $request->input('stock');
        $liste->save();
        return redirect("/liste")->with('success', 'Le produit a été modifié');
        }

    public function supprimer($id){
        $liste = Liste::find($id);
        $liste->delete();
        return redirect('/liste')->with('success', 'Le produit a été supprimé');
    }

}
?>
