<?php $this->load->view('template/header'); ?>
<div>
	<h4 class="text-primary text-center">Update User</h4>
</div>
<div class="container">
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('user/update/'.$single_user[0]->id, array('class' => 'needs-validation', 'novalidate' => '')); ?>
	<table class="table table-responsive">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="nama" style="width: 500px;" value="<?php echo $single_user[0]->nama; ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" style="height: 100px; width: 500px;"><?php echo $single_user[0]->alamat ?></textarea></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>
				<select name="agama" class="" required>
					<?php
						if ($single_user[0]->agama == 'islam') {
							$islam = true;
						} else if ($single_user[0]->agama == 'hindu') {
							$hindu = true;
						} else if ($single_user[0]->agama == 'katolik') {
							$katolik = true;
						} else if ($single_user[0]->agama == 'kristen') {
							$kristen = true;
						} else if ($single_user[0]->agama == 'budha') {
							$budha = true;
						} else {
							false;
						}
					?>
					<option value="islam" <?php (isset($islam)) ? : 'selected' ?>>islam</option>
					<option value="hindu" <?php (isset($hindu)) ? : 'selected' ?>>hindu</option>
					<option value="katolik" <?php (isset($katolik)) ? : 'selected' ?>>katolik</option>
					<option value="kristen" <?php (isset($kristen)) ? : 'selected' ?>>kristen</option>
					<option value="budha" <?php (isset($budha)) ? : 'selected' ?>>budha</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email" style="width: 500px;" value="<?php echo $single_user[0]->email ?>"></td>
		</tr>
		<tr>
			<td>No Telp</td>
			<td>:</td>
			<td><input type="text" name="no_telp" style="width: 500px;" value="<?php echo $single_user[0]->no_hp ?>"></td>
		</tr>
		<tr>
			<td>Tipe user</td>
			<td>:</td>
			<td>
				<input type="radio" name="typeuser" value="2"> Non Premium
				<input type="radio" name="typeuser" value="3"> Premium
			</td>
		</tr>
		<tr class="text-center">
			<td colspan="3"><input type="submit" name="update" value="Update" class="btn btn-primary"></td>
		</tr>
	</table>
</div>
<?php $this->load->view('template/footer'); ?>