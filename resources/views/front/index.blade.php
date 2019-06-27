@extends('front.layout.master')
@section('content')
@include('front.include.slider')
 <div class="container-fluid no-pad">


     <section id="works-container" class="works-container signature-hans works-masonry-container clearfix dark-bg works-thumbnails-view">

            @foreach($portfolios as $portfolio)
              <!-- start : works-item -->
              <div class="works-item signature-hans ImageWrapper works-item-one-fourth zoom ui web">
                      <img data-no-retina alt="" title="" class="img-responsive" src="{{ asset('storage/uploads/portfolio/'.$portfolio->banner) }}"/>
                      <a  class="venobox" data-gall="portfolio-gallery" href="{{ asset('storage/uploads/portfolio/'.$portfolio->banner) }}">
                          <div class="works-item-inner ImageOverlayNe">
                            <p class="valign text-center"><span class="white font3">{{$portfolio->event_name}}</span></p>
                          </div>
                      </a>
              </div>
              <!-- end : works-item -->
              @endforeach







            </section>
            <!-- end : works-container -->
      </div>

      <div class="container-fluid no-pad">

      <section class="color-bg">
      <div class="call-to-action pad-top pad-bottom">

        <div class="row">
            <article class="col-md-12 text-center">
                <h3 class="dark font3bold">INTERESTED IN OUR SERVICES?</h3>
                  <div class="liner-small white-bg"></div>
                 <h6 class="dark font3bold">Let's start working</h6>
                 <a href="#register-popup" class="btn btn-signature btn-signature-hans btn-signature-dark">Request Quote</a>
            </article>
        </div>
      </div>
      </section>


      </div>




<!-- popup for register -->
<div id="register-popup" class="popup-effect">
	<div class="popup">
		<h5 class="modal-title text-uppercase">B Event Network</h5>
		<div class="lregister-form">
		
      <article>
               <input  type="text" placeholder="Your Name" id="name" name="name"  class="border-form white font4light" required="">
      </article>
      <article>
               <input type="email" placeholder="Email Address" name="email" id="email"  class="border-form white font4light" required="">
      </article>
      <article>
                <textarea placeholder=" Message.." name="message" cols="40" rows="5" id="msg" class="border-form white font4light" required=""></textarea>
                <div class="btn-wrap  text-left">
                  <button class="btn btn-signature btn-signature-hans btn-signature-color" id="submit" name="submit" type="submit">Send Message</button>
                </div>
      </article>
	
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>



      @endsection