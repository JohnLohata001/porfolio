<?php
if(!session_id());
session_start();
include('language.php');

// $en_select = '';
// $gr_select = '';
// $language = '';

if (isset($_GET['Lang'])) {

    $language = $_GET['Lang'];
    $_SESSION['langue'] = $language;

} else if(isset($_SESSION['langue'])){   

    $language=$_SESSION['langue'];
}else
    $language='en';

if ($language <> 'en' And $language <> 'gr') {
    include('./404.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/animatecss/animate.min.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Martel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Notable&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Notable&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&family=Euphoria+Script&family=Farsan&family=Italianno&family=Roboto&family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Satisfy&display=swap" rel="stylesheet">
    <title>TECHDEVEINFO</title>
</head>

<body>
    <div class="col-lg-12 bg-dark text-light py-1 top-line">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="mailto:info@techdeveinfo.com" class="email">
                        <i class="fas fa-envelope mr-2"></i> info@victorycenterathens.com
                    </a>
                </div>
                <div class="col-lg-4">
                    <span class=""> <i class="fas fa-phone mr-1"></i> + 30 697 811 1023</span>
                </div>
                <div class="col-lg-4">
                    <div class="col-md-12 col-lg-12" id="link">

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/johnlohata.kalonda/" target="_blank" class="fb-ic">
                            <i class="fab fa-facebook-f white-text  mr-4"> </i>
                        </a>           
                       
                        <!--Linkedin -->
                        <a href="https://www.linkedin.com/in/johnlohata/" target="_blank" class="li-ic">
                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="#" class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ navbar ========================= -->
    <nav class="navbar navbar-expand-md" id="navbar">
        <!-- Brand -->
        <div class="container">
            <a class="navbar-brand" href="index.php?767013ce0ee0f6d7a07587912eba3104cfaabc15=home"><img src="./assets/images/img/logo_tdi.png"></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">                
                <i class="fas fa-bars" style="color:white;font-size:22px"></i>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto pr--5">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><?= $top_nav[$language]['0'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><?= $top_nav[$language]['1'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php"><?= $top_nav[$language]['2'] ?></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="index.php?767013ce0ee0f6d7a07587912eba3104cfaabc15=tutos"><?= $top_nav[$language]['3'] ?></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><?= $top_nav[$language]['4'] ?></a>
                    </li>
                    &nbsp;&nbsp;&nbsp;                    
                    <li class=""><div>
                        <ul class="ul_lang">
                            <li>
                                <a href="?Lang=en" class="li_lang">En</a>
                                <a href="?Lang=gr">Gr</a>
                            </li>
                          
                        </ul>
                    </div>
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>