@extends('layouts.app')

@section("content")
	<div class="container">
		<h2>{{ $category->name }}</h2>
		<li>{{ $category->description }}</li>

		<a href="/category/{{$category->id}}/edit"> <button class="btn btn-success">Edit </button></a>


		<form method="POST" action="/category/{{ $category->id }}">

    	  {{ method_field("DELETE") }}
    	  {{ csrf_field() }}

		  <button type="submit" class="btn btn-primary">DELETE</button>
		  
		</form>
	</div>
@endsection