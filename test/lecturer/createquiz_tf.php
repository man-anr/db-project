<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

<div id="main-content">
<form class="was-validated">
<div class="mb-4">
  <label for="formGroupExampleInput" class="form-label">QUESTION 1</label>
  <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="add_quiz.php">Add Quiz</a></li>
                        <li class="breadcrumb-item"><a href="create.php">Create Quiz</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create TF
                        </li>
                    </ol>
                </nav></div>
  <div class="mb-4">
<div class="form-floating">
  <textarea class="form-control is invalid" id="validationTextarea" placeholder="Leave a comment here" style="height: 200px" required>
</textarea>
<div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
  <label for="floatingTextarea2">Write your question here</label>
</div></div>
<div class="mb-4">
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    TRUE
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    FALSE
  </label>
</div></div>
<div class="mb-4">
    <button onclick="location.href='listquiz_obj.php'" class="btn btn-primary" type="submit">Submit</button>
  </div>
</form></div>
 <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>
 