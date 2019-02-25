@extends('layouts.master')
@section('title', 'Order Information')

@section('Header')
@show
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="container">
      <h1 align="center">Customer's Order</h1><br>
      <div class="jumbotron">
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Order_ID</td>
          <td>Phone Number</td>
          <td>Order Option</td>
          <td>Order Date</td>
          <td>Requested Time</td>
         
          
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($order as $order)
        <tr>
            <td>{{$order->order_id}}</td>
            <td>{{$order->phonenumber}}</td>
            <td>{{$order->option}}</td>
            <td>{{$order->order_date}}</td>
            <td>{{$order->requested_time}}</td>
            <td>
                <form action="{{ route('order.destroy', $order->order_id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-warning" type="button">View Cart</button>
                  <button class="btn btn-dark" type="submit">Done</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
</div>
</div>

@endsection
@section('Footer')
@show