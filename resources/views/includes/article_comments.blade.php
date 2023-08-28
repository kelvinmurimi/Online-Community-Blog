
@foreach ($comments as $comment)

     <li class="comment">
    <div class="vcard">
      <img src="{{ storage_url($comment->user->image) }}" alt="Image placeholder">
    </div>
    <div class="comment-body">
      <h3>{{ $comment->user->name}}</h3>
      <div class="meta">{{ $comment->created_at->format('D-M-Y') }}</div>
      <p>
        {{ $comment->content }}
      </p>
    @if ($comment->user_id === auth()->id())
    <form action="{{ route('comment.destroy',$comment->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">delete</button>
      </form>

    @endif

    </div>
  </li>
@endforeach


