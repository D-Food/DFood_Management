@extends('layouts.master')
@section('title', 'Upload Food Menu')
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
      <h1 align="center">Your food menu</h1><br>
      <div class="jumbotron">
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Food Name</td>
          <td>Price</td>
          <td>Photo</td>
          
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($foods as $food)
        <tr>
            <td>{{$food->id}}</td>
            <td>{{$food->food_name}}</td>
            <td>{{$food->price}}</td>
            <td><img width="100px" height="100px" src="{{asset($food['photo'])}}"></td>
            
            <td><a href="{{ route('foods.edit',$food->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('foods.destroy', $food->id)}}" method="post">
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