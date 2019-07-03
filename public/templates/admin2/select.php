<a href="../questions.php" style="color:#aaa">Back</a>    
<?php  
session_start();
 $connect = mysqli_connect("localhost", "QPortal", "FRIENDS", "QPortal");  
 $output = '';
 $username=mysqli_real_escape_string($connect,$_SESSION['user']);  
 $sql = "SELECT * FROM Questions WHERE Username='$username'";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">

           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Qid</th>  
                     <th width="40%">Questions</th>  
                     <th width="40%">Answer</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  
		 
	  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["Qid"].'</td>  
                     <td class="Question" data-id1="'.$row["Qid"].'" contenteditable>'.$row["Question"].'</td>  
                     <td class="Ans" data-id2="'.$row["Qid"].'" contenteditable>'.$row["Ans"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["Qid"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td id="Qid" contenteditable></td>
                <td id="Question" contenteditable></td>  
                <td id="Ans" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td id="Qid" contenteditable></td>  
					<td id="Question" contenteditable></td>  
					<td id="Ans" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>