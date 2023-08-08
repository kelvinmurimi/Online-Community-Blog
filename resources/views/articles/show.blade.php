@extends('frontend.base')

@section('content')
<section class="site-section py-lg">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">
          <img src="{{ asset($article->image()) }}" alt="Image" class="img-fluid mb-5">
           <div class="post-meta">
                      <span class="author mr-2"><img src="{{ storage_url($article->user->image) }}" alt="Colorlib" class="mr-2"><a href="{{route('auther.articles',$article->user)}}">{{$article->user->username }}</a></span>&bullet;
                      <span class="mr-2">{{ $article->created_at()->diffForHumans() }} </span> &bullet;
                      <span class="ml-2"><span class="fa fa-book"></span><strong class="p-1" style="color: blue; ">{{ $article->min_to_read() }}</strong> Mins Read </span>
                    </div>
          <h3 class="mb-4">  {{ $article->title() }}</h3>


          <div class="post-content-body">
            <p>
               {{ $article->excerpt() }}
            </p>
          <p>
            {{ $article->body() }}
          </p>


          </div>


          <div class="pt-5">
            <p>Article Tags:  <a href="#">Food</a>, <a href="#">Travel</a>  Category: <a href="#">#manila</a>, <a href="#">#asia</a></p>
          </div>


          <div class="pt-5">
            <h3 class="mb-5">6 Comments</h3>
            <ul class="comment-list">
                @include('includes.article_comments')
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="p-5 bg-light">




                <div class="form-group">
                  <label for="message">Comment</label>
                  <textarea name="" id="message" cols="10" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Publish Comment" class="btn btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">

          <!-- END sidebar-box -->
          <div class="sidebar-box search-form-wrap">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>
          <!-- END sidebar-box -->
          <div class="sidebar-box">
            <div class="bio text-center">
              <img src="{{ storage_url($article->user->image) }}" alt="{{$article->user->username }}" class="img-fluid">
              <div class="bio-body">
                <h2>{{$article->user->username }}</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                <p><a href="{{route('auther.articles',$article->user)}}" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                <p class="social">
                  <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                </p>
              </div>
            </div>
          </div>

         {{--@include('shared.popularposts')---}}


          @include('shared.categories')


          @include('shared.tags')
        </div>
        <!-- END sidebar -->

      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mb-3 ">Related Articles</h2>
        </div>
      </div>
      <div class="row">
       @include('includes.related_articles')
      </div>
    </div>


  </section>
@endsection
