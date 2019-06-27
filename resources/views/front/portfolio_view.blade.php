@extends('front.layout.master')
@section('content')

    <div class="container-fluid no-pad">
      <section class="first-fold signature-hans fullheight1 portfolio-bg parallax" data-stellar-background-ratio="0.5">
        <div class="fullheight1 trans-dark-overlay text-center">
          <div class="valign">
            
              <section class="main-heading">
                  <h1 class="white font3bold">Portfolio</h1>
                  <div class="liner color-bg"></div>
                  <h4 class="white font3light">Let’s start something Brilliant together!</h4>
              </section>

          </div>

        </div>
      </section>
      </div>

        <!-- page details -->
        <div class="breadcrumb-w3pvt">
                    <ol class="breadcrumb mb-0 text-center">
                      <li class="breadcrumb-item">
                        <a href="{{route('/')}}">Home</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                  </div>
                  <!-- //page details -->
      <!-- <header class="masthead signature-hans">
      <div class="container-fluid"> 
        <div class="row">
          
            <article class="col-md-6">
                  <a href="{{route('/')}}"><img alt="" title="" src="{{ asset('images/logo.png') }}"></a>
            </article>
            <article class="col-md-6">
                  <div class="menu-notification">
                      <a class="font3bold" href="#"><span class="ion-android-menu black"></span></a>
                  </div>                  
                  <div class="filter-notification signature-hans hidden">
                      <a class="font3bold" href="#"><span class="ion-shuffle black"></span></a>
                  </div>
                  <div class="menu-close-notification">
                      <a class="font3bold" href="#"><span class="ion-android-close black"></span></a>
                  </div>
            </article>

        </div>
      </div>
    </header>
      <div class="inner-wrap container">
        <section class="project-title signature-hans dark-bg pad-top-quarter pad-bottom-quarter">
            <h1 class="font3bold white">{{$port->event_name}}</h1>
        </section>
       <section class="first-fold signature-hans fullheight">
           

              <section class="project01-carousel fullheight">
                 <section class="project-carousel-wrap signature-hans fullheight"> -->
              
                              <!-- Carousel -->
                              <div class="project-carousel signature-hans owl-carousel owl-nav-sticky-wide">

                                <div class="project-carousel-item project-01-carousel-item-01 fullheight text-center img-bg" style="background-image:url({{ asset('storage/uploads/portfolio/'.$port->banner) }})">
                                </div>
                                
                              
                                @if(count($additional)>0)
                                @foreach($additional as $add)
                                <div class="project-carousel-item project-01-carousel-item-03 fullheight text-center img-bg" style="background-image:url({{ asset('storage/uploads/portfolio/additionals/'.$add->path) }})">
                                    </div>

                                @endforeach
                                @endif
                                
                              </div>

                </section>
              </section>

      </section>
      
      
        
      <section class="hero-text add-top-half add-bottom">
        <div class="row">
            <article class="col-md-8"> 
                <h3 class="black font3bold">{{$port->event_name}}</h3>
                @if($port->event_address)
                  <div class="liner-small color-bg"></div>
                  <h6 class="grey font3bold">Event Address</h6>
                  <p class="grey add-top-quarter">{{$port->event_address}}</p>
                  @endif
                  @if($port->client_feedback)
                  <div class="liner-small color-bg"></div>
                 
                 <h6 class="grey font3bold">Clinet Feedback</h6>
                <p class="grey add-top-quarter">{{$port->client_feedback}}</p>
                @endif
            </article>
            @if($port->event_date)
            <article class="col-md-4"> 
                <ul class="project-spec signature-hans">
                 
                  <li class="font3bold black">Event Date: <span class="font3light dark">{{$port->event_date?Carbon\Carbon::parse($port->event_date)->format('d-m-Y'):null}}</span></li>
                </ul>
              
            </article>
            @endif
        </div>
      </section>


      </div>
    <!-- end : inner-wrap -->


     


@endsection