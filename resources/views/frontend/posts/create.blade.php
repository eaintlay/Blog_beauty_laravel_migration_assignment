@extends('frontendtemplate')
@section('title', 'Posts')

@section('content')
<div class="container-fluid">
	
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
	<form method="post" action="{{route('poststore')}}" enctype="multipart/form-data">
		@csrf

		<h2 class="align-content-center text text-center">Create a new post</h2>

		<div>
			<label for="inputArticleId" class="col-sm-2 col-form-label">Article Name</label>
			<div class="col-sm-10">
				<select name="article" class="form-control">
					<optgroup label="Choose Article">
					@foreach($articles as $article)


					<option value="{{$article->id}}">{{$article->name}}
					</option>

					@endforeach
				</optgroup>
				</select>


				<div class="text-danger form-control-feedback">

				</div>
			</div>
		</div>


	<div>
			<label for="category_id" class="col-sm-2 col-form-label">CategoryName</label>
			<div class="col-sm-10">
				<select name="category" class="form-control">
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



		
		<div>
			<label for="inputPostDetail" class="col-sm-2 col-form-label">Post Detail</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPostDetail" name="post_detail">
			</div>
		</div>
		<div>
			<label for="inputPostName" class="col-sm-2 col-form-label">Post Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPostName" name="post_name">
				
			</div>
		</div> 

		<div class="{{ $errors->has('photo') ? 'has-error' : '' }}">
				<label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-5">
					<input type="file" id="inputPhoto" name="photo" class="d-block">
					<span class="text-danger">{{ $errors->first('photo') }}</span>
				</div>
			</div>
		 <div>
			<label for="content" class="col-sm-2 col-form-label"> Content</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputContent" name="content">

				<div class="text-danger form-control-feedback">

				</div>
			</div>
		</div>
		


		
		<br>

		<div class="col-sm-10">
			<div>
				<button type="submit" name="btnsubmit" value="Save" class="btn btn-primary align-content-center">Submit</button>
			</div>
		</div>  



	</form>
</div>
@endsection