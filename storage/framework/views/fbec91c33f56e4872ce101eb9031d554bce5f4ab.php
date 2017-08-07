<?php $__env->startSection('content'); ?>
	<div class="col-md-6">
		<h1>Sign In</h1>

	<form method="POST" action="/login">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<div class="form-group">
				Don't have an account yet? Click <span><a href="/register">here</a></span>
			</div>
			<div class="form-group">
				Forgot Password? Click <span><a href="#">here</a></span>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Log In</button>
			</div>
		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>