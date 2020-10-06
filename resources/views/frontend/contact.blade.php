@extends('frontendtemplate')
@section('title','contact');

@section('content')
  
  <!-- Contact page -->
  <section class="page-warp contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-title">
            <span>beauty, event, makeup</span>
            <h2>Get in touch</h2>
          </div>
          <form class="comment-form">
            <div class="row">
              <div class="col-md-6">
                <input type="text" placeholder="Your Name">
              </div>
              <div class="col-md-6">
                <input type="text" placeholder="Your Email">
              </div>
              <div class="col-md-12">
                <input type="text" placeholder="Subject">
                <textarea placeholder="Message"></textarea>
                <a href="{{route('aboutus')}}"><button class="site-btn sb-dark">SEND <i class="fa fa-angle-double-right"></i></button></a>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48359.89302507648!2d-73.95762813994347!3d40.75117343692072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2592bc7bab159%3A0x56156cc4c5ee8e31!2sLong+Island+City%2C+Queens%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1561474745218!5m2!1sen!2sbd" style="border:0" allowfullscreen></iframe>
          </div>
          
        <div class="contact-text">
          <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. </p>
          <ul>
            <li>Main Str, no 23, New York</li>
            <li>+546 990221 123</li>
            <li>fashion@contact.com</li>
          </ul>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact page end-->




  
 
@endsection
