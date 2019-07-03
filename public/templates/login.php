<?php
session_start();
?>
<?php

require_once('../../private/initialize.php'); 
$title="LogIn";
$_SESSION['status']="LOGIN";
?>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{

  LogIn();
  $_SESSION['status']="LOGOUT";
}
?>

<?php

include('header.php')
?>

  <header>
  <section class="header-content">
    <h1 class="header-title rocky-dashed animate-pop-in" style="font-family: sans-serif;font-size: 50px; font-weight: 1500px; ">Q.me</h1>
    <h1 class="header-title animate-pop-in">Have a Question?</h1>
  <div class="animate-pop-in"  style="animation-delay: 1s; width: 370px; height: 340px; perspective: 1000">
  
        
          <div >
         
            <div class="myform form  " >
              <div class="logo mb-3">
                <div class="col-md-12 text-center">
                  <h1>Login Now!</h1>
                </div>
              </div>
              <form action="login.php" method="post" name="login">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                    <input type="email" name="username"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" >
                </div>
               
                <div class="col-md-12 text-center ">
                  <input type="submit" value= 'login' name="login" class=" btn btn-block mybtn btn-primary tx-tfm">
                </div>
              </form>
              <div class="col-md-12 text-center ">
                  <a  id="loginButton" href="signup.php" ><h3>New User?</a>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>
  
     
  <div style= 'padding: 58px'
     class="header-button animate-pop-in" ><a href="signup.php" class="button" style= "padding: 10px; background:#269300;border-radius:.25em;color:#fff;display:inline-block;padding:.25em .5em;margin:0 auto;text-align:center"><b>Get started today</b></a>
  </div>
  </section>
</header>
<?php
include('footer.php');
?>