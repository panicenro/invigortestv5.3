@extends('app')
@section('content')
	<div class="text-left"><h1>Edit: {!! $product->product_name !!}</h1></div><div class="text-right"><a href="{{ action('ProductsController') }}" class="btn btn-primary" name="Add_0" id="Add_0">Add Back to Products</a></div>
	<hr>
	{!! Form::model($product, [ 'action' => ['ProductsController@update', $product->id] , 'files' => true, 'method' => 'PATCH']) !!}
		@include('products._form')
	{!! Form::close() !!}

	@include('errors.list')
@stop