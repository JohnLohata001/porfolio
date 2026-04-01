<?php  include("app/init.php");?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <link rel="stylesheet" href="pages/assets/styles/style.css">
    <!-- Boxicons CDN Link -->
    <link rel="shortcut icon" href="../assets/images/img/favicon.png" type="image/x-icon">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body> 
  <section class="login-section">
    <div class="header-login">
        <div class="head-header-login">
         
        </div>
    </div>
    <div class="login-content">
        <h1>Sign In</h1>
          <?php if(isset($_SESSION['sms'])){ echo $_SESSION['sms']; unset($_SESSION['sms']);}?>
        <div class="box-login">
        
            <form action="" method="post">
                <div class="input-txt">
                    <input type="email" class="input-text" name="email" value="<?=$email;?>" placeholder="E-mail or Username">
                </div>
                <div class="input-txt">
                    <input type="password" class="input-text" name="password" value="<?=$password;?>" placeholder=" Your password">
                </div>
                <div class="input-txt">
                    <button type="submit" name="btn-sigin" id="btn-signin">Sign In</button>
                </div>
            </form>           
                
               <?php if (count($errors) > 0): ?>
                  <div id="errors-msg">
                      <?php foreach($errors as $error ):?>
                          <li><?=$error;?></li>
                      <?php endforeach; ?>
                  </div>
              <?php else:?>
                <?php 
                    
                    
                ?>
              <?php endif;?>
                
        </div>
    </div>
      
  </section>


</body>
</html>
