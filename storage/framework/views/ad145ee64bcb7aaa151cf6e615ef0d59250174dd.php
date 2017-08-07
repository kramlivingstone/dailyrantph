<?php $__env->startSection("content"); ?>

<div class="jumbotron">
	
</div>

<div class="col-md-7 col-md-offset-3">
		<ul class="nav nav-pills">
			<li role="presentation" class="active"><a href="#postWell" data-toggle="tab">Posts</a></li>
			<li role="presentation"><a href="#" data-toggle="tab">Discussion</a></li>
		</ul>

	<div class="tab-content clearfix">
		<div class="tab-pane well active" id="postWell">
		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $__env->make('posts.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo $__env->make('modals.postedit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts/master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>