@extends('backendtemplate')
@section('title', 'Comments')

@section('content')
<div class="container-fluid">
	<h2>Comment Edit Form</h2>


	<form method="post" action="{{route('comments.update',$comment->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		
		<div class="form-group row">
			<label for="inputContent" class="col-sm-2 col-form-label">Content</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputContent" name="content" value="{{$comment->content}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPost_Id" class="col-sm-2 col-form-label">Post ID</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPost_Id" name="post_id" value="{{$comment->post_id}}">
			</div>
		</div>
		<div class="form-group row">
			<input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
		</div>
	</form>
</div>
</div>
@endsection