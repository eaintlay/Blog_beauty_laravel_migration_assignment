@extends('backendtemplate')
@section('title', 'Articles')

@section('content')
<div class="container-fluid">
	<h2>Article Edit Form</h2>


	<form method="post" action="{{route('articles.update',$article->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	<div class="form-group row">
			<label for="inputCategoryName" class="col-sm-2 col-form-label">Category Name</label>
			<div class="col-sm-10">
				<select name="category_id" class="form-control">
					<option value="choose">
						Choose Category

					</option>
					@foreach($categories as $category)

					<option value="{{$category->id}}">{{$category->name}}
					</option>

					@endforeach
				</select>
			</div>
		</div>
		
		<div class="form-group row">
			<label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputTitle" name="title" value="{{$article->title}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputBody" class="col-sm-2 col-form-label">Body</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputBody" name="body" value="{{$article->body}}">
			</div>
		</div>
			


			
			
			
			<div class="form-group row">
				<input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
@endsection