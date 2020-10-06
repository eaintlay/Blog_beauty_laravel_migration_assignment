@extends('layouts.app')
@section('title', 'Posts')

@section('content')
<section>
   <header>
      <h1>Beauty Posts<br>For Everyone</h1>
      <p>Keep your blog design fresh as you, your audience, and trends grow.</p>

      <img src="{{ asset('frontendtemplate/instylr/img/gg.jpg')}}" alt="">
   </header>
</section>

<section>
   <h2>Posts</h2>


   <div class="posts-container">
      @if (count($posts) > 0)
      @foreach($posts as $post)
      <div class="post">
         <a href="$posts/{{$post->id}}">
            <div class="post_detail" style="background: url('storage/details/{{$post->post_detail}}');"></div>
         </a>

         <p>{{$post->post_name}}</p>
         
      </div>
      @endforeach
      @else
      <div class="no-posts">
         <p>There are no posts to display, start adding posts to show something.</p>
      </div>
      @endif


   </div>
</section>

@endsection

