
@extends('layouts.master')

@show
@section('content')
<div class="container">
     <h1><b>{{$healthy->title}}</b></h1>
     
     <hr>
     <div class="healthyContainer">
          <div class="image" align="center">
               <img width="700px" height="400px" src="{{asset($healthy['image'])}}"/>
          </div>
          <div>
               <p class="description"><h3><b>Description</b></h3></p>
               <p>{!!$healthy->description!!}</p>
          </div>
          
     </div>

</div>
@csrf
@endsection
@show
