<?php 
	$this->load->view('template/header');
 ?>
<div class="container">
	<div class="jumbotron" style="background-color:#CCF;">
		<div class="page-header" style="color:#066;</h3>">
    		<h1>Blog</h1>
    	</div>
    	<p>All about Kimi No Nawa...</p>
 	</div>
</div>
<div class="container">
	<a href="<?php echo base_url() ?>blog/tambah" class="btn btn-primary">Tambah</a>
	<a href="<?php echo base_url() ?>category" class="btn btn-primary">category</a>
	<a href="<?php echo base_url() ?>blog/blog_kolom" class="btn btn-primary">Kolom Blog</a>
</div>
<br>
<div class="container text-center">
	<?php foreach ($artikel as $key): ?>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<table style="margin-bottom: 30px;">
				<tr>
					<td>
						<a href="<?php echo base_url() ?>blog/detail/<?php echo $key->id ?>" style="color: black;">
							<img src="<?php echo base_url() ?>upload/<?php echo $key->image;?>" alt="Image" width="300" height="200">
							<br>
							<?php echo $key->judul ?>
						</a>
						<br>
						<a href="<?php echo base_url() ?>blog/update/<?php echo $key->id ?>" class="btn btn-primary">Edit</a>
						<a href="<?php echo base_url() ?>blog/delete/<?php echo $key->id ?>" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
			</table>
		</div>
	<?php endforeach ?>
</div>
<div class="text-center">
	<?php
	if (isset($links)) {
		echo $links;
	}
?>
</div>
<?php $this->load->view('template/footer'); ?>