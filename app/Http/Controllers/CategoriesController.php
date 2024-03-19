<?php

namespace App\Http\Controllers;

use App\Models\Parametre;
use App\Models\SliderCategorie;
use App\Models\SliderRecherche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    //***********************************************Categorie Pays********************************************** */
    public function categories_pays()
    {
        $categories = DB::table('categories')
            ->select('*', 'categories.libelle as cat', 'categories.id as idCat')
            ->get();

        $souscategories = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->select('*', 'sous_categories.libelle as subcat', 'sous_categories.categorie_id as id2', 'sous_categories.id as idSousCat', 'categories.id as id1')
            ->get();

        $slider = SliderRecherche::all();
        $parametres = Parametre::find(1);
        return view('frontend.categories', compact('parametres', 'categories', 'souscategories', 'slider'));
    }
}

    //***********************************************End Categorie Pays********************************************** */
