<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}

?>





<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HopeHome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <script src="https://www.momentcrm.com/embed"></script>
<script>
  MomentCRM('init', {
    'teamId': 'hopehomechat',
    'doChat': true,
    'doTracking': true,
  });
</script>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
   
   <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
         <div class="navbar-header">
          <a href ="index.html" class="pull-left" >
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
             <li id="navHomeButton">
              <a href="index.html">
                <span class="glyphicon glyphicon-home"></span><br class="hidden-xs"> Home</a>
            </li>       
            <li class="">
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
              <a href="login.html">
                <span class="glyphicon glyphicon-log-in"></span><br class="hidden-xs"> Login/SignUp</a>
            </li>
            <li >
              <a href="achievements.html">
                <span class="glyphicon glyphicon-certificate"></span><br class="hidden-xs"> Achievements</a>
            </li>
          </ul>
        </div> 
      </div>
    </nav>
  </header>
  
  <!--End of main content-->
<?php

      if(!$loggedin){
      echo '
         
  <button style="width:auto;"><a href="login.php">Login</a></button>
<button style="width:auto;"><a href="signup.php">Signup</a></button>
      ';
      }
      if($loggedin){
      echo '
        <button style="width:auto;"><a href="logout.php">Logout</a></button>

      ';
    }
       
      ?>
  

<footer class="panel-footer">
  <div class="container">

    <div class="text-center">&copy; HopeHome 2021</div>

  </div>
</footer>






  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ajax-utils.js"></script>
  <script src="js/script.js"></script>
</body>
</html>

