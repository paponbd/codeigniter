<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php echo $page_title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php $this->load->view('inc/nav'); ?>

    <!--slider-->
    <?php //$this->load->view('inc/slider'); ?>

	




<div class="container">
    <br>

		<!-- Left Column -->
		<?php //$this->load->view('inc/left_bar'); ?>
		<!--/Left Column-->
  
  
		<!-- Center Column -->
		<?php $this->load->view($content); ?>
		<!--/Center Column-->


		 <!-- Right Column -->
		 <?php $this->load->view('inc/right_bar'); ?>
		 <!--/Right Column -->

</div><!--/container-fluid-->
	
	<!--footer-->
	<?php $this->load->view('inc/footer'); ?>
	<!--/footer-->

	
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="<?php echo base_url(); ?>assets/js/holder.min.js"></script>
	
</body>

</html>
