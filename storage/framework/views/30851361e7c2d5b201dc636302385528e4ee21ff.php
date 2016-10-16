<?php $__env->startSection('content'); ?>
	
<div class="text-left"><h1>Products</h1></div><div class="text-right"><button class="btn btn-primary" name="Add_0">Add New Product</button></div>
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
		<?php foreach($products as $product): ?>
		
			<tr>
				<td><?php echo e($product->id); ?></td>	
				<td><a href="<?php echo e(action('ProductsController@show', [$product->id])); ?>"><?php echo e($product->product_name); ?></a></td>	
				<td>$ <?php echo e(number_format($product->product_price, 2)); ?></td>
				<td><a href="<?php echo e(action('ProductsController@show', [$product->id])); ?>"><img class="img-responsive" width="100" src="/uploads/<?php echo e($product->product_picture); ?>"></a></td>	
				<td><button class="btn btn-primary" name="View_<?php echo e($product->id); ?>">View</button> <button class="btn btn-primary" name="Edit_<?php echo e($product->id); ?>">Edit</button> 
				<?php echo Form::open( ['url' => action('ProductsController@destroy', $product->id), 'method' => 'delete', 'style' => 'display:inline' ]  ); ?>

				<button class="btn btn-primary" type="Submit" name="Delete_<?php echo e($product->id); ?>">Delete</button> <?php echo Form::close(); ?>


				</td>
			</tr>			
		<?php endforeach; ?>
		</tbody>
		</table>
	</div>
	

<?php $__env->stopSection(); ?>

<?php echo $__env->make('products._formjs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>