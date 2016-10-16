<?php $__env->startSection('content'); ?>
	
<div class="text-left"><h1><?php echo e($product->product_name); ?>  $ <?php echo e(number_format($product->product_price, 2)); ?></h1></div><div class="text-right"><button class="btn btn-primary" name="Back">Back to Products</button></div>
	<div class="table-responsive">
	<div class="text-left"><img class="img-responsive" src="/uploads/<?php echo e($product->product_picture); ?>"></div>
	<article><?php echo e($product->product_description); ?></article>	
	<div class="text-right"><button class="btn btn-primary" name="Edit_<?php echo e($product->id); ?>">Edit</button> 
	<?php echo Form::open( ['url' => action('ProductsController@destroy', $product->id), 'method' => 'delete', 'style' => 'display:inline' ]  ); ?>

				<button class="btn btn-primary" type="Submit" name="Delete_<?php echo e($product->id); ?>">Delete</button> <?php echo Form::close(); ?></div>
	</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('products._formjs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>