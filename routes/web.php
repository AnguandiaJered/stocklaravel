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

Route::get('/', function () { return view('welcome');});

Route::post('/category/store', [CategorieController::class,'store'])->name('category.store');
Route::get('/category/index', [CategorieController::class,'index'])->name('category.index');


Route::get('/alerte/edit/{id}', [AlerteController::class,'edit'])->name('alerte.edit');
Route::post('/alerte/update', [AlerteController::class,'update'])->name('alerte.update');
Route::get('/alerte',[AlerteController::class,'index'])->name('alerte.index');

Route::post('/approvision/store', [ApprovisionController::class,'store'])->name('approvision.store');
Route::get('/approvision/edit/{id}', [ApprovisionController::class,'edit'])->name('approvision.edit');
Route::post('/approvision/update', [ApprovisionController::class,'update'])->name('approvision.update');
Route::get('/approvision/delete/{id}', [ApprovisionController::class,'destroy'])->name('approvision.delete');
Route::get('/approvision', [ApprovisionController::class,'index'])->name('approvision.index');


Route::get('/client/edit/{id}', [ClientController::class,'edit'])->name('client.edit');
Route::post('/client/update', [ClientController::class,'update'])->name('client.update');
Route::get('/client/delete/{id}', [ClientController::class,'destroy'])->name('client.delete');
Route::get('/client', [ClientController::class,'index'])->name('client.index');
Route::post('/client/store', [ClientController::class,'store'])->name('client.store');

Route::post('/commandeclient/store', [CommandeclientController::class,'store'])->name('commandeclient.store');
Route::get('/commandeclient/edit/{id}', [CommandeclientController::class,'edit'])->name('commandeclient.edit');
Route::post('/commandeclient/update', [CommandeclientController::class,'update'])->name('commandeclient.update');
Route::get('/commandeclient/delete/{id}', [CommandeclientController::class,'destroy'])->name('commandeclient.delete');
Route::get('/commandeclient', [CommandeclientController::class,'index'])->name('commandeclient.index');

Route::post('/commandecompany/store', [CommandecompanyController::class,'store'])->name('commandecompany.store');
Route::get('/commandecompany/edit/{id}', [CommandecompanyController::class,'edit'])->name('commandecompany.edit');
Route::post('/commandecompany/update', [CommandecompanyController::class,'update'])->name('commandecompany.update');
Route::get('/commandecompany/delete/{id}', [CommandecompanyController::class,'destroy'])->name('commandecompany.delete');
Route::get('/commandecompany', [CommandecompanyController::class,'index'])->name('commandecompany.index');

Route::post('/fournisseur/store',[FournisseurController::class,'store'])->name('fournisseur.store');
Route::get('/fournisseur/edit/{id}', 'FournisseurController@edit')->name('fournisseur.edit');
Route::post('/fournisseur/update', [FournisseurController::class,'update'])->name('fournisseur.update');
Route::get('/fournisseur/delete/{id}', [FournisseurController::class,'destroy'])->name('fournisseur.delete');
Route::get('/fournisseur', [FournisseurController::class,'index'])->name('fournisseur.index');


Route::post('/perteproduit/store', [PerteproduitController::class,'store'])->name('perteproduit.store');
Route::get('/perteproduit/edit/{id}', [PerteproduitController::class,'edit'])->name('perteproduit.edit');
Route::post('/perteproduit/update', [PerteproduitController::class,'update'])->name('perteproduit.update');
Route::get('/perteproduit/delete/{id}', [PerteproduitController::class,'destroy'])->name('perteproduit.delete');
Route::get('/perteproduit', [PerteproduitController::class,'index'])->name('perteproduit.index');

Route::post('/produit/store', [ProduitController::class,'store'])->name('produit.store');
Route::get('/produit/edit/{id}', [ProduitController::class,'edit'])->name('produit.edit');
Route::post('/produit/update', [ProduitController::class,'update'])->name('produit.update');
Route::get('/produit/delete/{id}', [ProduitController::class,'destroy'])->name('produit.delete');
Route::get('/produit', [ProduitController::class,'index'])->name('produit.index');

Route::post('/sortie/store', [SortieController::class,'store'])->name('sortie.store');
Route::get('/sortie/edit/{id}', [SortieController::class,'edit'])->name('sortie.edit');
Route::post('/sortie/update', [SortieController::class,'update'])->name('sortie.update');
Route::get('/sortie/delete/{id}', [SortieController::class,'destroy'])->name('sortie.delete');
Route::get('/sortie', [SortieController::class,'index'])->name('sortie.index');


Route::post('/users/store',[UsersController::class,'store'])->name('users.store');
Route::get('/users/edit/{id}', [UsersController::class,'edit'])->name('users.edit');
Route::post('/users/update', [UsersController::class,'update'])->name('users.update');
Route::get('/users/delete/{id}', [UsersController::class,'destroy'])->name('users.delete');
Route::get('/users',[UsersController::class,'index'])->name('users.index');
