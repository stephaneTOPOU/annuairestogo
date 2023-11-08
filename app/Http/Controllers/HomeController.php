<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\Stat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index_pays($slug_pays)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();

        $inscrit = User::all()->count();

        $visiteur = Stat::find(1);
        $visiteur->increment('visiteur');
        $visiteur->save();

        $visiteur2 = DB::table('stats')->select('visiteur')->get();

        $villes = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('villes', 'pays.id', '=', 'villes.pays_id')
            ->select('*')
            ->get();

        $pays = Pays::all();

        // $subcategories = DB::table('pays')->where('pays.id', $pays_id[0]->id)
        //     ->join('categories', 'pays.id', '=', 'categories.pays_id')
        //     ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
        //     ->select('sous_categories.id as identifiant', 'sous_categories.libelle as nom')
        //     ->get();
        
        $subcategories = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->leftJoin('categories', 'pays.id', '=', 'categories.pays_id')
            ->leftJoin('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->leftJoin('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('sous_categories.id as identifiant','sous_categories.libelle as sub_nom','sous_categories.slug_souscategorie', DB::raw('COUNT(sous_categories.id) as sous_categories_count'))
            ->groupBy('identifiant', 'sub_nom','sous_categories.slug_souscategorie')
            ->get();

        $slider1s = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('slider1s', 'pays.id', '=', 'slider1s.pays_id')
            ->select('*')
            ->get();

        $slider2s = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('slider2s', 'pays.id', '=', 'slider2s.pays_id')
            ->select('*')
            ->get();

        $slider3s = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('slider3s', 'pays.id', '=', 'slider3s.pays_id')
            ->select('*')
            ->get();

        $sliderLaterals = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('slider_laterals', 'pays.id', '=', 'slider_laterals.pays_id')
            ->select('*')
            ->get();

        $sliderLateralBas = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('slider_lateral_bas', 'pays.id', '=', 'slider_lateral_bas.pays_id')
            ->select('*')
            ->get();

        $rejoints = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*')
            ->where('entreprises.est_souscrit', '=', '1')
            ->orderBy('entreprises.id', 'desc')
            ->get();

        $minispots = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('mini_spots', 'pays.id', '=', 'mini_spots.pays_id')
            ->select('*')
            ->get();

        $reportages = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('reportages', 'pays.id', '=', 'reportages.pays_id')
            ->select('*')
            ->get();

        $magazines = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*')
            ->where('entreprises.a_magazine', '=', '1')
            ->orderBy('entreprises.id', 'desc')
            ->get();

        $honeures = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*')
            ->where('entreprises.honneur', '=', '1')
            ->orderBy('entreprises.id', 'desc')
            ->get();
        //dd($honeures);

        $nombresEntreprise = DB::table('entreprises')->count();
        //dump($nombresEntreprise);

        $cat_annonce = DB::table('categorie_annonces')
            ->select('*')
            ->orderBy('categorie_annonces.id', 'desc')
            ->get();

        $annonces = DB::table('categorie_annonces')
            ->join('annonces', 'categorie_annonces.id', '=', 'annonces.categorie_id')
            ->select('*', 'annonces.id as identifiant', 'categorie_annonces.id as identifiant2')
            ->orderBy('annonces.id', 'desc')
            ->take(3)
            ->get();

        $annonce2s = DB::table('annonces')
            ->select('*')
            ->orderBy('annonces.id', 'asc')
            ->limit(3)
            ->get();

        $popups = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('apopup', 1)
            ->select('*')
            ->get();

        $banner = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('banners', 'pays.id', '=', 'banners.pays_id')
            ->select('*')
            ->get();


        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();


        return view('frontend.home', compact('banner', 'slider1s', 'slider2s', 'slider3s', 'sliderLaterals', 'sliderLateralBas', 'rejoints', 'minispots', 'reportages', 'magazines', 'parametres', 'villes', 'pays', 'subcategories', 'honeures', 'nombresEntreprise', 'cat_annonce', 'annonces', 'annonce2s', 'inscrit', 'visiteur2', 'popups'));
    }
}
