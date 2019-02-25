<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
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
            'phonenumber'=>'required',
            'option'=>'required',
            'order_date'=>'required',
            'requested_time'=>'required'
            
        ]);
        $order = new Order([
            'phonenumber'=> $request->get('phonenumber'),
            'option'=> $request->get('option'),
            'order_date'=> $request->get('order_date'),
            'requested_time'=> $request->get('requested_time')  
            
        ]);
        $order->save();
        return redirect('/order')->with('success','Order has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $order_id
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $order_id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($order_id)
    {
        $order = Order::find($order_id);
        $order->delete();

        return redirect('/order')->with('success', 'Order Information has been deleted Successfully');
    }
}