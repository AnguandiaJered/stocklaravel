<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perteproduit;

class PerteproduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perteproduit = \DB::select("SELECT * FROM perteproduit order by id DESC");
        return view('perteproduit', compact('perteproduit'));
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
            'produit_id'=>'required',
            'quantite'=>'required',
            'dateperte'=>'required',
            'typegaspillage'=>'required',        
        ]);

        \DB::table('perteproduit')->insert([
            'produit_id'=>$request->produit_id,
            'quantite'=>$request->quantite,
            'dateperte'=>$request->dateperte,
            'typegaspillage'=>$request->typegaspillage,
        ]);

        return \redirect()->route('perteproduit.index')->with('message','Inserer avec success');
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
        $data = \DB::select("SELECT * FROM perteproduit WHERE id= ?", [$id]);
        $perteproduit = $data[0];
        return view('perteproduit', compact('perteproduit'));
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
        \DB::update("UPDATE perteproduit set produit_id = ?, quantite = ?, dateperte = ?, typegaspillage = ? WHERE id= ? ", [$request->produit_id,$request->quantite,$request->dateperte,$request->typegaspillage,$request->id]);
        return \redirect()->route('perteproduit.index')->with('message','modification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::delete("DELETE FROM perteproduit WHERE id= ?", [$id]);
        return \redirect()->route('perteproduit.index')->with('message','suppression reussi avec succes');
    }
}
