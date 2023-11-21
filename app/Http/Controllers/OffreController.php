<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use Illuminate\Support\Facades\DB;

class OffreController extends Controller
{
    public function jobDetail($slug_pays, $offre_slug)
    {
        $pays_id = DB::table('pays')->where('slug_pays',$slug_pays)->select('id')->get();
        $offre_id = DB::table('offres')->where('slug_offres',$offre_slug)->select('id')->get();
        
        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $delete = Offre::whereDate('date_lim', '=', date('Y-m-d'))->delete();

        $offres_details = DB::table('offres')
        ->where('offres.id', $offre_id[0]->id)
        ->select('*')->get();
        return view('frontend.jobdetail', compact('offres_details', 'parametres'));
    }
}
