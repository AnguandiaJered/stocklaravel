<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commandecompany;

class CommandecompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandecompany = \DB::select("SELECT * FROM commandecompany order by id DESC");
        $produit = \DB::select("SELECT * FROM produit order by id DESC");
        $fournisseur = \DB::select("SELECT * FROM fournisseur order by id DESC");
        return view('commandecompany', compact('commandecompany','produit','fournisseur'));
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
            'fournisseur_id'=>'required',
            'produit_id'=>'required',
            'quantite'=>'required',
            'prix'=>'required',
            'devise'=>'required',         
            'datecmd'=>'required',         
        ]);

        \DB::table('commandecompany')->insert([
            'fournisseur_id'=>$request->fournisseur_id,
            'produit_id'=>$request->produit_id,
            'quantite'=>$request->quantite,
            'prix'=>$request->prix,
            'devise'=>$request->devise,
            'datecmd'=>$request->datecmd,
        ]);

        return \redirect()->route('commandecompany.index')->with('message','Inserer avec success');
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
        $data = \DB::select("SELECT * FROM commandecompany WHERE id= ?", [$id]);
        $commandeclient = $data[0];
        return view('commandecompany', compact('commandecompany'));
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
        \DB::update("UPDATE commandecompany set fournisseur_id = ?, produit_id = ?, quantite = ?, prix = ?, devise = ?, datecmd = ? WHERE id= ? ", [$request->fournisseur_id,$request->produit_id,$request->quantite,$request->prix,$request->devise,$request->datecmd,$request->id]);
        return \redirect()->route('commandecompany.index')->with('message','modification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {      
        \DB::delete("DELETE FROM commandecompany WHERE id= ?", [$id]);
        return \redirect()->route('commandecompany.index')->with('message','suppression reussi avec succes');
    }
}
