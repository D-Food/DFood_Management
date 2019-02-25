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
  <ul class="nav justify-content-end navbar navbar-light" style="background-color: #;">
    <li class="nav-item active">
          <a class="nav-link" href="#">Logins</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
      </ul>
  </ul>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Healthy Diet</a>
        </li>
        <li class="nav-item">
          <li class="nav-item">
          <a class="nav-link" href="#">Recipe</a>
        </li>
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
              <a href="https://www.youtube.com/"><img src="{{ url('/img/social/utube.png')}}" width="30px"/></a>
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
<footer class="page-footer bg-warning" ">
  <div class="text-center">© 2019 Copyright
    <!-- <a href="http://niptict.edu.kh/"> info@nham.com</a> -->
  </div>
</footer>

@yield('js')

</body>
</html>