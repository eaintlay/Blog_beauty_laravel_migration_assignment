@extends('layouts.app')
@section('title','showpost');

@section('content')
<section class="flex">
	<div class="first-row">
		<h2>Post Options</h2>
		<div>
			<button id="openPanel">Open Edit Panel</button>

			<!-- show the form that will allow us to delete the post -->



		</div>
	</div>

	<div class="second-row">
		<h2>{{$current->title}}</h2>
		<img src="{{ asset('frontendtemplate/instylr/img/{{$current->photo}}')}}" alt="">
		<div>
			{{$current->post_detail}}
			
		</div>
			

	</div>
</section>
<!--add the edit panel  -->




@endsection
