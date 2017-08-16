<?php $__env->startSection("content"); ?>
<div class="col-md-3">
 <!--  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="#"><img src="#" alt="avatar"> <?php echo nl2br(e(Auth::user()->name)); ?> </a>
    </div>
    <div class="panel-body">
      <ul class="feedFilter">
        <li><a href="#">Trending</a></li>
        <li><a href="#">Most Recent</a></li>
      </ul>
    </div>
  </div> -->
  <div class="panel panel-default" id="sideCard">
  <!--   <a href="#">
      <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="avatar">
    </a> -->
    <div class="panel-body">
    <img id="sideCardImg" src="/avatar/<?php echo nl2br(e(Auth::user()->path)); ?>">
    <a href="/profile/<?php echo nl2br(e(Auth::user()->id)); ?>">
      <?php echo nl2br(e(Auth::user()->name)); ?>

    </a>
    <hr id="sideLine">
     <ul class="feedFilter">
        <li><a href="#">Trending</a></li>
        <li><a href="#">Most Recent</a></li>
     </ul>
     </div>
  </div>
</div>
<div class="col-md-6">
    <form method="POST" action="/posts" enctype="multipart/form-data">
      <?php echo nl2br(e(csrf_field())); ?>

      <div class="form-group" id="frmTextArea">
        <textarea class="form-control test" name="post" id="post" placeholder="Write Something"></textarea>
      </div>
      <div class="well" id="imgWell">
          <img id="loadImg" src="<?php echo nl2br(e(asset('images/loader.gif'))); ?>">
          <img class="text-center" id="imgPreview" src="">
      </div>
      <div class="form-group" id="postFrmGroup">
          <label for="uploadImg" id="file-upload">
            <i class="fa fa-image"></i> Upload Image            
          </label>
          <input type="file" name="uploadImg" id="uploadImg">
        <button type="submit" class="btn btn-primary" id="btnPost" disabled>Post</button>
        <div class="clearfix"></div>
      </div>
    </form>
<hr>

<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#feedWell" data-toggle="tab">News Feed</a></li>
  <li role="presentation"><a href="#" data-toggle="tab">Group Discussions</a></li>
</ul>
<hr>
<div class="tab-content clearfix">
<div class="tab-pane well active" id="feedWell">
<?php if(count($rants) == 0): ?>
  <div class="panel panel-default postPanel">
    <div class="panel-body">
      Nothing To Show
    </div>
  </div>
<?php else: ?>
<?php $__currentLoopData = $rants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php echo $__env->make('posts.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('modals.postedit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</div>
<div class="tab-pane well" id="feedPosts">

</div>
</div>
</div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make("../layouts/master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>