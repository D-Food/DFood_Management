@extends('layouts.master')
@section('title', 'Home Page')

<!-- @section('Header')
@show -->

@section('content')
<div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{url('/img/home/food.jpg')}}"; class="d-block w-100 h-50" alt="...">
        </div>

        <div class="carousel-item">
            <img src="{{url('/img/home/drink.jpg')}}"; class="d-block w-100 h-50" alt="...">
        </div>

        <div class="carousel-item">
            <img src="{{url('/img/home/num.jpg')}}"; class="d-block w-100 h-50" alt="...">  
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
</div><br>

<div class="col-lg-12">
    <div class="breadcrumb">
        <h4>Restaurants</h4>
    </div>
</div><br>

<div class="container">
        <div class="row">
            @foreach($restaurants as $restaurant)
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="card-img-top" src="{{asset($restaurant['photo'])}}" alt="Card image cap" width="10%" height="60%">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

       

@endsection
@section('Footer')
