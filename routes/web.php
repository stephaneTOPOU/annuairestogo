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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index_pays'])->name('home');


Route::get('/autocomplete-entreprise', [\App\Http\Controllers\HomeController::class, 'autocompletion_pays'])->name('autocomplete');
Route::get('/autocomplete-user', [\App\Http\Controllers\UserController::class, 'user_autocomplete'])->name('user.autocomplete');


Route::get('/rechercher-entreprise', [\App\Http\Controllers\HomeController::class, 'recherche_pays'])->name('recherche');
Route::post('/rechercher-entreprise', [\App\Http\Controllers\DevisController::class, 'devis'])->name('devis.recherche');
Route::get('/rechercher-professionnel', [\App\Http\Controllers\UserController::class, 'list'])->name('user.list');


Route::get('/enregistrer-entreprise', [\App\Http\Controllers\AuthController::class, 'entreprise_pays'])->name('entreprise.register');


Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact_pays'])->name('contact');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'save'])->name('contact.save');


Route::get('/a-propos', [\App\Http\Controllers\AboutController::class, 'about'])->name('about');


Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login_pays'])->name('login');
Route::get('/forgot', [\App\Http\Controllers\AuthController::class, 'mdpOubli_pays'])->name('mdpOubli');
Route::post('/forgot', [\App\Http\Controllers\AuthController::class, 'forgot_pays'])->name('forgot');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout_pays'])->name('logout');


Route::get('/ajouter-user', [\App\Http\Controllers\UserController::class, 'user'])->name('user');
Route::post('/ajouter-user', [\App\Http\Controllers\AuthController::class, 'addUser_pays'])->name('user.add');


Route::get('/categorie', [\App\Http\Controllers\CategoriesController::class, 'categories_pays'])->name('categorie');


Route::get('/liste-pharmacie-de-garde', [\App\Http\Controllers\PharmacieController::class, 'pharmacie'])->name('pharmacie');


Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'blog'])->name('blog');

Route::post('/authentification', [\App\Http\Controllers\AuthController::class, 'authentification_pays'])->name('authenticate');

Route::post('/ajouter-entreprise', [\App\Http\Controllers\ActionEntrepriseController::class, 'addEntreprise'])->name('entreprise.add');

Route::post('/entreprise-devis', [\App\Http\Controllers\DevisController::class, 'devis'])->name('devis.entreprise');

Route::get('/cgu', [\App\Http\Controllers\CguController::class, 'Cgu'])->name('cgu');

Route::get('/confidentialite', [\App\Http\Controllers\CguController::class, 'Confidentialite'])->name('cp');

Route::get('/cookie', [\App\Http\Controllers\CguController::class, 'Cookie'])->name('cookie');

Route::get('/{pub_slug}', [App\Http\Controllers\PubController::class, 'pubDetail'])->name('pub.detail');

Route::get('/{slug_categorie}', [\App\Http\Controllers\SousCategoriesController::class, 'Souscategories_pays'])->name('subcat');

Route::post('/{slug_blog}', [\App\Http\Controllers\BlogController::class, 'comment'])->name('blog.comment');

Route::post('/update/{slug_user}', [\App\Http\Controllers\UserController::class, 'update'])->name('user.dashboard.update');

Route::get('/blog/{slug_blog}', [\App\Http\Controllers\BlogController::class, 'detail'])->name('blog.detail');

Route::get('/offres/{offre_slug}', [App\Http\Controllers\OffreController::class, 'jobDetail'])->name('offre.detail');

Route::get('/mon-profil/{slug_user}', [\App\Http\Controllers\UserController::class, 'mydash'])->name('user.dashboard');

Route::get('/profil/{slug_user}', [\App\Http\Controllers\UserController::class, 'myprofil'])->name('user.profile');

Route::get('/{slug_cat_an}/{slug_annonce}', [\App\Http\Controllers\NewsController::class, 'news'])->name('news');

Route::post('/{slug_cat_an}/{slug_annonce}', [\App\Http\Controllers\NewsController::class, 'comment'])->name('news.comment');

Route::post('/blog/{slug_blog}/{id}', [\App\Http\Controllers\BlogController::class, 'reponse'])->name('blog.comment.rep');

Route::get('/{slug_categorie}/{slug_souscategorie}/entreprises', [\App\Http\Controllers\EntrepriseController::class, 'entreprise_pays'])->name('entreprise');

Route::post('/{slug_categorie}/{slug_souscategorie}/entreprises', [\App\Http\Controllers\ProfileController::class, 'message'])->name('entreprise.contact');

Route::get('/{slug_categorie}/{slug_souscategorie}/{slug_entreprise}', [\App\Http\Controllers\ProfileController::class, 'ProfileEntreprise_pays'])->name('entreprise.profil');

Route::post('/{slug_cat_an}/{slug_annonce}/{id}', [\App\Http\Controllers\NewsController::class, 'reponse'])->name('news.comment.rep');

Route::post('/{slug_categorie}/{slug_souscategorie}/{slug_entreprise}/commentaire', [\App\Http\Controllers\ProfileController::class, 'commentaire'])->name('entreprise.commentaire');
Route::post('/{slug_categorie}/{slug_souscategorie}/{slug_entreprise}/{id}', [\App\Http\Controllers\ProfileController::class, 'commentaire2'])->name('entreprise.comment2');


Route::post('/{slug_categorie}/{slug_souscategorie}/{slug_entreprise}/entreprise/etoile', [\App\Http\Controllers\ProfileController::class, 'updateRating'])->name('rate');
