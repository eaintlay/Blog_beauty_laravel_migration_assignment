
@extends('backendtemplate')

@section('title','Items')

@section('content')
 <div class="container-fluid">
 	<h2>Item Edit Form</h2>
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

 	<form method="post" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	<div class="form-group row">
		<label for="inputCodeNo" class="col-sm-2 col-form-label"> Codeno:
		</label>
		<div class="col-sm-10">
			<input type="text" name="codeno" class="form-control" id="inputCodeNo" value="{{$item->codeno}}">

		</div>
	</div>
	<div class="form-group row">
		<label for="inputName" class="col-sm-2 col-form-label"> Name:
		</label>
		<div class="col-sm-10">
			<input type="text" name="name" class="form-control" id="inputName" value="{{$item->name}}">

		</div>
	</div>
	
	<div class="form-group row">
		<label for="inputPhoto" class="col-sm-2 col-form-label"> Photo:
		</label>
		<div class="col-sm-10">
			<input type="file" name="photo" class="form-control" id="inputPhoto">

			<img src="{{asset($item->photo)}}" width="100">

		</div>
	</div>
	<div class="form-group row">
		<label for="inputDiscount" class="col-sm-2 col-form-label"> Price:
		</label>
		<div class="col-sm-10">
			<input type="number" name="price" class="form-control" id="inputPrice" value="{{$item->price}}">

		</div>
	</div>


	<div class="form-group row">
		<label for="inputDiscount" class="col-sm-2 col-form-label"> Discount:
		</label>
		<div class="col-sm-10">
			<input type="number" name="discount" class="form-control" id="inputDiscount" value="{{$item->discount}}">

		</div>
	</div>

	<div class="form-group row">
		<label for="inputDescription" class="col-sm-2 col-form-label"> Description:
		</label>
		<div class="col-sm-10">
			<textarea name="description" class="form-control" id="inputDescription ">{{$item->description}}</textarea>

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
				<option value="{{$brand->id}}"
                    @if($brand->id == $item->brand_id)
                    {{'selected'}}
                    @endif
					>{{$brand->name}}</option>
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
				<option value="{{$subcategory->id}}"
					@if($subcategory->id == $item->subcategory_id)
                    {{'selected'}}
                 @endif


					>{{$subcategory->name}}</option>
				@endforeach
			</optgroup>
		</select>

	</div>
	<div class="form-group row">
		<input type="submit" name="btnsubmit" value="Save" class="btn btn-primary">
	</div>
  </div>
</form>
 </div>
 @endsection