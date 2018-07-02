<?php $this->load->view('template/header'); ?>
<div class="container">
	<div class="jumbotron" style="background-color:#CCF;">
		<div class="page-header" style="color:#066;</h3>">
			<h1>Akun</h1>
		</div>
		<p>Ganti Password...</p>
	</div>
</div>
<div class="container">
	<?php echo form_open_multipart('user/ganti_pass', array('class' => 'needs-validation', 'novalidate' => '')); ?>
	<table class="table table-responsive text-center">
		<tr>
			<td>
				<p>Username</p>
				<input type="text" readonly disabled name="username" style="width: 300px;" value="<?php echo $this->session->userdata('username'); ?>">
			</td>
		</tr>
		<tr>
			<td>
				<p>Password</p>
				<input type="password" required name="password" style="width: 300px;" value="<?php echo set_value('password'); ?>">
			</td>
		</tr>
		<tr class="text-center">
			<td colspan="3"><input type="submit" name="submit" value="Ganti password" class="btn btn-primary"></td>
		</tr>
	</table>
</div>
<?php $this->load->view('template/footer'); ?>