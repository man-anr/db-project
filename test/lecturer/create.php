<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

<div id="main-content">

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="index.html">Add Quiz</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Quiz</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Quiz</h4>
            </div>
            <div class="card-body">
            <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Quiz Title</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Quiz Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button onclick="location.href='createquiz_tf.php'" class="btn btn-primary me-md-2" type="button"> <i class="bi bi-file-earmark-plus"></i> Quiz (True/False) </button>
  <button onclick="location.href='createquiz_obj.php'" class="btn btn-primary me-md-2" type="button"> <i class="bi bi-file-earmark-plus"></i> Quiz (Objective) </button>
</div>
 

            </div>
        </div>
        
    </section>
</div>

<?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>