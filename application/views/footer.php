                <!--== 7. Contact ==-->
        <section id="contact" class="contact">
            <div class="container-fluid color-bg" style="padding: 0;">
                <div class="col-md-8 col-md-offset-5">
                    <img src="<?php echo base_url("assets/images/Logo.png"); ?>" class="img-responsive" style="width: 200px; height: 200px; margin-top: 50px;">
                </div>

                <div class="row dis-table col-md-12"> 
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title" style="text-align: right;">Hubungi Kami</h2>
                    </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell">
                    <div class="section-title">
                        <h4>Jl. Melati No.10 Purwosari (Utara RS. Kasih Ibu)</h4>
                        <h4>085 225 316 125 (AAN)</h4>
                        <h4>DM / COMENT IG</h4>
                    </div>
                </div>
                </div>
                <div>
                    <img src="<?php echo base_url("assets/images/he.png"); ?>" class="img-responsive" style="width: 100%; height: 20px; -webkit-transform: scaleY(-1);
  transform: scaleY(-1);">
                </div>
            </div>
        </section>

        <footer style="background-color: black">  
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row" style="height: 70px">
                            <div class="copyright text-center" style="margin-top: 20px">
                                <p style="color: white">
                                    &copy; Copyright, 2019 <a href="#" style="color: orange">Lembaga Studi Desain.</a> Theme by <a href="#" style="color: orange" target="_blank">Lestude</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/owl.carousel.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.mixitup.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/wow.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/jquery.validate.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.hoverdir.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery.scrollSpeed.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/script.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/lightbox-plus-jquery.min.js"); ?>"></script>
        <script type="text/javascript">
 
            // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar-brand-centered");

var image = document.getElementById("logo-h");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= 300) {
    navbar.classList.add("sticky")
    image.classList.remove("hide-image")
  } else {
    navbar.classList.remove("sticky");
    image.classList.add("hide-image")
  }
}
        </script>
        
    </body>
</html>