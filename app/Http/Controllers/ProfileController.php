<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Entreprise;
use App\Models\Reponse_commentaire;
use App\Models\SousCategories;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function ProfileEntreprise_pays($slug_pays, $slug_categorie, $slug_souscategorie, $slug_entreprise)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
        $categorie_id = DB::table('categories')->where('slug_categorie', $slug_categorie)->select('id')->get();
        $sousCategorie_id = DB::table('sous_categories')->where('slug_souscategorie', $slug_souscategorie)->select('id')->get();
        $entreprise_id = DB::table('entreprises')->where('slug_entreprise', $slug_entreprise)->select('id')->get();

        $Profil_entreprises = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->select('*', 'entreprises.id as identifiant', 'pays.id as pays_id', 'sous_categories.libelle as subcat', 'categories.libelle as cat')
            ->get();

        $premiums = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->where('premium', 1)
            ->select('*', 'entreprises.id as identifiant')
            ->get();

        $basics = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->where('basic', 1)
            ->select('*', 'entreprises.id as identifiant')
            ->get();

        $avis = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('commentaires', 'entreprises.id', '=', 'commentaires.entreprise_id')
            ->select('note')
            ->sum('note');

        $avis3 = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('commentaires', 'entreprises.id', '=', 'commentaires.entreprise_id')
            ->select('note')
            ->get();

        $services = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('services', 'services.entreprise_id', '=', 'entreprises.id')
            ->select('*', 'entreprises.id as identifiant')
            ->get();

        $serviceImages = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('services', 'services.entreprise_id', '=', 'entreprises.id')
            ->join('service_images', 'service_images.service_id', '=', 'services.id')
            ->select('*', 'entreprises.id as identifiant', 'service_images.description as servicedesc')
            ->get();

        $horaires = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('horaires', 'horaires.entreprise_id', '=', 'entreprises.id')
            ->select('*', 'entreprises.id as identifiant')
            ->get();

        $galleries = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('gallerie_images', 'gallerie_images.entreprise_id', '=', 'entreprises.id')
            ->select('*', 'entreprises.id as identifiant', 'entreprises.nom as entreprise')
            ->get();

        $entreprise = Entreprise::find($entreprise_id[0]->id);
        $entreprise->increment('vue');
        $entreprise->save();

        $partenaires = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('partenaires', 'partenaires.entreprise_id', '=', 'entreprises.id')
            ->select('*', 'entreprises.id as identifiant')
            ->get();
        
        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $souscategories = SousCategories::all();

        $entreprise_similaire = DB::table('pays')->where('pays.id', $pays_id[0]->id)
        ->join('categories', 'pays.id', '=', 'categories.pays_id')
        ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
        ->where('sous_categories.id', $sousCategorie_id[0]->id)
        ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
        ->select('*', 'entreprises.id as identifiant', 'pays.id as pays_id', 'sous_categories.libelle as subcat')
        ->get();

        $commentaires = DB::table('commentaires')->where('commentaires.entreprise_id', $entreprise_id[0]->id)
            ->select('*')
            ->orderBy('id', 'desc')
            ->get();
        $commentaire2s = Reponse_commentaire::all();
            
        return view('frontend.profile',compact('commentaires','commentaire2s','entreprise_similaire','souscategories','parametres', 'Profil_entreprises', 'avis3', 'avis', 'services', 'serviceImages', 'horaires', 'galleries', 'premiums', 'basics', 'partenaires'));
    }


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'nom' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
    }

    public function commentaire(Request $request, $slug_pays, $slug_categorie, $slug_souscategorie, $slug_entreprise)
    {
        $entreprise_id = DB::table('entreprises')->where('slug_entreprise', $slug_entreprise)->select('id')->get();
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        try {
            //dd($request);
            $data = new Commentaire();
            $data->entreprise_id = $entreprise_id[0]->id;
            $data->nom = $request->nom;
            $data->email = $request->email;
            $data->commentaire = $request->message;
            $data->save();
            return redirect()->back()->with('success', 'Merci de nous avoir contacté.');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }

    public function commentaire2(Request $request, $slug_pays, $slug_categorie, $slug_souscategorie, $slug_entreprise, $id)
    {
        $commentaires_id = DB::table('commentaires')->where('commentaires.id', $id)->select('id')->get();
        $request->validate([
            'nomR' => 'required',
            'emailR' => 'required|email',
            'messageR' => 'required'
        ]);
        try {
            //dd($request);
            $data = new Reponse_commentaire();
            $data->commentaires_id = $commentaires_id[0]->id;
            $data->nomR = $request->nomR;
            $data->emailR = $request->emailR;
            $data->messageR = $request->messageR;
            $data->save();
            return redirect()->back()->with('success', 'Merci de nous avoir contacté.');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }
}
