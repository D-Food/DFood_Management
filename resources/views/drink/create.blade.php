@extends('layouts.master')
@section('title', 'Upload Drink Menu')

@section('Header')
@show

@section('content')

<div class="container">
	<h1 align="center">Upload Drink Menu</h1><br>
	<div class="jumbotron">
	<hr>
	<form method="post" action="/drinks" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<label for="name" class="col-sm-2 col-form-label" >Drink Name</label>
    			<div class="col-sm-10">
      				<input type="name" class="form-control" name="drink_name" id="name" placeholder="Drink Name" required>
      			<br></div>

			<label for="price" class="col-sm-2 col-form-label" >Price</label>
					<div class="col-sm-10">
	  				<input type="price" class="form-control" name="price" id="price" placeholder="price" required>
		  			<br></div>

	  		<label for="choose" class="col-sm-2 col-form-label" >Photo</label>
				<div class="col-sm-10">
	  				<input type="file" value="photo" name="photo" id="choose" required>
	  			</div>
	  		<div>
	  		<br>
	  		<button type="submit" class="btn btn-warning">Upload</button>
	  		<button type="submit" class="btn btn-dark">Cancel</button>
			</div>
		</div>
	</div>
</div>
</form>

@endsection
@section('Footer')
@show
 