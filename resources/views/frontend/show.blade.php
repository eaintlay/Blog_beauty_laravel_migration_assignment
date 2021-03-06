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
        <div class="col-lg-7 intro-text">
          <span>Aenean quis velit pulvinar,</span>
          <h2>"I firmly believe that with the right footwear one can rule the world."</h2>
          <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. Vestibulum nec nibh eu nisi rutrum iaculis. Pellentesque placerat sit amet leo in vestibu-lum. Suspendisse quam neque, rutrum vel scelerisque eu</p>
          <a href="#" class="site-btn sb-dark">Read More <i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- Intro section end-->

  
@endsection
