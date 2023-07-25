<div class="col-md-12 col-lg-8 main-content">
    <div class="row">
   @foreach ($articles as $article)
   <div class="col-md-6">
    <a href="{{ route('articles.show',$article->slug()) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
      <img src="{{ asset($article->image()) }}" alt="Image placeholder">
      <div class="blog-content-body">
        <div class="post-meta">
          <span class="author mr-2"><img src="{{ asset('wordify/images/person_1.jpg') }}" alt="Colorlib"> Colorlib</span>&bullet;
          <span class="mr-2">{{ $article->created_at()->diffForHumans() }}<br> </span> &bullet;
          <span class="ml-2"><span class="fa fa-book"></span><strong class="p-1" style="color: blue; ">{{ $article->min_to_read() }}</strong> Mins Read </span>
        </div>
        <h2>{{ $article->title() }}</h2>
      </div>
    </a>
  </div>
   @endforeach
     
    </div>

    {{ $articles->links('pagination::bootstrap-4')}}






  </div>
