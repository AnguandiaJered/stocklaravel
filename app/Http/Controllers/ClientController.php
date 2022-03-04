<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = \DB::select("SELECT * FROM client order by id DESC");
        return view('client', compact('client'));
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

        \DB::table('client')->insert([
            'noms'=>$request->noms,
            'sexe'=>$request->sexe,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone,
            'mail'=>$request->mail
        ]);
        
        return \redirect()->route('client')->with('message','Inserer avec success');
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
        $data = \DB::select("SELECT * FROM client WHERE id= ?", [$id]);
        $client = $data[0];
        return view('client', compact('client'));
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
        \DB::update("UPDATE client set noms = ?, sexe = ?, adresse = ?, telephone = ?, mail = ? WHERE id= ? ", [$request->noms,$request->sexe,$request->adresse,$request->telephone,$request->mail,$request->id]);
        return \redirect()->route('client')->with('message','modification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::delete("DELETE FROM client WHERE id= ?", [$id]);
        return \redirect()->route('client')->with('message','suppression reussi avec succes');
    }
}
