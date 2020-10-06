@extends('frontendtemplate')
@section('title','home');

@section('content')
  <!-- Intro section -->
  <section class="intro-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <img src="{{ asset('frontendtemplate/instylr/img/intro-img.jpg')}}" alt="">
        </div>
         <div class="container">
  <div class="carousel slide carousel-fade" data-ride="curousel" id="myCarousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/powder-cat.jpg" class="d-block d-md-block w-200 h-50" alt="hello" alt="Responsive image">
    </div>

    <div class="carousel-item">


      <img src="img/bg1e.jpg" class="d-block d-md-block w-200 h-50" alt="Responsive image">
    </div>

    <div class="carousel-item">
      <img src="img/lip-cat.jpg" class="d-block d-md-block w-200 h-50"alt="Responsive image" alt="Responsive image">
    </div>
  </div>
  <a href="#myCarousel" class="carousel-control-prev" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
      </div>
    </div>
  </section>
  <!-- Intro section end-->

  
@endsection
