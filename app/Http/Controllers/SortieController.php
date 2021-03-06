<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sortie;

class SortieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sortie = \DB::select("SELECT * FROM sortie order by id DESC");
        $produit = \DB::select("SELECT * FROM produit order by id DESC");
        $client = \DB::select("SELECT * FROM client order by id DESC");
        return view('sortie', compact('sortie','client','produit'));
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
            'client_id'=>'required',
            'produit_id'=>'required',
            'quantite'=>'required',       
            'prix'=>'required',       
            'devise'=>'required',       
            'dateprovision'=>'required',              
        ]);

        \DB::statement("CALL SaveSortie(?,?,?,?,?,?)",[
            $request->client_id,
            $request->produit_id,
            $request->quantite,
            $request->prix,
            $request->devise,
            $request->dateprovision,
        ]);

        return \redirect()->route('sortie.index')->with('message','Inserer avec success');
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
        $data = \DB::select("SELECT * FROM sortie WHERE id= ?", [$id]);
        $sortie = $data[0];
        return view('sortie', compact('sortie'));
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
        \DB::update("UPDATE sortie set client_id = ?, produit_id = ?, quantite = ?, prix = ?, devise = ?, dateprovision = ? WHERE id= ? ", [$request->client_id,$request->produit_id,$request->quantite,$request->prix,$request->devise,$request->dateprovision,$request->id]);
        return \redirect()->route('sortie.index')->with('message','modification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::delete("DELETE FROM sortie WHERE id= ?", [$id]);
        return \redirect()->route('sortie.index')->with('message','suppression reussi avec succes');
    }
}
