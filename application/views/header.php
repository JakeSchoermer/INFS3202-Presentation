<?php $this->load->helper('url');?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>INFS3202 Presentation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Add all stylesheets automatically-->
		<?php foreach (scandir('application/assets/css') as $filename): ?>
			<?php $extension = explode(".", $filename); $extension = $extension[1]?>
			<?php if ($extension == "css"): ?>			
			<link rel="stylesheet" href='<?php echo base_url()?>application/assets/css/<?php echo $filename ?>' type="text/css" media="screen, projection" /> 
			<?php endif;?>
		<?php endforeach;?>
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="<?php echo base_url()?>application/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url()?>application/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>application/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>application/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>application/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

		<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>application/assets/js/jquery.js"></script>
		<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url()?>application/assets/js/bootstrap-typeahead.js"></script>

		<!--Particles -->
		<script src="<?php echo base_url()?>application/assets/js/particles.js"></script>
		
		<script type="text/javascript">
		
		
		<!-- Slides -->

			$(document).ready(function() {
			    $('.slides').cycle({
			        fx: 'shuffle',
							timeout: 0 
			    });
			

					    $(document).keydown(function (e) {
					      var keyCode = e.keyCode || e.which,
					          arrow = {left: 37, up: 38, right: 39, down: 40 }, $status = $('#status');

					      switch (keyCode) {
					        case arrow.left: new function() {	
											$('.slides').cycle('prev');
										}
					        break;
					        case arrow.right: new function() {
											$('.slides').cycle('next');
										}
					      }
					    });
					
			});
			</script>

		<!--End slides -->
		

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">INFS3202 Presentation</a>
          <div class="nav-collapse">
            <ul class="nav">
              <!--<li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>-->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div id="app-wrapper">