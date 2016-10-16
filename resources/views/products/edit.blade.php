@extends('app')
@section('content')
	<div class="text-left"><h1>Edit: {!! $product->product_name !!}</h1></div><div class="text-right"><button class="btn btn-primary" name="back_to_products">Back to Products</button></div>
	<hr>
	{!! Form::model($product, [ 'action' => ['ProductsController@update', $product->id] , 'files' => true, 'method' => 'PATCH']) !!}
		@include('products._form')
	{!! Form::close() !!}

	@include('errors.list')
@stop