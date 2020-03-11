<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\comments;
use App\contact;
use App\sample_data;

class adcomcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data4 = User::join('contact', 'users.id', '=', 'contact.uid')
        
        ->select('users.name', 'users.email','contact.message','contact.updated_at')
        ->get();
        $result = User::join('comments', 'users.id', '=', 'comments.uid')
        ->join('sample_data', 'sample_data.id', '=', 'comments.vid')
        ->select('comments.id','users.name', 'users.email','comments.comment','comments.updated_at','sample_data.vname','sample_data.vdes')
        ->get();
        $result1=contact::count();
        return view('adcom',compact('result','data4','result1'));
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
        $data = comments::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Data is successfully deleted');
    }
}
