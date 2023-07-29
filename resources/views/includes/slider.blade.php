<section class="site-section pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="owl-carousel owl-theme home-slider">
           @foreach ($home_slider as $slider)
           <div>
            <a href="{{ route('articles.show',$slider->slug()) }}" class="a-block d-flex align-items-center height-lg" style="background-image: url({{ asset($slider->image()) }}); ">
              <div class="text half-to-full">
                <span class="category mb-5">Food</span>
                <div class="post-meta">

                  <span class="author mr-2"><img src="{{ storage_url($slider->user->image) }}" alt="Colorlib"> Colorlib</span>&bullet;
                  <span class="mr-2">{{ $slider->created_at()->diffForHumans() }} </span> &bullet;
                  <span class="ml-2"><span class="fa fa-book"></span> {{ $slider->min_to_read }}Mins To Read</span>

                </div>
                <h5>{{ $slider->title() }}</h5>
                <p>{{ Str::limit($slider->excerpt(),100) }}</p>
              </div>
            </a>
          </div>
           @endforeach

          </div>

        </div>
      </div>

    </div>


  </section>
