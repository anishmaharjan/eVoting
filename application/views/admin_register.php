<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php

	echo form_open('admin/register_validation');

	echo validation_errors();
	echo "<p>Username: ";
	echo form_input("username",$this->input->post('username'));
	echo "</p>";

	echo "<p>Password";
	echo form_password("password");
	echo "</p>";
	echo "<p>Confirm Password";
	echo form_password("cpassword");
	echo "</p>";

	echo "<p>";
	echo form_submit("submit_register","Create");
	echo "</p>";

	echo form_close();

?>

<a href="<?php echo base_url(); ?>">Go back</a>



</body>
</html>