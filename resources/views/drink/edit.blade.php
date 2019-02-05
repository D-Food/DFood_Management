@extends('layouts.master')
@section('title', 'Upload Drink Menu')

@section('Header')
@show
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Menu
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('drinks.update', $drink->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Drink Name:</label>
          <input type="text" class="form-control" name="drink_name" value={{ $drink->drink_name }} />
        </div>
        <div class="form-group">
          <label for="price">Price :</label>
          <input type="text" class="form-control" name="price" value={{ $drink->price }} />
        </div>

        <div class="form-group">
          <label for="choose" class="col-sm-2 col-form-label" >Photo:</label>
            <div class="col-sm-10">
            <input type="file" name="photo" id="choose" required value={{ $drink->photo }}></div>
          <br>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection