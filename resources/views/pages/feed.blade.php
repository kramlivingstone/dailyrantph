@extends("../layouts/master")


@section("content")
<div class="col-md-3">
 <!--  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="#"><img src="#" alt="avatar"> {{Auth::user()->name}} </a>
    </div>
    <div class="panel-body">
      <ul class="feedFilter">
        <li><a href="#">Trending</a></li>
        <li><a href="#">Most Recent</a></li>
      </ul>
    </div>
  </div> -->
  <div class="well">
  <!--   <a href="#">
      <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="avatar">
    </a> -->
    <a href="#">
      {{Auth::user()->name}}
    </a>
    <hr id="sideLine">
     <ul class="feedFilter">
        <li><a href="#">Trending</a></li>
        <li><a href="#">Most Recent</a></li>
     </ul>
  </div>
</div>
<div class="col-md-6">
    <form method="POST" action="/posts">
      {{csrf_field()}}
      <div class="form-group" id="frmTextArea">
        <textarea class="form-control test" name="post" id="post" placeholder="Write Something"></textarea>
      </div>
      <div class="well" id="imgWell">
          <img id="loadImg" src="{{asset('images/loader.gif')}}">
          <img id="imgPreview" src="">
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
  <li role="presentation"><a href="#feedPosts" data-toggle="tab">Posts</a></li>
  <li role="presentation"><a href="#" data-toggle="tab">Group Discussions</a></li>
</ul>
<hr>
<div class="tab-content clearfix">
<div class="tab-pane well active" id="feedWell">
@foreach ($rants as $post)
  @include('posts.post')
  @include('modals.postedit')
@endforeach
</div>
<div class="tab-pane well" id="feedPosts">

</div>
</div>
</div>


@endsection


