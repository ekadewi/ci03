<?php 
	$this->load->view('template/header');
 ?>

<div class="container">
	<div class="jumbotron" style="background-color:#CCF;">
    	<div class="page-header" style="color:#066;</h3>">
        	<h1>Blog</h1>
        </div>
        <p>detail blog...</p>
     </div>
</div>

<?php foreach ($detail as $key): ?>
<div class="container">
	<h4>Kategori : <?php echo $key->cat_name; ?></h4>
	<table>
		<tr class="text-right">
			<td> Diposting pada tanggal <?php echo $key->tanggal_post; ?></td>
		</tr>
		<tr class="text-center">
			<td>
				<h3><b><?php echo $key->judul; ?></b><h3>
				</td>
		</tr>
		<tr>
			<td class="text-center">
				<img src="../../upload/<?php echo $key->image;?>" alt="Image" width="500" height="400">
			</td>
		</tr>
		<tr>
			<td class="text-justify">
				<?php echo $key->content; ?>
			</td>
		</tr>
	</table>
</div>
<?php endforeach ?>

<?php $this->load->view('template/footer'); ?>