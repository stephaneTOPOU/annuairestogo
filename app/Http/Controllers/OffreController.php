<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\SliderRecherche;
use Illuminate\Support\Facades\DB;

class OffreController extends Controller
{
    public function jobDetail($offre_slug)
    {
        $offre_id = DB::table('offres')->where('slug_offres', $offre_slug)->select('id')->get();

        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $delete = Offre::whereDate('date_lim', '=', date('Y-m-d'))->delete();

        $offres = DB::table('offres')
            ->select('*')
            ->where('offres.valide', 1)->orderBy('offres.id', 'desc')
            ->get();

        $offres_details = Offre::find($offre_id[0]->id);

        $sliders = SliderRecherche::all();

        return view('frontend.jobdetail', compact('offres', 'offres_details', 'parametres', 'sliders'));
    }
}
