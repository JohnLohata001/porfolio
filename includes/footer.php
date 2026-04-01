<footer class="page-footer font-small unique-color-dark" id="footer">

    <div style="background-color: #17a2b8;">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-2 d-flex">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 text-white">
                    <h6 class="mb-0" data-aos="fade-right" data-aos-delay="300">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right text-white  pt-2" id="link">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4" data-aos="fade-left" data-aos-delay="300"> </i>
                    </a>
                    <!-- Twitter -->
                    <!-- <a class="tw-ic">
          <i class="fab fa-twitter white-text mr-4"> </i>
        </a> -->
                 
                    <!--Linkedin -->
                    <a  href="https://www.linkedin.com/in/johnlohata/" target="_blank" class="li-ic">
                        <i class="fab fa-linkedin-in white-text mr-4" data-aos="fade-left" data-aos-delay="900"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram white-text" data-aos="fade-left" data-aos-delay="1200"> </i>
                    </a>

                </div>
                <!-- Grid column -->


                <!-- Grid row-->

            </div>
        </div>
        <hr class="line_extrat">
    </div>

    <!-- Footer Links -->
    <div class="container text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold"><img src="./assets/images/img/logo_tdi.png"></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px">
                <p>

                    Good management technique is in the mind of a good manager,
                    it's the head that does everything

                </p>
                <!-- <div class="input-group mb-3">
                    <input type="email" class="form-control" id="txtEmail" placeholder="Your Email" required>
                    <div class="input-group-append">
                        <span id="subinfo" class="input-group-text btn btn-info">Subscribe</span>
                    </div>
                </div> -->
                <span id="sender"></span>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Products</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-angle-right"></i>&nbsp;<a href="#!">Dynamic Website</a>
                </p>
                <p>
                    <i class="fas fa-angle-right"></i>&nbsp;<a href="#!">Shopping Cart</a>
                </p>
                <p>
                    <i class="fas fa-angle-right"></i>&nbsp;<a href="#!">E-commerce</a>
                </p>
                <p>
                    <!-- <a href="#!">Management</a> -->
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                <i class="fas fa-angle-right"></i>&nbsp;<a href="contact.php">Support Us</a>
                </p>
                <p>
                <i class="fas fa-angle-right"></i>&nbsp;<a href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a href="./admin">Singup</a>
                </p>
                <p>
                <i class="fas fa-angle-right"></i>&nbsp;<a href="index.php?767013ce0ee0f6d7a07587912eba3104cfaabc15=privacy">Private Policy</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 last-div">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home"> &nbsp;Folegandrou 1, Athina 112 53</i>                     
                </p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> info@victorycenterathens.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> + 30 697 811 1023</p>
                <p>
                    <!-- <i class="fas fa-print mr-3"></i> + 30...</p> -->
                <div class="move-up">
                    <span><i class="fas fa-arrow-circle-up fa-2x"></i> </span>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" id="footer-down">Copyright ©
        <a href="#">techdeveinfo.com</a><span>&nbsp;<?= date('Y'); ?></span>
    </div>
    <!-- Copyright -->
    <!-- Go Up -->


</footer>





</div>
<!-- =========x======= section 3 ==============x=========== -->

<!-- =========x======= end main 3 ==============x=========== -->



<!-- <br><br><br><br><br><br><br><br><br><br> -->
<!-- ================ footer ==============x=========== -->



<!-- Footer -->
<script src="./assets/js/aos.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/topUp.js"></script>
<script src="./assets/js/main.js"></script>
<script>

    $(document).ready(function() {

            AOS.init();

            // click to scroll up

            $('.move-up span').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
            });
    


        // =============================================

            function set_language() {
                // var language = jQuery('#language').val();
                // window.location.href = 'http://techdeveinfo.com/?language=' + language;
                // window.location.href = 'index.php?language=' + language;
            }
        // ============ function to send email ================================

            $('#sendMail').on('click', function(e) {

                // e.preventDefault();
                
                // if (!$('#name').val()) {

                //     console.log('not filled');

                    // $('#resp_mes').html('<p class="text-danger text-center"><i>Put your email please</i></p>');
                // } 
                // else {
                //     $('#sender').html('<p class="text-info text-center"><i>Thnak for sending your email</i></p>');
                // }
                // setTimeout(function() {
                //     $('#sender').html('');
                // }, 3000)

            });



    });
</script>
</body>

</html>



<!-- <div class="container">
<div class="row">

  <div class="col-lg-4 md-4">
    <a href="mailto:info.techdeveinfo.com" class="email">
      <i class="fas fa-envelope mr-2"></i> info@techdeveinfo.com
    </a>          
  </div>

  <div class="col-lg-4 md-4">
  <span> <i class="fas fa-phone mr-1"></i> + 30 234 567 88</span>
  </div>

  <div class="col-lg-4 md-4 ml-auto">
    <div class="col-md-12 col-lg-12 text-center text-md-right" id="link">    
      <-- Facebook -->
<!-- <a href="#" class="fb-ic">
        <i class="fab fa-facebook-f white-text mr-4"> </i>
      </a>             
      <a href="#" class="gplus-ic">
        <i class="fab fa-google-plus-g white-text mr-4"> </i>
      </a>
      <a href="#" class="li-ic">
        <i class="fab fa-linkedin-in white-text mr-4"> </i>
      </a>
      <a href="#" class="ins-ic">
        <i class="fab fa-instagram white-text"> </i>
      </a>

    </div>
  </div>
</div>
</div>  -->