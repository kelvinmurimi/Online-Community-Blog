@extends('frontend.base')
@section('content')
<section class="site-section pt-5">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-6">
          <h2 class="mb-4">Category: Food</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <div class="row mb-5 mt-5">

           @include('includes.articlelist')
          </div>

          @include('common.paginationlinks')

          

        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
            @include('shared.bestauther')
           
            @include('shared.popularposts')
          
  
            @include('shared.categories')
            
  
            @include('shared.tags')

      </div>
    </div>
  </section>
@endsection