@extends('frontendtemplate')
@section('title', 'Articles')

@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Articles</h1>
		<a href="{{route('articlecreate')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>New</a>
	</div>

	
	{{-- Must show related input errors --}}
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form method="post" action="{{route('articles.store')}}" enctype="multipart/form-data">
		@csrf

		<div class="form-group row">
			<label for="category_id" class="col-sm-2 col-form-label">CategoryName</label>
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

				<div class="text-danger form-control-feedback">

				</div>


			</div>
		</div>

		<div class="form-group row">
			<label for="title" class="col-sm-2 col-form-label">Title</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputTitle" name="title">

				<div class="text-danger form-control-feedback">

				</div>
			</div>
		</div>

		<div class="form-group row">
			<label for="body" class="col-sm-2 col-form-label">Body</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputBody" name="body">

				<div class="text-danger form-control-feedback">

				</div>


			</div>
		</div>

		<div class="form-group row">
			<input type="submit" name="btnsubmit" value="Save" class="btn btn-primary" src="{{route('articlepage')}}">
		</div>
	</form>
</div>

			
@endsection