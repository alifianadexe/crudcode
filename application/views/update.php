<?php include_once('header.php'); ?>
<div class="container">
	<?php echo validation_errors(); ?>
	<?php echo form_open("welcome/updatePost/{$post->ID}",['class' => 'form_inline']); ?>
	<fieldset style="padding:10px 0 10px 0">
		<legend>Update Post</legend>
		<div class="form-group col-md-6">
			<label for="Title">Title</label>
			<input name="title" class="form-control" id="Title" aria-describedby="emailHelp" placeholder="Title Post" type="text" value = '<?php echo $post->title; ?> '>
			<div class="col-md-6">
				<?php echo form_error('title', '<small id="Title" class="form-text text-danger">', '</small>'); ?>
			</div>
		</div>
		<div class="form-group col-md-9">
			<label for="exampleTextarea">Description</label>
			<textarea name="description" class="form-control" id="description" rows="4"   >'<?php echo $post->description; ?></textarea>
			<div class="col-md-9">
				<?php echo form_error('description', '<small id="description" class="form-text text-muted">', '</small>'); ?>
			</div>	


		</div>
		<button type="submit" class="btn btn-primary">Update</button>
		<button type="reset" class="btn btn-primary">Cancel</button>
	</fieldset>
	<?php echo form_close(); ?>
</div>
<?php include_once('footer.php'); ?>