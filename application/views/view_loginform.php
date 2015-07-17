
<div class="wrapper col4">
  <div id="container">
  	
   	<h1>Member Login</h1>
   	<p>
      <ul style="list-style: none;">
        
			<?php 
				echo form_open("wel/login_validation");
				
				echo "<li>Username";
				echo form_input("username");
				echo "</li><li>";
				echo "<br/>Password ";
				echo form_password("password");
				echo "</li><li>";
				echo form_submit("Login","Login");

				echo "</li><li>";
				echo validation_errors();
				echo anchor('wel/registration' , 'Register new User');
				echo form_close();
				?>
				</li>
			
			</ul>
			</p>
	
	</div>
</div>