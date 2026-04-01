<?php include "includes/header.php";?>
<?php //include('formContact/emptyContact.php'); ?>
<!-- ========================== slider =========================== -->


<style> .bg { border: solid 1px rgba(241, 2, 2, 0.4);} #nameErr{padding:10px 20px;border: solid 1px rgb(143, 5, 5); color: rgb(143, 5, 5);background: rgba(202, 130, 130, 0.1);border-radius: 5px;}#nameErr li{list-style: square;}</style>
<section class="googleMap px-0 m-0">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.7365654834266!2d23.72951551493082!3d38.006604679717846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1a2c441f16f8d%3A0x6955a2e248a4b2d0!2sFolegandrou%201%2C%20Athina%20112%2053!5e0!3m2!1sen!2sgr!4v1591588054034!5m2!1sen!2sgr" width="100%" height="450" frameborder="0" style="border:0;margin-top:-18px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  <hr>
</section>
<section class="contact">
  <div class="adress">
    <header>Our Location</header>

    <div class="adress-label"> <i class="fas fa-home"></i>  Folegandrou 1, Athina 112 53</div>
    <div class="adress-label"><i class="fas fa-envelope"></i> info@victorycenterathens.com</div>
    <div class="adress-label"><i class="fas fa-phone"></i>  30 697 811 1023</div>
  </div>
  <div class="wrapper">
    <header>Send us a message</header>
    <form>
        <div class="dbl-field">
            <div class="field">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <i class="fas fa-user"></i>
            </div>
            <div class="field">
                <input type="text" name="email" id="email" placeholder="Enter your email">
                <i class="fas fa-envelope"></i>
            </div>
        </div>
        <div class="dbl-field">  
            <input type="text" name="subject" class="subject" placeholder="Enter your website">
        </div>
        <div class="message">
            <textarea placeholder="write your message" name="message"></textarea>
            <i class="material-icons">message</i>
        </div>
        <div class="button-area">
            <button type="submit" id="sendMail">Send Message</button> <br>
            <span id="resp_mes">Sending Message</span>                       
        </div>

        
    </form>

  </div>
        
        
       <!-- <script src="js/script.js"></script>  -->
</section>






<script>

  const text_name = document.getElementById('name');
  const btn_send = document.getElementById('sendMail');

  function test(e) {

    btn_send.addEventListener('click', function (e) {

      e.preventDefault();
      console.log('yes you clicked me');
      
    });
    
  }
  


</script>

<!-- <script src="js/jquery.min.3.5.1.js"></script>
<script src="js/main.js"></script> -->
<?php include "includes/footer.php";?>


