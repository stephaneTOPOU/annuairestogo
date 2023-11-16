<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact_pays($slug_pays)
    {
        $pays_id = DB::table('pays')->where('slug_pays', $slug_pays)->select('id')->get();
        $parametres = DB::table('pays')->where('pays.id', $pays_id[0]->id)
            ->join('parametres', 'pays.id', '=', 'parametres.pays_id')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();
            
        return view('frontend.contact', compact('parametres'));
    }

    public function save($slug_pays, Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required'
        ]);
        try {

            Contact::create($request->all());
            //  Envoi de mail
            Mail::send('frontend.contact-mail', array(
                'name' => $request->input('nom'),
                'email' => $request->input('email'),
                'subject' => $request->input('objet'),
                'form_message' => $request->input('message'),
            ), function ($message) use ($request) {
                $message->from($request->input('email'));
                $message->to('gzk643192@gmail.com', 'Salut K Gz')->subject($request->input('objet'));
            });
            return redirect()->back()->with('success', 'Merci de nous avoir contacté.');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }
}
