@extends('backendtemplate')

@section('title','Items')

@section('content')
 <div class="container-fluid">
 	<h2 class="text-center mt-5 mb-4" >Product Detail</h2>
 	<div class="row">
 		<div class="col-md-4 p-3 animated in-left">
 			<p><img src="{{asset($item->photo)}}" class="img-fluid"></p>
 		</div>
 	
 	<div class="col-md-8  animated in-right">
 	<table border="table table border">
 		<tbody>
 		<tr>
 			<td>Product Name:</td>
 			<td>{{$item->name}}</td>
 		</tr>
 		<tr>
 			<td>Product Code:</td>
 			<td>{{$item->codeno}}</td>
 		</tr>

 		<tr>
 			<td>Product Price:</td>
 			<td>{{$item->price}}</td>
 		</tr>

 		<tr>
 			<td>Descriptions:</td>
 			<td>{{$item->description}}</td>
 		</tr>
 	    </tbody>

 	</table>
 </div>


 </div>
 </div>
 @endsection