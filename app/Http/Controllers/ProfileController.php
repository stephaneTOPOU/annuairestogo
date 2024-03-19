<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Entreprise;
use App\Models\Reponse_commentaire;
use App\Models\SousCategories;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    public function ProfileEntreprise_pays($slug_categorie, $slug_souscategorie, $slug_entreprise)
    {
        $categorie_id = DB::table('categories')->where('slug_categorie', $slug_categorie)->select('id')->get();
        $sousCategorie_id = DB::table('sous_categories')->where('slug_souscategorie', $slug_souscategorie)->select('id')->get();
        $entreprise_id = DB::table('entreprises')->where('slug_entreprise', $slug_entreprise)->select('id')->get();

        $Profil_entreprises = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->select('*', 'entreprises.id as identifiant', 'sous_categories.libelle as subcat', 'categories.libelle as cat')
            ->get();

        $premiums = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')->where('entreprises.id', $entreprise_id[0]->id)
            ->where('premium', 1)
            ->select('*', 'entreprises.id as identifiant')
            ->get();

        $business = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')->where('entreprises.id', $entreprise_id[0]->id)
            ->where('a_publireportage', 1)
            ->select('*', 'entreprises.id as identifiant')
            ->get();

        $basics = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')->where('entreprises.id', $entreprise_id[0]->id)
            ->where('basic', 1)
            ->select('*', 'entreprises.id as identifiant')
            ->get();

        $avis = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('commentaires', 'entreprises.id', '=', 'commentaires.entreprise_id')
            ->select('note')
            ->sum('note');

        $avis3 = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('commentaires', 'entreprises.id', '=', 'commentaires.entreprise_id')
            ->select('note')
            ->get();

        $services = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('services', 'services.entreprise_id', '=', 'entreprises.id')
            ->select('*', 'entreprises.id as identifiant', 'entreprises.nom as entreprise')
            ->get();

        $serviceImages = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('services', 'services.entreprise_id', '=', 'entreprises.id')
            ->join('service_images', 'service_images.service_id', '=', 'services.id')
            ->select('*', 'entreprises.id as identifiant', 'service_images.description as servicedesc')
            ->get();

        $horaires = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('horaires', 'horaires.entreprise_id', '=', 'entreprises.id')
            ->select('*', 'entreprises.id as identifiant')
            ->get();

        $galleries = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('gallerie_images', 'gallerie_images.entreprise_id', '=', 'entreprises.id')
            ->select('*', 'entreprises.id as identifiant', 'entreprises.nom as entreprise')
            ->get();

        $entreprise = Entreprise::find($entreprise_id[0]->id);
        $entreprise->increment('vue');
        $entreprise->save();

        $partenaires = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->where('entreprises.id', $entreprise_id[0]->id)
            ->join('partenaires', 'partenaires.entreprise_id', '=', 'entreprises.id')
            ->select('*', 'entreprises.id as identifiant')
            ->get();

        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $souscategories = SousCategories::all();

        $entreprise_similaire = DB::table('categories')->where('categories.id', $categorie_id[0]->id)
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')->where('sous_categories.id', $sousCategorie_id[0]->id)
            ->where('est_souscrit', 1)
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')
            ->select('*', 'entreprises.id as identifiant', 'sous_categories.libelle as subcat')
            ->get();

        $commentaires = DB::table('commentaires')->where('commentaires.entreprise_id', $entreprise_id[0]->id)
            ->select('*')
            ->orderBy('id', 'desc')
            ->get();
        $commentaire2s = DB::table('commentaires')
            ->join('reponse_commentaires', 'reponse_commentaires.commentaires_id', '=', 'commentaires.id')
            ->select('*')
            ->orderBy('reponse_commentaires.id', 'desc')
            ->get();

        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $ratings = DB::table('categories')->where('categories.id', $categorie_id[0]->id)
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')->where('sous_categories.id', $sousCategorie_id[0]->id)
            ->join('entreprises', 'sous_categories.id', '=', 'entreprises.souscategorie_id')->where('entreprises.id', $entreprise_id[0]->id)
            ->select('rate')
            ->get();

        $populaires = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'souscategorie_id')
            ->select('*')
            ->where('vue', '>=', 500)
            ->inRandomOrder()
            ->get();

        $recents = DB::table('categories')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->join('entreprises', 'sous_categories.id', '=', 'souscategorie_id')
            ->select('*')
            ->orderBy('entreprises.id', 'desc')
            ->get();
        return view('frontend.profile', compact('business', 'recents', 'populaires', 'ratings', 'parametres', 'commentaires', 'commentaire2s', 'entreprise_similaire', 'souscategories', 'parametres', 'Profil_entreprises', 'avis3', 'avis', 'services', 'serviceImages', 'horaires', 'galleries', 'premiums', 'basics', 'partenaires'));
    }


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'nom' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
    }

    public function commentaire(Request $request, $slug_categorie, $slug_souscategorie, $slug_entreprise)
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
            return redirect()->back()->with('success', 'Merci pour le commentaire.');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }

    public function commentaire2(Request $request,  $slug_categorie, $slug_souscategorie, $slug_entreprise, $id)
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
            return redirect()->back()->with('success', 'Merci pour la réponse');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }

    public function message($slug_categorie, $slug_souscategorie, Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required'
        ]);
        try {
            //  Envoi de mail
            Mail::send('frontend.contact-mail2', array(
                /**Ajouter les informations de l'entreprise */
                'entreprise_name' => $request->input('entrprise_nom'),
                'entreprise_email' => $request->input('entrprise_email'),
                /**Fin Ajouter les informations de l'entreprise */
                'name' => $request->input('nom'),
                'email' => $request->input('email'),
                'subject' => $request->input('objet'),
                'form_message' => $request->input('message'),
            ), function ($message) use ($request) {
                $message->from($request->input('email'));
                $message->to('gzk643192@gmail.com', 'Salut K Gz')->subject($request->input('objet'));
            });
            return redirect()->back()->with('success', 'Merci de nous avoir contacté.');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }

    public function updateRating(Request $request,  $slug_categorie, $slug_souscategorie, $slug_entreprise)
    {
        $entreprise_id = DB::table('entreprises')->where('slug_entreprise', $slug_entreprise)->select('id')->get();

        try {
            $rating = Entreprise::find($entreprise_id[0]->id);
            $rating->rate = $request->input('rating');

            $rating->update();
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }
}
