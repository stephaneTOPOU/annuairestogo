<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\SousCategories;
use App\Models\Stat;
use App\Models\User;
use App\Models\Offre;
use App\Models\SliderRecherche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function autocompletion_pays(Request $request, $slug_pays)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();

        $data = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('entreprises.nom as value', 'entreprises.id')
            ->where('entreprises.nom', 'LIKE', '%' . $request->get('text4') . '%')
            ->get()
            ->take(6);
        return response()->json($data);
    }

    public function recherche_pays($slug_pays)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();

        $nom = request()->input('nom');
        $secteur = request()->input('secteur');

        if ($nom && $secteur) {
            $entreprises = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('categories', 'pays.id', '=', 'categories.pays_id')
                ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
                ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
                ->where('entreprises.nom', 'LIKE', "%$nom%")
                ->orWhere('entreprises.telephone1', 'LIKE', "%$nom%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$nom%")
                ->orWhere('sous_categories.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categories.libelle as sousCategorie', 'entreprises.id as identifiant', 'sous_categories.id as identifiant2')
                ->orderBy('entreprises.est_souscrit', 'desc')
                ->paginate(100);
        } elseif ($nom) {
            $entreprises = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('categories', 'pays.id', '=', 'categories.pays_id')
                ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
                ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
                ->where('entreprises.nom', 'LIKE', "%$nom%")
                ->orWhere('entreprises.telephone1', 'LIKE', "%$nom%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$nom%")
                ->select('*', 'sous_categories.libelle as sousCategorie', 'entreprises.id as identifiant', 'sous_categories.id as identifiant2')
                ->orderBy('entreprises.est_souscrit', 'desc')
                ->paginate(100);
        } elseif ($secteur) {
            $entreprises = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('categories', 'pays.id', '=', 'categories.pays_id')
                ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
                ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
                ->where('sous_categories.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categories.libelle as sousCategorie', 'entreprises.id as identifiant', 'sous_categories.id as identifiant2')
                ->orderBy('entreprises.est_souscrit', 'desc')
                ->paginate(100);
        } else {
            $entreprises = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('categories', 'pays.id', '=', 'categories.pays_id')
                ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
                ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
                ->select('*', 'sous_categories.libelle as sousCategorie', 'entreprises.id as identifiant', 'sous_categories.id as identifiant2')
                ->orderBy('entreprises.est_souscrit', 'desc')
                ->paginate(100);
        }

        $souscategories = SousCategories::all();

        $subcategories = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->select('*', 'sous_categories.libelle as sousCategorie', 'sous_categories.id as identifiant3')
            ->get();

        $tops = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('slider_recherche_laterals', 'pays.id', '=', 'slider_recherche_laterals.pays_id')
            ->select('*')
            ->get();

        $top2s = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('slider_recherche_lateral_bas', 'pays.id', '=', 'slider_recherche_lateral_bas.pays_id')
            ->inRandomOrder()
            ->first();

        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $sliders = SliderRecherche::all();

        return view('frontend.recherche', compact('sliders','entreprises', 'souscategories', 'subcategories', 'tops', 'top2s', 'parametres'));
    }

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

        $subcategories = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->leftJoin('categories', 'pays.id', '=', 'categories.pays_id')
            ->leftJoin('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->leftJoin('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('pays.slug_pays as slug1','categories.slug_categorie as slug2','sous_categories.id as identifiant', 'sous_categories.libelle as sub_nom', 'sous_categories.slug_souscategorie as slug3', DB::raw('COUNT(sous_categories.id) as sous_categories_count'))
            ->groupBy('identifiant', 'sub_nom', 'slug1', 'slug2', 'slug3')
            ->get();

        $souscategories = SousCategories::all();

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
            ->limit(4)
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
            ->limit(4)
            ->get();

        $annonce_all = DB::table('categorie_annonces')
            ->join('annonces', 'categorie_annonces.id', '=', 'annonces.categorie_id')
            ->select('*', 'annonces.id as identifiant', 'categorie_annonces.id as identifiant2')
            ->orderBy('annonces.id', 'desc')
            ->limit(3)
            ->get();

        $annonces = DB::table('categorie_annonces')
            ->leftJoin('annonces', 'categorie_annonces.id', '=', 'annonces.categorie_id')
            ->select('categorie_annonces.libelle as categorie','annonces.categorie_id as categorie_id', 'annonces.titre as titre', 'annonces.text1 as description', 'annonces.created_at as date', 'annonces.image1 as image')
            ->groupBy('categorie', 'titre', 'description', 'date', 'categorie_id', 'image')
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

        $delete = Offre::whereDate('date_lim', '=', date('Y-m-d'))->delete();

        $offres = DB::table('categorie_offres')
        ->join('offres', 'categorie_offres.id','=','offres.categorieOffres_id')
        ->select('*', 'categorie_offres.nom as categorie')
        ->where('offres.valide',1)->orderBy('offres.id', 'desc')
        ->get();

        $users = User::all();

        return view('frontend.home', compact('users','banner', 'rejoints', 'minispots', 'reportages', 'magazines', 'parametres', 'villes', 'pays', 'subcategories', 'souscategories', 'honeures', 'nombresEntreprise', 'cat_annonce', 'annonce_all', 'annonces', 'inscrit', 'visiteur2', 'popups','offres'));
    }
}
