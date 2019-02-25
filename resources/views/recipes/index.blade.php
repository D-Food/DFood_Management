@extends('layouts.master')
@section('title', 'Recipe List')

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
      <h1 align="center">Recipe List</h1><br>
      <div class="jumbotron">
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Duration</td>
       
          <td>Image</td>
         
          
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($recipe as $recipe)
        <tr>
            <td>{{$recipe->id}}</td>
            <td>{{$recipe->title}}</td>
            <td>{{$recipe->duration}}</td>
           
            <td><img width="100px" height="100px" src="{{asset($recipe['image'])}}"></td>
            
            <td><a href="{{ route('recipes.edit',$recipe->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ route('recipes.destroy', $recipe->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-dark" type="submit">DELETE</button>
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