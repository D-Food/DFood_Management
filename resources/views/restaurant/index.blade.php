@extends('layouts.master')
@section('title', 'Restaurant Register')

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
      <h2 align="center">Restaurant Infomation</h2><br>
      <!-- <div class="jumbotron"> -->
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Restaurant</td>
          <td>Service</td>
          <td>Email</td>
          <td>Phone number</td>
          <td>Address</td>
          <td>Password</td>
          <td>Photo</td>
          
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($restaurants as $restaurant)
        <tr>
            <td>{{$restaurant->id}}</td>
            <td>{{$restaurant->rest_name}}</td>
            <td>{{$restaurant->service}}</td>
            <td>{{$restaurant->email}}</td>
            <td>{{$restaurant->phone_number}}</td>
            <td>{{$restaurant->address}}</td>
            <td>{{$restaurant->password}}</td>
            <td><img width="100px" height="100px" src="{{asset($restaurant['photo'])}}"></td>
            
            <td><a href="{{ route('restaurants.edit',$restaurant->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('restaurants.destroy', $restaurant->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
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