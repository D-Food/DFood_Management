@extends('layouts.master')
@section('title', 'Home Page')

@section('Header')
@show

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{url('/img/home/brooke.jpg')}}"class="d-block w-100 h-10" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{url('/img/home/pasta.jpg')}}" class="d-block w-100 h-10" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{url('/img/home/drink1.jpg')}}"class="d-block w-100 h-10" alt="...">
        </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>

@foreach($restaurants as $restaurant)
    <tr>
    	<td><img width="100px" height="100px" src="{{asset($restaurant['photo'])}}"></td>
    	<td>{{$restaurant->rest_name}}</td>
    </tr>
    
@endforeach


@endsection
@section('Footer')
@show