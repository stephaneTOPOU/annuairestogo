<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\CategorieAnnonce;
use App\Models\commentaireAnnonce;
use App\Models\Reponse_commentaire2;
use App\Models\SliderRecherche;
use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function news($slug_pays, $slug_cat_an, $slug_annonce)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
        $categorie_annonce_id = DB::table('categorie_annonces')->where('slug_cat_an', $slug_cat_an)->select('id')->get();
        $annonce_id = DB::table('annonces')->where('slug_annonce', $slug_annonce)->select('id')->get();

        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $annonce = DB::table('categorie_annonces')->where('categorie_annonces.id', $categorie_annonce_id[0]->id)
            ->join('annonces', 'annonces.categorie_id', '=', 'categorie_annonces.id')
            ->where('annonces.id', $annonce_id[0]->id)
            ->select('*', 'categorie_annonces.libelle as cat')
            ->get();

        $annonce2s = CategorieAnnonce::all();

        $commentaires = DB::table('annonces')->where('annonces.id', $annonce_id[0]->id)
            ->join('commentaire_annonces', 'commentaire_annonces.annonce_id', '=', 'annonces.id')
            ->select('*','commentaire_annonces.id as identifiant')
            ->orderBy('commentaire_annonces.id', 'desc')
            ->get();

        $reponses = DB::table('commentaire_annonces')
            ->join('reponse_commentaire2s', 'reponse_commentaire2s.commentaires_id', '=', 'commentaire_annonces.id')
            ->select('*')
            ->orderBy('reponse_commentaire2s.id', 'desc')
            ->get();
            
        $nb = DB::table('annonces')->where('annonces.id', $annonce_id[0]->id)
            ->join('commentaire_annonces', 'commentaire_annonces.annonce_id', '=', 'annonces.id')
            ->select('commentaire_annonces.id as identifiant')
            ->count();

        $news = DB::table('categorie_annonces')
            ->join('annonces', 'annonces.categorie_id', '=', 'categorie_annonces.id')
            ->select('*', 'categorie_annonces.libelle as cat')
            ->get();

        $relative = DB::table('categorie_annonces')->where('categorie_annonces.id', $categorie_annonce_id[0]->id)
            ->join('annonces', 'annonces.categorie_id', '=', 'categorie_annonces.id')
            ->select('*', 'categorie_annonces.libelle as cat')
            ->get();

            $sliders = SliderRecherche::all();

        return view('frontend.news', compact('relative', 'news', 'parametres', 'annonce', 'annonce2s', 'commentaires', 'reponses', 'nb', 'sliders'));
    }

    public function comment($slug_pays, $slug_cat_an, $slug_annonce, Request $request)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
        $categorie_annonce_id = DB::table('categorie_annonces')->where('slug_cat_an', $slug_cat_an)->select('id')->get();
        $annonce_id = DB::table('annonces')->where('slug_annonce', $slug_annonce)->select('id')->get();

        $request->validate([
            'pseudo' => 'required',
            'commentaire' => 'required'
        ]);
        try {
            //dd($request);
            $data = new commentaireAnnonce();
            $data->annonce_id = $annonce_id[0]->id;
            $data->pseudo = $request->pseudo;
            $data->commentaire = $request->commentaire;
            $data->save();
            return redirect()->back()->with('success', 'Merci pour le commentaire');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }

    public function reponse($slug_pays, $slug_cat_an, $slug_annonce, Request $request, $id)
    {
        $commentaires_id = DB::table('commentaire_annonces')->where('commentaire_annonces.id', $id)->select('id')->get();

        $request->validate([
            'nomR' => 'required',
            'messageR' => 'required'
        ]);
        try {
            //dd($request);
            $data = new Reponse_commentaire2();
            $data->commentaires_id = $commentaires_id[0]->id;
            $data->nomR = $request->nomR;
            $data->messageR = $request->messageR;
            $data->save();
            return redirect()->back()->with('success', 'Merci pour la réponse');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }
}
