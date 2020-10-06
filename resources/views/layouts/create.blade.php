@extends('layouts.app')
@section('title', 'Posts')

@section('content')
<div class="container-fluid">
	<h2>Post Create Form</h2>
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
	<form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
	@csrf
		
		<div class="form-group row">
			<label for="inputArticle_Id" class="col-sm-2 col-form-label">Article ID</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputArticle_Id" name="article_id">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputCategoryName" class="col-sm-2 col-form-label">Category Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputCategoryName" name="category_name">
				
			</div>
		</div>
		<div class="form-group row">
			<label for="post_name" class="col-sm-2 col-form-label"> Post Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPostName" name="post_name">

				<div class="text-danger form-control-feedback">

				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="post_detail" class="col-sm-2 col-form-label"> Post Detail</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPostTitle" name="post_detail">

				<div class="text-danger form-control-feedback">

				</div>
			</div>
		</div>
		<div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
				<label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-5">
					<input type="file" id="inputPhoto" name="photo" class="d-block">
					<span class="text-danger">{{ $errors->first('photo') }}</span>
				</div>
			</div>
			
			
			
			<div class="form-group row">
				<input type="submit" name="btnsubmit" value="Save" class="btn btn-primary">
			</div>
		</form>
	</div>
	@endsection