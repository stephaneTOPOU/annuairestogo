<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActionEntrepriseController extends Controller
{
    public function addEntreprise(Request $request)
    {
        $data = $request->validate([
            'nom' => 'string',
            'adresse' => 'string',
            'telephone1' => 'string',
        ]);

        try {
            $data = new Entreprise();

            $data->souscategorie_id = $request->souscategorie_id;
            $data->nom = $request->nom;
            $data->email = $request->email;
            $data->adresse = $request->adresse;
            $data->telephone1 = $request->telephone1;
            $data->telephone2 = $request->telephone2;

            $data->save();
            return redirect()->back()->with('entreprise', 'Votre Entreprise a été ajoutée avec succès. Merci :)');
        } catch (Exception $e) {
            return redirect()->back()->with('entreprise', $e->getMessage());
        }
    }
}
