
<?php
require_once('../../private/initialize.php');
?>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
  {

    uploadQuest();

  }

?>
  <?php
 $_SESSION['user']=$_SESSION['username']; 
  include('header.php');

  ?>  
  <div class="container-fluid" style= 'padding: 40px'>
  
    <div class="row" >
      <div class="w3-col m3">
    
        <div class="w3-card w3-round w3-white" style= "padding: 10px;">
          <div class="w3-container"  >
           <h3 class="w3-center">My Profile</h3>
           <p class="w3-center"><img src="../static/images/avatar.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
           <hr>
           <p class="w3-text-theme"><?php echo $_SESSION['user'];?></p>
           
          </div>
        </div>


      </div>

      <div class="w3-col m7" style= 'padding-left: 30px'>
    
        <div class="w3-row-padding">
          <div class="w3-col m12">
            <div class="w3-card w3-round w3-white">
              <div class="w3-container w3-padding">
                <form action= 'user.php' method="post">
                  <h3>Add Question</h3>
                  <div style= 'padding-top: 10px'>
                    <input class= 'w3-border type= 'text' name= 'ques' placeholder= 'Type Ques Here.' style='width:100%; padding: 10px;font-size:20px'>
                    
                  </div>
                  <div style= 'padding-top:5px'>
                    <h5 class= 'w3-opacity'> Add category</h5>
                    
                      <select name="subjects" style= 'display: inline-block; padding: 8px 16px; vertical-align: middle; overflow: hidden; text-align: center'>
                        <option  value="1">Maths</option>
                        <option  value="2">IT</option>
                        <option  value="3">Algo</option>
                        <option  value="4">Oop</option>
                        <option  value="5">Economics</option>


                        
                      </select>
                      
                  </div>
                  <div style= 'padding-top:5px'>
                    <h5 class= 'w3-opacity'> Add answer</h5>
                    <input type= 'text' name= 'answer' placeholder="type answer here.."style='width:100%; padding: 10px;font-size:20px>

                      
                  </div>

                  <div style= 'padding-top:5px'>
                    <button type="submit" class="w3-button w3-theme" name="upload"><i class="fa fa-pencil"></i>  Post</button> 
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>



        
            
<?php
$username=mysqli_real_escape_string($db,$_SESSION['user']);
$query="SELECT * FROM Questions WHERE Username='$username'";
$result=mysqli_query($db,$query);
$sub='';
foreach($result as $q)
{
  if($q['Category']=='1')
    $sub="Maths";
  elseif($q['Category']=='2')
    $sub="IT";
   elseif($q['Category']=='3')
    $sub="Algo";
   elseif($q['Category']=='4')
    $sub="Oop";
   elseif($q['Category']=='5')
    $sub="Economics";
  echo'<div class="w3-col m12">
          <div class="w3-card-4 w3-margin w3-white">
      
            <div class="w3-container" style = "padding-top: 10px; padding-bottom: 10px">
              <h2><b>'.$sub.'</b></h2>
              <h5>Author:'.$username.' <span class="w3-opacity"> </span></h5>
  <div class="w3-container" style = "font-size: 20px; font-family: sans-serif;font-weight: 550;">
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
  </div> ';
} 
?>           


              
              
      </div>
    </div>
  </div>          
</div>
<?php
include('footer.php');
?>