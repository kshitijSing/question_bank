<?php
require_once('../../private/initialize.php');

?>

<?php
if($_SESSION['LOGOUT']=='True' && $_SESSION['status']=='LOGOUT')
{
  $_SESSION['status']='LOGIN';
  $_SESSION['LOGOUT']='False';
  $_SESSION['user']='';
}
$title='Questions';
include('header.php');
?>

  <div class="container-fluid">
     <?php 
     if($_SESSION['status']=='LOGIN'){
      echo '<div id = "answer" class="w3-row" style="padding: 10px; font-weight: 400px; display: block">
       
        <p style = "border: none; border-radius: 1px; padding: 10px; padding-left: 10px; background-color:#ccc; text-align: center; font-size: 17px"><b><a href="login.php">Add Question</a></b></p>
      </div>';
    }
    else
    {
      echo '<div id = "answer" class="w3-row" style="padding: 10px; font-weight: 400px; display: block; padding-left:0px">
       
        <p style = "border: none; border-radius: 1px; padding: 10px; padding-left: 10px; background-color: #ccc; width: 100%; text-align: center; font-size: 17px"><b><a href="user.php">Add Question</a></b></p>
      </div>
      <div id = "answer" class="w3-row" style="padding: 10px; font-weight: 400px; display: none">
       
        <p style = "border-style: groove; border-radius: 5px; padding: 5px; padding-left: 10px"><b>'.$q['Ans'].'</b></p>
      </div>
       </div>
  </div>';

    }
    ?>
   
    <?php 
     if($_SESSION['status']!='LOGIN'){

     
      echo '<div id = "answer" class="w3-row" style="padding: 10px; font-weight: 400px; display: block">
       
        <p style = "border: none; border-radius: 1px; padding: 10px; padding-left: 10px; background-color:#ccc; text-align: center; font-size: 17px"><b><a href="admin 2/index.php">Delete a question</a></b></p>
      </div>
    ';

    }
    ?>
  
  <div class="row">
    <div class="col-sm-2 " style = "height: 700px; padding: 10px">
    
        <h2 style= 'text-align: center; font-family:sans-serif;'>Categories</h2>
        <form method="post" action="questions.php">
       <input type= 'submit' class= 'input' value= 'Maths' name='1'></input>
       <input type= 'submit' class= 'input' value= 'IT' name='2'></input>
       <input type= 'submit' class= 'input' value= 'Algo' name='3'></input>
       <input type= 'submit' class= 'input' value= 'Oop' name='4'></input>
      <input type= 'submit' class= 'input' value= 'Economics' name='5'></input>
     </form>
     

                     
    </div>


    <div class="col-sm-10">
      
  
  

    
     <?php
     if(!isset($_POST['1']) && !isset($_POST['2']) && !isset($_POST['3']) && !isset($_POST['4']) && !isset($_POST['5']))
     {$query="SELECT * FROM Questions";
          $result=mysqli_query($db,$query);
          $nrows=mysqli_num_rows($result);
          $s='';
          foreach($result as $q)
          {
            if($q['Category']=='1')
              $s='Maths';
            elseif($q['Category']=='2')
              $s="IT";
            elseif($q['Category']=='3')
              $s="Algo";
            elseif($q['Category']=='4')
              $s="Oop";
            elseif($q['Category']=='5')
              $s="Economics";


           echo '
            <div class="w3-card-4 w3-margin w3-white">
  
    <div class="w3-container" style = "padding-top: 10px; padding-bottom: 10px">
      <h2><b>'.$s.'</b></h3>
      <h5>'.$q['Username'] .'</h5>
    </div>

    <div class="w3-container" style = "font-size: 20px; font-family: sans-serif;font-weight: 550;padding: 10px">
      <p>'.$q['Question'].'</p>

      <div class="flip-card w3-row" style= "height: 75px; padding: 10px" >
        <div class="flip-card-inner w3-col ">
          <div class="flip-card-front">
             <h4 style= "font-size: 20px; font-weight: 600px">Reveal Answer</h4>
      
           
          </div>
          <div class="flip-card-back">
           <h4 style= "font-size: 20px; font-weight: 600px">'.$q['Ans'].'</h4>
      
          </div>
        </div>
      </div>

      
    </div>
  </div>
   
  ';

     }}
?>

<?php
if(isset($_POST['1']))
{
  $query="SELECT * FROM Questions WHERE Category='1'";
  $result=mysqli_query($db,$query);
  $s='';
  foreach($result as $q)
     {
       if($q['Category']=='1')
              $s='Maths';
            elseif($q['Category']=='2')
              $s="IT";
            elseif($q['Category']=='3')
              $s="Algo";
            elseif($q['Category']=='4')
              $s="Oop";
            elseif($q['Category']=='5')
              $s="Economics";


     echo '
            <div class="w3-card-4 w3-margin w3-white">
  
    <div class="w3-container" style = "padding-top: 10px; padding-bottom: 10px">
      <h2><b>'.$s.'</b></h3>
      <h5>'.$q['Username'] .'</h5>
    </div>

    <div class="w3-container" style = "font-size: 20px; font-family: sans-serif;font-weight: 550;padding: 10px">
      <p>'.$q['Question'].'</p>

      <div class="flip-card w3-row" style= "height: 75px; padding: 10px" >
        <div class="flip-card-inner w3-col ">
          <div class="flip-card-front">
             <h4 style= "font-size: 20px; font-weight: 600px">Reveal Answer</h4>
      
           
          </div>
          <div class="flip-card-back">
           <h4 style= "font-size: 20px; font-weight: 600px">'.$q['Ans'].'</h4>
      
          </div>
        </div>
      </div>

      
    </div>
  </div>';

   }

}
?>

<?php
if(isset($_POST['2']))
{
  $query="SELECT * FROM Questions WHERE Category='2'";
  $result=mysqli_query($db,$query);
  foreach($result as $q)
     {
      echo '
            <div class="w3-card-4 w3-margin w3-white">
  
    <div class="w3-container" style = "padding-top: 10px; padding-bottom: 10px">
      <h2><b>'.$s.'</b></h3>
      <h5>'.$q['Username'] .'</h5>
    </div>

    <div class="w3-container" style = "font-size: 20px; font-family: sans-serif;font-weight: 550;padding: 10px">
      <p>'.$q['Question'].'</p>

      <div class="flip-card w3-row" style= "height: 75px; padding: 10px" >
        <div class="flip-card-inner w3-col ">
          <div class="flip-card-front">
             <h4 style= "font-size: 20px; font-weight: 600px">Reveal Answer</h4>
      
           
          </div>
          <div class="flip-card-back">
           <h4 style= "font-size: 20px; font-weight: 600px">'.$q['Ans'].'</h4>
      
          </div>
        </div>
      </div>

      
    </div>
  </div>';

   }

}
?>


<?php
if(isset($_POST['3']))
{
  $query="SELECT * FROM Questions WHERE Category='3'";
  $result=mysqli_query($db,$query);
  foreach($result as $q)
     {
      echo '
            <div class="w3-card-4 w3-margin w3-white">
  
    <div class="w3-container" style = "padding-top: 10px; padding-bottom: 10px">
      <h2><b>'.$s.'</b></h3>
      <h5>'.$q['Username'] .'</h5>
    </div>

    <div class="w3-container" style = "font-size: 20px; font-family: sans-serif;font-weight: 550;padding: 10px">
      <p>'.$q['Question'].'</p>

      <div class="flip-card w3-row" style= "height: 75px; padding: 10px" >
        <div class="flip-card-inner w3-col ">
          <div class="flip-card-front">
             <h4 style= "font-size: 20px; font-weight: 600px">Reveal Answer</h4>
      
           
          </div>
          <div class="flip-card-back">
           <h4 style= "font-size: 20px; font-weight: 600px">'.$q['Ans'].'</h4>
      
          </div>
        </div>
      </div>

      
    </div>
  </div>';

   }

}
?>

<?php
if(isset($_POST['4']))
{
  $query="SELECT * FROM Questions WHERE Category='4'";
  $result=mysqli_query($db,$query);
  foreach($result as $q)
     {
     echo '
            <div class="w3-card-4 w3-margin w3-white">
  
    <div class="w3-container" style = "padding-top: 10px; padding-bottom: 10px">
      <h2><b>'.$s.'</b></h3>
      <h5>'.$q['Username'] .'</h5>
    </div>

    <div class="w3-container" style = "font-size: 20px; font-family: sans-serif;font-weight: 550;padding: 10px">
      <p>'.$q['Question'].'</p>

      <div class="flip-card w3-row" style= "height: 75px; padding: 10px" >
        <div class="flip-card-inner w3-col ">
          <div class="flip-card-front">
             <h4 style= "font-size: 20px; font-weight: 600px">Reveal Answer</h4>
      
           
          </div>
          <div class="flip-card-back">
           <h4 style= "font-size: 20px; font-weight: 600px">'.$q['Ans'].'</h4>
      
          </div>
        </div>
      </div>

      
    </div>
  </div>';

   }

}
?>


<?php
if(isset($_POST['5']))
{
  $query="SELECT * FROM Questions WHERE Category='5'";
  $result=mysqli_query($db,$query);
  foreach($result as $q)
     {
      echo '
            <div class="w3-card-4 w3-margin w3-white">
  
    <div class="w3-container" style = "padding-top: 10px; padding-bottom: 10px">
      <h2><b>'.$s.'</b></h3>
      <h5>'.$q['Username'] .'</h5>
    </div>

    <div class="w3-container" style = "font-size: 20px; font-family: sans-serif;font-weight: 550;padding: 10px">
      <p>'.$q['Question'].'</p>

      <div class="flip-card w3-row" style= "height: 75px; padding: 10px" >
        <div class="flip-card-inner w3-col ">
          <div class="flip-card-front">
             <h4 style= "font-size: 20px; font-weight: 600px">Reveal Answer</h4>
      
           
          </div>
          <div class="flip-card-back">
           <h4 style= "font-size: 20px; font-weight: 600px">'.$q['Ans'].'</h4>
      
          </div>
        </div>
      </div>

      
    </div>
  </div>';

   }

}
?>





    

 </div>
<?php
include('footer.php');
?>