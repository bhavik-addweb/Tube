<?php

namespace App\Http\Controllers;
use App\Crud;
use App\User;
use App\categories;
use App\comments;
use App\playlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Validator;
class CrudsController extends Controller
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
      return view('index', compact('data','data1'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data1 = categories::all();

        
        return view('create',compact('data1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $request->validate([
            'vname' => 'required',
            'vdes' => 'required',
            'image' => 'image|max:2048',
             
            ]);
            
            $image = $request->file('image');
            $video =$request->file('video');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $new_name1= rand() . '.' . $video->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $video->move(public_path('videos'), $new_name1);
            $form_data = array(
            'vname' => $request->vname,
            'vdes' => $request->vdes,
            'cat_id'=>$request->cat_id,
            'uid'=>$request->id,
            'image' => $new_name,
            'video' => $new_name1
            );
            
            Crud::create($form_data);
            
            
            
            return redirect('crud')->with('success', 'Data Added successfully.');
            }
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
        $result2=playlist::where('play.uid', '=', Auth::user()->id)->get();
        return view('view', compact('data','data1','data2','query','query1','result','result1','result2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('edit', compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'vname'    =>  'required',
                'vdes'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'vname'    =>  'required',
                'vdes'     =>  'required'
            ]);
        }

        $form_data = array(
            'vname'    =>  $request->vname,
            'vdes'     =>  $request->vdes,
            'image'    =>  $image_name
        );

        Crud::whereId($id)->update($form_data);
        return redirect('vid')->with('success', 'Data is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();
        return redirect('vid')->with('success', 'Data is successfully deleted');
    }
}
