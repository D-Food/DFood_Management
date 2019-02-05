@extends('layouts.master')
@section('title', 'Upload Food Menu')

@section('Header')
@show

@section('content')

<div class="container">
	<h1 align="center">Upload Food Menu</h1><br>
	<div class="jumbotron">
	<hr>
	<form method="post" action="/foods" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<label for="name" class="col-sm-2 col-form-label" >Food Name</label>
    			<div class="col-sm-10">
      				<input type="name" class="form-control" name="food_name" id="name" placeholder="Food Name" required>
      			<br></div>

			<label for="price" class="col-sm-2 col-form-label" >Price</label>
				<div class="col-sm-10">
	  				<input type="price" class="form-control" name="price" id="price" placeholder="price" required>
		  		<br></div>

		  	<label for="choose" class="col-sm-2 col-form-label" >Photo:</label>
				<div class="col-sm-10">
	  				<input type="file" value="photo" name="photo" id="choose" required></div>
	  			<br>	
	  	
	  		<div>
	  		<br>
	  			<button type="submit" class="btn btn-warning">Upload</button>
	  			<button type="submit" class="btn btn-dark">Cancel</button>
			</div>
		</div>
	</form>
	</div>
</div>


@endsection
@section('Footer')
@show
 