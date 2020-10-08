@extends('frontendtemplate')
@section('title','allcategory')

@section('content')

<div class="container my-5 text-center">
  <h2>Category Selection</h2>
  <hr class="divider">
</div>
<div class="container">
      <div class="carousel slide carousel-fade" data-ride="curousel" id="myCarousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('frontendtemplate/instylr/img/powder-cat.jpg')}}" class="d-block d-md-block w-200 h-50" alt="hello" alt="Responsive image">
          </div>

          <div class="carousel-item">


            <img src="{{ asset('frontendtemplate/instylr/img/bg1e.jpg')}}" class="d-block d-md-block w-200 h-50" alt="Responsive image">
          </div>

          <div class="carousel-item">
            <img src="{{ asset('frontendtemplate/instylr/img/lip-cat.jpg')}}" class="d-block d-md-block w-200 h-50"alt="Responsive image" alt="Responsive image">
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

<hr class="divider">


<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-img">

          <img src="{{ asset('frontendtemplate/instylr/img/allb.jpg')}}" class="img-fluid"class="card-img-top border image">
          <img src="{{ asset('frontendtemplate/instylr/img/rainy.jpg')}}" class="img-fluid"class="card-img-top border image">
          <div class="view-detail" data-target="#item-detail" data-toggle="modal">
            <span class="fa-stack fa-lg">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
            </span>
          </div>
        </div>
        <div class="card-body text-center">
          <p class="text-dark">Bella</p>
          <hr class="item-divider">
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#bella" aria-expanded="false" aria-controls="bella">Highlight</button>
          <div class="collapse" id="bella">
            <div class="card card-body">
             <h5>Bella be a star</h5>This is healthy/beauty cosmetics products in myanmar.
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="col-md-3">
      <div class="card">
        <div class="card-img">
          <img src="{{ asset('frontendtemplate/instylr/img/saibg.jpg')}}" class="img-fluid"class="card-img-top border image">
          <img src="{{ asset('frontendtemplate/instylr/img/lipstickP.jpg')}}" class="img-fluid"class="card-img-top border image">
          <!-- <img src="{{ asset('frontendtemplate/instylr/img/About.jpg')}}" class="img-fluid"class="card-img-top border image"> -->
          <div class="view-detail" data-target="#item-detail" data-toggle="modal">
            <span class="fa-stack fa-lg">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
            </span>
          </div>
        </div>
        <div class="card-body text-center">
          <p class="text-dark">Sai Cosmetics</p>
          <hr class="item-divider">
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#sai" aria-expanded="false" aria-controls="sai">Highlight</button>
          <div class="collapse" id="sai">
            <div class="card card-body">
              <h5>Sexy & Intelligent</h5>Beauty, Cosmetics and Personal Care
            </div>
          </div>
        </div>
      </div>
    </div>





    <div class="col-md-3">
      <div class="card">
        <div class="card-img">
          <img src="{{ asset('frontendtemplate/instylr/img/drf.jpg')}}" class="img-fluid"class="card-img-top border image">
          <img src="{{ asset('frontendtemplate/instylr/img/dr.jpg')}}" class="img-fluid"class="card-img-top border image">
          <div class="view-detail" data-target="#item-detail" data-toggle="modal">
            <span class="fa-stack fa-lg">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
            </span>
          </div>
        </div>
        <div class="card-body text-center">
          <p class="text-dark">Dr.Face</p>
          <hr class="item-divider">
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#face" aria-expanded="false" aria-controls="face">Highlight</button>
          <div class="collapse" id="face">
            <div class="card card-body">
              <h5>Dr.Face Skin Care Products</h5>Skincare recommended products in myanmar
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-3">
      <div class="card">
        <div class="card-img">
          <img src="{{ asset('frontendtemplate/instylr/img/kisshh.jpg')}}" class="img-fluid"class="card-img-top border image">
          <img src="{{ asset('frontendtemplate/instylr/img/yonhh.jpg')}}" class="img-fluid"class="card-img-top border image">
          <!-- <img src="{{ asset('frontendtemplate/instylr/img/hearty.jpg')}}" class="img-fluid"class="card-img-top border image"> -->
          <div class="view-detail" data-target="#item-detail" data-toggle="modal">
            <span class="fa-stack fa-lg">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
            </span>
          </div>
        </div>
        <div class="card-body text-center">
          <p class="text-dark">Hearty Heart</p>
          <hr class="item-divider">
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#hh" aria-expanded="false" aria-controls="hh">Highlight</button>
          <div class="collapse" id="hh">
            <div class="card card-body">
             <h5>Cute and Fun</h5>Healthy/Beauty Cute Products in myanmar 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
