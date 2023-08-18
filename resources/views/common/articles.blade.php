<section class="site-section py-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">Latest Articlesg</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <div class="row">
            @include('shared.articlelist')
          </div>

          <div class="row mt-5">
            {{ $articles->links('pagination::bootstrap-4') }}
          </div>






        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">

          <!-- END sidebar-box -->

          <!-- END sidebar-box -->
          @include('shared.categories')
          <!-- END sidebar-box -->
          @include('shared.tags')

        <!-- END sidebar -->

      </div>
    </div>
  </section>
