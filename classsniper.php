<html>
<head>
<title>U of I </title>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body align = "center">
<script>
$(document).ready(function(){
	$("#add_err").css('display', 'none', 'important');
	 $("#login").click(function(){	
		  username=$("#name").val();
		  password=$("#word").val();
		  $.ajax({
		   type: "POST",
		   url: "login.php",
			data: "name="+username+"&pwd="+password,
		   success: function(html){    
			if(html=='true')    {
			 //$("#add_err").html("right username or password");
			 //window.location="dashboard.php";
				$("#loginform-in").val(html);
			}
			else    {
			$("#add_err").css('display', 'inline', 'important');
			 $("#add_err").html("<img src='images/alert.png' />Wrong username or password");
			}
		   },
		   beforeSend:function()
		   {
			$("#add_err").css('display', 'inline', 'important');
			$("#add_err").html("<img src='images/ajax-loader.gif' /> Loading...")
		   }
		  });
		return false;
	});
});


</script>

<div class="loginform-in">
<h1>Enterprise Login</h1>
<div class="err" id="add_err"></div>
<fieldset>
    <form action="./" method="post">
            <label for="name">Username </label>
            <input type="text" size="30"  name="name" id="name"  />
            <label for="name">Password</label>
            <input type="password" size="30"  name="word" id="word"  />
            <label></label>
            <input type="submit" id="login" name="login" value="Login" class="loginbutton" >
         </form>    
</fieldset>
</div>


</body>
</html>
