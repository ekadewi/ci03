<?php $this->load->view('template/header'); ?>
<div class="container">
	<div class="jumbotron" style="background-color:#CCF;">
		<div class="page-header" style="color:#066;</h3>">
    		<h1>Blog</h1>
    	</div>
    	<p>Update category...</p>
 	</div>
</div>
<br>
<!-- <div class="alert-warning"><?php // echo (isset($message))? : "";?></div> -->
<div class="container">
	<?php foreach ($detail as $key): ?>
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('category/update_category/'.$key->id, array('class' => 'needs-validation', 'novalidate' => '')); ?>
	<table class="table table-responsive">
		<tr>
			<td>Nama Category</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="nama" style="width: 500px;" value="<?php echo $key->cat_name; ?>"></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td><textarea name="deskripsi" style="height: 300px; width: 800px;"><?php echo $key->cat_description; ?></textarea></td>
		</tr>
		<tr class="text-center">
			<td colspan="3"><input type="submit" name="update" value="edit" class="btn btn-primary"></td>
		</tr>
	</table>

<?php endforeach ?>
</div>
<?php $this->load->view('template/footer'); ?>