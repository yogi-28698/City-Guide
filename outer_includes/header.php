<?php
     session_start();
?>

<section class="title">

<div class="container-fluid">

<!-- Nav-Bar -->

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="./index.php">City Guide</a>
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
          <a class="nav-link" href="Login_Register/login.php" style = "color:#FFF;">
            <?php
                include 'Login_Register/includes/login-inc.php';
                //$_SESSION['sessionUser'] = "Yogesh Verma";
                // if (!isset($_SESSION['sessionId']))
                //     $userName = "Yogeh Verma";
                // else
                //     $userName = $_SESSION['sessionUser'];
                //$_SESSION['sessionUser'] = $username;
                if (isset($_SESSION['sessionId']) && isset($_SESSION['sessionUser'])) {
                    echo "Hello " . $_SESSION['sessionUser'];
                    
                } else {
                    echo "Login";
                }

                //echo $_SESSION['sessionId'];

            ?>
          </a>
        </li>
        <?php
                 if (isset($_SESSION['sessionId']) && isset($_SESSION['sessionUser']))  {
                    echo "<li class='navbar-item'>
                    <a class='nav-link' href='Login_Register/login.php'>Logout</a>
                    </li>";
                 }
        ?>
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