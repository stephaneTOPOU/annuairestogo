<?php

namespace App\Http\Controllers;

use App\Models\SliderRecherche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PharmacieController extends Controller
{
    public function pharmacie($slug_pays)
    {
        $pays_id = DB::table('pays')->where('slug_pays',$slug_pays)->select('id')->get();
        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            
        $sliders = SliderRecherche::all();

        $pharmacies = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*', 'sous_categories.libelle as sousCategorie', 'entreprises.id as identifiant', 'sous_categories.id as identifiant2')
            ->where('entreprises.est_pharmacie', 1)
            ->get();

        return view('frontend.liste-pharmacie-garde', compact('parametres', 'sliders', 'pharmacies'));
    }
}
