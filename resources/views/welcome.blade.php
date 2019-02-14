
@extends("layouts.plantilla")

@section("cabecera")


<!--a href="{{URL::to('/')}}"><img src={{asset('img/foto.jpg')}} alt="Logo"></a>-->
@endsection



@section("infoGeneral")

<h1>inicio del sitio</h1>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="{{URL::to('/')}}"><img src={{asset('img/foto.jpg')}} alt="Logo"></a>
    </div>
    <div class="carousel-item">
    <a href="{{URL::to('/')}}"><img src={{asset('img/foto1.jpg')}} alt="Logo"></a>
    </div>
    <div class="carousel-item">
    <a href="{{URL::to('/')}}"><img src={{asset('img/foto3.jpg')}} alt="Logo"></a>
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




@endsection



@section("pie")


@endsection

