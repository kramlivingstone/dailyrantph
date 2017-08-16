@foreach($post->comments as $comment)
		<li class="list-group-item li-comments{{$post->id}}" id="classComments">
				<img src="/avatar/{{$comment->user->path}}">
				<a href="#">{{$comment->user->name}}</a>
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

@endforeach