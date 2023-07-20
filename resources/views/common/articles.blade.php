<section class="site-section py-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">Latest Articles</h2>
        </div>
      </div>
      <div class="row blog-entries">
       @include('shared.articlelist')

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
          <div class="sidebar-box search-form-wrap">
        
          @include('shared.bestauther')
           
          @include('shared.popularposts')
        

          @include('shared.categories')
          

          @include('shared.tags')
        </div>
        <!-- END tags -->

      </div>
    </div>
  </section>