
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

    </div>
  </li>
@endforeach


