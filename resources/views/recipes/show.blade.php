@extends('layouts.master')
@section('title', 'Recipe List')

@section('Header')
@show
@section('content')
<div class="container">
     <h1><b>{{$recipe->title}}</b></h1>
     <h4><span> ready in {{$recipe->duration}}</span></h4>
     <hr>
     <div class="recipeContainer">
          <div class="image" align="center">
               <img width="700px" height="400px" src="{{asset($recipe['image'])}}"/>
          </div>
          <br>
          <div>
               <p class="description"><h3><b>Description</b></h3></p>
               <hr>
               <p><h5>{!!$recipe->description!!}</h5></p>
          </div>
          <br>
          <div>
               <p class="ingredients"><h3><b>Ingredients</b></h3></p>
               <hr>
               <hr>
               <p><h5>{!!$recipe->ingredients!!}</h5></p>
          </div>
          <br>
          <div>
               <p class="preparation"><h3><b>Preparation</b></h3></p>
              <hr>
               <p><h5>{!!$recipe->preparation!!}</h5></p>
          </div>
     </div>

</div>
@csrf

@endsection
@section('Footer')
@show