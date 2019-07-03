<?php

require_once('../../private/initialize.php');
session_start();
?>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
  {

    SignUp();
  }

?>
<?php
$_SESSION['status']="LOGIN";
$title='Register';
include('header.php');
?>



  <header>
  <section class="header-content">
    <h1 class="header-title rocky-dashed animate-pop-in" style="font-family: sans-serif;font-size: 50px; font-weight: 1500px; ">Q.me</h1>
    <h1 class="header-title animate-pop-in">Have a Question?</h1>
  <div class="animate-pop-in"  style="animation-delay: 1s; width: 370px; perspective: 1000; padding-bottom:30px;min-height: 400px">
  
        
          <div>
         
            
              

            <div class="myform form "  >
              
              <form action="signup.php" method="post" name="registration">
                <div class="form-group">
                  <label>Name</label>
                    <input type="name" name="fullname"  class="form-control" id="" placeholder="Enter Name">
                </div>
                <div class="form-group">
                <label>Email</label>
                    <input type="username" name="username"  class="form-control" id="" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                    <input type="password" name="password" id="password"  class="form-control"  placeholder="Enter Password" >
                </div>
                <div class="form-group">
                 <label>Confirm Password</label>
                    <input type="password" name="confirm_password" id="password-confirm"  class="form-control"  placeholder="Enter Password" >
                </div>             
               <div class="col-md-12 text-center ">
                  <input type="submit" value= 'Register' class=" btn btn-block mybtn btn-primary tx-tfm" name="register">
               </div>
              </form>
              <div class="col-md-12 text-center ">
                  <a  id="loginButton" href="login.php" ><h3>Already a user?</a>
              </div>
              
          </div>
        </div>
      </div>
    </div>
  
     
  <div style= 'padding: 20px'
     class="header-button animate-pop-in" ><a href="" class="button" style= "padding: 8px; background:#269300;border-radius:.25em;color:#fff;display:inline-block;padding:.25em .5em;margin:0 auto;text-align:center"><b>Get started today</b></a>
  </div>
  </section>
</header>
 <?php
 include('footer.php');
 ?>