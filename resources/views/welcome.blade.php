<!-- @extends('layouts.master')
@section('title', 'Home Page')

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
            <img src="{{url('/img/home/food.jpg')}}"; class="d-block w-100 h-50" alt="...">
        </div>

        <div class="carousel-item">
            <img src="{{url('/img/home/food.jpg')}}"; class="d-block w-100 h-50" alt="...">
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
</div>

<div class="row">
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <iframe width="360" height="205" src="https://www.youtube.com/embed/v0nmI_stsZk" frameborder="0" allowfullscreen></iframe>
                </a>
                <h3>
                    <a href="portfolio-item.html">Tutorial 1</a>
                </h3>

            </div>
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                  <iframe width="360" height="205" src="https://www.youtube.com/embed/82-Oux77Ls4" frameborder="0" allowfullscreen></iframe>
                </a>
                <h3>
                    <a href="portfolio-item.html">Tutorial 2</a>
                </h3>

            </div>
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                  <iframe width="360" height="205" src="https://www.youtube.com/embed/8_ZrJ42MC94" frameborder="0" allowfullscreen></iframe>
                </a>
                <h3>
                    <a href="portfolio-item.html">Tutorial 3</a>
                </h3>

            </div>
        </div>


@endsection
@section('Footer')
 -->