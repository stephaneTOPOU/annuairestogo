<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Parametre;
use App\Models\Pays;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function login_pays($slug_pays)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'tg']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'bj']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'bf']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'ci']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'ne']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'cm']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'cf']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'cg']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'dj']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'ga']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'gn']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'mg']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'ml']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'mr']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'cd']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'rw']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'sn']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }

        if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('home.pays', ['slug_pays' => 'td']);
        } else {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            return view("frontend.auth.login", compact('parametres'));
        }
    }

    public function logout_pays($slug_pays)
    {
        auth()->logout();
        if ($slug_pays == 'tg') {
            return redirect()->route('home.pays', ['slug_pays' => 'tg']);
        } elseif ($slug_pays == 'bf') {
            return redirect()->route('home.pays', ['slug_pays' => 'bf']);
        } elseif ($slug_pays == 'bj') {
            return redirect()->route('home.pays', ['slug_pays' => 'bj']);
        } elseif ($slug_pays == 'ci') {
            return redirect()->route('home.pays', ['slug_pays' => 'ci']);
        } elseif ($slug_pays == 'ne') {
            return redirect()->route('home.pays', ['slug_pays' => 'ne']);
        } elseif ($slug_pays == 'cm') {
            return redirect()->route('home.pays', ['slug_pays' => 'cm']);
        } elseif ($slug_pays == 'cf') {
            return redirect()->route('home.pays', ['slug_pays' => 'cf']);
        } elseif ($slug_pays == 'dj') {
            return redirect()->route('home.pays', ['slug_pays' => 'dj']);
        } elseif ($slug_pays == 'ga') {
            return redirect()->route('home.pays', ['slug_pays' => 'ga']);
        } elseif ($slug_pays == 'gn') {
            return redirect()->route('home.pays', ['slug_pays' => 'gn']);
        } elseif ($slug_pays == 'mg') {
            return redirect()->route('home.pays', ['slug_pays' => 'mg']);
        } elseif ($slug_pays == 'ml') {
            return redirect()->route('home.pays', ['slug_pays' => 'ml']);
        } elseif ($slug_pays == 'mr') {
            return redirect()->route('home.pays', ['slug_pays' => 'mr']);
        } elseif ($slug_pays == 'cd') {
            return redirect()->route('home.pays', ['slug_pays' => 'cd']);
        } elseif ($slug_pays == 'rw') {
            return redirect()->route('home.pays', ['slug_pays' => 'rw']);
        } elseif ($slug_pays == 'sn') {
            return redirect()->route('home.pays', ['slug_pays' => 'sn']);
        } elseif ($slug_pays == 'td') {
            return redirect()->route('home.pays', ['slug_pays' => 'td']);
        } else {
            return redirect()->route('home.pays', ['slug_pays' => 'tg']);
        }
    }

    public function addUser_pays($slug_pays, Request $request)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
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
            $data->pays_id = $pays_id[0]->id;
            $data->save();
            //User::create($data);
            return redirect()->back()->with('user', "Votre compte a été créé avec success !!!");
        } catch (Exception $e) {
            return redirect()->back()->with('user', $e->getMessage());
        }
    }

    public function authentification_pays($slug_pays, Request $request, User $user)
    {
        // $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
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
                    if ($slug_pays == 'tg') {
                        return redirect()->route('home.pays', ['slug_pays' => 'tg']);
                    } elseif ($slug_pays == 'bf') {
                        return redirect()->route('home.pays', ['slug_pays' => 'bf']);
                    } elseif ($slug_pays == 'bj') {
                        return redirect()->route('home.pays', ['slug_pays' => 'bj']);
                    } elseif ($slug_pays == 'ci') {
                        return redirect()->route('home.pays', ['slug_pays' => 'ci']);
                    } elseif ($slug_pays == 'ne') {
                        return redirect()->route('home.pays', ['slug_pays' => 'ne']);
                    } elseif ($slug_pays == 'cm') {
                        return redirect()->route('home.pays', ['slug_pays' => 'cm']);
                    } elseif ($slug_pays == 'cf') {
                        return redirect()->route('home.pays', ['slug_pays' => 'cf']);
                    } elseif ($slug_pays == 'dj') {
                        return redirect()->route('home.pays', ['slug_pays' => 'dj']);
                    } elseif ($slug_pays == 'ga') {
                        return redirect()->route('home.pays', ['slug_pays' => 'ga']);
                    } elseif ($slug_pays == 'gn') {
                        return redirect()->route('home.pays', ['slug_pays' => 'gn']);
                    } elseif ($slug_pays == 'mg') {
                        return redirect()->route('home.pays', ['slug_pays' => 'mg']);
                    } elseif ($slug_pays == 'ml') {
                        return redirect()->route('home.pays', ['slug_pays' => 'ml']);
                    } elseif ($slug_pays == 'mr') {
                        return redirect()->route('home.pays', ['slug_pays' => 'mr']);
                    } elseif ($slug_pays == 'cd') {
                        return redirect()->route('home.pays', ['slug_pays' => 'cd']);
                    } elseif ($slug_pays == 'rw') {
                        return redirect()->route('home.pays', ['slug_pays' => 'rw']);
                    } elseif ($slug_pays == 'sn') {
                        return redirect()->route('home.pays', ['slug_pays' => 'sn']);
                    } elseif ($slug_pays == 'td') {
                        return redirect()->route('home.pays', ['slug_pays' => 'td']);
                    } else {
                        return redirect()->route('home.pays', ['slug_pays' => 'tg']);
                    }
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

    public function entreprise_pays($slug_pays)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();

        $pays = Pays::all();
        $villes = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('villes', 'pays.id', '=', 'villes.pays_id')
            ->select('*')
            ->get();

        $souscategories = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('categories', 'pays.id', '=', 'categories.pays_id')
            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
            ->select('*', 'sous_categories.id as identifiant')
            ->get();

        if ($slug_pays == 'tg') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 1)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'bf') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 4)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'bj') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 5)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'ci') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 2)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'ne') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'cm') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'cf') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'dj') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'ga') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'gn') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'mg') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'ml') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 6)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'mr') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'cd') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'rw') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'sn') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } elseif ($slug_pays == 'td') {
            $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
            return view('frontend.entreprise.entreprise-register', compact('parametres', 'pays', 'villes', 'souscategories'));
        } else {
            $parametres = Parametre::find(1);
            return view('frontend.entreprise.entreprise-register',compact('parametres', 'sousCategorieNavs', 'pays', 'villes', 'souscategories'));
        }
    }

    public function mdpOubli_pays($slug_pays)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
                ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
                ->where('parametres.id', 3)
                ->select('*')
                ->get();
        return view('frontend.auth.forgot', compact('parametres'));
    }

    public function forgot($slug_pays)
    {
        
    }
    
}
