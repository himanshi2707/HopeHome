<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists! Try another username.";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            
            $sql = "INSERT INTO `users` ( `username`, `password`, `date/time`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match!";
        }
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <title>HopeHome-SignUp</title>

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
              <li id="navHomeButton">
              <a href="index.html">
                <span class="glyphicon glyphicon-home"></span><br class="hidden-xs"> Home</a>
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
              <a href="/webs/tests.html">
                <span class="glyphicon glyphicon-certificate"></span><br class="hidden-xs"> Self Assessment Test</a>
            </li>
          </ul>
        </div> 
      </div>
    </nav>
  </header>
  <?php require 'partials/_nav.php' ?> 
     
    <?php
    if($showAlert){
    echo ' <div style="color: #42692F">
        <strong>Success!</strong> Your account is now created and you can login!
    </div> ';
    }
    if($showError){
    echo ' <div id="alertstop" style="color: #8B0000"><strong>Error! </strong>'. $showError.'
        
    </div> ';
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center" style="color:#695F69;"> SignUp to HopeHome</h1><br>
     <form action="/webs/signup.php" method="post">
        <div class="form-group">
            <label style="color:#695F69;" for="username">Username</label>
            <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label style="color:#695F69;" for="password">Password</label>
            <input type="password" maxlength="23" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label style="color:#695F69;" for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
     <br>
     
     <span style="color:#171717;" >Already have an account ? <a style="color:#00008B;" href=login.php >Login </a></span>
     <p style="color: #171717">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
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