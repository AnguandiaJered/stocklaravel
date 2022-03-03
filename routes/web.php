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
    return view('welcome');
});

Route::post('/category/store', 'CategorieController@store')->name('category.store');
Route::get('/category/index', 'CategorieController@index')->name('category.index');
Route::get('/category/edit/{id}', 'CategorieController@edit')->name('category.edit');
Route::post('/category/update', 'CategorieController@update')->name('category.update');
Route::get('/category/delete/{id}', 'CategorieController@destroy')->name('category.delete');

Route::post('/alerte/store', 'AlerteController@store')->name('alerte.store');
Route::get('/alerte/index', 'AlerteController@index')->name('alerte.index');
Route::get('/alerte/edit/{id}', 'AlerteController@edit')->name('alerte.edit');
Route::post('/alerte/update', 'AlerteController@update')->name('alerte.update');
Route::get('/alerte/delete/{id}', 'AlerteController@destroy')->name('alerte.delete');
Route::get('/alerte', function () { return view('alerte'); });

Route::post('/approvision/store', 'ApprovisionController@store')->name('approvision.store');
Route::get('/approvision/index', 'ApprovisionController@index')->name('approvision.index');
Route::get('/approvision/edit/{id}', 'ApprovisionController@edit')->name('approvision.edit');
Route::post('/approvision/update', 'ApprovisionController@update')->name('approvision.update');
Route::get('/approvision/delete/{id}', 'ApprovisionController@destroy')->name('approvision.delete');
Route::get('/approvision', function () { return view('approvision'); });

Route::post('/client/store', 'ClientController@store')->name('client.store');
Route::get('/client/index', 'ClientController@index')->name('client.index');
Route::get('/client/edit/{id}', 'ClientController@edit')->name('client.edit');
Route::post('/client/update', 'ClientController@update')->name('client.update');
Route::get('/client/delete/{id}', 'ClientController@destroy')->name('client.delete');
Route::get('/client', function () { return view('client');});

Route::post('/commandeclient/store', 'CommandeclientController@store')->name('commandeclient.store');
Route::get('/commandeclient/index', 'CommandeclientController@index')->name('commandeclient.index');
Route::get('/commandeclient/edit/{id}', 'CommandeclientController@edit')->name('commandeclient.edit');
Route::post('/commandeclient/update', 'CommandeclientController@update')->name('commandeclient.update');
Route::get('/commandeclient/delete/{id}', 'CommandeclientController@destroy')->name('commandeclient.delete');
Route::get('/commandeclient', function () { return view('commandeclient');});

Route::post('/commandecompany/store', 'CommandecompanyController@store')->name('commandecompany.store');
Route::get('/commandecompany/index', 'CommandecompanyController@index')->name('commandecompany.index');
Route::get('/commandecompany/edit/{id}', 'CommandecompanyController@edit')->name('commandecompany.edit');
Route::post('/commandecompany/update', 'CommandecompanyController@update')->name('commandecompany.update');
Route::get('/commandecompany/delete/{id}', 'CommandecompanyController@destroy')->name('commandecompany.delete');
Route::get('/commandecompany', function () { return view('commandecompany'); });

Route::post('/fournisseur/store', 'FournisseurController@store')->name('fournisseur.store');
Route::get('/fournisseur/index', 'FournisseurController@index')->name('fournisseur.index');
Route::get('/fournisseur/edit/{id}', 'FournisseurController@edit')->name('fournisseur.edit');
Route::post('/fournisseur/update', 'FournisseurController@update')->name('fournisseur.update');
Route::get('/fournisseur/delete/{id}', 'FournisseurController@destroy')->name('fournisseur.delete');
Route::get('/fournisseur', function () { return view('fournisseur');});

Route::post('/perteproduit/store', 'PerteproduitController@store')->name('perteproduit.store');
Route::get('/perteproduit/index', 'PerteproduitController@index')->name('perteproduit.index');
Route::get('/perteproduit/edit/{id}', 'PerteproduitController@edit')->name('perteproduit.edit');
Route::post('/perteproduit/update', 'PerteproduitController@update')->name('perteproduit.update');
Route::get('/perteproduit/delete/{id}', 'PerteproduitController@destroy')->name('perteproduit.delete');
Route::get('/perteproduit', function () { return view('perteproduit'); });

Route::post('/produit/store', 'ProduitController@store')->name('produit.store');
Route::get('/produit/index', 'ProduitController@index')->name('produit.index');
Route::get('/produit/edit/{id}', 'ProduitController@edit')->name('produit.edit');
Route::post('/produit/update', 'ProduitController@update')->name('produit.update');
Route::get('/produit/delete/{id}', 'ProduitController@destroy')->name('produit.delete');
Route::get('/produit', function () { return view('produit'); });

Route::post('/sortie/store', 'SortieController@store')->name('sortie.store');
Route::get('/sortie/index', 'SortieController@index')->name('sortie.index');
Route::get('/sortie/edit/{id}', 'SortieController@edit')->name('sortie.edit');
Route::post('/sortie/update', 'SortieController@update')->name('sortie.update');
Route::get('/sortie/delete/{id}', 'SortieController@destroy')->name('sortie.delete');
Route::get('/sortie', function () { return view('sortie');});
