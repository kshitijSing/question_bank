
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
        var Question= $('#username').text();  
        var Ans = $('#password1').text();
        var Qid=$('#name').text();  
        if(Qid== '')  
        {  
            alert("Enter Name");  
            return false;  
        }  
        if(Question == '')  
        {  
            alert("Enter username");  
            return false;  
        } 
        if(Ans=='')
        {
            alert("Enter Password");
            return false;
        }

        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{"Qid":Qid, "Question":Question, "Ans":Ans},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    

    $(document).on('blur', '.Question', function(){  
        var Qid = $(this).data("id1");  
        var Question= $(this).text();  
         
    });  
    $(document).on('blur', '.Ans', function(){  
        var Qid = $(this).data("id2");  
        var Question = $(this).text();  
         
    });  
    $(document).on('click', '.btn_delete', function(){  
        var Qid=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{Qid:Qid},  
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