<html>
<head>
<title>U of I </title>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- 最新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link href="signin.css" rel="stylesheet">
</head>
<body align = "center">
<script>
$(document).ready(function(){
	$("#add_err").css('display', 'none', 'important');
	 $(".login").click(function(){	
		  username=$("#name").val();
		  password=$("#password").val();
		  $.ajax({
		   type: "POST",
		   url: "login.php",
			data: "name="+username+"&pwd="+password,
			dataType: 'json',
		   success: function(html){    
			if(html=='true')    {
			 //$("#add_err").html("right username or password");
			 //window.location="dashboard.php";
				if(html[0])
					alert("Login success.");
				else{
					$("#add_err").css('display', 'inline', 'important');
			 		$("#add_err").html("<img src='images/alert.png' />Wrong username or password.");
				}
				
			}
			else    {
				$("#add_err").css('display', 'inline', 'important');
			 	$("#add_err").html("<img src='images/alert.png' />Login failed. Please contact the administrator.");
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
      <form class="form-signin" role="form" method="post">
        <input type="text" name="name" class="form-control" placeholder="EnterpriseID" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" id="login" type="submit">Sign in</button>
      </form>
</fieldset>
</div>


</body>
</html>
