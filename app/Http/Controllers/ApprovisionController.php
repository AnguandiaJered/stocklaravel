<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Approvision;
use Auth;

class ApprovisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approvision = \DB::select("SELECT * FROM approvision order by id DESC");
        $produit = \DB::select("SELECT * FROM produit order by id DESC");
        $fournisseur = \DB::select("SELECT * FROM fournisseur order by id DESC");
        return view('approvision', compact('approvision','produit','fournisseur'));
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
            'fournisseur_id'=>'required',
            'quantite'=>'required',
            'prix'=>'required',
            'devise'=>'required',         
            'dateprovision'=>'required',         
        ]);

        // \DB::table('approvision')->insert([
        //     'produit_id'=>$request->produit_id,
        //     'fournisseur_id'=>$request->fournisseur_id,
        //     'quantite'=>$request->quantite,
        //     'prix'=>$request->prix,
        //     'devise'=>$request->devise,
        //     'dateprovision'=>$request->dateprovision,
        // ]);
        \DB::statement("CALL Saveprovision(?,?,?,?,?,?)",[
            'produit_id'=>$request->produit_id,
            'fournisseur_id'=>$request->fournisseur_id,
            'quantite'=>$request->quantite,
            'prix'=>$request->prix,
            'devise'=>$request->devise,
            'dateprovision'=>$request->dateprovision,
        ]);

        return \redirect()->route('approvision.index')->with('message','Inserer avec success');
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
        $data = \DB::select("SELECT * FROM approvision WHERE id= ?", [$id]);
        $approvision = $data[0];
        return view('approvision', compact('approvision'));
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
        $user_id=Auth::user()->name;
        \DB::update("UPDATE approvision set produit_id = ?, fournisseur_id = ?, quantite = ?, prix = ?, devise = ?, dateprovision = ? WHERE id= ? ", [$request->produit_id,$request->fournisseur_id,$request->quantite,$request->prix,$request->devise,$request->dateprovision,$request->id]);
        return \redirect()->route('approvision.index')->with('message','modification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::delete("DELETE FROM approvision WHERE id= ?", [$id]);
        return \redirect()->route('approvision.index')->with('message','suppression reussi avec succes');
    }
}
