<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pub;
use App\Models\SliderRecherche;
use Illuminate\Support\Facades\DB;

class PubController extends Controller
{
    public function pubDetail($slug_pub)
    {
        $pub_id = DB::table('pubs')->where('slug_pub', $slug_pub)->select('id')->get();

        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $pubs = Pub::all()->take(4);

        $pubs_details = Pub::find($pub_id[0]->id);

        $medias = DB::table('pubs')->where('pubs.id', $pub_id[0]->id)
            ->join('media_pubs', 'pubs.id', '=', 'media_pubs.pubs_id')
            ->select('*')
            ->get();

        $sliders = SliderRecherche::all();

        return view('frontend.pub-detail', compact('pubs', 'pubs_details', 'parametres', 'medias', 'sliders'));
    }
}
