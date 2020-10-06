@extends('frontendtemplate')
@section('title', 'Posts')

@section('content')
<style type="text/css">

</style>


<section class="page-warp contact-page">
 <nav class="text text-right">
  <ul>
    <li><a href="{{route('index')}}">Laravel Posts</a></li>
  </ul>
  <ul>
    <li><a href="{{route('blog')}}">Posts</a></li>
    <li><a href="{{route('postcreate')}}">Create Post</a></li>
  </ul>
</nav>
<header>
  <h1>Beauty Posts<br>For Everyone</h1>
  <p>Keep your blog design fresh as you, your audience, and trends grow.</p>

  <img src="{{ asset('frontendtemplate/instylr/img/yonhh.jpg')}}" alt="">
</header>



 <h2>Posts</h2>


 <div class="posts-container">
  @if (count($posts) > 0)
  @foreach($posts as $post)
  <div class="post">


   <a href="$posts/{{$post->id}}">
    <div class="post_detail" style="background: url('storage/details/{{$post->post_detail}}');"></div>
    <p>{{$post->post_name}}</p>
    <img src="{{asset($post->photo)}}" width="45">
  </a>

  

</div>
@endforeach
@else
<div class="no-posts">
 <p>There are no posts to display, start adding posts to show something.</p>
</div>
@endif


</div>


    <h3 class="bc-title">Leave a reply</h3>
    <form method="comment" action="{{route('comments.store')}}" enctype="multipart/form-data">
    @csrf
    
    <div>
      <label for="inputContent" class="col-sm-2 col-form-label">Comment</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputContent" name="content">
      </div>
    </div>
    <!-- <div class="col-sm-10">
      <label for="inputPost_Id" class="col-sm-2 col-form-label">Post ID</label>
      <div>
        <input type="text" class="form-control" id="inputPost_Id" name="post_id">
        
      </div>
    </div> -->
    <!-- <div class="col-sm-10">
                  <button class="site-btn sb-dark text-dark" src=""><a href="{{route('poststore')}}">SEND <i class="fa fa-angle-double-left"></i></a></button>
    </div> -->
    <div class="col-sm-10">
      <!-- <div>
        <a href="{{route('commentcreate')}}" type="submit" name="btnsubmit" value="Save" class="btn btn-primary align-content-center">Submit</button>
      </div>
    </div>  
 -->
 <div class="col-sm-10">
                  <button class="site-btn sb-dark text-dark" src=""><a href="{{route('poststore')}}">SEND <i class="fa fa-angle-double-left"></i></a></button>
    </div>


  </form>
</section>





@endsection

