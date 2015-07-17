<!-- ######################################################################################## -->
<div class="wrapper col5">
	<div id="container">
		
	<h1>Results</h1>
	<?php
		//####################for total
		$total = 0;
		foreach ($votes as $key) {
			$total += $key['votes_total']; 
		}//#######################
		// . $names['candidate_name']
		/*echo "<pre>";
		var_dump($names);
		echo "</pre>";*/
	
	for($x = 0; $x < count($votes); $x++)
	{
	?>
		<div class="barchart" style="width: 500px;">
				<?php echo $x+1 . ". " . $names[$x]['candidate_name']; ?> 
			<div class="back-bar" style="width:100%; background-color: #e0e0e0; padding: 3px; border-radius:3px; box-shadow: inset 0 1px 3px rgba(0,0,0,.2);">
			<span class="bar-fill" style="width: <?php echo ($votes[$x]['votes_total'] * 100) /$total ?>%; height: 22px;background-color: #659cef; display: block;	border-radius: 3px;color: white;	transition: width 1s ease-in-out;"><?php echo ($votes[$x]['votes_total'] * 100) /$total ?>%</span>
			</div>
			<br/>
		</div>
	<?php	
	}

	?>

	

	</div>
</div>

</body>
</html>

