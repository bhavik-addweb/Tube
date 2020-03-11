<?php

namespace App\Http\Controllers;
use App\like;
use App\Crud;
use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class likecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Crud::join('likes', 'sample_data.id', '=', 'likes.id') 
        ->select('likes.lid','sample_data.id','sample_data.vname', 'sample_data.vdes','sample_data.cat_id','sample_data.uid','sample_data.image','sample_data.video')
        ->where('likes.uid', '=', Auth::user()->id) 
        ->get();
        $data1 = categories::all();
        return view('liked',compact('result','data1'));
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
            'id' => $request->id,
            'uid' => Auth::user()->id
        );
        like::firstOrCreate($form_data);
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
        $data=DB::table('likes')
        ->where(['uid'=>Auth::user()->id, 'id'=>$id])
        
        ->delete();

        return back()->withInput();
    }
}
