<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function news($slug_pays, $slug_annonce)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
        $annonce_id = DB::table('annonces')->where('slug_annonce', $slug_annonce)->select('id')->get();

        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $annonces = Annonce::find($annonce_id[0]->id);
            
        return view('frontend.news', compact('parametres', 'annonces'));
    }
}
