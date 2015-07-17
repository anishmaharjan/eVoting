
<div class="wrapper col3">
	<div id="container">
		<div class="homepage">
	
	
			<h1>CANDIDATES</h1>
			<!-- <p>List of Candidates  </p> -->

			
				<?php
					foreach($forprofile as $lis){
					$id = $lis['candidate_id'];
					$name = $lis['candidate_name'];
					$des = $lis['description'];
					$pic = $lis['picture'];
					$votes = $lis['votes_total'];
				?>
				
		        <div class="row">
		        	<div class="col-sm-4">
		        		
		          		<h2><img src="<?php echo base_url().$pic; ?>" width="100px" alt="" /><?php echo $name; ?></h2>
		        	</div>

		        	<div class="col-sm-8">
		        		
			          <p><?php echo $des; ?></p>
			          <!-- <p class="readmore"><a href="#">Continue Reading &raquo;</a></p> -->
			          <p> <?php
								echo form_open('election/vote_update');
								echo form_hidden('id', $id);
								echo form_hidden('name', $name);
								echo form_submit('action',"Click to VOTE");
								echo form_close();
							?></p>
						
		        	</div>
		        </div>
				<br/>
				<br/>
		        <?php } ?>
		        

			
					
		</div>
	</div>
</div>