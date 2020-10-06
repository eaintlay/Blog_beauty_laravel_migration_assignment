@extends('backendtemplate')
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
			<label for="inputCategory_Id" class="col-sm-2 col-form-label">Category ID</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputCategory_Id" name="category_id">
				
			</div>
		</div>
			
			
			
			<div class="form-group row">
				<input type="submit" name="btnsubmit" value="Save" class="btn btn-primary">
			</div>
		</form>
	</div>
	@endsection