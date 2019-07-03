<?php
session_start();
?>
<?php
if($_SESSION['admin']!='DK')
    die("Not Accessible to all");
$_SESSION['admin']='';
?>
<html>  
    <head>  
        <title>Admin</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>

        <div class="container"> 
        
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var username = $('#username').text();  
        var password = $('#password1').text();
        var name=$('#name').text();  
        if(name== '')  
        {  
            alert("Enter Name");  
            return false;  
        }  
        if(username == '')  
        {  
            alert("Enter username");  
            return false;  
        } 
        if(password=='')
        {
            alert("Enter Password");
            return false;
        }

        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{"name":name, "username":username, "password":password},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    

    $(document).on('blur', '.username', function(){  
        var id = $(this).data("id1");  
        var username= $(this).text();  
         
    });  
    $(document).on('blur', '.password', function(){  
        var id = $(this).data("id2");  
        var last_name = $(this).text();  
         
    });  
    $(document).on('click', '.btn_delete', function(){  
        var username=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{username:username},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>