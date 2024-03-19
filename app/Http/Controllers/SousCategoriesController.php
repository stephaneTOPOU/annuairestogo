<?php

namespace App\Http\Controllers;

use App\Models\Parametre;
use App\Models\SliderRecherche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SousCategoriesController extends Controller
{

    //***********************************************SousCategorie Pays********************************************** */
    public function Souscategories_pays($slug_categorie)
    {
        $categorie_id = DB::table('categories')->where('slug_categorie', $slug_categorie)->select('id')->get();

        $categories = DB::table('categories')->where('categories.id', $categorie_id[0]->id)
            ->join('sous_categories', 'sous_categories.categorie_id', 'categories.id')
            ->select('categories.libelle as nom')
            ->take(1)
            ->get();

        $souscategories = DB::table('categories')->where('categories.id', $categorie_id[0]->id)
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->select('*', 'sous_categories.libelle as nom', 'sous_categories.id as identifiant')
            ->get();
        // dd($souscategories);

        $slider = SliderRecherche::all();

        $parametres = Parametre::find(1);

        return view('frontend.sous-categories', compact('parametres', 'souscategories', 'slider', 'categories'));
    }
}

    //***********************************************End SousCategorie Pays********************************************** */
