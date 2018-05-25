<?php $this->load->view('template/header'); ?>
<div class="container">
	<div class="jumbotron" style="background-color:#CCF;">
		<div class="page-header" style="color:#066;</h3>">
			<h1>Blog</h1>
		</div>
		<p>All about Kimi No Nawa...</p>
	</div>
</div>
<div class="container">
	<a href="category/tambah" class="btn btn-primary">Tambah</a>
</div>
<div class="container">
	<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="table-responsive">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>ID CATEGORY</th>
                            <th>NAMA CATEGROY</th>
                            <th>DESKRIPSI</th>
                            <th>TANGGAL POST</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $key): ?>
                        <tr>
                            <td><?php echo $key->id; ?></td>
                            <td><?php echo $key->cat_name; ?></td>
                            <td><?php echo $key->cat_description; ?></td>
                            <td><?php echo $key->date_created; ?></td>
                            <td>
                            	<a href="category/update_category/<?php echo $key->id ?>" class="btn btn-primary">Edit</a>
								<a href="category/delete_category/<?php echo $key->id ?>" class="btn btn-danger">Hapus</a>
							</td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/footer'); ?>