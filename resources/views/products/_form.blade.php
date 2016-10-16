<div class="form-group">
{!! Form::label('product_name', 'Product Name') !!}
{!! Form::text('product_name', null, ['class' => 'form-control']) !!}
<br>
{!! Form::label('product_picture', 'Product Image') !!}
{!! Form::file('product_picture', ['accept' => 'image/*']) !!}
<br>
{!! Form::label('product_price', 'Price $') !!}
{!! Form::text('product_price', null, ['class' => 'form-control']) !!}

{!! Form::label('product_description', 'Description') !!}
{!! Form::textarea('product_description', null, ['class' => 'form-control']) !!}

<br>
<div class="text-right"> {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}</div>

</div>