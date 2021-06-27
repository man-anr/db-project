<?php
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="man">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page based on Bootstrap 5">
	<title>Bootstrap 5 Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center">
					<img src="https://www.brandbucket.com/sites/default/files/logo_uploads/297086/large_quizroll.png" alt="logo" width="200">
					</div>
					<div class="card shadow">
                    <img src="https://image.freepik.com/free-vector/public-approval-concept-illustration_52683-32169.jpg" class="card-img-top" alt="...">
						<div class="card-body p-4">
                        <h5 class="card-title">Alrighty, all set and done!</h5>
                        <p class="card-text">Lets get you started!</p>
                        <blockquote class="blockquote mb-0">
                        <footer class="d-flex justify-content-center">
                        <a class="btn btn-primary m-3" href="./../auth/index.php" role="button">Take me back to login</a>
                        </footer>
                        </blockquote>
                        </div>
					</div>
					<div class="text-center mt-5 text-muted">
						QuizRoll &copy; BIC21404 &mdash; Group 17
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
	<script>
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
	</script>
</body>
</html>