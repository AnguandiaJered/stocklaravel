<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commandeclient;

class CommandeclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandeclient = \DB::select("SELECT * FROM commandeclient order by id DESC");
        return view('commandeclient', compact('commandeclient'));
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
            'datecmdclient'=>'required',         
        ]);

        \DB::table('commandeclient')->insert([
            'client_id'=>$request->client_id,
            'produit_id'=>$request->produit_id,
            'quantite'=>$request->quantite,
            'prix'=>$request->prix,
            'devise'=>$request->devise,
            'datecmdclient'=>$request->datecmdclient,
        ]);

        return \redirect()->route('commandeclient')->with('message','Inserer avec success');
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
        $data = \DB::select("SELECT * FROM commandeclient WHERE id= ?", [$id]);
        $commandeclient = $data[0];
        return view('commandeclient', compact('commandeclient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \DB::update("UPDATE commandeclient set client_id = ?, produit_id = ?, quantite = ?, prix = ?, devise = ?, datecmdclient = ? WHERE id= ? ", [$request->client_id,$request->produit_id,$request->quantite,$request->prix,$request->devise,$request->datecmdclient,$request->id]);
        return \redirect()->route('commandeclient')->with('message','modification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::delete("DELETE FROM commandeclient WHERE id= ?", [$id]);
        return \redirect()->route('commandeclient')->with('message','suppression reussi avec succes');
    }
}
