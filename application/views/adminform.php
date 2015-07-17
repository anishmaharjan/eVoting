<!DOCTYPE html>
<html>
<head>
	<title>
		Form
	</title>
	<style type="text/css">
	body{
		background-color: black;
	}
	.wrapper{
		width: 300px;
		
		margin: 150px auto;
		background-color: white;
		padding: 30px;
		text-align: center;
		

	}
	input[type=text], [type=password] {
		padding:5px; border:2px solid #ccc; 
		-webkit-border-radius: 5px;
		border-radius: 5px;
	}
	input[type=text], [type=password]:focus {border-color:#333; }


	input[type=submit] {padding:5px 15px; background:#ccc; border:0 none;
	cursor:pointer;
	-webkit-border-radius: 5px;
	border-radius: 5px; }

	</style>
	
</head>
<body>
<div class="wrapper">
	
	<h1>Admin</h1>
	<?php 
		echo form_open("admin/login_validation");
		echo validation_errors();
		echo "<p>Username";
		echo form_input("username");
		echo "</p>";
		echo "<p>Password";
		echo form_password("password");
		echo "</p>";
		echo form_submit("Login","Login");
		?>
	</form>
	<?php echo anchor(site_url(),"Not here?"); ?>
</div>

</body>
</html>