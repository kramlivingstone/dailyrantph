<?php $__env->startSection('content'); ?>
<div class="col-md-6">
	<img src="<?php echo nl2br(e(asset('images/dailyrantsph.png'))); ?>">
</div>
<div class="col-md-6">
	<h1>Register</h1>
	<div class="panel panel-default" id="loginPanel">
		<div class="panel-body">
			<form method="POST" action="/register">
				<?php echo nl2br(e(csrf_field())); ?>

				<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="name" name="name" class="form-control" id="name" required>
				</div>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" name="username" class="form-control" id="username" required>
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
					<a href="/login" class="btn btn-default" type="button">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>