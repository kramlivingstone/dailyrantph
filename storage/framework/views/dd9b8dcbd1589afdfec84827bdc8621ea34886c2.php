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

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>