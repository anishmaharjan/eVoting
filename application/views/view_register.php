
<div class="wrapper col4">
  <div id="container">
  	 	<h1>Request a Registration</h1>
  	 	<table border=0 cellspacing="0" cellpadding="0">
  	 	<tr>
			<?php

				echo form_open('wel/register_validation');

				echo validation_errors();
				echo "<td>Name: </td><td>";
				echo form_input("name",$this->input->post('name'));
				echo "</td></tr><tr>";

				echo "<td>Address: </td><td>";
				echo form_input("address",$this->input->post('address'));
				echo "</td></tr><tr>";

				echo "<td>Email: </td><td>";
				echo form_input("email",$this->input->post('email'));
				echo "</td></tr><tr>";

				echo "<td>Username: </td><td>";
				echo form_input("username",$this->input->post('username'));
				echo "</td></tr><tr>";

				echo "<td>Password: </td><td>";
				echo form_password("password");
				echo "</td></tr><tr>";
				echo "<td>Confirm Password: </td><td>";
				echo form_password("cpassword");
				echo "</td></tr><tr>";

				echo "<td colspan='2'>";
				echo form_submit("submit_register","Send Request");
				echo "</td>";

				echo form_close();

			?>
			</tr>
			</table>
				<a href="<?php echo base_url(); ?>">Go back</a>
	</div>
</div>
			

