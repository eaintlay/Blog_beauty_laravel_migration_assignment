@extends('backendtemplate')

@section('title','Items')

@section('content')
<div class="container-fluid">
	<h2>Item Create Form</h2>

	{{-- Must show related input errors  --}}

	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
	@csrf
	<div class="form-group row">
		<label for="inputCodeNo" class="col-sm-2 col-form-label"> Codeno:
		</label>
		<div class="col-sm-10">
			<input type="text" name="codeno" class="form-control" id="inputCodeNo">

		</div>
	</div>
	<div class="form-group row">
		<label for="inputName" class="col-sm-2 col-form-label"> Name::
		</label>
		<div class="col-sm-10">
			<input type="text" name="name" class="form-control" id="inputDiscount">

		</div>
	</div>
	
	<div class="form-group row">
		<label for="inputPhoto" class="col-sm-2 col-form-label"> Photo:
		</label>
		<div class="col-sm-10">
			<input type="file" name="photo" class="form-control" id="inputDiscount">

		</div>
	</div>
	<div class="form-group row">
		<label for="inputDiscount" class="col-sm-2 col-form-label"> Price:
		</label>
		<div class="col-sm-10">
			<input type="number" name="price" class="form-control" id="inputDiscount">

		</div>
	</div>


	<div class="form-group row">
		<label for="inputDiscount" class="col-sm-2 col-form-label"> Discount:
		</label>
		<div class="col-sm-10">
			<input type="number" name="discount" class="form-control" id="inputDiscount" value="0">

		</div>
	</div>

	<div class="form-group row">
		<label for="inputDescription" class="col-sm-2 col-form-label"> Description:
		</label>
		<div class="col-sm-10">
			<textarea name="description" class="form-control" id="inputDescription"></textarea>

		</div>
	</div>
	<div class="form-group row">
		<label for="inputBrand" class="col-sm-2 col-form-label">
			Brand:
		</label>
	</div>
	<div class="col-sm-10">
		<select name="brand" class="form-control">
			<optgroup label="Choose Brand">
				@foreach($brands as $brand)
				<option value="{{$brand->id}}">{{$brand->name}}</option>
				@endforeach
			</optgroup>
		</select>

	</div>

	<div class="form-group row">
		<label for="inputSubcategory" class="col-sm-2 col-form-label">
			Subcategory:
		</label>
	</div>
	<div class="col-sm-10">
		<select name="subcategory" class="form-control">
			<optgroup label="Choose Subcategory">
				@foreach($subcategories as $subcategory)
				<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
				@endforeach
			</optgroup>
		</select>

	</div>
	<div class="form-group row">
		<input type="submit" name="btnsubmit" value="Save" class="btn btn-primary">
	</div>
  </div>
</form>

 @endsection