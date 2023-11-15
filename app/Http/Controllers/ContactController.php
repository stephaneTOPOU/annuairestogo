<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_pays($slug_pays)
    {
        return view('frontend.contact');
    }
}
