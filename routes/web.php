<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $geoipInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
    // return $geoipInfo->iso_code;
    if ($geoipInfo->iso_code == 'TG') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'tg']
        );
    } elseif ($geoipInfo->iso_code == 'BJ') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'bj']
        );
    } elseif ($geoipInfo->iso_code == 'BF') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'bf']
        );
    } elseif ($geoipInfo->iso_code == 'BI') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'bi']
        );
    } elseif ($geoipInfo->iso_code == 'CM') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'cm']
        );
    } elseif ($geoipInfo->iso_code == 'CF') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'cf']
        );
    } elseif ($geoipInfo->iso_code == 'CG') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'cg']
        );
    } elseif ($geoipInfo->iso_code == 'CI') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'ci']
        );
    } elseif ($geoipInfo->iso_code == 'DJ') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'dj']
        );
    } elseif ($geoipInfo->iso_code == 'GA') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'ga']
        );
    } elseif ($geoipInfo->iso_code == 'GN') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'gn']
        );
    } elseif ($geoipInfo->iso_code == 'MG') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'mg']
        );
    } elseif ($geoipInfo->iso_code == 'ML') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'ml']
        );
    } elseif ($geoipInfo->iso_code == 'MR') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'mr']
        );
    } elseif ($geoipInfo->iso_code == 'NE') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'ne']
        );
    } elseif ($geoipInfo->iso_code == 'CD') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'cd']
        );
    } elseif ($geoipInfo->iso_code == 'RW') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'rw']
        );
    } elseif ($geoipInfo->iso_code == 'SN') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'sn']
        );
    } elseif ($geoipInfo->iso_code == 'TD') {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'td']
        );
    } else {
        return redirect()->action(
            [\App\Http\Controllers\HomeController::class, 'index_pays'],
            ['slug_pays' => 'tg']
        );
    }
});


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{slug_pays}', [\App\Http\Controllers\HomeController::class, 'index_pays'])->name('home.pays');

Route::get('/{slug_pays}/autocomplete', [\App\Http\Controllers\HomeController::class, 'autocompletion_pays'])->name('autocomplete.pays');

Route::get('/{slug_pays}/autocomplete-user', [\App\Http\Controllers\UserController::class, 'user_autocomplete'])->name('user.autocomplete');

Route::get('/{slug_pays}/rechercher-entreprise', [\App\Http\Controllers\HomeController::class, 'recherche_pays'])->name('recherche.pays');
Route::post('/{slug_pays}/rechercher-entreprise', [\App\Http\Controllers\DevisController::class, 'devis'])->name('devis.recherche');

Route::get('/{slug_pays}/rechercher-professionnel', [\App\Http\Controllers\UserController::class, 'list'])->name('user.list');

Route::get('/{slug_pays}/enregistrer-entreprise', [\App\Http\Controllers\AuthController::class, 'entreprise_pays'])->name('entreprise.register.pays');

Route::get('/{slug_pays}/contact', [\App\Http\Controllers\ContactController::class, 'contact_pays'])->name('contact.pays');
Route::post('/{slug_pays}/contact', [\App\Http\Controllers\ContactController::class, 'save'])->name('contact.save');

Route::get('/{slug_pays}/a-propos', [\App\Http\Controllers\AboutController::class, 'about'])->name('about.pays');

Route::get('/{slug_pays}/login', [\App\Http\Controllers\AuthController::class, 'login_pays'])->name('login.pays');

Route::get('/{slug_pays}/forgot', [\App\Http\Controllers\AuthController::class, 'mdpOubli_pays'])->name('mdpOubli.pays');
Route::post('/{slug_pays}/forgot', [\App\Http\Controllers\AuthController::class, 'forgot_pays'])->name('forgot.pays');

Route::get('/{slug_pays}/logout', [\App\Http\Controllers\AuthController::class, 'logout_pays'])->name('logout.pays');

Route::get('/{slug_pays}/ajouter-user', [\App\Http\Controllers\UserController::class, 'user'])->name('user.pays');
Route::post('/{slug_pays}/ajouter-user', [\App\Http\Controllers\AuthController::class, 'addUser_pays'])->name('user.pays.add');

Route::get('/{slug_pays}/categorie', [\App\Http\Controllers\CategoriesController::class, 'categories_pays'])->name('categorie.pays');

Route::get('/{slug_pays}/liste-pharmacie-de-garde', [\App\Http\Controllers\PharmacieController::class, 'pharmacie'])->name('pharmacie');

Route::get('/{slug_pays}/blog',[\App\Http\Controllers\BlogController::class, 'blog'])->name('blog');

Route::post('/{slug_pays}/authentification', [\App\Http\Controllers\AuthController::class, 'authentification_pays'])->name('authenticate.pays');

Route::post('/{slug_pays}/ajouter-entreprise', [\App\Http\Controllers\ActionEntrepriseController::class, 'addEntreprise'])->name('entreprise.pays.add');

Route::post('/{slug_pays}/entreprise-devis', [\App\Http\Controllers\DevisController::class, 'devis'])->name('devis.entreprise');

Route::get('/{slug_pays}/{pub_slug}', [App\Http\Controllers\PubController::class, 'pubDetail'])->name('pub.detail');

Route::get('/{slug_pays}/{slug_categorie}', [\App\Http\Controllers\SousCategoriesController::class, 'Souscategories_pays'])->name('subcat.pays');

Route::post('/{slug_pays}/{slug_blog}', [\App\Http\Controllers\BlogController::class, 'comment'])->name('blog.comment');

Route::post('/{slug_pays}/{slug_user}', [\App\Http\Controllers\UserController::class, 'update'])->name('user.dashboard.update');

Route::get('/{slug_pays}/blog/{slug_blog}', [\App\Http\Controllers\BlogController::class, 'detail'])->name('blog.detail');

Route::get('/{slug_pays}/offres/{offre_slug}', [App\Http\Controllers\OffreController::class, 'jobDetail'])->name('offre.detail');

Route::get('/{slug_pays}/mon-profil/{slug_user}', [\App\Http\Controllers\UserController::class, 'mydash'])->name('user.dashboard');

Route::get('/{slug_pays}/profil/{slug_user}', [\App\Http\Controllers\UserController::class, 'myprofil'])->name('user.profile');

Route::get('/{slug_pays}/{slug_cat_an}/{slug_annonce}', [\App\Http\Controllers\NewsController::class, 'news'])->name('news');

Route::post('/{slug_pays}/{slug_cat_an}/{slug_annonce}', [\App\Http\Controllers\NewsController::class, 'comment'])->name('news.comment');

Route::post('/{slug_pays}/blog/{slug_blog}/{id}', [\App\Http\Controllers\BlogController::class, 'reponse'])->name('blog.comment.rep');

Route::get('/{slug_pays}/{slug_categorie}/{slug_souscategorie}/entreprises', [\App\Http\Controllers\EntrepriseController::class, 'entreprise_pays'])->name('entreprise.pays');

Route::post('/{slug_pays}/{slug_categorie}/{slug_souscategorie}/entreprises', [\App\Http\Controllers\ProfileController::class, 'message'])->name('entreprise.contact');

Route::get('/{slug_pays}/{slug_categorie}/{slug_souscategorie}/{slug_entreprise}', [\App\Http\Controllers\ProfileController::class, 'ProfileEntreprise_pays'])->name('entreprise.pays.profil');

Route::post('/{slug_pays}/{slug_cat_an}/{slug_annonce}/{id}', [\App\Http\Controllers\NewsController::class, 'reponse'])->name('news.comment.rep');

Route::post('/{slug_pays}/{slug_categorie}/{slug_souscategorie}/{slug_entreprise}', [\App\Http\Controllers\ProfileController::class, 'commentaire'])->name('entreprise.pays.comment');

Route::post('/{slug_pays}/{slug_categorie}/{slug_souscategorie}/{slug_entreprise}/etoile', [\App\Http\Controllers\ProfileController::class, 'updateRating'])->name('rate');

Route::post('/{slug_pays}/{slug_categorie}/{slug_souscategorie}/{slug_entreprise}/{id}', [\App\Http\Controllers\ProfileController::class, 'commentaire2'])->name('entreprise.pays.comment2');



