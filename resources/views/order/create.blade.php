@extends('layouts.master')
@section('title', 'Order Information')

@section('Header')
@show

@section('content')

     <div class="container col-md-6">
          <h3 align="center">Order Information</h3><br>
          <div class="jumbotron">
          <form method="post" action="{{ route('order.store')}}">
               @csrf
               <div class="form-group col-md-8">
                    <label for="exampleInputPhonenumber">Phone Number</label>
                    <input type="phonenumber" class="form-control" id="exampleInputPhonenumber" name="phonenumber" placeholder="Enter Phone Number" required>
               </div>
               <div class="form-group col-md-8">
                    <label for="inputOption">Order Options</label>
                    <select id="inputOption" class="form-control" name="option" required>
                         <option selected> Choose options provided</option>
                         <option value="Delivery"> Delivery</option>
                         <option value="Take_Out">Take Out</option>
                         <option value="Dine_in">Dine in</option>
                    </select>
               </div>
               <div class="form-group col-md-8">
                    <label for="exampleInputDate">Date</label>
                    <input type="date" class="form-control" id="exampleInputDate" placeholder="date" name="order_date" required>
               </div>
               <div class="form-group col-md-8">
                    <label for="exampleInputTime">Time</label>
                    <input type="time" class="form-control" id="exampleInputTime" name="requested_time" placeholder="Time" required>
               </div>
               <br>
               <div class="col-md-6 offset-md-8">
                    <button href="{{ url('order') }}" class="btn btn-warning" type="submit">Done</button>
                    <button href="#" class="btn btn-dark" type="reset">Cancel</button>
                   
               </div>
          </form>
          </div>
     </div>


@endsection
@section('Footer')
@show