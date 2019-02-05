<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use Image;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $foods = Food::all();

        return view('food.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('food.create');
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
            'food_name'=>'required',
            'price'=>'required',
            'photo'=>'required',
            
        ]);
        $food = new Food();
        $food->food_name=$request->get('food_name');
        $food->price=$request->get('price');

        if($request->hasFile('photo')){
            $food_img=$request->file('photo');
            $fileName='/img/food_img/'.time().'.'.$food_img->getClientOriginalExtension();
            Image::make($food_img)->resize(150,150)->save(public_path($fileName));
            $food->photo=$fileName;
        }
        // dd($food);
        $food->save();
        return redirect('/foods')->with('success','Food has been added to menu');
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
        $food = Food::find($id);

        return view('food.edit', compact('food'));
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
        'food_name'=>'required',
        'price'=>'required',
        'photo'=>'required',
        ]);

        $food = Food::find($id);
        $food->food_name= $request->get('food_name');
        $food->price= $request->get('price');

        if($request->hasFile('photo')){
            $food_img=$request->file('photo');
            $fileName='/img/food_img/'.time().'.'.$food_img->getClientOriginalExtension();
            Image::make($food_img)->resize(150,150)->save(public_path($fileName));
            $food->photo=$fileName;
        }
        $food ->save();
        return redirect('/foods')->with('success', 'Food has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();

        return redirect('/foods')->with('success', 'Food has been deleted Successfully');
    }
}
