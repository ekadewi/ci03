<?php $this->load->view('template/header'); ?>
<div class="container">
	<div class="jumbotron" style="background-color:#CCF;">
		<div class="page-header" style="color:#066;</h3>">
    		<h1>Blog</h1>
    	</div>
    	<p>Update blog...</p>
 	</div>
</div>
<br>
<!-- <div class="alert-warning"><?php // echo (isset($message))? : "";?></div> -->
<div class="container">
	<?php foreach ($single as $key): ?>
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('blog/update/'.$key->id);
	?>
	<div class="form-group">
		<table class="table table-responsive">
			<tr>
				<td>Id Blog</td>
				<td>:</td>
				<td><input type="text" name="id" readonly value="<?php echo $key->id; ?>"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td>
					<input class="form-control" required type="text" name="judul" style="width: 500px;" value="<?php echo set_value('judul', $key->judul); ?>">
				</td>
			</tr>
			<tr>
				<td>Content</td>
				<td>:</td>
				<td><textarea name="content" style="height: 300px; width: 800px;" required><?php echo set_value('content', $key->content); ?></textarea></td>
			</tr>
			<tr>
				<label>Kategori</label>
					<select name="cat_id" class="form-control" required>
						<option value="">Pilih Kategori</option>
						<?php foreach($categories as $category): ?>
						<option value="<?php echo $category->id; ?>"><?php echo $category->cat_name; ?></option>
						<?php endforeach; ?>
					</select>
			</tr>
			<tr>
				<td>Author</td>
				<td>:</td>
				<td><input type="text" name="input_author" style="width: 500px;" value="<?php echo set_value('input_author', $key->author); ?>" required></td>
			</tr>
			<tr>
				<td>Email Author</td>
				<td>:</td>
				<td><input type="text" name="input_email" style="width: 500px;" value="<?php echo set_value('input_email', $key->email_author); ?>" required></td>
			</tr>
			<tr>
				<td>No Telp Author</td>
				<td>:</td>
				<td><input type="text" name="input_notelp" style="width: 500px;" value="<?php echo set_value('input_notelp', $key->no_telp); ?>" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="input_username" style="width: 500px;" value="<?php echo set_value('input_username', $key->username); ?>" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="input_password" style="width: 500px;" value="<?php echo set_value('input_password', $key->password); ?>" required></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td>:</td>
				<td><input type="file" name="input_gambar"></td>
			</tr>
			<tr class="text-center">
				<td colspan="3"><input type="submit" name="update" value="Edit" class="btn btn-primary"></td>
			</tr>
		</table>
		<?php endforeach ?>
	</div>
</div>
<?php $this->load->view('template/footer'); ?>