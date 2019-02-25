@extends('layouts.master')
@section('title', 'Restaurant Register')

@section('Header')
@show

@section('content')

<div class="container">
	<h3 align="center">Register as Restaurant</h3><br>
	<div class="jumbotron">
	<hr>
	<form method="post" action="{{route('restaurants.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<label for="name" class="col-sm-2 col-form-label" >Restaurant Name</label>
    			<div class="col-sm-10">
      				<input type="name" class="form-control" name="rest_name" id="name" placeholder="Restaurant Name" required>
      			<br></div>

	      	<label for="service" class="col-sm-2 col-form-label" >Service</label>
				<div class="col-sm-10">
					<select class="form-control" name="service">
		  				<option>Food</option>
		  				<option>Drink</option>
		  				<option>Food & Drink</option>
					</select>
				<br></div>

			<label for="Email" class="col-sm-2 col-form-label" >Email</label>
					<div class="col-sm-10">
	  				<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
		  			<br></div>

	  		<label for="Phone number" class="col-sm-2 col-form-label" >Phone number</label>
				<div class="col-sm-10">
	  				<input type="phone_number" class="form-control" name="phone_number" id="phone number" placeholder="phone number" required>
	  			<br></div>

	  		<label for="address" class="col-sm-2 col-form-label" >Address</label>
				<div class="col-sm-10">
	  				<input type="address" class="form-control" name="address" id="address" placeholder="Address" required>
	  			<br></div>

	  		<label for="password" class="col-sm-2 col-form-label" >Password</label>
				<div class="col-sm-10">
	  				<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
	  			<br></div>

	  		<label for="choose" class="col-sm-2 col-form-label" >Photo</label>
				<div class="col-sm-10">
	  				<input type="file" value="photo" name="photo" id="choose" required></div>
	  			<br></div>
	  		
	  		<div>
	  		<br>
	  		<button type="submit" class="btn btn-warning">Register</button>
	  		<button type="submit" class="btn btn-dark">Cancel</button>
			</div>
		</div>
	</div>
</div>
</form>

@endsection
@section('Footer')
@show
 