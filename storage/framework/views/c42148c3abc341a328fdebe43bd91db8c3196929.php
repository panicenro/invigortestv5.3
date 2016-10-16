<div class="form-group">
<?php echo Form::label('product_name', 'Product Name'); ?>

<?php echo Form::text('product_name', null, ['class' => 'form-control']); ?>

<br>
<?php echo Form::label('product_picture', 'Product Image'); ?>

<?php echo Form::file('product_picture', ['accept' => 'image/*']); ?>

<br>
<?php echo Form::label('product_price', 'Price $'); ?>

<?php echo Form::text('product_price', null, ['class' => 'form-control']); ?>


<?php echo Form::label('product_description', 'Description'); ?>

<?php echo Form::textarea('product_description', null, ['class' => 'form-control']); ?>


<br>
<div class="text-right"> <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?></div>

</div>