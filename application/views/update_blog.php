<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">

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
					<a class="navbar-brand" href="home"><img class="img-responsive" alt="Coding" src="../../assets/img/logo1.png" width="40" height="40" style="margin-top: -10px;"></a>
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
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- <script>
				// Example starter JavaScript for disabling form submissions if there are invalid fields
				(function() {
				  'use strict';
				  window.addEventListener('load', function() {
		    		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		    		var forms = document.getElementsByClassName('needs-validation');
		    		// Loop over them and prevent submission
		    		var validation = Array.prototype.filter.call(forms, function(form) {
		    			form.addEventListener('submit', function(event) {
		        			if (form.checkValidity() === false) {
					          event.preventDefault();
					          event.stopPropagation();
					          form.classList.add('was-validated');
		      				}, false);
		    			});
		  			}, false);
				})();
		</script> -->
	</body>
</html>