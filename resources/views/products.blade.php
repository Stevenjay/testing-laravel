@extends('master')

@section('content')

	<h1>Products</h1>

	<a href="/products/create">Add new product</a>

	<h2>On Sale</h2>
	@foreach($popularProducts as $product)
		<p>{{ $product }}</p>
	@endforeach

	<h2>Fruit and Veg</h2>

	@foreach($products as $product)
		<p>{{ $product->name }} at {{ $product->price }} each, we have {{ $product->stock }} in stock.</p>
		<p>{{ $product->description }}</p>
	@endforeach

@endsection