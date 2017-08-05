@extends("../layouts/master")

@section("content")

<div class="userProfile">
	<div class="container">
		<div class="col-md-3">
			<div class="userAvatar">
				<img src="{{asset('avatar/Pang.jpg')}}">
			</div>
		</div>
		<div class="col-md-9 userDetails">
			<div>
				@foreach ($posts as $postName)
				@endforeach
				<h1>{{$postName->user->name}}<span>
				<a href="#" type="button" class="btn btn-default" id="btnEditProfile">Edit Profile</a></span></h1>
			</div>
			<div>
				<span>{{$postName->post}}</span>
			
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
		@foreach ($posts as $post)
				@include('posts.post')
				@include('modals.postedit')
		@endforeach
		</div>
	</div>
</div>

@endsection