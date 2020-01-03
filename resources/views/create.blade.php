@extends('layouts.app')

@section("content")
    <div class="container">
    	<h2>Add New Receipe</h2>

    	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

    	<form method="POST" action="/receipe">
    	  {{ csrf_field() }}
		  <div class="form-group">
		    <label >Receipe Name</label>
		    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Ingredients</label>
		    <input type="text" name="ingredients" class="form-control" value="{{ old('ingredients') }}" required>
		  </div>

		  <div class="form-group">  
		  	<select class="form-control" name="category">
		  		@foreach($category as $value)
		  			<option value="{{$value->id}}">{{$value->name}}</option>
		  		@endforeach
		  	</select>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  
		</form>
    </div>
@endsection