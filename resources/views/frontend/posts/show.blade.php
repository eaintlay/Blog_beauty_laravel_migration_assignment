@extends('frontendtemplate')
@section('title','show');

@section('content')
<style>
	
	
</style>
<section class="flex">
	<div class="first-row">
		<h2>Post Options</h2>
		<div>
			<button id="openPanel">Open Edit Panel</button>

			<!-- show the form that will allow us to delete the post -->



		</div>
	</div>

	<div class="second-row">
		<h2>{{$posts->content}}</h2>
		<div>
		<img src="{{ url($post->photo)}}" class="img-thumbnail" alt="Responsive image">
		</div>
		<div>
			{{$post->post_detail}}
			
		</div>
			

	</div>
</section>
<!--add the edit panel  -->




@endsection
