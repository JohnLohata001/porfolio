<?php include "includes/header.php";?>
</main> 
<main>
  <!-- ========================== slider =========================== -->
  <section class="slider-service">

    <div class="container">

      <h1 class="text-center text-shadow title-slider text-light" data-aos="fade-down" data-aos-easing="linear"><?=$service_session_1[$language][0]?></h1>
      <p class="text-center text-white" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"> <?=$service_session_1[$language][1]?></p>


    </div>

  </section>
  <!-- ===============x======== slider ============x=========== -->
  <section>
    <div class="container">

      <div class="service">
        <h1 style="font-family: 'Martel', serif;font-size:200%"><?=$service_session_1[$language][2]?></h1>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-4 text-center w3-animate-left" data-aos="zoom-in-left" data-aos-delay="100">
          <div class="icon">
            <i class="fa fa-desktop"></i>
          </div>
          <h3><?=$service_session_1[$language][3]?></h3>
          <p>
            <?=$service_session_1[$language][4]?>
          </p>
        </div>
        <div class="col-md-4 text-center w3-animate-up" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon">
            <i class="fa fa-mobile"></i>
          </div>
          <h3><?=$service_session_1[$language][5]?></h3>
          <p>
          <?=$service_session_1[$language][6]?> </p>
        </div>
        <div class="col-md-4 text-center w3-animate-right" data-aos="zoom-in-right" data-aos-delay="100">
          <div class="icon">
            <i class="fa fa-paint-brush"></i>
          </div>
          <h3><?=$service_session_1[$language][7]?></h3>
          <p>
          <?=$service_session_1[$language][8]?>
          </p>
        </div>

      </div>

      <div id="secretary_text" class="text-center text-danger" data-aos="zoom-in-right" data-aos-delay="400"></div>
    </div>
  </section>
</main>
<?php include "includes/footer.php";?>
<!-- ================ footer ==============x=========== -->
<script>
  var myText = "As programmer and web developer we are availabler to work with all companies that need programmers ";
  var myArray = myText.split("");
  var timeLooper;

  function loop() {
    if (myArray.length > 0) {
      document.getElementById("secretary_text").innerHTML += myArray.shift();
    } else {
      clearTimeout(timerLooper);
    }

    timerLooper = setTimeout('loop()', 100);
  }

  loop();
</script>
