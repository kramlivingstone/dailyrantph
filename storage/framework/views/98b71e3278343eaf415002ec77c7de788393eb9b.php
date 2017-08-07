<?php $__env->startSection('content'); ?>

<div class="col-md-8">
	<h1>Register</h1>
	<form method="POST" action="/register">
		<?php echo e(csrf_field()); ?>

		<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="name" name="name" class="form-control" id="name" required>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" name="email" class="form-control" id="email" required> 
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" class="form-control" id="password" required>
		</div>
		<div class="form-group">
			<label for="password_confirmation">Confirm Password:</label>
			<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Register</button>
		</div>


	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>