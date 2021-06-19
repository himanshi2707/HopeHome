<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome - <?php $_SESSION['username']?></title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="css/styles.css">

  </head>
  <body>


    <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
         <div class="navbar-header">
          <a href ="index.html" class="pull-left " >
            <div id="logo-img" alt="Logo image"></div>
          </a>
         
         <div class="navbar-brand">
            <a href="index.html"><h1>HopeHome</h1></a>
            <p>
              <span class="glyphicon glyphicon-education"></span>
              <span>By IIIT Bhopal</span>
            </p>
          </div>
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      </div>

      <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
             <li id="navHomeButton" class="visible-xs active">
              <a href="index.html">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>  
            <li>
              <a href="services.html" onclick="">
                <span class="glyphicon glyphicon-heart"></span><br class="hidden-xs"> Services</a>
              </li>    
            <li id="navMenuButton">

              <a href="contactus.html" onclick="">
                <span class="glyphicon glyphicon-envelope"></span><br class="hidden-xs"> Contact Us</a>
            </li>
            <li>
              <a href="aboutus.html">
                <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About</a>
            </li>
            <li class="active">
              <a href="choice.php">
                <span class="glyphicon glyphicon-log-in"></span><br class="hidden-xs"> Login/SignUp</a>
            </li>
            <li>
              <a href="achievements.html">
                <span class="glyphicon glyphicon-certificate"></span><br class="hidden-xs"> Achievements</a>
            </li>
          </ul>
        </div> 
      </div>
    </nav>
  </header>


    <?php require 'partials/_nav.php' ?>
    
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4><br>
      <p>Hey how are you doing? Welcome to HopeHome. You are logged in as <?php echo $_SESSION['username']?>. Enter some more interesting text here for the user interest.</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="/webs/logout.php"> using this link.</a></p>
    </div>
  </div>
    <!-- Optional JavaScript -->


    <footer class="panel-footer">
  <div class="container">

    <div class="text-center">&copy; HopeHome 2021</div>

  </div>
</footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>