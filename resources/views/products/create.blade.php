@extends('master')

@section('content')

	<h1>Add a new product</h1>

	<form action="/products/store" method="post">

		{!! csrf_field() !!}
		
			<div>
				<label for="name">Name: </label>
				<input type="text" id="name" name="name" placeholder="Drone" value="{{ old('name') }}">
				@if($errors->first('name'))
					<p>{{ $errors->first('name') }}</p>
				@endif
			</div>
			<div>
				<label for="description">Description: </label>
				<textarea id="description" name="description" cols="30" rows="10">{{ old('description') }}</textarea>
				@if($errors->first('description'))
					<p>{{ $errors->first('description') }}</p>
				@endif
			</div>
			<div>
				<label for="price">Price: $</label>
				<input type="number" id="price" step=".01" name="price" placeholder="$1.00" value="{{ old('price') }}">
				@if($errors->first('price'))
					<p>{{ $errors->first('price') }}</p>
				@endif
			</div>
			<div>
				<label for="stock">Stock: </label>
				<input type="number" id="stock" name="stock" placeholder="15" value="{{ old('stock') }}">
			</div>
			@if($errors->first('stock'))
					<p>{{ $errors->first('stock') }}</p>
				@endif

			<input type="submit" value="Add product to store">
	</form>

@endsection 