<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dt/datatables.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dt/jquery.dataTables.min.css"/>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar-inverse navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home"><img class="img-responsive" alt="Coding" src="assets/img/logo1.png" width="40" height="40" style="margin-top: -10px;"></a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="home">Home</a></li>
						<li><a href="about">About</a></li>
						<li><a href="blog">Blog</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

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
	</body>
	<script src="<?php echo base_url() ?>assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/dt/datatables.min.js"></script>
	<script type="text/javascript">
	        $(document).ready( function () {
	            $('#myTable').DataTable({
	            	"bInfo" : false,
	            	"ordering" : true,
	            	"dom": '<<"col-sm-4"l><"col-sm-4 text-center"f>>rti<<"col-sm-4 text-center"><"col-sm-4 text-center"p>>'
	            });
	        } );
	</script>
</html>