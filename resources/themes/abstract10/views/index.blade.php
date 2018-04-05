@extends('layouts.main')

@section('content')
<!-- masonry
   ================================================== -->
   <section id="bricks">

    <div class="row masonry">

        <!-- brick-wrapper -->
         <div class="bricks-wrapper">

            <div class="grid-sizer"></div>

            <div class="brick entry featured-grid animate-this">
                <div class="entry-content">
                    <div id="featured-post-slider" class="flexslider">
                        <ul class="slides">
                          @foreach ($featured_blogs as $blog)
                            <li>
                                <div class="featured-post-slide">

                                    <div class="post-background" style="background-image:url({{ asset($blog->featured_image) }});"></div>

                                    <div class="overlay"></div>

                                    <div class="post-content">
                                        <ul class="entry-meta">
                                                <li>September 06, 2016</li>
                                                <li><a href="#" >Naruto Uzumaki</a></li>
                                            </ul>

                                        <h1 class="slide-title"><a href="#" title="">{{ $blog->title }}</a></h1>
                                    </div>

                                </div>
                            </li> <!-- /slide -->
                            @endforeach
                        </ul> <!-- end slides -->
                    </div> <!-- end featured-post-slider -->
                </div> <!-- end entry content -->
            </div>

            @foreach ($blogs as $blog)
            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
                      <img src="{{ asset($blog->featured_image) }}" alt="building">
                  </a>
               </div>

               <div class="entry-text">
                <div class="entry-header">

                    <div class="entry-meta">
                        <span class="cat-links">
                            <a href="#">Design</a>
                            <a href="#">Photography</a>
                        </span>
                    </div>

                    <h1 class="entry-title"><a href="single-standard.html">{{ $blog->title }}</a></h1>

                </div>
                        <div class="entry-excerpt">
                          {{ str_limit($blog->content, $limit = 65, $end = '...') }}
                        </div>
               </div>

                </article> <!-- end article -->
            @endforeach


         </div> <!-- end brick-wrapper -->

    </div> <!-- end row -->

    <div class="row">

        <nav class="pagination">
              <span class="page-numbers prev inactive">Prev</span>
            <span class="page-numbers current">1</span>
            <a href="#" class="page-numbers">2</a>
              <a href="#" class="page-numbers">3</a>
              <a href="#" class="page-numbers">4</a>
              <a href="#" class="page-numbers">5</a>
              <a href="#" class="page-numbers">6</a>
              <a href="#" class="page-numbers">7</a>
              <a href="#" class="page-numbers">8</a>
              <a href="#" class="page-numbers">9</a>
            <a href="#" class="page-numbers next">Next</a>
          </nav>

    </div>

   </section> <!-- end bricks -->
@endsection
