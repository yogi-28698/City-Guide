<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Guide</title>

    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/4c9dc53270.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">

     <!-- Bootstrap CSS -->
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>

<section class="title">

<div class="container-fluid">

<!-- Nav-Bar -->

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="./index.php">Kanpur City</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="navbar-item">
          <a class="nav-link" href="./contactus.html">Contact</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link" href="./about.html">About</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link" href="./index.php">Home</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link" href="Login_Register/login.php">
            <?php
                session_start();
                require_once 'Login_Register/includes/database.php';
                require_once 'Login_Register/includes/register-inc.php';

                if ($_SESSION['sessionId']) {
                    echo "You are Logged in!";
                } else {
                    echo "Login";
                }

            ?>
          </a>
        </li>
        <!-- <li class="navbar-item">
          <a class="nav-link" href="./index.html">Signup</a>
        </li> -->
      </ul>
    </div>

  </nav>

  <div class="row">
      <div class="col-lg-6">  
          <h1>A Path in Unknown</h1>
          <button type="button" class="btn btn-lg btn-outline-light btn-logo explore-button"><img src="HatchfulExport-All/telegram.png">  EXPLORE CITIES</button>
      </div>

      <div class="col=lg-6">
          <img id = "Logo" src = "HatchfulExport-All/logo_transparent.png" alt="Logo hai">
          <p id = "tag-line">Explore Places in Few Clicks</p>
      </div>
  </div>

</div>

</section>

<h1 style="text-align:center; margin:20px 0 20px 0">Explore Kanpur City</h1>

<?php
  include_once 'Maps/map_kanpur.php';
  include_once 'Comment/index.php'
  // include_once 'Comment/style_comment.css';
?>


<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./about.html">About</a></li>
                        <li><a href="#">Explore</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                  121, Clear Water Bay Road<br>
                  Clear Water Bay, Kowloon<br>
                  HONG KONG<br>
                  <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                  <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                  <i class="fa fa-envelope fa-lg"></i>:
                  <a href="mailto:confusion@food.net">confusion@food.net</a>

               </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                  <div class="text-center">
                      <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                      <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                      <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                      <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                      <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                      <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                  </div>
                </div>
           </div>
           <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2020 City Guide</p>
                </div>
           </div>
        </div>
    </footer>

</body>
</html>