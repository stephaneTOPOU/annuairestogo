<?php

namespace App\Http\Controllers;

use App\Models\SliderRecherche;
use App\Models\SliderRechercheLateral;
use App\Models\SousCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrepriseController extends Controller
{
    public function entreprise_pays($slug_categorie, $slug_souscategorie)
    {
        $categorie_id = DB::table('categories')->where('slug_categorie', $slug_categorie)->select('id')->get();
        $sousCategorie_id = DB::table('sous_categories')->where('slug_souscategorie', $slug_souscategorie)->select('id')->get();

        $subcategories = DB::table('categories')->where('categories.id', $categorie_id[0]->id)
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')->where('sous_categories.id', $sousCategorie_id[0]->id)
            ->select('*', 'sous_categories.libelle as sousCategorie')
            ->get();

        $entreprises = DB::table('categories')->where('categories.id', $categorie_id[0]->id)
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')->where('sous_categories.id', $sousCategorie_id[0]->id)
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*', 'sous_categories.libelle as sousCategorie', 'entreprises.id as identifiant')
            ->orderBy('entreprises.est_souscrit', 'desc')
            ->paginate(100);

        $souscategories = SousCategories::all();

        $tops = SliderRechercheLateral::all();

        $top2s = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*', 'sous_categories.libelle as sousCategorie', 'entreprises.id as identifiant', 'sous_categories.id as identifiant2')
            ->where('entreprises.pharmacie_de_garde', 1)
            ->get();

        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $sliders = SliderRecherche::all();

        $sousCategories2 = DB::table('categories')->where('categories.id', $categorie_id[0]->id)
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')->where('sous_categories.id', $sousCategorie_id[0]->id)
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('sous_categories.libelle', 'sous_categories.id as identifiant')
            ->limit(1)
            ->get();

        return view('frontend.entreprise', compact('sousCategories2', 'subcategories', 'entreprises', 'souscategories', 'tops', 'top2s', 'parametres', 'sliders'));
    }
}
