
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div id="featured_content">
      <ul>
        <?php
          foreach($forprofile as $lis){
          $id = $lis['candidate_id'];
          $name = $lis['candidate_name'];
          $des = $lis['description'];
          $pic = $lis['picture'];
          
        ?>

        <li><img src="<?php echo base_url().$pic; ?>"  alt="" />
          <div class="floater">
            <h2><?php echo $name; ?></h2>
            <p><?php echo $des; ?></p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </div>
        </li>
        <?php } ?>
       
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img src="<?php echo base_url('assets/css/images/prev.png'); ?>" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="<?php echo base_url('assets/css/images/next.png'); ?>" alt="" /></a> </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
   <!--  <div class="homepage">
      
    </div> -->
    <div class="homepage">
      <h1>Online Election Perfection</h1>
      <img class="imgr" src="<?php echo base_url('assets/images/voteBox.jpg'); ?>" alt="" width="125" height="125" />
      <p>VoteLeek is a web-based online voting system that will help you manage your elections easily and securely. We are an agile company and our voting system is constantly evolving with technology and security innovations. Many reputable third parties have audited our product, technical infrastructure, and corporate infrastructure. These audits confirm that VoteLeek possesses the integrity and security which we promise.</p>
      <p>Our Mission: To achieve excellence providing secure and efficient voting solutions and to create value for the organizations we serve.</p>
      <img class="imgl" src="<?php echo base_url('assets/images/frontpage.jpg'); ?>" alt="" width="125" height="125" />
      <p>Our People: Dedicated staff who understand that transparency and perfection are a must in this industry.</p>
      <p>Our Strengths: Timely customer service, simplicity of design, high security, and the ability to deliver custom solutions.</p>
      <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
    </div>
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="box1">
      <h2>A Little Company Information !</h2>
      <img class="imgl" src="<?php echo base_url('assets/images/logo.jpg'); ?>" alt="" />
      <p>VoteLeek Inc. is a full-service provider of secure, hosted online elections. We are an agile company and our voting system is constantly evolving with technology and security innovations. Many reputable third parties have audited our product, technical infrastructure, and corporate infrastructure. These audits confirm that VoteLeek possesses the integrity and security which we promise.</p>
      
    </div>
    <div class="box contactdetails">
      <h2>Our Contact Details !</h2>
      <ul>
        <li>ASS & Co.</li>
        <li>25th Backyard &amp; 984984984</li>
        <li>Kathmandu</li>
        <li>44061/+977</li>
        <li>Tel: +977 01 4670287</li>
        <li>Fax: -</li>
        <li class="last">Email: info@assco.com</li>
        
      </ul>
    </div>
    <div class="box flickrbox">
      <h2>Sponsers</h2>
      <div class="wrap">
        <div class="fix"></div>
        <div class="flickr_badge_image" id="flickr_badge_image1"><a href="#"><img src="<?php echo base_url('assets/images/s1.jpg'); ?>" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image2"><a href="#"><img src="<?php echo base_url('assets/images/s2.jpg'); ?>" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image3"><a href="#"><img src="<?php echo base_url('assets/images/s3.jpg'); ?>" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image4"><a href="#"><img src="<?php echo base_url('assets/images/s4.jpg'); ?>" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image5"><a href="#"><img src="<?php echo base_url('assets/images/s5.jpg'); ?>" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image6"><a href="#"><img src="<?php echo base_url('assets/images/s6.jpg'); ?>" alt="" /></a></div>
        <div class="fix"></div>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
