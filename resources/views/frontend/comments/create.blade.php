@extends('frontendtemplate')
@section('title', 'Comments')

@section('content')
<div class="container-fluid">
	<h2>Comment Create Form</h2>
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
	
	<form method="comment" action="{{route('comments.store')}}" enctype="multipart/form-data">
		@csrf
		
		<div class="form-group row">
			<label for="inputContent" class="col-sm-2 col-form-label">Content</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputContent" name="content">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPost_Id" class="col-sm-2 col-form-label">Post ID</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPost_Id" name="post_id">
				
			</div>
		</div>
		
		
		
		<div class="form-group row">
			<input type="submit" name="btnsubmit" value="Save" class="btn btn-primary">
		</div>
	</form>
</div>
@endsection