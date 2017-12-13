<?php include_once('header.php'); ?>
<div class="container">
	<div class="col-md-6" style="margin-top: 2%">
		<h4><?php echo $post->title; ?></h4>
	</div>
	<div class="col-md-9">
		<p><?php echo $post->description; ?></p>
	</div>
	<div class="col-md-4">
		<p><b><?php echo $post->date_created; ?></b></p>
	</div>
</div>
<?php include_once('footer.php'); ?>