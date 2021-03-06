<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;

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
Auth::routes();

Route::get('/', [ClientController::class, 'home']);
Route::get('/catalogue', [ClientController::class, 'catalogue']);
Route::get('/catalogue/produit/{id}', [ClientController::class, 'produit']);
Route::get('/panier', [ClientController::class, 'panier']);
Route::get('/checkout', [ClientController::class, 'checkout']);
Route::get('/client-login', [ClientController::class, 'client_login']);
Route::get('/client-logout', [ClientController::class, 'client_logout']);
Route::get('/client-singup', [ClientController::class, 'client_singup']);
Route::get('/apropos', [ClientController::class, 'apropos']);
Route::get('/contactez-nous', [ClientController::class, 'Contactez_nous']);
Route::get('/select-par-cat/{id}', [ClientController::class, 'select_par_cat']);
Route::get('ajouter-au-panier/{id}', [ClientController::class, 'ajouter_au_panier']);
Route::post('/modifier-qty/{id}', [ClientController::class, 'modifier_panier']);
Route::get('/retirer-produit/{name}', [ClientController::class, 'retirer_produit']);
Route::post('/creer_compte', [ClientController::class, 'creer_compte']);
Route::post('/acceder_compte', [ClientController::class, 'acceder_compte']);
Route::post('/confirmation', [ClientController::class, 'confirmation']);
Route::post('/commenter', [ClientController::class, 'commenter']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [AdminController::class, 'dashboard']);

    Route::prefix('admin')->group(function () {
        Route::get('/ajoutercategorie', [CategorieController::class, 'ajoutercategorie']);
        Route::post('/sauvercategorie', [CategorieController::class, 'sauvercategorie']);
        Route::get('/categories', [CategorieController::class, 'categories']);
        Route::get('/edit_categorie/{id}', [CategorieController::class, 'edit_categorie']);
        Route::post('/modifiercategorie', [CategorieController::class, 'modifiercategorie']);
        Route::get('/supprimercategorie/{id}', [CategorieController::class, 'supprimercategorie']);

        Route::get('/ajouterproduit', [ProduitController::class, 'ajouterproduit']);
        Route::post('/sauverproduit', [ProduitController::class, 'sauverproduit']);
        Route::get('/produits', [ProduitController::class, 'produits']);
        Route::get('/produits/recommandation/{id}', [ProduitController::class, 'recommandation']);
        Route::get('/edit_produit/{id}', [ProduitController::class, 'edit_produit']);
        Route::post('/modifierproduit', [ProduitController::class, 'modifierproduit']);
        Route::get('/supprimerproduit/{id}', [ProduitController::class, 'supprimerproduit']);
        Route::get('activer_produit/{id}', [ProduitController::class, 'activer_produit']);
        Route::get('desactiver_produit/{id}', [ProduitController::class, 'desactiver_produit']);

        Route::get('/ajouterslider', [SliderController::class, 'ajouterslider']);
        Route::post('/sauverslider', [SliderController::class, 'sauverslider']);
        Route::get('/slider', [SliderController::class, 'slider']);
        Route::get('/edit_slider/{id}', [SliderController::class, 'edit_slider']);
        Route::post('/modifierslider', [SliderController::class, 'modifierslider']);
        Route::get('/supprimerslider/{id}', [SliderController::class, 'supprimerslider']);
        Route::get('/activer_slider/{id}', [SliderController::class, 'activer_slider']);
        Route::get('/desactiver_slider/{id}', [SliderController::class, 'desactiver_slider']);

        Route::get('/commandes', [AdminController::class, 'commande']);
        Route::get('/commande_pdf/{id}', [PdfController::class, 'voir_pdf']);
        Route::get('/commande_traiter/{id}', [AdminController::class, 'commande_traiter']);
        Route::get('/commande_non_traiter/{id}', [AdminController::class, 'commande_non_traiter']);
        Route::get('/commentaires', [AdminController::class, 'commentaires']);
        Route::get('/supprimer_commentaire/{id}', [AdminController::class, 'supprimer_commentaire']);
        Route::get('poster_commentaire/{id}', [AdminController::class, 'poster_commentaire']);
        Route::get('desactiver_commentaire/{id}', [AdminController::class, 'desactiver_commentaire']);
    });
});



