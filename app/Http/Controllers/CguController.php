<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CguController extends Controller
{
    public function Cgu()
    {
        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
        return view('frontend.cgu', compact('parametres'));
    }

    public function Confidentialite()
    {
        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
        return view('frontend.politque-confidentialite', compact('parametres'));
    }

    public function Cookie()
    {
        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
        return view('frontend.politque-cookies', compact('parametres'));
    }
}
