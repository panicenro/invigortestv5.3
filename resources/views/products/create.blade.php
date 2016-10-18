@extends('app')
@section('content')
	
	<div class="text-left"><h1>Add New Product</h1></div><div class="text-right"><button class="btn btn-primary" name="Back">Back to Products</button></div>

	<hr>

	{!! Form::open([ 'url' => 'products', 'files' => true]) !!}
		@include('products._form')
	{!! Form::close() !!}

	@include('errors.list')

@stop

@include('products._formjs')