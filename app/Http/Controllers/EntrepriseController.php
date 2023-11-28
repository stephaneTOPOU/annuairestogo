<?php

namespace App\Http\Controllers;

use App\Models\SliderRecherche;
use App\Models\SousCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrepriseController extends Controller
{
    public function entreprise_pays($slug_pays, $slug_categorie, $slug_souscategorie)
    {

        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
        $categorie_id = DB::table('categories')->where('slug_categorie', $slug_categorie)->select('id')->get();
        $sousCategorie_id = DB::table('sous_categories')->where('slug_souscategorie', $slug_souscategorie)->select('id')->get();

        $subcategories = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')->where('categories.id', $categorie_id[0]->id)
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')->where('sous_categories.id', $sousCategorie_id[0]->id)
            ->select('*', 'sous_categories.libelle as sousCategorie')
            ->get();

        $entreprises = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')->where('categories.id', $categorie_id[0]->id)
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')->where('sous_categories.id', $sousCategorie_id[0]->id)
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*', 'sous_categories.libelle as sousCategorie', 'entreprises.id as identifiant')
            ->orderBy('entreprises.est_souscrit', 'desc')
            ->paginate(100);

        $souscategories = SousCategories::all();

        $tops = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('slider_recherche_laterals', 'pays.id', '=', 'slider_recherche_laterals.pays_id')
            ->select('*')
            ->get();

        $top2s = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*', 'sous_categories.libelle as sousCategorie', 'entreprises.id as identifiant', 'sous_categories.id as identifiant2')
            ->where('entreprises.pharmacie_de_garde', 1)
            ->get();

        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $sliders = SliderRecherche::all();

        return view('frontend.entreprise', compact('subcategories','entreprises', 'souscategories', 'tops', 'top2s', 'parametres','sliders'));
    }
}
