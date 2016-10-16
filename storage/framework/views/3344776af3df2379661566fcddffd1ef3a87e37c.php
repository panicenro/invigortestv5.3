<?php $__env->startSection('content'); ?>


<h1>About Me!</h1>

<h3>People I Like</h3>

<?php if(count($people)): ?>
<ul>
	<?php foreach($people as $person): ?>
		<li><?php echo e($person); ?></li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>