<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
use Image;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drink::all();

        return view('drink.index', compact('drinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drink.create');
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
            'drink_name'=>'required',
            'price'=>'required',
            'photo'=>'required',
            
        ]);
 
        $drink = new Drink();
        $drink->drink_name=$request->get('drink_name');
        $drink->price=$request->get('price');

        if($request->hasFile('photo')){
            $drink_img=$request->file('photo');
            $fileName=time().'.'.$drink_img->getClientOriginalExtension();
            Image::make($drink_img)->resize(150,150)->save(public_path('/img/drink_img/'.$fileName));
            $drink->photo=$fileName;
        }
            
        $drink->save();
        return redirect('/drinks')->with('success','Drink has been added to menu');
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
        $drink = Drink::find($id);

        return view('drink.edit', compact('drink'));
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
        'drink_name'=>'required',
        'price'=>'required',
        'photo'=>'',
        ]);

        $drink = Drink::find($id);
        $drink->drink_name= $request->get('drink_name');
        $drink->price= $request->get('price');

        if($request->hasFile('photo')){
            $drink_img=$request->file('photo');
            $fileName='/img/drink_img/'.time().'.'.$drink_img->getClientOriginalExtension();
            Image::make($drink_img)->resize(150,150)->save(public_path($fileName));
            $drink->photo=$fileName;
        }
     
       $drink ->save();

      return redirect('/drinks')->with('success', 'Drink has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drink = Drink::find($id);
        $drink->delete();

        return redirect('/drinks')->with('success', 'Drink has been deleted Successfully');
    }
}
