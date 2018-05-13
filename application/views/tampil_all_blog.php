<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dt/datatables.min.css"/>

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
					<a class="navbar-brand" href="home"><img class="img-responsive" alt="Coding" src="../assets/img/logo1.png" width="40" height="40" style="margin-top: -10px;"></a>
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
            	<p>Blog dalam Tabel...</p>
         	</div>
    	</div>
		<br>
		<!-- <div class="alert-warning"><?php // echo (isset($message))? : "";?></div> -->
		<div class="container">
			<div class="row">
	        <div class="col-sm-12">
	            <div class="white-box">
	                <div class="table-responsive">
	                    <table class="table" id="myTable">
	                        <thead>
	                            <tr>
	                                <th>Judul</th>
	                                <th>Kategori</th>
	                                <th>Tanggal Post</th>
	                                <th>Author</th>
	                                <th>Email Author</th>
	                                <th>Notelp</th>
	                                <th>Username</th>
	                                <th>Password</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        <?php foreach ($blog as $key): ?>
	                            <tr>
	                                <td><?php echo $key->judul; ?></td>
	                                <td><?php echo $key->cat_name; ?></td>
	                                <td><?php echo $key->tanggal_post; ?></td>
	                                <td><?php echo $key->author; ?></td>
	                                <td><?php echo $key->email_author; ?></td>
	                                <td><?php echo $key->no_telp; ?></td>
	                                <td><?php echo $key->username; ?></td>
	                                <td><?php echo $key->password; ?></td>
	                            </tr>
	                        <?php endforeach ?>
	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
		</div>
	</body>
	<!-- jQuery -->
		<script src="<?php echo base_url() ?>assets/jquery/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/dt/datatables.min.js"></script>
		<script> // Example starter JavaScript for disabling form submissions if there are invalid fields 
			(function() { 'use strict';
			window.addEventListener('load', function() {   
				// Fetch all the forms we want to apply custom Bootstrap validation styles to   
				var forms = document.getElementsByClassName('needs-validation');   
				// Loop over them and prevent submission   
				var validation = Array.prototype.filter.call(forms, function(form) {     
					form.addEventListener('submit', function(event) {       
						if (form.checkValidity() === false) {         
							event.preventDefault();         
							event.stopPropagation();       
						}       
						form.classList.add('was-validated');     
					}, false);   
				}); }, false); 
			})(); 
		</script>
		<script type="text/javascript">
	        $(document).ready( function () {
	            $('#myTable').DataTable();
	        } );
	    </script>
</html>