<div class="sidebar-box">
    <h3 class="heading">Categories</h3>
    <ul class="categories">
     @foreach ($categories as $category)
       <li><a href="{{ route('categories.articles',$category->id) }}">{{ $category->name }}<span>({{ $category->article->count()}})</span></a></li>
     @endforeach


    </ul>
  </div>
