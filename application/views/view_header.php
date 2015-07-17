	<!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p> -->
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>VoteLeeK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url("assets/css/bootstrap.min.css"); ?>"> -->
<link rel="stylesheet" href="<?php echo base_url("assets/css/layout.css"); ?>" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.jcarousel.pack.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.jcarousel.setup.js'); ?>"></script>
</head>

<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="<?php echo site_url(); ?>">VoteLeek</a></h1>
      <p>Online Voting Method</p>
    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
        <!-- <li><a href="pages/style-demo.html">Style Demo</a></li> -->
        <li><a href="<?php echo site_url('election'); ?>">List:Candidates</a></li>

        <?php if($this->session->userdata('is_logged_in'))
        {
          
          $seekname= $this->session->userdata('username');
          echo "<li>";
          echo anchor("wel/profile/$seekname",'Profile');
          echo "</li>";

          echo "<li class='last'>";
          echo anchor("wel/logout","Logout");
          echo "</li>";

        } 
        else{
            echo "
              <li class='last'><a href='#'>Login as</a>
                <ul>
                  <li>";
                  echo anchor("wel/login","Voter Member");
                  echo "</li>
                  <li><a href='#'>Candidate </a></li>
                </ul>
              </li>
            ";
        }
        ?>
        
        <!-- <li ><a href="#">A Long Link Text</a></li> -->
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>