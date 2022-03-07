<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \DB::select("SELECT * FROM users order by id DESC");
        return view('users', compact('user'));
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',                   
        ]);

        \DB::table('users')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return \redirect()->route('users.index')->with('message','Inserer avec success');
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
        $data = \DB::select("SELECT * FROM users WHERE id= ?", [$id]);
        $user = $data[0];
        return view('users', compact('user'));
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
       $data = \DB::update("UPDATE users set name = ?, email = ?, password = ? WHERE id= ? ", [$request->name,$request->email,$request->password,$request->id]);
        return \redirect()->route('users.index')->with('message','modification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::delete("DELETE FROM users WHERE id= ?", [$id]);
        return \redirect()->route('users.index')->with('message','suppression reussi avec succes');
    }
}
