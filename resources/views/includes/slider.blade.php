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
                  
                  <span class="author mr-2"><img src="{{ asset('wordify/images/person_1.jpg') }}" alt="Colorlib"> Colorlib</span>&bullet;
                  <span class="mr-2">{{ $slider->created_at()->diffForHumans() }} </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  
                </div>
                <h3>{{ $slider->title() }}</h3>
                <p>{{ $slider->excerpt() }}</p>
              </div>
            </a>
          </div>
           @endforeach
           
          </div>
          
        </div>
      </div>
      
    </div>


  </section>