<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pub;
use Illuminate\Support\Facades\DB;

class PubController extends Controller
{
    public function pubDetail($slug_pays, $slug_pub)
    {
        $pays_id = DB::table('pays')->where('slug_pays',$slug_pays)->select('id')->get();
        $pub_id = DB::table('pubs')->where('slug_pub',$slug_pub)->select('id')->get();
        
        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $pubs = Pub::all()->take(4);

        $pubs_details = DB::table('pubs')
        ->where('pubs.id', $pub_id[0]->id)
        ->select('*')->get();

        $medias = DB::table('pubs')
        ->join('media_pubs', 'pubs.id','=','media_pubs.pubs_id')
        ->select('*')
        ->get();

        return view('frontend.pub-detail', compact('pubs','pubs_details', 'parametres', 'medias'));
    }
}
