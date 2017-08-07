<?php $__env->startSection("content"); ?>

<div id="editUserPanel" class="panel panel-default">
	<div class="panel-body">
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation" class="active" ><a href="#editProfilePane" data-toggle="tab">Edit Profile</a></li>
				<li role="presentation"><a href="#changePasswordPane" data-toggle="tab">Change Password</a></li>
			</ul>
		</div>
		<div class="tab-content tabContentPane">
			<div class="tab-pane col-md-9 active" id="editProfilePane">
				<h1>Edit Profile</h1>
				<div>
					<?php echo nl2br(e($users->username)); ?>

				</div>
				<div>
					<form method="POST" action="/edit/<?php echo nl2br(e($users->id)); ?>" enctype="multipart/form-data">
						<?php echo nl2br(e(csrf_field())); ?>

						<?php echo nl2br(e(method_field('PATCH'))); ?>

						<div class="form-group">
							<label for="name">
								Name:
							</label>
							<input class="form-control" type="text" name="name" id="name" value="<?php echo nl2br(e($users->name)); ?>">
						</div>
						<div class="form-group">
							<label for="username">
								Username:
							</label>
							<input class="form-control" type="text" name="username" id="username" value="<?php echo nl2br(e($users->username)); ?>" disabled>
						</div>
						<div class="form-group">
							<label for="bio">
								Bio:
							</label>
							<input class="form-control" type="text" name="bio" id="bio">
						</div>
						<div class="form-group">
							<label>
								Change Display Photo:
							</label>
						</div>
						<div class="form-group text-center">
							<img id="imgDisplay" src="/avatar/<?php echo nl2br(e($users->path)); ?>">
						</div>
						<div class="form-group">
							 <input type="file" name="displayPhoto" id="displayPhoto">
						</div>
						<div class="form-group">
							<button class="btn btn-info" type="submit">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
			<div class="tab-pane col-md-9" id="changePasswordPane">
				<h1>Change Password</h1>
				<form method="POST" action="/edit/<?php echo nl2br(e($users->id)); ?>/changePassword">
				<?php echo nl2br(e(csrf_field())); ?>

				<?php echo nl2br(e(method_field('PATCH'))); ?>

				<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<div class="form-group">
						<label for="password">
							Password:
						</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="password_confirmation">
							Confirm Password:
						</label>
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-info" type="submit">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts/master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>