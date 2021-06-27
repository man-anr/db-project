<?php 
include('includes/header.php');
include('includes/navbar.php');
?>
<div id="main-content">
<form class="was-validated">
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Question 1</label>
    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="add_quiz.php">Add Quiz</a></li>
                        <li class="breadcrumb-item"><a href="create.php">Create Quiz</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create OBJ
                        </li>
                    </ol>
                </nav>
    <textarea class="form-control is-invalid" id="validationTextarea" style="height: 200px" placeholder="Enter your question here" required></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
  </div>
  <div class="mb-4">
  <div class="input-group mb-3">
  <div class="input-group-text">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" >
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-text">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-text">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" >
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-text">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" >
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" required>
</div>
</div>

  <div class="mb-4">
    <button onclick="location.href='listquiz_obj.php'" class="btn btn-primary" type="submit">Submit</button>
  </div>
</form>
</div>
<?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>