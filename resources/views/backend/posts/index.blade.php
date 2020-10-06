@extends('backendtemplate')
@section('title', 'Posts')

@section('content')
<div class="container-fluid">
   <h2 class="d-inline-block">Post List</h2>
   <a href="{{route('posts.create')}}" class="btn btn-success float-right btn-sm">Add New</a>
   <table class="table">
   <thead>
   <tr>  
   <th>No</th>
   
   <th>Article ID</th>

   <th>Category ID</th>

   <th>Action</th>
   
         
   </tr>
   
   </thead>
   <tbody>
   @foreach($posts as $post)
      <tr>
      <!-- table column name -->
         <td>{{$post->id}}</td>
         <td>{{$post->article_id}}</td>
         <td>{{$post->category_id}}</td>
         
         
         
         
         <td>
         <a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning">Edit</a>
         <form method="post" action="{{route('posts.destroy',$post->id)}}" class="d-inline-block" onsubmit="return confirm('Are You sure?')">
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