@extends('front.layout.master')
@section('content')
 <div class="container-fluid no-pad">
      <section class="first-fold signature-hans fullheight1 contact-bg parallax" data-stellar-background-ratio="0.5">
        <div class="fullheight1 trans-dark-overlay text-center">
          <div class="valign">

              <section class="main-heading">
                  <h1 class="white font3bold"> Contact Us </h1>
                  <div class="liner color-bg"></div>
                  <h4 class="white font3light">Welcome to our creative design studio</h4>
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
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</div>
  <!-- //page details -->

      <div class="inner-wrap container add-top add-bottom">

      <section class="hero-text signature-hans">
        <div class="row">
            <article class="col-md-4">
                <h5 class="black font3bold">50 Tuas Ave 11, #02-15, Tuas Lot, Singapore 63910</h5>
                  <div class="liner-small color-bg"></div>
                  <h6 class="black font3bold">(65) 9766 9927
</h6>            <div class="liner-small color-bg"></div>
                 <h6 class=""><span class="" ><a href="http://hello@beventsnetwork.com">hello@beventsnetwork.com</span></h6>
               

                    <ul class="team-social1 add-top-quarter">
                      <li><a target="_blank" href="https://www.facebook.com/b.eventsnetwork/"><img data-no-retina alt="" title="" src="images/social/07.svg"/></a></li>
                      <li><a target="_blank" href="https://www.instagram.com/b.eventsnetwork/"><img data-no-retina alt="" title="" src="images/social/06.svg"/></a></li>
                    </ul>
            </article>
            <article class="col-md-8">

              <div class="contact-item">
                      @include('front.include.alert')
                      <form name="myform" id="contactForm" action="{{route('contact')}}"  method="post">
                      @csrf
                        <article>
                          <input type="text" placeholder="Your Name" id="name" name="name"  class="border-form white font4light" required="">
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
                     </form>
                  </div>




            </article>
        </div>
      </section>



      </div>
    <!-- end : inner-wrap -->





@endsection