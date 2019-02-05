<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();

        return view('restaurant.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurant.create');
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
            'rest_name'=>'required',
            'service'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'password'=>'required'
        ]);
        $restaurant = new Restaurant([
            'rest_name'=> $request->get('rest_name'),
            'service'=> $request->get('service'),
            'email'=> $request->get('email'),
            'phone_number'=> $request->get('phone_number'),
            'address'=> $request->get('address'),
            'password'=> $request->get('password')
        ]);
        $restaurant->save();
        return redirect('/restaurant')->with('success','Restaurant has been added');
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
        $restaurant = Restaurant::find($id);

        return view('restaurant.edit', compact('restaurant'));
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
        'rest_name'=>'required',
        'service'=>'required',
        'email'=>'required',
        'phone_number'=>'required',
        'address'=>'required',
        'password'=>'required'
      ]);

        $restaurant = Restaurant::find($id);
        $restaurant ->rest_name= $request->get('rest_name');
        $restaurant ->service= $request->get('service');
        $restaurant ->email= $request->get('email');
        $restaurant ->phone_number= $request->get('phone_number');
        $restaurant ->address=$request->get('address');
        $restaurant ->password=$request->get('password');
        
       $restaurant ->save();

      return redirect('/restaurants')->with('success', 'Restauranthas been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();

        return redirect('/restaurants')->with('success', 'Restaurant has been deleted Successfully');
    }
}
