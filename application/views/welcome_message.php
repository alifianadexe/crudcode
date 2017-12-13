
<?php include_once('header.php'); ?>
<?php 
		if($msg = $this->session->flashdata('msg')){
				echo $msg;
		}
?>
<div class="container">
	<div class="container-fluid" style="margin-bottom: 20px">
		<h3><b>View All Post</b></h3>	
		<?php echo anchor('welcome/create', 'Add Post', ['class' => 'btn btn-primary']); ?>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">Title</th>
				<th scope="col">Description</th>
				<th scope="col">Created Date</th>
				<th scope="col">Author</th>
				<th scope="col">Action</th>

			</tr>
		</thead>
		<tbody>
			<?php 
			if(count($post) > 0){ 
				foreach ($post as $ps) {
					?>

					<tr class="table">
						<th scope="row"><?php echo $ps->title; ?> </th>
						<td style="width: 25%;overflow: hidden;text-overflow: ellipsis;">
							<?php echo $ps->description; ?> 
						</td>
						<td><?php echo $ps->date_created; ?> </td>
						<td><?php echo $ps->fullname; ?> </td>
						<td>
							<?php echo anchor("welcome/view/{$ps->ID}", 'View', ['class' => 'btn btn-success']); ?> 
							<?php echo anchor("welcome/edit/{$ps->ID}", 'Edit', ['class' => 'btn btn-warning']); ?>
							<?php echo anchor("welcome/delete/{$ps->ID}", 'Delete', ['class' => 'btn btn-danger']); ?>
						</td>
					</tr>
					<?php 
				}
			}else{ ?>

			<tr class="table-standard">
				<th scope="row" colspan="4" > Record Not Founds! </th>
			</tr> 

			<?php
		}
		?>
	</tbody>

</table>
</div>

<?php include_once('footer.php'); ?>
