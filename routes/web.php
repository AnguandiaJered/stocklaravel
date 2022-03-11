<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AlerteController;
use App\Http\Controllers\ApprovisionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeclientController;
use App\Http\Controllers\CommandecompanyController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\PerteproduitController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\SortieController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashbordController;


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

// Route::get('/', function () { return view('welcome');});
Route::get('/', [DashbordController::class,'index'])->name('welcome');

Route::post('/category/store', [CategorieController::class,'store'])->name('category.store');
Route::get('/category/index', [CategorieController::class,'index'])->name('category.index');


Route::get('/alerte/edit/{id}', [AlerteController::class,'edit'])->middleware(['auth'])->name('alerte.edit');
Route::post('/alerte/update', [AlerteController::class,'update'])->middleware(['auth'])->name('alerte.update');
Route::get('/alerte',[AlerteController::class,'index'])->middleware(['auth'])->name('alerte.index');

Route::post('/approvision/store', [ApprovisionController::class,'store'])->name('approvision.store');
Route::get('/approvision/edit/{id}', [ApprovisionController::class,'edit'])->name('approvision.edit');
Route::post('/approvision/update', [ApprovisionController::class,'update'])->name('approvision.update');
Route::get('/approvision/delete/{id}', [ApprovisionController::class,'destroy'])->name('approvision.delete');
Route::get('/approvision', [ApprovisionController::class,'index'])->name('approvision.index');


Route::get('/client/edit/{id}', [ClientController::class,'edit'])->middleware(['auth'])->name('client.edit');
Route::post('/client/update', [ClientController::class,'update'])->middleware(['auth'])->name('client.update');
Route::get('/client/delete/{id}', [ClientController::class,'destroy'])->middleware(['auth'])->name('client.delete');
Route::get('/client', [ClientController::class,'index'])->middleware(['auth'])->name('client.index');
Route::post('/client/store', [ClientController::class,'store'])->middleware(['auth'])->name('client.store');

Route::post('/commandeclient/store', [CommandeclientController::class,'store'])->middleware(['auth'])->name('commandeclient.store');
Route::get('/commandeclient/edit/{id}', [CommandeclientController::class,'edit'])->middleware(['auth'])->name('commandeclient.edit');
Route::post('/commandeclient/update', [CommandeclientController::class,'update'])->middleware(['auth'])->name('commandeclient.update');
Route::get('/commandeclient/delete/{id}', [CommandeclientController::class,'destroy'])->middleware(['auth'])->name('commandeclient.delete');
Route::get('/commandeclient', [CommandeclientController::class,'index'])->middleware(['auth'])->name('commandeclient.index');

Route::post('/commandecompany/store', [CommandecompanyController::class,'store'])->middleware(['auth'])->name('commandecompany.store');
Route::get('/commandecompany/edit/{id}', [CommandecompanyController::class,'edit'])->middleware(['auth'])->name('commandecompany.edit');
Route::post('/commandecompany/update', [CommandecompanyController::class,'update'])->middleware(['auth'])->name('commandecompany.update');
Route::get('/commandecompany/delete/{id}', [CommandecompanyController::class,'destroy'])->middleware(['auth'])->name('commandecompany.delete');
Route::get('/commandecompany', [CommandecompanyController::class,'index'])->middleware(['auth'])->name('commandecompany.index');

Route::post('/fournisseur/store',[FournisseurController::class,'store'])->middleware(['auth'])->name('fournisseur.store');
Route::get('/fournisseur/edit/{id}', 'FournisseurController@edit')->middleware(['auth'])->name('fournisseur.edit');
Route::post('/fournisseur/update', [FournisseurController::class,'update'])->middleware(['auth'])->name('fournisseur.update');
Route::get('/fournisseur/delete/{id}', [FournisseurController::class,'destroy'])->middleware(['auth'])->name('fournisseur.delete');
Route::get('/fournisseur', [FournisseurController::class,'index'])->middleware(['auth'])->name('fournisseur.index');



Route::post('/perteproduit/store', [PerteproduitController::class,'store'])->middleware(['auth'])->name('perteproduit.store');
Route::get('/perteproduit/edit/{id}', [PerteproduitController::class,'edit'])->middleware(['auth'])->name('perteproduit.edit');
Route::post('/perteproduit/update', [PerteproduitController::class,'update'])->middleware(['auth'])->name('perteproduit.update');
Route::get('/perteproduit/delete/{id}', [PerteproduitController::class,'destroy'])->middleware(['auth'])->name('perteproduit.delete');
Route::get('/perteproduit', [PerteproduitController::class,'index'])->middleware(['auth'])->name('perteproduit.index');

Route::post('/produit/store', [ProduitController::class,'store'])->middleware(['auth'])->name('produit.store');
Route::get('/produit/edit/{id}', [ProduitController::class,'edit'])->middleware(['auth'])->name('produit.edit');
Route::post('/produit/update', [ProduitController::class,'update'])->middleware(['auth'])->name('produit.update');
Route::get('/produit/delete/{id}', [ProduitController::class,'destroy'])->middleware(['auth'])->name('produit.delete');
Route::get('/produit', [ProduitController::class,'index'])->middleware(['auth'])->name('produit.index');

Route::post('/sortie/store', [SortieController::class,'store'])->middleware(['auth'])->name('sortie.store');
Route::get('/sortie/edit/{id}', [SortieController::class,'edit'])->middleware(['auth'])->name('sortie.edit');
Route::post('/sortie/update', [SortieController::class,'update'])->middleware(['auth'])->name('sortie.update');
Route::get('/sortie/delete/{id}', [SortieController::class,'destroy'])->middleware(['auth'])->name('sortie.delete');
Route::get('/sortie', [SortieController::class,'index'])->middleware(['auth'])->name('sortie.index');


Route::post('/users/store',[UsersController::class,'store'])->middleware(['auth'])->name('users.store');
Route::get('/users/edit/{id}', [UsersController::class,'edit'])->middleware(['auth'])->name('users.edit');
Route::post('/users/update', [UsersController::class,'update'])->middleware(['auth'])->name('users.update');
Route::get('/users/delete/{id}', [UsersController::class,'destroy'])->middleware(['auth'])->name('users.delete');
Route::get('/users',[UsersController::class,'index'])->middleware(['auth'])->name('users.index');

Route::get('/login', [ LoginController::class,'index'])->name('login');
Route::post('/authenticate', [ LoginController::class,'authenticate'])->name('authenticate');