<?php

namespace App\Http\Controllers;

use App\Models\SousCategories;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function user($slug_pays)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
    
        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        return view('frontend.auth.register', compact('parametres'));
    }

    public function mydash($slug_pays, $slug_user)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
        $user_id = DB::table('users')->where('slug_user', $slug_user)->select('id')->get();

        $users = User::find($user_id[0]->id);
        $souscategories = SousCategories::all();

        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
        return view('frontend.mydash', compact('souscategories', 'users', 'parametres'));
    }

    public function update($slug_pays, $slug_user, Request $request)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
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
            $data->pays_id = $pays_id[0]->id;
            $data->update();
            //User::create($data);
            return redirect()->back()->with('user', "Votre profile a été créé avec success !!!");
        } catch (Exception $e) {
            return redirect()->back()->with('user', $e->getMessage());
        }
    }
}
