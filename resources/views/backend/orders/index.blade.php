@extends('backendtemplate')

@section('title','Orders')

@section('content')
 <div class="container-fluid">
 	<h2 class="d-inline-block">Order List</h2>

 	<a href="{{route('orders.create')}}" class="btn btn-success float-right btn-sm">Add New</a>
 	<table class="table">
 		<thead>
 			<tr>
 				<th>Voucherno</th>
 				<th>User</th>
 				<th>Total</th>
 				
 				<th colspan="2">Actions</th>
 			</tr>
 		</thead>
 		<tbody>
 			@foreach($orders as $order)
 			<tr>
 				<td>{{$order->voucherno}}</td>
 				<td>{{$order->user}}
 					<a href="{{route('items.show',$item->id)}}" class="d-block">
 						<span class="badge badge-success ml-2"><i class='fas fa-eye'></i></span>
 					</a>


 					<a href="#" class="detailBtn" data-photo="{{$item->photo}}" data-name="{{ $item->name}}" data-codeno="{{$item->codeno}}" data-price="{{$item->price}}" data-description="{{$item->description}}"><span class="badge badge-success ml-2"><i class='fas fa-eye'></i></span>
 						
 					</a>
 				</td>
 				<td>{{$item->name}}</td>
 				<td>{{$item->price}}</td>
 				<td>
 					<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">Edit</a>
 					<form method="post" action="{{route('items.destroy',$item->id)}}" class="d-inline-block" onsubmit=" return confirm('Are you sure?')">
 						@csrf
 						@method('DELETE')
 						<input type="submit" name="btn-submit" value="Delete" class="btn btn-danger">
 						
 					</form>
 					

 				</td>
 			</tr>
 			@endforeach
 		</tbody>
 		
 	</table>
 </div>

 <!-- Detail Modal -->
 <div class="modal" id="detailModal">
 	<div class="modal-dialog">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h4 class="modat-title name"></h4>
 			</div>
 			<div class="modal-body">
 				<div class="row">
 					<div class="col-md-6">
 						<img src="" class="img-fluid itemImg">
 					</div>
 					<div class="col-md-6 content">
 						
 					</div>
 				</div>
 			</div>
 			<div class="modal-footer">
 				This is Footer.
 			</div>
 			<div class="modat-footer">
 				<button class="btn btn-primary" data-dismiss="modal">Close</button>
 			</div>
 		</div>
 	</div>
 </div>
 @endsection

 @section('script')
   <script type="text/javascript">
   	$(document).ready(function (){
   		$('.detailBtn').click(function() {
   			var photo = $(this).data('photo');
   			var name = $(this).data('name');
   			var codeno = $(this).data('codeno');
   			var price = $(this).data('price');
   			var description = $(this).data('description');

   			alert('description');



   			$('.itemImg').attr('src', photo);
   			$('.name').text(name);
   			$('.content').html(`<p>${codeno}</p>
   				                <p>${price}</p>
   				                <p>${description}</p> `);





   			$('#detailModal').modal('show');
   		});
   	})
   </script>
   @endsection