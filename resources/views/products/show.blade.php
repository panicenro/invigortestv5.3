@extends('app')
@section('content')
	
<div class="text-left"><h1>{{ $product->product_name }}  $ {{ number_format($product->product_price, 2) }}</h1></div><div class="text-right"><button class="btn btn-primary" name="Back">Back to Products</button></div>
	<div class="table-responsive">
	<div class="text-left"><img class="img-responsive" src="/uploads/{{ $product->product_picture }}"></div>
	<article>{{ $product->product_description }}</article>	
	<div class="text-right"><button class="btn btn-primary" name="Edit_{{ $product->id }}">Edit</button> 
	{!! Form::open( ['url' => action('ProductsController@destroy', $product->id), 'method' => 'delete', 'style' => 'display:inline' ]  )!!}
				<button class="btn btn-primary" type="Submit" name="Delete_{{ $product->id }}">Delete</button> {!! Form::close() !!}</div>
	</div>
	

@stop
@include('products._formjs')