@extends('frontendtemplate')
@section('title','about');

@section('content')

  <!-- Portfolio section -->
  <section class="portfolio-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-7">
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/1.jpg')}}" alt="">
            <h4 src="{{route('blog')}}">See More</h4>
          </a>
        </div>
        <div class="col-lg-3 col-md-5">
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/2.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
        </div>
        <div class="col-lg-5 col-md-12">
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/3.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
        </div>
        <div class="col-lg-6 col-md-12">
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/4.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/5.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/7.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/6.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/8.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/9.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/10.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/11.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
        </div>
        <div class="col-lg-6 col-md-12">
          <a href="{{route('parts')}}" class="portfolio-item">
            <img src="{{ asset('frontendtemplate/instylr/img/portfolio/12.jpg')}}" alt="">
            <h4>See More</h4>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio section end-->

  
@endsection
