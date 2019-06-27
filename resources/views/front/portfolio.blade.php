@extends('front.layout.master')
@section('content')

    <div class="container-fluid no-pad">
     

          </div>

        </div>
      </section>
      </div>
<section class="intro-01 signature-hans container-fluid no-pad">



 <section id="works-container" class="works-container signature-hans works-masonry-container clearfix white-bg works-thumbnails-view">

    @foreach($portfolios as $portfolio)
   
     {{-- <div class="works-item signature-hans ImageWrapper works-item-one-third-spaced zoom logos graphics">
              <img data-no-retina alt="" title="" class="img-responsive" src="{{ asset('storage/uploads/portfolio/'.$portfolio->banner) }}"/>
              <a  class="venobox" data-gall="portfolio-gallery" href="{{ asset('storage/uploads/portfolio/'.$portfolio->banner) }}">
                  <div class="works-item-inner ImageOverlayNe">
                    <p class="valign text-center"><span class="white font3">{{$portfolio->event_name }}</span></p>
                  </div>
              </a>
      </div>--}}




      <!-- start : works-item -->
       <div class="works-item signature-hans ImageWrapper works-item-one-third-spaced info branding">
              <img data-no-retina alt="" title="" class="img-responsive" src="{{ asset('storage/uploads/portfolio/'.$portfolio->banner) }}"/>
              <a  href="{{ route('portfolio.view',$portfolio->id) }}">
                  <div class="works-item-inner ImageOverlayNe">
                    <p class="valign text-center"><span class="white font3">{{$portfolio->event_name }}</span></p>
                  </div>
              </a>
      </div> 
      <!-- end : works-item -->
    @endforeach

      



    </section>
    <!-- end : works-container -->

</section>
@endsection