<?php

namespace App\Http\Controllers;

use App\Models\SliderRecherche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PharmacieController extends Controller
{
    public function pharmacie()
    {
        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $sliders = SliderRecherche::all();

        $pharmacies = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*', 'sous_categories.libelle as sousCategorie', 'entreprises.id as identifiant', 'sous_categories.id as identifiant2')
            ->where('entreprises.pharmacie_de_garde', 1)
            ->get();

        return view('frontend.liste-pharmacie-garde', compact('parametres', 'sliders', 'pharmacies'));
    }
}
