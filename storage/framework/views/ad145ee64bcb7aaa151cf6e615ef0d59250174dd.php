<?php $__env->startSection("content"); ?>

<div class="userProfile">
	<div class="container">
		<div class="col-md-3">
			<div class="userAvatar">
				<img src="/avatar/<?php echo nl2br(e($users->path)); ?>" alt="Avatar">
			</div>
		</div>
		<div class="col-md-9 userDetails">
			<div>
				<h1><?php echo nl2br(e($users->name)); ?><span>
				<a href="/profile/<?php echo nl2br(e($users->id)); ?>/edit" type="button" class="btn btn-default" id="btnEditProfile">Edit Profile</a></span></h1>
			</div>
			<div>
				<span></span>
			</div>
		</div>
	</div>
</div>

<div class="col-md-7 col-md-offset-3">
		<ul class="nav nav-pills">
			<li role="presentation" class="active"><a href="#postWell" data-toggle="tab">Posts</a></li>
			<li role="presentation"><a href="#" data-toggle="tab">Discussion</a></li>
		</ul>

	<div class="tab-content clearfix">
		<div class="tab-pane well active" id="postWell">
		<?php if(count($userPosts) == 0): ?>
		  <div class="panel panel-danger">
		    <div class="panel-body">
		    <?php if(Auth::user()->id == $users->id): ?>
		      Create you first post
		    <?php else: ?>
		      <?php echo nl2br(e($users->name)); ?> haven't posted anything yet.
		    <?php endif; ?>
		    </div>
		  </div>
		<?php else: ?>
		<?php $__currentLoopData = $userPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $__env->make('posts.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo $__env->make('modals.postedit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts/master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>