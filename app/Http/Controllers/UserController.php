<?php

namespace App\Http\Controllers;

use App\Models\SliderRecherche;
use App\Models\SousCategories;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function user()
    {
        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $sliders = SliderRecherche::all();

        return view('frontend.auth.register', compact('parametres', 'sliders'));
    }

    public function mydash($slug_user)
    {

        $user_id = DB::table('users')->where('slug_user', $slug_user)->select('id')->get();

        $users = User::find($user_id[0]->id);
        $souscategories = SousCategories::all();

        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $sliders = SliderRecherche::all();

        return view('frontend.user.mydash', compact('sliders', 'souscategories', 'users', 'parametres'));
    }

    public function myprofil($slug_user)
    {

        $user_id = DB::table('users')->where('slug_user', $slug_user)->select('id')->get();

        $users = User::find($user_id[0]->id);

        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $sliders = SliderRecherche::all();
        return view('frontend.user.user-profile', compact('users', 'parametres', 'sliders'));
    }

    public function update($slug_user, Request $request)
    {
        $user_id = DB::table('users')->where('slug_user', $slug_user)->select('id')->get();

        $data = $request->validate([
            'name' => 'required|string',
            'prenoms' => 'required|string',
            'email' => 'required|email',
        ]);
        //dd($request->all());
        try {
            //$d['password'] = bcrypt($data['password']);
            $data = User::find($user_id[0]->id);
            $data->name = $request->name;
            $data->prenoms = $request->prenoms;
            $data->email = $request->email;
            $data->adresse = $request->adresse;
            $data->fonction = $request->fonction;
            $data->telephone1 = $request->telephone1;
            $data->telephone2 = $request->telephone2;
            $data->facebook = $request->facebook;
            $data->google = $request->google;
            $data->twitter = $request->twitter;
            $data->linkedin = $request->linkedin;
            //$data->password = $d['password'];
            $data->update();
            //User::create($data);
            return redirect()->back()->with('user', "Votre profile a été créé avec success !!!");
        } catch (Exception $e) {
            return redirect()->back()->with('user', $e->getMessage());
        }
    }

    public function list()
    {

        $nom = request()->input('name');
        $secteur = request()->input('secteur2');

        if ($nom && $secteur) {
            $users = DB::table('users')
                ->where('users.name', 'LIKE', "%$nom%")
                ->orWhere('users.telephone1', 'LIKE', "%$nom%")
                ->select('*')
                ->orderBy('users.id', 'desc')
                ->get();
        } elseif ($nom) {
            $users = DB::table('users')
                ->where('users.name', 'LIKE', "%$nom%")
                ->orWhere('users.telephone1', 'LIKE', "%$nom%")
                ->select('*')
                ->orderBy('users.id', 'desc')
                ->get();
        } elseif ($secteur) {
            $users = DB::table('users')
                ->where('users.fonction', 'LIKE', "%$secteur%")
                ->select('*')
                ->orderBy('users.id', 'desc')
                ->get();
        } else {
            $users = DB::table('users')
                ->select('*')
                ->orderBy('users.id', 'desc')
                ->get();
        }

        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $sliders = SliderRecherche::all();

        return view('frontend.user.user-list', compact('parametres', 'users', 'sliders'));
    }

    public function user_autocomplete(Request $request)
    {
        $data1 = User::select('name as value', 'id')
            ->where('name', 'LIKE', '%' . $request->get('t44') . '%')
            ->get()
            ->take(6);
        return response()->json($data1);
    }
}
