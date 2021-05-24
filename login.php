<?php 

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Man">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Bootstrap 5 Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="logo" width="100">
					</div>
					
					<div class="card shadow-sm">
						<div class="d-flex align-items-center justify-content-center card-footer py-3 border-0" role="group" data-toggle="buttons">
							<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
								<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
								<label class="btn btn-outline-primary" for="btnradio1">Student</label>
							  
								<input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
								<label class="btn btn-outline-primary" for="btnradio2">Lecturer</label>
							  
								<input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
								<label class="btn btn-outline-primary" for="btnradio3">Admin</label>
							  </div>
						  </div>
						<div class="card-body p-5">
						
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">ID</label>
									<input id="username" type="username" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										ID is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="forgot.html" class="float-end">
											Forgot Password?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" name='login' id='login' class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="register.html" class="text-dark">Create One</a>
							</div>
							
						</div>
						
					</div>
					<!-- <div class="text-center mt-5 text-muted">
						Copyright &copy; 2017-2021 &mdash; Your Company 
					</div> -->
				</div>
			</div>
		</div>
	</section>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
	$(function(){
		$('#login').click(function(e){
			
			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {username: username, password: password},
				success: function(data){
					alert(data);
					if($.trim(data) === "1"){
						setTimeout(' window.location.href =  "index.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});
		});
	});
	

</script>
</body>
</html>