<!DOCTYPE html>
<html>
<head>
	<title>Admin	</title>


	<style type="text/css">
		body{
			background: #fafafa;

		}
		container{
			width: 800px;
		}

		caption{
			font-size:25px;
		}
		table{

			border-collapse: collapse;
			width: 40%;
			margin: 0 auto;
		}
		tr:nth-child(2n+0)
		td{
			background-color: #f4f4ff;
		}

		th{

			padding: 0 5em 0 0.5em;
			background-color: #002376;
			border-bottom: 0.1em solid #fb7574;
			color: white;
		}
		td{
			text-align: left;
			background-color: #abcdef;
		}
		th,td{
			padding: 5px;
		}
		#regis{
			margin: auto;

		}
		#regis ul li{
			list-style: none;
			float: left;
			padding: 10px;
			margin-left: 5px;
		}
		#regis ul li a{
			margin-left: 300px;
			padding: 5px;
			text-decoration: none;
			border:1px solid #f4f4ff;
			background-color: #8f8f8f;
			color: white;
		}
		a:link, a:visited, a:hover, a:active{
			
			text-decoration: none;
			padding: 4px;
			color: red;
			background-color: rgb(197, 214, 255);
			border: 2px solid;
			border-color: black;


		}

	</style>
	</head>
<body>
	<div id="container">

			<div id="regis">
				<ul>
					<li>
						<a href="<?php echo base_url('admin/register'); ?>">Register a New User</a>
				
						<a href="<?php echo base_url('admin/logout'); ?>">Log Out</a>
					</li>
				</ul>


			</div>
		<table>

			<caption>PENDING USER REQUESTS</caption>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>USERNAME</th>
			</tr>
			<?php
			foreach($records->result_array() as $row){
				$id = $row['user_id'];
				$uname = $row['username'];
				$name = $row['name'];
				?>

				<tr>
					<td> <?php echo $id; ?> </td>
					<td> <?php echo $name; ?></td>
					<td> <?php echo $uname . "<br/><br/>";
					echo anchor("admin/acceptUser/$id","Accept ");
					echo anchor("admin/declineUser/$id"," Delete"); ?></td>
				</tr>

				<?php //echo anchor("admin/acceptUser/$id","Accept"); ?>
				<?php//echo anchor("admin/declineUser/$id","Delete"); ?>
				<?php } ?>
			</table>
		</div>  
		<hr>

	</body>
	</html>
