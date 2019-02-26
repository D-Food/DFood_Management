@extends('layouts.master')
@section('title', 'Recipe')

@section('Header')
@show

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
                         <img src="{{url('/img/recipe/slides/dessert1.jpg')}}" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                         <img src="{{url('/img/recipe/slides/dessert2.jpg')}}" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                         <img src="{{url('/img/recipe/slides/food5.jpg')}}" class="d-block w-100 h-50" alt="...">
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
          <h1> <b>Recipes</b> </h1>
          <hr>
          <div class="container">
               <div class="row">

               @foreach($recipe as $recipe)
            <!-- <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="card-img-top" src="{{asset($recipe['image'])}}" alt="Card image cap" width="10%" height="60%">
                    @csrf
                </a>
            </div> -->
                    <div class="recipe col-sm-4">
                         <div class="image">
                              <a href="{{ route('recipes.show',['id'=>$recipe->id]) }}">
                              <img class="card-img-top" src="{{asset($recipe['image'])}}" >
                              </a>
                         </div> 
                         <div class="meta">
                              <p class="title"><h4><b>{{$recipe->title}}</b></h4></p>
                              <p class="description"><h5>{!!str_limit($recipe->description,62)!!}</h5></p>
                              <hr>
                         </div>
                    </div>
               @endforeach
               </div>
          </div>
     </div>
@endsection
@section('Footer')
@show