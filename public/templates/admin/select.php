<a href="../questions.php" style="color:#aaa">Q.me</a>    
<?php  
 $connect = mysqli_connect("localhost", "QPortal", "FRIENDS", "QPortal");  
 $output = '';  
 $sql = "SELECT * FROM USERS";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">

           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Name</th>  
                     <th width="40%">Username</th>  
                     <th width="40%">Password</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  
		 
	  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["Name"].'</td>  
                     <td class="username" data-id1="'.$row["Username"].'" contenteditable>'.$row["Username"].'</td>  
                     <td class="password" data-id2="'.$row["Username"].'" contenteditable>'.$row["Password"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["Username"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td id="name" contenteditable></td>
                <td id="username" contenteditable></td>  
                <td id="password1" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td id="name" contenteditable></td>  
					<td id="username" contenteditable></td>  
					<td id="password1" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>