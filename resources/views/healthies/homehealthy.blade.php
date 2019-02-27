@extends('layouts.master')
@section('title','Healthy')
@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
<!-- <div class="container"> -->
	<div class="col-md-12">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="{{url('/img/image1.jpg')}}" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{url('/img/image2.jpg')}}" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{url('/img/image3.jpg')}}" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>


		
	<!-- </div> -->
	
</div>

<h1> <b>Healthies</b> </h1>
          <hr>
          <div class="container">
               <div class="row">

               @foreach($healthy as $healthy)
            
                    <div class="healthy col-sm-4">
                         <div class="image">

                              <a href="{{ route('homehealthy.show',['id'=>$healthy->id]) }}">
                              <img class="card-img-top" src="{{asset($healthy['image'])}}" >
                              </a>
                         </div> 
                         <div class="meta">
                              <p class="title"><h4><b>{{$healthy->title}}</b></h4></p>
                              <p class="description"><h5>{!!str_limit($healthy->description,62)!!}</h5></p>
                              <hr>
                         </div>
                    </div>
               @endforeach
               </div>
          </div>

     </div>
@endsection