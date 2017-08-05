<div class="modal fade" id="commentEdit{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Post</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="/comment/{{$comment->id}}/edit">
          {{csrf_field()}}
          {{ method_field('PATCH') }}
          <div class="form-group">
             <textarea rows="1" class="form-control comment" name="comment" id="comment{{$post->id}}">{{$comment->comment}}</textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>