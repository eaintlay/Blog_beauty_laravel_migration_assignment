@extends('frontendtemplate')
@section('title', 'Posts')

@section('content')


		<h2>Posts</h2>


<div class="posts-container">
  @if (count($posts) > 0)
  @foreach($posts as $post)
  <div class="post">


   <a href="$posts/{{$post->id}}">
    <div class="post_detail" style="background: url('storage/details/{{$post->post_detail}}');"></div>
    <p><a href="{{$post->post_name}}"></a></p>
    <img src="{{$post->photo}}" class="img-fluid" width="45">
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
    
               
  <div class="col-sm-10">
    <button class="site-btn sb-dark text-dark" src=""><a href="{{route('poststore')}}">SEND <i class="fa fa-angle-double-left"></i></a></button>
  </div>



	</form>
</div>
@endsection