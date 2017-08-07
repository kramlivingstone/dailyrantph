
<div class="panel panel-default">
<div class="panel-heading">
	<div class="username-row">
		<ul>
			<li class="imageContainer">
				<img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="avatar">
			</li>
			<li class="userName">
				<a href="#"><?php echo nl2br(e($post->user->name)); ?> </a>&middot;<span class="postTime"> <?php echo nl2br(e($post->updated_at->diffForHumans())); ?></span>
			</li>
			<?php if(auth()->user()->name == $post->user->name): ?>
			<li class="dropdown pull-right" id="postSetting">
				<a href="#" class="pull-right dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
				<ul class="dropdown-menu">
					<li><a href="#" data-toggle="modal" data-target="#myModal<?php echo nl2br(e($post->id)); ?>">Edit</a></li>
					<li><a href="#">Delete</a></li>
				</ul>
			</li>
			<?php endif; ?>
		</ul>
	</div>
</div>
<a href="#">
<div class="panel-body">
	<p><?php echo nl2br(e($post->post)); ?></p>
</div>
</a>
<div class="reactionCount">
	<ul>
	<li><?php echo nl2br(e($post->comments->count())); ?> Comments</li>
	</ul>
</div>
<hr class="postSettingLine">
<div class="reactionMenu">
	<ul>
	<!-- 	<li>
			<a href="#"><i class="fa fa-chevron-up" aria-hidden="true"> </i></a>
		</li>
		<li>&verbar;</li>
		<li>
			<a href="#"><i class="fa fa-chevron-down" aria-hidden="true"> </i></a>
		</li> -->
		<li>
			<a href="#">Like</a>
		</li>
		<li>&middot;</li>
		<li>
			<a class="callUser" id="<?php echo nl2br(e($post->id)); ?>" type="button"> Reply</a>
			<input type="hidden" name="hiddenName" id="hidden<?php echo nl2br(e($post->id)); ?>" class="hiddenName" value="<?php echo nl2br(e($post->user->name)); ?>">
			
		</li>
	</ul>
</div>
<div class="commentSection" id="<?php echo nl2br(e($post->id)); ?>">
<div class="text-center showMoreSection" id="showMoreSection<?php echo nl2br(e($post->id)); ?>">
<hr class="showMoreline">
	<a class="commentShow" type="button" id="commentShow<?php echo nl2br(e($post->id)); ?>">Show More</a>
<hr class="showMoreline">
</div>
	
	<ul class="list-group showComments" id="showComments<?php echo nl2br(e($post->id)); ?>">
		<?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li class="list-group-item li-comments<?php echo nl2br(e($post->id)); ?>" id="classComments">
			
				<a href="#"><?php echo nl2br(e($comment->user->name)); ?></a>
				<span><?php echo nl2br(e($comment->comment)); ?></span>
				<div class="commentOption">
					<div class="commentTime"><a href="#">Like </a> &middot;<a href="#"> Reply</a>
					<?php if(auth()->user()->name == $comment->user->name): ?>
						&middot; <a href="#" data-toggle="modal" data-target="#commentEdit<?php echo nl2br(e($comment->id)); ?>"> Edit</a>
					<?php endif; ?> 
					&middot; <?php echo nl2br(e($comment->updated_at->diffForHumans())); ?>

					</div>
				</div>
		</li>
	
	<?php echo $__env->make('modals.commentedit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>

</div>
<div class="panel-footer">
		<form method="post" id="test<?php echo nl2br(e($post->id)); ?>" action="/posts/<?php echo nl2br(e($post->id)); ?>/comments" data-id="<?php echo nl2br(e($post->id)); ?>">
			<?php echo nl2br(e(csrf_field())); ?>

		      <div class="form-group">
		        <textarea rows="1" class="form-control comment" name="txtComment" id="txtComment<?php echo nl2br(e($post->id)); ?>" placeholder="Add a comment"></textarea>
		      </div>
		      <div class="form-group">
		    <!--   	<button class="btn btn-primary" id="<?php echo nl2br(e($post->id)); ?>" type="button" onclick="addComment(this.id)">Post</button> -->
		      </div>

		</form>
</div>
</div>

<input type="hidden" id="token" value="<?php echo nl2br(e(csrf_token())); ?>">



