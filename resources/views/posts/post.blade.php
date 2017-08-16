
<div class="panel panel-default">
<div class="panel-heading">
	<div class="username-row">
		<ul>
			<li class="imageContainer">
				<img src="/avatar/{{$post->user->path}}" alt="avatar">
			</li>
			<li class="userName">
				<a href="/profile/{{$post->user->id}}">{{ $post->user->name}} </a>&middot;<span class="postTime"> {{$post->updated_at->diffForHumans()}}</span>
			</li>
			@if(auth()->user()->name == $post->user->name)
			<li class="dropdown pull-right" id="postSetting">
				<a href="#" class="pull-right dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
				<ul class="dropdown-menu">
					<li><a href="#" data-toggle="modal" data-target="#myModal{{$post->id}}">Edit</a></li>
					<li><a href="/delete/{{$post->id}}">Delete</a></li>
				</ul>
			</li>
			@endif
		</ul>
	</div>
</div>

<div class="panel-body">
	<div class="posts">
		<p class="userRants">{{ $post->post }}</p>
		@if($post->path != "NULL")
		<a href='{{asset("images/$post->path")}}'><img src='{{asset("images/$post->path")}}'></a>
		@endif
	</div>
</div>

<div class="reactionCount">
	<ul>
	<li id="likeCount{{$post->id}}">{{ count($post->likes) }} Likes</li>
	<li>{{ count($post->comments) }} Comments</li>
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
		 @if(!Auth::user()->likes()->where('post_id',$post->id)->first())
		<li>
			<a href="/like/{{$post->id}}" name="like" role="button" id="like{{$post->id}}" onclick="like('{{$post->id}}');">Like</a>
		</li>
		@else
		<li>
			<a href="/unlike/{{$post->id}}">Unlike</a>
		</li>
		@endif

		<li>&middot;</li>
		<li>
			<a class="callUser" id="{{$post->id}}" type="button"> Reply</a>
			<input type="hidden" name="hiddenName" id="hidden{{$post->id}}" class="hiddenName" value="{{$post->user->name}}">
			
		</li>
	</ul>
</div>
<div class="commentSection" id="{{$post->id}}">
<div class="text-center showMoreSection" id="showMoreSection{{$post->id}}">
<hr class="showMoreline">
	<a class="commentShow" type="button" id="commentShow{{$post->id}}">Show More</a>
<hr class="showMoreline">
</div>
	
	<ul class="list-group showComments" id="showComments{{$post->id}}">
		@foreach($post->comments as $comment)
		<li class="list-group-item li-comments{{$post->id}}" id="classComments">
				<img src="/avatar/{{$comment->user->path}}">
				<a href="/profile/{{$comment->user->id}}">{{$comment->user->name}}</a>
				<span>{{$comment->comment}}</span>
				<div class="commentOption">
					<div class="commentTime"><a href="#">Like </a> &middot;<a href="#"> Reply</a>
					@if(auth()->user()->name == $comment->user->name)
						&middot; <a href="#" data-toggle="modal" data-target="#commentEdit{{$comment->id}}"> Edit</a>
					@endif 
					&middot; {{$comment->updated_at->diffForHumans()}}
					</div>
				</div>
		</li>
	
	@include('modals.commentedit')

	@endforeach
	</ul>

</div>
<div class="panel-footer">
		<form method="POST" id="test{{$post->id}}" action="/posts/{{$post->id}}/comments">
			{{csrf_field()}}
		      <div class="form-group">
		        <textarea rows="1" class="form-control comment" name="txtComment" id="txtComment{{$post->id}}" placeholder="Add a comment"></textarea>
		      </div>
		      <div class="form-group">
		    <!--   	<button class="btn btn-primary" id="{{$post->id}}" type="button" onclick="addComment(this.id)">Post</button> -->
		      </div>

		</form>
</div>
</div>

<input type="hidden" id="token" value="{{csrf_token()}}">



