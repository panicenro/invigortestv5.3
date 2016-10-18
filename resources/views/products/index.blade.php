@extends('app')
@section('content')
	
<div class="text-left"><h1>Products</h1></div><div class="text-right"><a href="{{ action('ProductsController@create') }}" class="btn btn-primary" name="Add_0" id="Add_0">Add New Product</a></div>
	<div class="table-responsive">

		<table class="table">
		<thead>
			<tr>
				<th>Product Code</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Sample Image</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		@foreach($products as $product)
		
			<tr>
				<td>{{ $product->id }}</td>	
				<td><a href="{{ action('ProductsController@show', [$product->id]) }}">{{ $product->product_name }}</a></td>	
				<td>$ {{ number_format($product->product_price, 2) }}</td>
				<td><a href="{{ action('ProductsController@show', [$product->id]) }}"><img class="img-responsive" width="100" src="/uploads/{{ $product->product_picture }}"></a></td>	
				<td><button class="btn btn-primary" name="View_{{ $product->id }}">View</button> <button class="btn btn-primary" name="Edit_{{ $product->id }}">Edit</button> 
				{!! Form::open( ['url' => action('ProductsController@destroy', $product->id), 'method' => 'delete', 'style' => 'display:inline' ]  )!!}
				<button class="btn btn-primary" type="Submit" name="Delete_{{ $product->id }}">Delete</button> {!! Form::close() !!}

				</td>
			</tr>			
		@endforeach
		</tbody>
		</table>
	</div>
	

@stop

@include('products._formjs')