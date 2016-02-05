@extends('master')

@section('content')

<h1>{{ $product->name }}</h1>

<a href="/products/{{ $product->id }}/edit">Edit this product</a>

<p>{{ $product->description }}</p>

<ul>
	<li>Price: ${{ $product->price }}</li>
	<li>Stock: {{ $product->stock  }}

	</li>
</ul>
@endsection