<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\User;
use App\contact;
use Illuminate\Support\Facades\DB;
class admincatcontroller extends Controller
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
        $data = categories::all();
        $result1=contact::count();
        return view('admincatindex',compact('data','data4','result1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $result1=contact::count();
            
        $data4 = User::join('contact', 'users.id', '=', 'contact.uid')
        
        ->select('users.name', 'users.email','contact.message','contact.updated_at')
        ->get();
        return view('admincatinsert',compact('result1','data4'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('categories')->insert(
            array(
                   'category'=>$request->cat, 
                  
            )
        );
       
            
            return redirect('admin')->with('success', 'Data Added successfully.');
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
        $result1=contact::count();
            
        $data4 = User::join('contact', 'users.id', '=', 'contact.uid')
        
        ->select('users.name', 'users.email','contact.message','contact.updated_at')
        ->get();
        $data = categories::findOrFail($id);
        return view('admincatedit', compact('data','data4','result1'));
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
    
        $form_data = array(
            'category'    =>  $request->category,
            
        );
        categories::whereId($id)->update($form_data);
        return redirect('admin')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = categories::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Data is successfully deleted');
    }
}
