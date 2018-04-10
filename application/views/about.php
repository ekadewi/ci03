<?php 
	$this->load->view('template/header');
 ?>
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