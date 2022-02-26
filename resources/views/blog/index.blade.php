<link rel="icon" type="image/x-icon" href="greenlogo.png">

@extends('layouts.blog')

@section('content')



<!-- Start of blog page section
        ============================================= -->
<section id="news-feed" class="news-feed-section">
  <div class="container">
    <div class="blog-feed-content">
      <div class="row">
        <div class="col-md-8">
        <?php $i = 0; ?>
            @foreach ($post as $posts)
          <div class="blog-feed-post">
            <div class="blog-feed-img-txt">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="saasio-blog-img">
                    <img src="{{ asset('storage/' . $post[$i]->image) }}" alt="">
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="saasio-blog-text">
                    <h3><a href="{{ route('blog.show', $post[$i]->slug) }}#">{{$post[$i]->title}}</a></h3>
                    <div class="saasio-post-meta">
                      <a href="#"><i class="fas fa-calendar-alt"></i> {{$post[$i]->created_at}}</a>
                    </div>
                    <p>{{$post[$i]->excerpt }}</p>
                    <a class="blog-read-more" href="{{ route('blog.show', $post[$i]->slug) }}">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <?php $i++; ?>
                     @endforeach

          <div class="saasio-pagination text-center ul-li">
            
            {{ $post->links("pagination::bootstrap-4") }}

           </div>
        </div>
        <div class="col-md-4">
          <div class="saasio-blog-sidebar">
            <div class="side-bar-widget">
              <div class="search-widget dia-headline">
                <h3 class="widget-title-2">Search</h3>

                <form action="{{ route('blog.search') }}" class="relative-position">
                  <input type="text"  placeholder="Search Here" name="q"value="{{ request()->q ?? '' }}">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </form>


              </div>
            </div>
            <div class="side-bar-widget">
              <div class="category-widget dia-headline ul-li-block" hidden>
                <h3 class="widget-title-2">Category</h3>
                <ul>
                <?php $i = 0; ?>
                @foreach ($category as $categorys)
                  <li><a href="#">{{$category[$i]->name }}</a></li>
                  <?php $i++; ?>
                     @endforeach
                </ul>
              </div>
            </div>
            <div class="side-bar-widget">
              <div class="category-widget dia-headline ul-li-block">
                <h3 class="widget-title-2">Recent Post</h3>
                <?php $i = 0; ?>
            @foreach ($post as $posts)
                <div class="recent-post-area">
                  <div class="recent-post-img-text">
                    <div class="recent-post-img float-left">
                      <img src="{{ asset('storage/' . $post[$i]->image) }}" alt="">
                    </div>
                    <div class="recent-post-text dia-headline">
                      <h3><a href="#">{{$post[$i]->title}}</a></h3>
                      <span class="rec-post-meta"><a href="#">{{$post[$i]->created_at}}</a></span>
                    </div>
                  </div>
               
                </div>
             <?php $i++; 
             if ($i>3) {
                break;
            }
             ?>
            
            @endforeach
              </div>
            </div>
            <div class="side-bar-widget">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of blog section
        ============================================= -->

@endsection