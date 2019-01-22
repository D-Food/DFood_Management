@extends('layouts.master')
@section('title', 'Restaurant Register')

@section('Header')
@show

@section('content')
	<div class="container">
			<h1 align="center">Register as Restaurant</h1><br>
			<div class="jumbotron">
		<hr>
		<div class="form-group row">
	    	<label for="name" class="col-sm-2 col-form-label" >Restaurant Name</label>
		    	<div class="col-sm-10">
		      		<input type="name" class="form-control" name="name" id="name" placeholder="Restaurant Name" required>
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
	  				<input type="phone number" class="form-control" name="phone_number" id="phone number" placeholder="phone number" required>
	  			<br></div>

	  		<label for="address" class="col-sm-2 col-form-label" >Address</label>
				<div class="col-sm-10">
	  				<input type="address" class="form-control" name="phone_number" id="phone number" placeholder="address" required>
	  			<br></div>

	  		<label for="password" class="col-sm-2 col-form-label" >Password</label>
				<div class="col-sm-10">
	  				<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
	  			<br></div>

	  		<label for="choose" class="col-sm-2 col-form-label" >Logo</label>
				<div class="col-sm-10">
	  				<input type="file" name="Logo" id="choose" required>
	  			</div>
	  		<div>
	  		<br>
			<a href="#" class="btn btn-warning">Register</a>
			<a href="#" class="btn btn-dark">Cancel</a></div>
		</div>
	</div>
</div>
@endsection
@section('Footer')
@show
