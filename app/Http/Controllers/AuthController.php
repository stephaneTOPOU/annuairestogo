<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Parametre;
use App\Models\Pays;
use App\Models\SliderRecherche;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function login_pays()
    {
        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home');
        } else {
            $parametres = DB::table('pays')
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 1)
                ->select('*')
                ->get();

            $sliders = SliderRecherche::all();

            return view("frontend.auth.login", compact('parametres', 'sliders'));
        }
    }

    public function logout_pays()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function addUser_pays(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'prenoms' => 'required|string',
            'email' => 'required|email',
            'adresse' => 'required|string',
            'fonction' => 'required|string',
            'telephone1' => 'required|string',
            'password' => 'required|string|min:8',
            'password2' => 'required_with:password|same:password|min:8'

        ]);
        //dd($request->all());
        try {
            $d['password'] = bcrypt($data['password']);
            $data = new User();
            $data->name = $request->name;
            $data->prenoms = $request->prenoms;
            $data->email = $request->email;
            $data->adresse = $request->adresse;
            $data->fonction = $request->fonction;
            $data->telephone1 = $request->telephone1;
            $data->password = $d['password'];
            $data->save();
            //User::create($data);
            return redirect()->back()->with('user', "Votre compte a été créé avec success !!!");
        } catch (Exception $e) {
            return redirect()->back()->with('user', $e->getMessage());
        }
    }

    public function authentification_pays(Request $request, User $user)
    {
        // $credentials = $request->only('email', 'password');
        $login = $request->email;
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try {
            if (User::where('email', $login)->count() > 0) {
                if (Auth::attempt(['email' => $login, 'password' => $request->password])) {
                    //return 'Connexion reussi avec success';
                    return redirect()->route('home');
                } else {
                    return redirect()->back()->with('connexion', "Vos identifiants ne correspondent pas !!!1");
                }
            } else {
                return redirect()->back()->with('connexion', "Vos identifiants ne correspondent pas !!!2");
            }
        } catch (Exception $e) {
            return redirect()->back()->with('connexion', $e->getMessage());
        }
    }

    public function entreprise_pays()
    {
        $pays = Pays::all();
        $villes = DB::table('pays')
            ->join('villes', 'pays.id', '=', 'villes.pays_id')
            ->select('*')
            ->get();

        $souscategories = DB::table('pays')
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->select('*', 'sous_categories.id as identifiant')
            ->get();

        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
        $sliders = SliderRecherche::all();
        return view('frontend.entreprise.entreprise-register', compact('sliders', 'parametres', 'pays', 'villes', 'souscategories'));
    }

    public function mdpOubli_pays()
    {
        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $sliders = SliderRecherche::all();
        return view('frontend.auth.forgot', compact('parametres', 'sliders'));
    }

    public function forgot($slug_pays)
    {
    }
}
