@foreach ($relatedArticles as $relatedArticle)
<div class="col-md-6 col-lg-4">
    <a href="{{ route('articles.show', $relatedArticle->slug) }}" class="a-block sm d-flex align-items-center height-md" style="background-image: url({{ asset($relatedArticle->image) }}); ">
      <div class="text">
        <div class="post-meta">
          <span class="category">{{ $relatedArticle->category->name }}</span>
          <span class="mr-2">{{ $relatedArticle->created_at->format('D-M-Y') }} </span> &bullet;
          <span class="ml-2"><span class="fa fa-book"></span> {{ $article->min_to_read() }} Mins To
          Read</span>
        </div>
        <h3>{{ $relatedArticle->title }}</h3>
      </div>
    </a>
  </div>
@endforeach
