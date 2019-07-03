<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../static/style.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../static/script.js"></script>
    
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  </head>
  <body>


      <nav class="navbar navbar-default banner" style="background-color: #393939">
          <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" style= 'color: #fff; font-size: 25px; font-weight: 500px' href="../../index.php">Q.me</</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                  
                  <ul class="nav navbar-nav navbar-right navbar-nav-primary">
                        <li><a href="<?php
                        if($_SESSION['user']=='')
                        {
                          $_SESSION['status']="LOGIN";
                          $_SESSION['LOGOUT']='False';
                        }
                        else
                        $_SESSION['status']="LOGOUT";
                          echo 'questions.php'?>"  style= 'color: #fff; font-size: 25px; font-weight: 500px' >Questions</a></li>
                         <li><a href="team.php"  style= 'color: #fff; font-size: 25px; font-weight: 500px' >Team</a></li>

                      <li><a href="<?php
                      if($_SESSION['user']=='')
                      {
                        $_SESSION['status']='LOGIN';
                        echo 'login.php';
                      }
                      elseif($_SESSION['status']=='LOGOUT')
                      {
                        echo 'temp.php';
                      }
                      else
                      {
                        $_SESSION['status']='LOGOUT';
                        $_SESSION['LOGOUT']='True';
                        echo 'questions.php';
                      }

                       ?>"  style= 'color: #fff; font-size: 25px; font-weight: 500px' >
                        <?php echo $_SESSION['status']; 
                        ?></a></li>
                      
                      
                     
                  </ul>
              </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>
