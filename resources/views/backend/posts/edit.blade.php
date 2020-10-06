@extends('backendtemplate')
@section('title', 'Posts')

@section('content')
<div class="container-fluid">
	<h2>Post Edit Form</h2>


	<form method="post" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PUT')
		
		<div class="form-group row">
			<label for="inputArticle_Id" class="col-sm-2 col-form-label">Article ID</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputArticle_Id" name="article_id" value="{{$post->article_id}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputCategory_Id" class="col-sm-2 col-form-label">Category ID</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputCategory_Id" name="category_id" value="{{$post->category_id}}">
			</div>
		</div>
			


			
			
			
			<div class="form-group row">
				<input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
@endsection