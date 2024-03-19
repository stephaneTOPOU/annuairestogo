<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\commentaire_blog;
use App\Models\Reponse_commentaire3;
use App\Models\SliderRecherche;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog()
    {
        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $blogs = Blog::all();

        $nombres = DB::table('blogs')
            ->leftJoin('commentaire_blogs', 'commentaire_blogs.blog_id', '=', 'blogs.id')
            ->select('commentaire_blogs.blog_id as blog', DB::raw('COUNT(commentaire_blogs.id) as nb'))
            ->groupBy('blog')
            ->get();

        $sliders = SliderRecherche::all();

        return view('frontend.blog', compact('parametres', 'blogs', 'nombres', 'sliders'));
    }

    public function detail($slug_blog)
    {
        $blog_id = DB::table('blogs')->where('slug_blog', $slug_blog)->select('id')->get();

        $parametres = DB::table('parametres')
            ->where('parametres.id', 1)
            ->select('*')
            ->get();

        $details = Blog::find($blog_id[0]->id);

        $nombres = DB::table('blogs')->where('blogs.id', $blog_id[0]->id)
            ->join('commentaire_blogs', 'commentaire_blogs.blog_id', '=', 'blogs.id')
            ->select('commentaire_blogs.id as identifiant')
            ->count();

        $commentaires = DB::table('blogs')->where('blogs.id', $blog_id[0]->id)
            ->join('commentaire_blogs', 'commentaire_blogs.blog_id', '=', 'blogs.id')
            ->select('*', 'commentaire_blogs.id as identifiant')
            ->orderBy('commentaire_blogs.id', 'desc')
            ->get();

        $reponses = DB::table('commentaire_blogs')
            ->join('reponse_commentaire3s', 'reponse_commentaire3s.commentaires_id', '=', 'commentaire_blogs.id')
            ->select('*')
            ->orderBy('reponse_commentaire3s.id', 'desc')
            ->get();

        $blogs = Blog::all();

        $sliders = SliderRecherche::all();

        return view('frontend.blog-detail', compact('blogs', 'parametres', 'details', 'nombres', 'commentaires', 'reponses', 'sliders'));
    }

    public function comment($slug_blog, Request $request)
    {
        $blog_id = DB::table('blogs')->where('slug_blog', $slug_blog)->select('id')->get();

        $request->validate([
            'nom' => 'required',
            'message' => 'required'
        ]);
        try {
            //dd($request);
            $data = new commentaire_blog();
            $data->blog_id = $blog_id[0]->id;
            $data->nom = $request->nom;
            $data->message = $request->message;
            $data->save();
            return redirect()->back()->with('success', 'Merci pour le commentaire');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }

    public function reponse($slug_blog, Request $request, $id)
    {
        $commentaires_id = DB::table('commentaire_blogs')->where('commentaire_blogs.id', $id)->select('id')->get();

        $request->validate([
            'nomR' => 'required',
            'messageR' => 'required'
        ]);
        try {
            //dd($request);
            $data = new Reponse_commentaire3();
            $data->commentaires_id = $commentaires_id[0]->id;
            $data->nomR = $request->nomR;
            $data->messageR = $request->messageR;
            $data->save();
            return redirect()->back()->with('success', 'Merci pour la réponse');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }
}
