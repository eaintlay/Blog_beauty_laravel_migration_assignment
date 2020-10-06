@extends('frontendtemplate')
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
			<label for="inputCategoryName" class="col-sm-2 col-form-label">Category Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputCategoryName" name="category_name" value="{{$post->category_name}}">
			</div>
		</div>

		<div class="form-group row">
			<label for="inputPostName" class="col-sm-2 col-form-label">Post Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPostName" name="post_name" value="{{$post->post_name}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPostDetail" class="col-sm-2 col-form-label">Post Detail</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPostDetail" name="post_detail" value="{{$post->post_detail}}">
			</div>
		</div>
			<div class="form-group row">
				<label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-5">
					<input type="file" id="inputPhoto" name="photo">
					<img src="{{asset($post->photo)}}" width="100">
				</div>
			</div>
			


			
			
			
			<div class="form-group row">
				<input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
@endsection