<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/webs/index.html">Home</a></li>
      </li>';

      if(!$loggedin){
      echo '<li>
        <a href="/webs/login.php">Login</a>
      </li>
      <li>
        <a href="/webs/signup.php">Signup</a>
      </li>';
      }
      if($loggedin){
      echo '<li>
        <a href="/webs/logout.php">Logout</a>
      </li>';
    }
       
      
    echo '
  </div>
</nav>';
?>