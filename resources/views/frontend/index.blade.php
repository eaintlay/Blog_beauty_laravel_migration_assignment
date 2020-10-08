@extends('frontendtemplate')
@section('title','home')

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
          <h2>"Bigger Isn’t Always Better When It Comes To Beauty Blog Examples"</h2>
          <p>Larger bloggers, vloggers, and celebrities have often grown on other platforms to an extent that their blog only serves to promote their other channels or products. Many are outdated and neglected. And while they may still generate a good amount of traffic due to their name alone, they don’t always serve as the best source of inspiration.</p>
          <a href="{{route('readmore')}}" class="site-btn sb-dark">Read More <i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- Intro section end-->

  
@endsection
