<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
		<?php echo anchor('login', 'CRUD CODE' , ['class' => 'navbar navbar-brand']); ?>		
	</nav>
	<div class="container">
		<?php echo form_open('welcome/loginCheck', ['class' => 'form-inline']); ?>
		<fieldset style="padding:0px 0 20px 0">
			<legend>Login</legend>
			<div class="col-md-6">
			</div>
			<div class="form-group col-md-6">
				<label for="Username">Username</label>
				<input name="username" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Username" type="text" >
				<div class="col-md-6">
					<?php echo form_error('username', '<small id="Username" class="form-text text-danger">', '</small>'); ?>
				</div>
			</div>
			<div class="col-md-6" >
			</div>
			<div class="form-group col-md-6">
				<label for="Password">Password</label>
				<input name="password" class="form-control" id="Password" aria-describedby="emailHelp" placeholder="Password" type="password" >
				<div class="col-md-6">
					<?php echo form_error('password', '<small id="Username" class="form-text text-danger">', '</small>'); ?>
				</div>
			</div>
			<div class="col-md-6" style="margin-top: 20px">
				<button type="submit" class="btn btn-primary">Login</button>
			</div>

		</fieldset>


		<?php echo form_close(); ?>
	</div>
	<?php include_once('footer.php'); ?>