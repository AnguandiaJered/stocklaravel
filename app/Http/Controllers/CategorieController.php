<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = \DB::select("SELECT * FROM category order by id DESC");
        return view('category', compact('categorie'));
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
            'designation'=>'required'         
        ]);

        \DB::table('category')->insert([
            'designation'=>$request->designation
        ]);

        return \redirect()->route('produit.index')->with('message','Inserer avec success');
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
        // $data = \DB::select("SELECT * FROM category WHERE id= ?", [$id]);
        // $categorie = $data[0];
        // return view('category', compact('categorie'));
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
        // \DB::update("UPDATE category set designation = ? WHERE id= ? ", [$request->designation,$request->id]);
        // return \redirect()->route('category')->with('message','modification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // \DB::delete("DELETE FROM category WHERE id= ?", [$id]);
        // return \redirect()->route('category')->with('message','suppression reussi avec succes');
    }
}
