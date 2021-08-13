 <footer class="bg-dark">
      <div class="bg-primary py-5 text-white animated wow fadeInUp">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">705</h6>
                <p class="ml-3 flex-grow-1 text-uppercase mb-0">Projects completed</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">809</h6>
                <p class="ml-3 flex-grow-1 text-uppercase mb-0">Satisfied customers</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">354</h6>
                <p class="ml-3 flex-grow-1 text-uppercase mb-0">Awards recieved</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">35</h6>
                <p class="ml-3 flex-grow-1 text-uppercase mb-0">Years of experience</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg_1 text-white">
        <div class="container">
          <div class="row py-5">
            <div class="col-lg-4 col-md-6 animated wow fadeInUp" style="padding-right: 50px;"><img class="mb-4" src="img/logo-white.svg" alt="" width="200">
              <p class="mb-4">orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
            
            </div>
            <div class="col-lg-2 col-md-6 animated wow fadeInUp">
              <h5 class="mt-3 mb-4">QUICK LINKS</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a class="footer-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
                <li class="mb-2"><a class="footer-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> About us</a></li>
                <li class="mb-2"><a class="footer-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Services</a></li>
                <li class="mb-2"><a class="footer-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Our Industry </a></li>
                <li class="mb-2"><a class="footer-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contacts</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 animated wow fadeInUp"  style="padding-left: 30px;">
              <h5 class="mt-3 mb-4">OUR SERVICES</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a class="footer-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Make Appointment</a></li>
                <li class="mb-2"><a class="footer-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Customer Services</a></li>
                <li class="mb-2"><a class="footer-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Department Service</a></li>
                <li class="mb-2"><a class="footer-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Our Case Studies</a></li>
                <li class="mb-2"><a class="footer-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Free Consultation</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 animated wow fadeInUp">
              <h5 class="mt-3 mb-4">CONTACT INFO</h5>
               <p class="mb-1"><i class="fas fa-envelope mr-3 text-primary fa-fw"></i><span class="">info@Construction.com</span></p>
              <p class="mb-1"><i class="fa fa-phone mr-3 text-primary fa-fw" style="transform: rotate(90deg);"></i> <span class="">+535 421 895 6523</span></p>
              <p class="mb-1" style="display: flex;align-items: baseline;"><i class="fas fa-map-marker-alt mr-3 text-primary fa-fw"></i><span class="">1798 Pretty View Lane, California, Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016</span></p>
            </div>
          </div>
        </div>
      </div>
      <!--<div class="bg-darker py-4 ">

          <p class="mb-0 text-muted text-small">&copy; Copyright  <b>Consultive</b>  All rights reserved. </p>
        </div>-->
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="http://hangoverstudios.com/js/easing.js"></script>
	
    <script>
	$(document).ready(function(){		
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			//alert();
        $('.wow').removeClass('slideInRight'); 
        $('.wow').removeClass('slideInLeft'); 
    }

	//wow.js init
	wow = new WOW(
	    {
		  animateClass: 'animated',
		  mobile: false,
		  offset: 100
		}
	);
	wow.init();

}); 
        // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 	
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>