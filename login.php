<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from users where username='$username' AND password='$password'";
    //$sql = "SELECT * from `users` WHERE username= '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: welcome.php");

    } 
    else{
        
        $showError = "Invalid credentials";
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>HopeHome-Login</title>

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
    <?php
    if($login){
    echo ' <div id="alertstop">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div id="alertgo" style="color: #8B0000">
        <strong>Error!</strong> '. $showError.'
        
    </div> ';
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center" style="color:#695F69;">Login to HopeHome</h1><br>
     <form action="/webs/login.php" method="post">
        <div class="form-group">
            <label style="color:#695F69;" for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label style="color:#695F69;" for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
       
         
        <button type="submit" class="btn btn-primary">Login</button><br>
        <label style="color: #171717">
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br>
      <span class="psw"><a style="color: #00008B" href="#">Forgot password?</a></span>
<br>
     </form>
    </div>



    <footer class="panel-footer">
  <div class="container">

    <div class="text-center">&copy; HopeHome 2021</div>

  </div>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>