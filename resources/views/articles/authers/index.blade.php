@extends('frontend.base')
@section('content')
<section class="site-section pt-5">
    <div class="container">

      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">

          <div class="row">
            <div class="col-md-12">
              <h2 class="mb-4">Hi There! I'm {{$user->name}}</h2>
              <p class="mb-5"><img src="{{ storage_url($user->image) }}" alt="Image placeholder" class="img-fluid"></p>
              <p>
                bio
              </p>

            </div>
          </div>

          <div class="row mb-5 mt-5">
            <div class="col-md-12 mb-5">
              <h2>My Latest Articles</h2>
            </div>
            <div class="col-md-12">

             @foreach ($articles as $article)

             <div class="post-entry-horzontal">
                <a href="{{ route('articles.show', $article->slug) }}">
                  <div class="image" style="background-image: url({{ asset($article->image()) }});"></div>
                  <span class="text">
                    <div class="post-meta">
                      <span class="author mr-2"><img src="{{ storage_url($user->image) }}" alt="Colorlib"> {{$user->name }}</span>&bullet;
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
                    <h2>{{ $article->title() }}</h2>
                  </span>
                </a>
              </div>
             @endforeach
              <!-- END post -->


            </div>
          </div>

          <div class="row">
            <div class="col-md-12 text-center">

            </div>
          </div>



        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
          <div class="sidebar-box search-form-wrap">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" id="s" placeholder="">
              </div>
            </form>
          </div>
          <!-- END sidebar-box -->


        </div>
        <!-- END sidebar -->

      </div>
    </div>
  </section>
@endsection
