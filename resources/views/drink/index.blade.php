@extends('layouts.master')
@section('title', 'Drink Menu')
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
      <h1 align="center">Your Drink menu</h1><br>
      <div class="jumbotron">
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Drink Name</td>
          <td>Price</td>
          <td>Photo</td>
         
          
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($drinks as $drink)
        <tr>
            <td>{{$drink->id}}</td>
            <td>{{$drink->drink_name}}</td>
            <td>{{$drink->price}}</td>
            <td><img width="100px" height="100px" src="{{asset($drink['photo'])}}"></td>
            
            <td><a href="{{ route('drinks.edit',$drink->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('drinks.destroy', $drink->id)}}" method="post">
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