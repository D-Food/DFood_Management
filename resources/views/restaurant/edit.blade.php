@extends('layouts.master')
@section('title', 'Restaurant Information')

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
    Edit Restaurant
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
      <form method="post" action="{{ route('restaurants.update', $restaurant->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Restaurant Name:</label>
          <input type="text" class="form-control" name="rest_name" value={{ $restaurant->rest_name }} />
        </div>
        <div class="form-group">
          <label for="price">Service :</label>
          <input type="text" class="form-control" name="service" value={{ $restaurant->service }} />
        </div>
        <div class="form-group">
          <label for="quantity">Email:</label>
          <input type="text" class="form-control" name="email" value={{ $restaurant->email }} />
        </div>
        <div class="form-group">
          <label for="quantity">Phone number:</label>
          <input type="text" class="form-control" name="phone_number" value={{ $restaurant->phone_number}} />
        </div>
        <div class="form-group">
          <label for="quantity">Address:</label>
          <input type="text" class="form-control" name="address" value={{ $restaurant->address}} />
        </div>
        <div class="form-group">
          <label for="quantity">Password:</label>
          <input type="text" class="form-control" name="password" value={{ $restaurant->password}} />
        </div>         
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection