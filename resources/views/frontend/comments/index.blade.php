@extends('frontendtemplate')
@section('title', 'Comments')

@section('content')
<div class="container-fluid">
  <h2 class="d-inline-block">Comment List</h2>
  <a href="{{route('comments.create')}}" class="btn btn-success float-right btn-sm">Add New</a>
  <table class="table">
  <thead>
  <tr>  
  <th>No</th>
  
  <th>Content</th>

  <th>Post ID</th>

  <th>Action</th>
  
      
  </tr>
  
  </thead>
  <tbody>
  @foreach($comments as $comment)
    <tr>
    <!-- table column name -->
      <td>{{$comment->id}}</td>
      <td>{{$comment->content}}
      <a href="" class="d-block">
        <span class="badge badge-success">More</span>
      </a></td>
      <td>{{$comment->post_id}}</td>
      
      
      
      <td>
      <a href="{{route('comments.edit',$comment->id)}}" class="btn btn-warning">Edit</a>
      <form method="post" action="{{route('comments.destroy',$comment->id)}}" class="d-inline-block" onsubmit="return confirm('Are You sure?')">
      @csrf
      @method('Delete')
        <input type="submit" name="btn-submit" value="Delete" class="btn btn-danger">
      </form>
      
      </td>
      
    </tr>
    @endforeach
  </tbody>
  </table>
</div>
@endsection