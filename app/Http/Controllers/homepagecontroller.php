<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;
use App\User;
use App\categories;
use App\comments;
use App\playlist;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\DB;
class homepagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Crud::all();
        $data1 = categories::all();
      return view('homeindex', compact('data','data1'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = DB::table('likes')
        ->select(array( DB::raw('COUNT(lid) as likes')))
        ->where('id', '=', $id )
        ->get();
        $query1 = DB::table('comments')
        ->select(array( DB::raw('COUNT(id) as comments')))
        ->where('vid', '=', $id )
        ->get();
        $data = Crud::findOrFail($id);
        $data1 = categories::all();
        $result1 = User::join('sample_data', 'users.id','=','sample_data.uid')
        ->where('sample_data.id', '=', $id)
        ->select('users.name')
        ->first();
        $data2 = categories::join('sample_data', 'categories.id','=','sample_data.cat_id')
        ->where('sample_data.id', '=', $id)
        ->select('categories.category')
        ->first();
        $result = User::join('comments', 'users.id', '=', 'comments.uid')
        ->where('vid', '=', $id) 
        ->select('comments.id','comments.uid','users.name', 'users.email','comments.comment','comments.updated_at')
        ->get();
        
        return view('homeview', compact('data','data1','data2','query','query1','result','result1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
