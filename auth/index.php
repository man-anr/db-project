<?php 

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		header("Location: ../index.php");
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Man">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>QuizRoll Login</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
	
</head>

<body>
	<section class="h-100">
		<div class="container h-100" >
			<div class="row justify-content-sm-center h-100" >
				<div class="col-xxl-4 col-xl-4 col-lg-5 col-md-7 col-sm-4" >
					<div class="text-center">
						<img src="https://www.brandbucket.com/sites/default/files/logo_uploads/297086/large_quizroll.png" alt="logo" width="200">
					</div>
					
					<div class="card shadow rounded-3 " >
					
					<form name="login" action = "login.php" onsubmit = "" method = "POST" class="needs-validation" autocomplete="on" novalidate>

					<div class=" card-header py-3 d-flex justify-content-center" role="group" data-toggle="buttons">
							<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
								<div class="">
									
									<input type="radio" class="btn-check" name="usertype" id="btnradio1" value="student" autocomplete="off" required>
									<label class="btn btn-outline-primary" for="btnradio1">Student  </label >
									<input type="radio" class="btn-check" name="usertype" id="btnradio2" value="lecturer" autocomplete="off" required>
									<label class="btn btn-outline-primary" for="btnradio2">Lecturer</label>
									<input type="radio" class="btn-check" name="usertype" id="btnradio3" value="admin" autocomplete="off" required>
									<label class="btn btn-outline-primary" for="btnradio3">Admin</label>
									<div class="invalid-feedback ">
									Please select an account.
								</div>
								</div>
								
							</div>
							
					</div>
						  
						<div class="card-body p-5">
						<h1 class="fs-4 card-title fw-bold mb-4 text-left">Login<i class="bi bi-shield-lock-fill ms-2" style=""></i></h1>

														

						
							

							
								<div class="input-group mb-3">
									<!-- <label class="mb-2 text-muted form-label" for="email">ID</label> -->
									<span class="input-group-text text-dark" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
									<input for="exampleDropdownFormEmail1" id="user" type="text" class="form-control" name="user" placeholder="ID" required>
									<div class="invalid-feedback">
								    	ID is required
							    	</div>
									
								</div>

								<div class="input-group mb-3">

									<span class="input-group-text text-dark" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
									<input for="exampleDropdownFormEmail1" id="pass" type="password" class="form-control " name="pass" placeholder="Password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="mt-4 d-grid">
									
									<button type="submit" name='login' id='login' class="btn btn-primary">
										Login me in
										<i class="bi bi-house-door-fill ms-2"></i>
									</button>
									
							</form>
								</div>
								
						</div>
						<div class="card-footer py-3">
							<div class="text-center">

								Can't remember your password? <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"  target="_blank" class="text-dark"><br>We can't help you</a>
								
							</div>
							
							
						</div>
						
					</div>
					<div class="text-center mt-5 text-muted">
						QuizRoll &copy; BIC21404 &mdash; Group 17
					</div>
				</div>
			</div>
		</div>
	</section>
 <!-- Optional JavaScript; choose one of the two! -->
     
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

<script type="text/javascript">




	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function () {
	'use strict'

	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll('.needs-validation')

	// Loop over them and prevent submission
	Array.prototype.slice.call(forms)
		.forEach(function (form) {
		form.addEventListener('submit', function (event) {
			if (!form.checkValidity()) {
			event.preventDefault()
			event.stopPropagation()
			}

			form.classList.add('was-validated')
		}, false)
		})
	})()


	var alertList = document.querySelectorAll('.alert')
		alertList.forEach(function (alert) {
			new bootstrap.Alert(alert)
	})


</script>


	<script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>