<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Home Page')</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
	<script type="text/javascript" src="{{url('js/app.js')}}"></script>
	@section('css')
	@show
</head>
<body>
@section('Header')
  <!-- <ul class="nav justify-content-end navbar navbar-light" style="background-color: #;"> -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
    <br><img src="{{url('/img/logo/logo.png')}}" width="100" height="100">
    </a>
 

  <nav class="navbar justify-content-center">
    <img src="{{url('/img/logo/all_day.png')}}" width="300" height="130">
  </nav>


  <ul class="nav justify-content-end navbar navbar-light" style="background-color: #;">
  	<li class="nav-item active">
      <br><a class="nav-link" href="#"><br><u><h4><br>Login</h4></u></a>
    </li>
    <li class="nav-item">
      <br><a class="nav-link" href="#"><br><u><h4><br>Register</h4></u></a>
    </li>
  </ul>
</nav>
  
	<nav class="navbar navbar-expand-lg navbar-light bg-warning" >
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Recipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Healthy Diet</a>
        </li>
      </ul>

			<form class="form-inline">
  			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  			<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
 			</form>
 		</div>
	</nav>
  



@section('content')
@show

@section('Footer')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNav"><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="text-light">Contact Us</h5><br>
            <p class="text-light">Phone : (855) 010 888 829 <br>Address : Street 310 (Phnom Penh) <br> Email :  nham_nham@gmail.com</p>
          </div>

          <hr class="clearfix w-100 d-md-none pb-3">
          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-light">Follow Us</h5><br>
            <div>
              <a href="https://www.facebook.com/"><img src="{{url('/img/social/fb.png')}}" width="30px"/></a>
              <a href="https://www.instagram.com/"><img src="{{url('/img/social/insta.png')}}" width="30px"/></a>
              <a href="https://www.youtube.com/"><img src="{{ url('/img/social/whatsapp.png')}}" width="30px"/></a>
              <a href="https://www.youtube.com/"><img src="{{ url('/img/social/uTube.png')}}" width="30px"/></a>
            </div>
          </div>

          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-light">About Us</h5><br>
            <p class="text-light">We are third year student of NIPTICT institue, majoring Computer Science and this is our first website. Hope you enjoy using this website. Thank you! </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<footer class="page-footer bg-warning">
  <div class="text-center">© 2019 Copyright
    <!-- <a href="http://niptict.edu.kh/"> info@nham.com</a> -->
  </div>
</footer>

</body>
</html>