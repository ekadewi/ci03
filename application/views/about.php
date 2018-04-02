<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
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
						<li><a href="blog">Blog</a></li>
						<li><a href="about">About</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div class="container">
	    	<div class="jumbotron" style="background-color:#CCF;">
	        	<div class="page-header" style="color:#066;</h3>">
	            	<h1>About</h1>
	            </div>
	            <p>About me...</p>
	         </div>
	    </div>

	    <div class="container text-center" >
	    	
	    </div>

	    <div class="container text-center" style="border:solid 1px #CCC; border-radius:5px;">
	    	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-bottom: 10px; padding-top: 10px;">
	    		<img src="assets/img/personal.png" width="100" height="100">
	    	</div>

	    	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-bottom: 10px; padding-top: 10px;">
	    		<img src="assets/img/college.png" width="100" height="100">
	    	</div>

	    	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-bottom: 10px; padding-top: 10px;">
	    		<img src="assets/img/pacman.png" width="100" height="100">
	    	</div>

	    	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	    		<table class="table table-bordered table-hover">
	    			<thead>
	    				<tr>
	    					<td>Full Name</td>
	    					<td>Nick Name</td>
	    					<td>Age</td>
	    				</tr>
	    			</thead>
	    			<tbody>
    					<tr>
		    				<?php foreach ($bio as $key): ?>
								<td>
									<?php echo $key; ?>
								</td>
		    				<?php endforeach ?>
    					</tr>
	    			</tbody>
	    		</table>
	    	</div>

	    	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="border-right: 1px #dcdcdc solid; border-left: 1px #dcdcdc solid;">
	    		<table class="table table-bordered table-hover">
	    			<thead>
	    				<tr>
	    					<td>Study Program</td>
	    					<td>Majors</td>
	    					<td>Institute</td>
	    				</tr>
	    			</thead>
	    			<tbody>
    					<tr>
		    				<?php foreach ($sekolah as $key): ?>
								<td>
									<?php echo $key; ?>
								</td>
		    				<?php endforeach ?>
    					</tr>
	    			</tbody>
	    		</table>
	    	</div>

	    	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	    		<table class="table table-bordered table-hover">
	    			<thead>
	    				<tr>
	    					<td>Hobby</td>
	    				</tr>
	    			</thead>
	    			<tbody>
		    				<?php foreach ($hobi as $key): ?>
    					<tr>
								<td>
									<?php echo $key; ?>
								</td>
    					</tr>
		    				<?php endforeach ?>
	    			</tbody>
	    		</table>
	    	</div>

	    	that's who I'm. So if you want to ask something, you can send messages at ekadewinur034@gmail.com
	    </div>

		<!-- jQuery -->
		<script src="assets/jquery/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>