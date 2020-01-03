@extends('layouts.app')

@section("content")
    <div class="container">
    	<h2>Add New Category</h2>

    	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

    	<form method="POST" action="/category">
    	  {{ csrf_field() }}
		  <div class="form-group">
		    <label >Category Name</label>
		    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Description</label>
		    <input type="text" name="description" class="form-control" value="{{ old('description') }}" required>
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		  
		</form>
    </div>
@endsection