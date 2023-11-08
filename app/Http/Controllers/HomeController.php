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

        $categories = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->select('*')
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
            //->orWhere('entreprises.logo', '!=', null)
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

        $pharmacies = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*')
            ->where('est_pharmacie', '=', '1')
            ->where('entreprises.pharmacie_de_garde', '=', '1')
            ->get();


        $popups = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('pop_ups', 'pays.id', '=', 'pop_ups.pays_id')
            ->inRandomOrder()
            ->first();

        $banner = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('banners', 'pays.id', '=', 'banners.pays_id')
            ->inRandomOrder()
            ->first();


        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();


        return view('frontend.home', compact('banner', 'slider1s', 'slider2s', 'slider3s', 'sliderLaterals', 'sliderLateralBas', 'rejoints', 'minispots', 'reportages', 'magazines', 'parametres', 'villes', 'pays', 'categories', 'honeures', 'nombresEntreprise', 'pharmacies', 'inscrit', 'visiteur2', 'popups'));
    }
}
