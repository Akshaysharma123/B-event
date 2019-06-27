@extends('front.layout.master')
@section('content')


    <div class="container-fluid no-pad">
                  <section class="first-fold signature-hans fullheight1 about-bg parallax" data-stellar-background-ratio="0.5">
                    <div class="fullheight1 trans-dark-overlay text-center">
                      <div class="valign">
                        
                          <section class="main-heading">
                              <h1 class="white font3bold">About Us</h1>
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
  
      <div class="inner-wrap container-fluid no-pad">
        
        <section class="container">
          <div class="row add-top">

          <!-- <div class="col-md-6 text-right">
                  <h4 class="font3bold dark">About Us</h4>
                    <div class="liner-small color-bg"></div>
                  <p class="grey">B Events Network  was incorporated to be that fresh breath of life in the events industry. We desire to break out of the formulaic character of Singapore's events industry by rethinking the usage of available inventories, talents & technologies. <br> 
                          For us, events go beyond the actual day itself. We’re invested in getting to know you and working together to stretch imaginative capacities and expectations of what shows should be, or can be like.  <br>
                          We aim to make memories for you and your audience that go beyond the technicalities of the show, to firsthand relationships and the long-lasting pleasures only truly outstanding shows can arouse.</p>
              </div> -->
              <div class="col-md-6 text-left ">
                    <img data-no-retina alt="" title="" class="img12"  src="{{ asset('images/about_11.png') }}"/>
             </div>

              <article class="col-md-6 text-left">
                  <h4 class="font3bold dark">About Us</h4>
                    <div class="liner-small color-bg"></div>
                  <p class="grey">B Events Network  was incorporated to be that fresh breath of life in the events industry. We desire to break out of the formulaic character of Singapore's events industry by rethinking the usage of available inventories, talents & technologies. <br> 
                        For us, events go beyond the actual day itself. We’re invested in getting to know you and working together to stretch imaginative capacities and expectations of what shows should be, or can be like.  <br>
                        We aim to make memories for you and your audience that go beyond the technicalities of the show, to firsthand relationships and the long-lasting pleasures only truly outstanding shows can arouse.</p>
              </article>
          </div>

          <div class="row add-top">
<!-- 
          <div class="col-md-6 text-left ">
                    <img data-no-retina alt="" title="" class="img122"  src="{{ asset('images/about_2.png') }}"/>
             </div> -->



            <article class="col-md-12 text-left">
                <h4 class="font3bold dark">Our Philosophy
                </h4>
                  <div class="liner-small color-bg"></div>
                <p class="grey">We are adamant in creating memorable show experiences.  
                    As events professionals, we understand that our clients and their guests commit an irrevocable investment of time that cannot be returned. Hence, it is important to us that you and your guests walk away feeling satisfied, with an unforgettable experience. <br>
                    Exceptional ideas require innovative approaches and a tenacious spirit in order to make them a reality. We materialise these ideas by tirelessly analysing and creatively combining existing inventories, talents and technologies that seek to deliver maximum impact within your event budget. 
                    <br> 
                    At the core of every event is the essence of originality that we develop hand in hand with you, making each B Events project an unique one.</p>
            </article>

           
        </div>
        <div class="row add-top">
            <article class="col-md-12 text-left">
                <h4 class="font3bold dark">Creative Director: <span class="grey">Benjamin Tan</span>
                </h4>
                  <div class="liner-small color-bg"></div>
                <p class="grey">Since 2007, Benjamin began his endeavour in events when he started out as a young dancer, participating in events & productions. He later moved onto choreography and directed shows alongside Ng Chee Yang, Singapore’s first Campus Superstar, under the music & performing group, Gefang Music Academy.    <br> 
                    During his tenure in the National University of Singapore, he produced & directed an original sell-out dance production in his final year. Upon graduation, he was presented with the ‘Most Outstanding Resident Award (Kent Ridge Hall)’ for his excellence in academia, culture, sports and leadership. Benjamin was also an honoured recipient of the NUS Student Achievement Award for 3 consecutive years.    <br> 
                    Following that, he was headhunted to be onboard Jack Neo’s creative team for the 2-part movie series, The Lion Men. Benjamin worked alongside the directors and actors to create some of the choreography intensive and visually impactful scenes.     <br> 
                    In 2013, Benjamin started his career as a professional events producer. With his experience in creative & production works, he has since created numerous refreshing events & shows for his corporate and private clients. Some of these satisfied clients include Prudential Singapore, Standard Chartered Bank, Parkway Pantai Limited, Diary Farm Singapore & Housing Development Board.   <br>  
                    Benjamin is currently on a promising endeavour in national level events. He was the Show Director for the Home Team Show & Festival in 2017 and is the Show Producer for National Day Parade 2018 and 2019</p>
            </article>
           
        </div>
        </section>
        
    
        <section class="call-to-action signature-hans call-to-action-bg add-top parallax" data-stellar-background-ratio="0.5">
        <div class="trans-color-overlay pad-top pad-bottom">
          
          <div class="row">
              <article class="col-md-12 text-center"> 
                  <h3 class="black font3bold">INTERESTED IN OUR SERVICES?</h3>
                    <div class="liner-small color-bg"></div>
                   <h6 class="dark font3bold">Let's start working</h6>
                   <a href="#register-popup" class="btn btn-signature btn-signature-hans btn-signature-dark">Request Quote</a>
              </article>
          </div>
        </section>
    </div>


    <!-- popup for register -->
<div id="register-popup" class="popup-effect">
	<div class="popup">
		<h5 class="modal-title text-uppercase">B Event Network</h5>
		<div class="lregister-form">
		
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
	
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
@endsection