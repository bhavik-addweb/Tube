<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\myplaylist;
use App\categories;
use App\Crud;
use Illuminate\Support\Facades\Auth;
class myplaylistcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $form_data = array(
            'pid' => $request->pid,
            'vid' => $request->vid,
            'uid' => Auth::user()->id
        );
        myplaylist::firstOrCreate($form_data);
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Crud::join('myplaylists', 'sample_data.id', '=', 'myplaylists.vid') 
        ->select('myplaylists.id','sample_data.id','sample_data.vname', 'sample_data.vdes','sample_data.cat_id','sample_data.uid','sample_data.image','sample_data.video')
        ->where('myplaylists.pid', '=', $id) 
        ->get();
        $data1 = categories::all();
        return view('playlistview',compact('result','data1'));
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
