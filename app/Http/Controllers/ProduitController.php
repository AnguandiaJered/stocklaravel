<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit = \DB::select("SELECT * FROM produit order by id DESC");
        return view('produit', compact('produit'));
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
            'designation'=>'required',
            'quantite'=>'required',
            'category_id'=>'required',       
        ]);

        \DB::table('produit')->insert([
            'designation'=>$request->designation,
            'quantite'=>$request->quantite,
            'category_id'=>$request->category_id,
        ]);

        return \redirect()->route('produit')->with('message','Inserer avec success');
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
        $data = \DB::select("SELECT * FROM produit WHERE id= ?", [$id]);
        $produit = $data[0];
        return view('produit', compact('produit'));
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
        \DB::update("UPDATE produit set designation = ?, quantite = ?, category_id = ? WHERE id= ? ", [$request->designation,$request->quantite,$request->category_id,$request->id]);
        return \redirect()->route('produit')->with('message','modification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::delete("DELETE FROM produit WHERE id= ?", [$id]);
        return \redirect()->route('produit')->with('message','suppression reussi avec succes');
    }
}
