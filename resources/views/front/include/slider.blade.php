 <div class="inner-wrap container-fluid no-pad fullheight">
       <section class="first-fold signature-hans fullheight">


              <section class="home01-carousel signature-hans fullheight">
                 <section class="home-carousel-wrap fullheight">

                              <!-- Carousel -->
                              <div class="home-carousel signature-hans owl-carousel owl-nav-sticky-wide">
                             @foreach($sliders as $slider)
                                <div class="home-carousel-item home-01-carousel-item-01 fullheight text-center img-bg" style="background-image:url({{ asset('storage/uploads/slider/'.$slider->path) }})">
                                  <div class="valign">
                                    <div class="intro-caps text-center">
                                    @if($slider->main_text) <h3 class="color font3xblack">{{$slider->main_text}}</h3>@endif
                                      @if($slider->sub_text)<h5><span class="black designova_ss_xlight">{{$slider->sub_text}}</span></h5>@endif
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                              


                              </div>

                </section>
              </section>

      </section>







      </div>
    <!-- end : inner-wrap -->