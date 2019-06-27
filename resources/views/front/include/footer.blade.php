 <!-- FOOTER
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <footer class="mastfoot signature-hans">
      <div class="container-fluid">

        <div class="row">
              <div class="col-md-6 text-left">
                    <img class="img-fluid" alt="" title=""   src="{{ asset('images/logo_footer.png') }}"/>
             </div>

              
               <div class="col-md-6 text-right">
                  <h2 id ="ipm3">Get In Touch</h2>
                  <br>
                  <p id ="ipm3">50 Tuas Ave 11, #02-15, Tuas Lot, Singapore 63910<br>
                      (65) 9766 9927<br>
                       hello@beventsnetwork.com</p>
                  </div>

            </div>

        
        
         <div class="row add-top-quarter">
              <ul class="foot-social col-md-12 social-w3pvt-footer text-center">
                <li><a target="_blank" href="https://www.facebook.com/b.eventsnetwork/"><img data-no-retina alt="" title="" src="{{ asset('images/social/01.svg') }}"/></a></li>|||
                <li><a target="_blank" href="https://www.instagram.com/b.eventsnetwork/"><img data-no-retina alt="" title="" src="{{ asset('images/social/02.svg') }}"/></a></li>
                
              </ul>
         </div>
        <div class="cpy-right text-center py-3">
		<p class="font3 dark">Copyright &copy; {{Carbon\Carbon::now()->format('Y')}} ||   <a target="" href="http://www.beventsnetwork.com/">{{env('APP_NAME')}}</a></p>
	</div>

      </div>
    </footer>

    <!-- end : mastfoot -->

<!-- 
    <div class="row add-top-quarter">
              <article class="credits col-md-12  text-center">
                  <p class="font3 dark">Copyright &copy; {{Carbon\Carbon::now()->format('Y')}} <a target="" href="http://www.beventsnetwork.com/">{{env('APP_NAME')}}</a></p>
              </article>
        </div> -->