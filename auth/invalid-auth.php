<?php 

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		header("Location: ../index.php");
	}

    $wrongid = $_GET['id']


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Man">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>QuizRoll Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
	
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center">
						<img src="https://www.brandbucket.com/sites/default/files/logo_uploads/297086/large_quizroll.png" alt="logo" width="200">
					</div>
					
					<div class="card shadow-sm">
					<form name="login" action = "login.php" method = "POST" class="needs-validation" autocomplete="on" novalidate>

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

							<!-- Error Alert -->
							

							<div class="alert alert-danger show fade alert-dismissible d-flex align-items-center" id="wronginput" role="alert">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-3" viewBox="0 0 16 16" role="img" aria-label="Warning:">
									<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
								</svg>
								Invalid Account, ID or Password.
								<button type="button" class="btn-close close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
														
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
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="register.html" class="text-dark">Create One</a>
								
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







        //  function validation()  
        //     {  
        //         var id=document.login.user.value;  
        //         var ps=document.login.pass.value;  
        //         if(id.length=="" && ps.length=="") {  
        //             alert("User Name and Password fields are empty");  
        //             return false;  
        //         }  
        //         else  
        //         {  
        //             if(id.length=="") {  
        //                 alert("User Name is empty");  
        //                 return false;  
        //             }   
        //             if (ps.length=="") {  
        //             alert("Password field is empty");  
        //             return false;  
        //             }  
        //         }                             
        //     }  
	

</script>
</body>
</html>