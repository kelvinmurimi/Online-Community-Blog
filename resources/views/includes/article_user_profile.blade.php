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
      <img src="{{ storage_url($article->user->image) }}" alt="Image Placeholder" class="img-fluid">
      <div class="bio-body">
        <h2>{{$article->user->username }}</h2>
        <p></p>
        <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
        <p class="social">
          <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
          <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
          <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
          <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
        </p>
      </div>
    </div>
  </div>
