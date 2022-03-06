<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseur = \DB::select("SELECT * FROM fournisseur order by id DESC");
        return view('fournisseur', compact('fournisseur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([            
            'noms'=>'required',
            'sexe'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'mail'=>'required'        
        ]);

        \DB::table('fournisseur')->insert([
            'noms'=>$request->noms,
            'sexe'=>$request->sexe,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone,
            'mail'=>$request->mail
        ]);

        return \redirect()->route('fournisseur')->with('message','Inserer avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = \DB::select("SELECT * FROM fournisseur WHERE id= ?", [$id]);
        $fournisseur = $data[0];
        return view('fournisseur', compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        \DB::update("UPDATE fournisseur set noms = ?, sexe = ?, adresse = ?, telephone = ?, mail = ? WHERE id= ? ", [$request->noms,$request->sexe,$request->adresse,$request->telephone,$request->mail,$request->id]);
        return \redirect()->route('fournisseur')->with('message','modification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::delete("DELETE FROM fournisseur WHERE id= ?", [$id]);
        return \redirect()->route('fournisseur')->with('message','suppression reussi avec succes');
    }
}
