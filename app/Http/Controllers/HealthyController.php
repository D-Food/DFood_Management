<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Healthy;
use Image;


class HealthyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$healthies = Healthy::all();
        $healthies = Healthy::paginate(3);

        return view('healthies.index', compact('healthies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('healthies.create');
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
        'title'=>'required',
        'description'=> 'required',
        'image' => 'required'
      ]);
        $healthy = new Healthy();
       $healthy->title =$request->get('title');
        $healthy->description =$request->get('description');
       

       if($request->hasFile('image')){
            $healthy_img = $request->file('image');
            $fileName = '/img/healthy_img/'.time().'.'.$healthy_img->getClientOriginalExtension();
            Image::make($healthy_img)->resize(150,150)->save(public_path($fileName));
            $healthy->image=$fileName;
        }
      // $healthy = new Healthy([
      //   'title' => $request->get('title'),
      //   'description'=> $request->get('description'),
      //   'image'=> $request->get('image')
      // ]);
      $healthy->save();
      return redirect('/healthies')->with('success', 'Healthy has been added');
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
        $healthy = Healthy::find($id);

        return view('healthies.edit', compact('healthy'));
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
        $request->validate([
        'title'=>'required',
        'description'=> 'required',
        'image'=> '',
        
      ]);

      $healthy = Healthy::find($id);
      $healthy->title = $request->get('title');
      $healthy->description = $request->get('description');
      
      if($request->hasFile('image')){
            $healthy_img = $request->file('image');
            $fileName = '/img/healthy_img/'.time().'.'.$healthy_img->getClientOriginalExtension();
            Image::make($healthy_img)->resize(150,150)->save(public_path($fileName));
            $healthy->image=$fileName;
        }

     
      $healthy->save();

      return redirect('/healthies')->with('success', 'Healthy has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $healthy = Healthy::find($id);
        $healthy->delete();

        return redirect('/healthies')->with('success', 'Healthy has been deleted Successfully');
    }
}
