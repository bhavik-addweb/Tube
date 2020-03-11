<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscribe;
use App\User;
use App\categories;

use Illuminate\Support\Facades\Auth;
class subscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = User::join('subscribe', 'users.id', '=', 'subscribe.uid') 
        ->select('subscribe.uid','subscribe.id','subscribe.usid','users.name', 'users.email','subscribe.updated_at')
        ->where('usid', '=', Auth::user()->id) 
        ->get();
        $data1 = categories::all();
        return view('subs',compact('result','data1'));
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
            'uid' => $request->uid,
            'usid' =>Auth::user()->id
        );
        subscribe::firstOrCreate($form_data);
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
        $data = subscribe::findOrFail($id);
        $data->delete();
        return redirect('subs')->with('success', 'Data is successfully deleted');

    }
}
