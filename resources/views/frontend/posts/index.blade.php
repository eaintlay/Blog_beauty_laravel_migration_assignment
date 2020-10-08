@extends('frontendtemplate')
@section('title', 'Posts')

@section('content')
<style type="text/css">

</style>


<section class="page-warp contact-page">

  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">Beauty Posts<br>For Everyone</h2>
              <p>Keep your blog design fresh as you, your audience, and trends grow.</p>

              <img src="{{ asset('frontendtemplate/instylr/img/intro-img.jpg')}}" class="img-thumbnail" alt="Responsive image">
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
</section>


    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="post-preview">
        <a href="post.html">
          <h2>Posts</h2>
          <div class="posts-container">
            <!-- @if (count($posts) > 0) -->
            @foreach($posts as $post)
            <div class="post">


             <!-- <a href="$posts/{{$post->id}}"> -->
              <!-- <div class="post_detail" style="background: url('storage/details/{{$post->post_detail}}');">{{$post->post_detail}}</div> -->
              <p>{{$post->post_detail}}</p>
              <p>{{$post->post_name}}</p>
              <img src="{{$post->photo}}" class="img-thumbnail" alt="Responsive image">
            </a>



          </div>
          @endforeach
         <!--  @else
          <div class="no-posts">
           <p>There are no posts to display, start adding posts to show something.</p>
         </div>
         @endif -->


       </div>
    </a>
  </div>
</div>

@endsection

