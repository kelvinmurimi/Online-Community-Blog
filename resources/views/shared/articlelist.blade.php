<div class="col-md-12 col-lg-8 main-content">
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-md-6">
                <a href="{{ route('articles.show', $article->slug()) }}" class="blog-entry element-animate"
                    data-animate-effect="fadeIn">
                    <img src="{{ asset($article->image()) }}" alt="Image placeholder">
                    <div class="blog-content-body">
                        <div class="post-meta">
                            <span class="author mr-2"><img src="{{ storage_url($article->user->image) }}"
                                    alt="Colorlib"> {{$article->user->username }}</span>&bullet;
                            <span class="mr-2">{{ $article->created_at()->diffForHumans() }}<br> </span> &bullet;
                            <span class="ml-2"><span class="fa fa-book"></span><strong class="p-1"
                                    style="color: blue; ">{{ $article->min_to_read() }}</strong> Mins Read </span>

                        </div>
                        <h1>{{ $article->title() }}</h1>
                         <div class="d-flex justify-between">
                          <form action="" method="post" class="mr-1">
                            <button type="submit" class=" btn-sm btn-outline-primary btn-sm" style="font-size: 0.8em;cursor: pointer;"><i class="fa fa-thumbs-up">like</i></button>
                           </form>
                           <strong>0likes</strong>
                         </div>
                    </div>

                </a>
            </div>
        @endforeach

    </div>

    {{ $articles->links('pagination::bootstrap-4') }}






</div>
