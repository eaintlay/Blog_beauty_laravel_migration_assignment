@extends('frontendtemplate')
@section('title', 'Categories')

@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Category List</h2>
	<a href="{{route('categorycreate')}}" class="btn btn-success float-right btn-sm">Add New Category</a>
	<table class="table">
	<thead class="thead-dark">
	<tr>	
	<th>No</th>
	
	<th>Name</th>

	<th>Action</th>
	
			
	</tr>
	
	</thead>
	<tbody>
	@foreach($categories as $category)
		<tr>
		<!-- table column name -->
			<td>{{$category->id}}</td>
			<td>{{$category->name}}
			<a href="" class="d-block">
				<span class="badge badge-success">More</span>
			</a></td>
			
			
			
			<td>
			<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
			<form method="post" action="{{route('categories.destroy',$category->id)}}" class="d-inline-block" onsubmit="return confirm('Are You sure?')">
			@csrf
			@method('Delete')
				<input type="submit" name="btn-submit" value="Delete" class="btn btn-danger">
			</form>
			
			</td>
			
		</tr>
		@endforeach
	</tbody>
	</table>
</div>
@endsection