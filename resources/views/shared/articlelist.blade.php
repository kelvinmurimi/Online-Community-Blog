@foreach ($articles as $article)
    <div class="col-md-6">
        <div class="blog-entry element-animate" data-animate-effect="fadeIn">
            <img src="{{ asset($article->image()) }}" alt="Image placeholder">
            <div class="blog-content-body">
                <div class="post-meta">
                    <span class="author mr-2"><img src="{{ storage_url($article->user->image) }}" alt="Colorlib"> &bullet;
                        <a href="{{route('auther.articles',$article->user)}}">{{ $article->user->username }}</a></span>&bullet;
                    <span class="mr-2">{{ $article->created_at() }} </span> &bullet;
                    <span class="ml-2"><span class="fa fa-book"></span> {{ $article->min_to_read() }} Mins To
                        Read</span>
                </div>
                <div class="d-flex justify-space-around ">
                    <div>

                        @auth
                            @if (!$article->likedBy(auth()->user()))
                                <form  method="POST"
                                    action="{{ route('article.likes', $article->slug) }}">
                                    @csrf
                                    <button type="submit" class="fa fa-thumbs-up btn-primary"
                                        style="cursor: pointer;"></button>
                                </form>
                            @else
                                <form  method="POST"
                                    action="{{ route('article.destroy', $article->slug) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="fa fa-thumbs-down btn-primary"
                                        style="cursor: pointer;">unlike</button>
                                </form>
                            @endif
                        @endauth

                    </div>
                    <div>
                        <strong>{{ $article->likes->count() }}:{{ Str::plural('like', $article->likes->count()) }}</strong>
                    </div>
                </div>
                <h2 class="article-link"><a href="{{ route('articles.show', $article->slug) }}"
                        class="article-link">{{ $article->title() }}</a></h2>
            </div>

        </div>
    </div>
@endforeach
