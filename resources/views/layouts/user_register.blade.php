@extends('layouts.master')
@section('title', 'User Register')

@section('Header')
@show

@section('content')
	<div class="container">
			<h1 align="center">Register as Member</h1><br>
			<div class="jumbotron">
		<div class="form-group row">
	    	<label for="name" class="col-sm-2 col-form-label" >Username</label>
		    	<div class="col-sm-10">
		      		<input type="name" class="form-control" name="name" id="name" placeholder="Username" required>
		      	<br></div>

	      	<label for="gender" class="col-sm-2 col-form-label">Gender</label>
				<div class="col-sm-10">
					Male <input name="gender" type="radio" value="Male"/>
	            	Female <input name="gender" type="radio" value="Female"/>
				<br></div>

			<label for="Email" class="col-sm-2 col-form-label" >Email</label>
					<div class="col-sm-10">
		  				<input type="email" class="form-control" name="email" id="email" placeholder="email" required>
		  			<br></div>

	  		<label for="Phone number" class="col-sm-2 col-form-label" >Phone number</label>
				<div class="col-sm-10">
	  				<input type="phone number" class="form-control" name="phone_number" id="phone number" placeholder="phone number" required>
	  			<br></div>

	  		<label for="password" class="col-sm-2 col-form-label" >Password</label>
				<div class="col-sm-10">
	  				<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
	  			<br></div>

	  		<label for="choose" class="col-sm-2 col-form-label" >Profile</label>
				<div class="col-sm-10">
	  				<input type="file" name="profile" id="choose" required>
	  			</div>
	  		<div>
	  		<br>
			<a href="#" class="btn btn-light bg-warning">Register</a>
			<a href="#" class="btn btn-dark">Cancel</a></div>
		</div>
	</div>
</div>
@endsection
@section('Footer')
@show
