@extends("../layouts/master")

@section("content")

<div class="userProfile">
	<div class="container">
		<div class="col-md-3">
			<div class="userAvatar">
				<img src="/avatar/{{$users->path}}" alt="Avatar">
			</div>
		</div>
		<div class="col-md-9 userDetails">
			<div>
				<h1>{{$users->name}}<span>
				<a href="/profile/{{$users->id}}/edit" type="button" class="btn btn-default" id="btnEditProfile">Edit Profile</a></span></h1>
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
		@if(count($userPosts) == 0)
		  <div class="panel panel-danger">
		    <div class="panel-body">
		    @if(Auth::user()->id == $users->id)
		      Create you first post
		    @else
		      {{$users->name}} haven't posted anything yet.
		    @endif
		    </div>
		  </div>
		@else
		@foreach ($userPosts as $post)
				@include('posts.post')
				@include('modals.postedit')
		@endforeach
		@endif
		</div>
	</div>
</div>

@endsection