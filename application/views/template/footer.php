</body>
<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/jquery/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/jquery/jquery.min.js"></script>
<!-- datatable -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/dt/datatables.min.js"></script>
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
            $('#myTable').DataTable({
            	"bInfo" : false,
            	"ordering" : true,
            	"dom": '<<"col-sm-4"l><"col-sm-4 text-center"f>>rti<<"col-sm-4 text-center"><"col-sm-4 text-center"p>>'
            });
        } );
</script>
</html>