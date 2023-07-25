@extends('frontend.base')

@section('content')
<section class="site-section py-lg">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">
          <img src="{{ asset($article->image()) }}" alt="Image" class="img-fluid mb-5">
           <div class="post-meta">
                      <span class="author mr-2"><img src="{{ asset('wordify/images/person_1.jpg') }}" alt="Colorlib" class="mr-2"> Colorlib</span>&bullet;
                      <span class="mr-2">{{ $article->created_at()->diffForHumans() }} </span> &bullet;
                      <span class="ml-2"><span class="fa fa-book"></span><strong class="p-1" style="color: blue; ">{{ $article->min_to_read() }}</strong> Mins Read </span>
                    </div>
          <h1 class="mb-4">  {{ $article->title() }}</h1>
          <a class="category mb-5" href="#">Food</a> <a class="category mb-5" href="#">Travel</a>

          <div class="post-content-body">
            <p>
               {{ $article->excerpt() }}
            </p>
          <p>
            {{ $article->body() }}
          </p>


          </div>


          <div class="pt-5">
            <p>Article Tags:  <a href="#">Food</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
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
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
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
          @include('shared.bestauther')

          @include('shared.popularposts')


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
