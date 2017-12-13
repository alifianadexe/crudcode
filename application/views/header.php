<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 if(!$this->session->has_userdata('user')){
 	redirect('welcome'); 		
 }else{
 	$data = $this->session->userdata('user');

 	$username = $data->username;
 	$ID = $data->ID;
 	$fullname = $data->fullname;

 }
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"> </script>	
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js' ); ?>"> </script>
	<link rel="styesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="col-md-9">
			<?php echo anchor('login', 'CRUD CODE' , ['class' => 'navbar navbar-brand']); ?>		
		</div>
		<div class="col-md-3" style="margin-top: 5px;color: #fff; ">
			<h5><?php echo "Welcome, ".$fullname;?></h5>	
		</div>	
	</nav>