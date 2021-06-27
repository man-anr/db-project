<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

<div id="main-content">
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Quiz</h3>
                <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Quiz</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
 <section class="section">
                    <div class="row" id="table-responsive">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Your Subject List</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <table class="table table-bordered border-dark">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Subject Code</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Create Quiz</th>
                                                    <th scope="col">Quiz True/False</th>
                                                    <th scope="col">Quiz Objective</th>
                                            
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>BIC 21404</td>
                                                    <td>Database</td>
                                                    <td><input onclick="location.href='create.php'" class="btn btn-primary" type="button" value="Create"></td>
                                                    <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button onclick="location.href='resultquiz_tf.php'" type="button" class="btn btn-outline-primary">Result</button>
                                                        <button onclick="location.href='listquiz_tf.php'" type="button" class="btn btn-outline-primary">View Quiz</button></div></td>
                                                    <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button onclick="location.href='resultquiz_obj.php'" type="button" class="btn btn-outline-primary">Result</button>
                                                        <button onclick="location.href='listquiz_obj.php'" type="button" class="btn btn-outline-primary">View Quiz</button></div></td>                                        
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>BIE 20203</td>
                                                    <td>Software Design</td>
                                                    <td><input onclick="location.href='create.php'" class="btn btn-primary" type="button" value="Create"></td>
                                                    <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button onclick="location.href='resultquiz_tf.php'" type="button" class="btn btn-outline-primary">Result</button>
                                                        <button onclick="location.href='listquiz_tf.php'" type="button" class="btn btn-outline-primary">View Quiz</button></div></td>                                                      
                                                        <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button onclick="location.href='resultquiz_obj.php'" type="button" class="btn btn-outline-primary">Result</button>
                                                        <button onclick="location.href='listquiz_obj.php'" type="button" class="btn btn-outline-primary">View Quiz</button></div></td>                                                  
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>BIE 20303</td>
                                                    <td>Algorithm</td>
                                                    <td><input onclick="location.href='create.php'" class="btn btn-primary" type="button" value="Create"></td>
                                                    <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button onclick="location.href='resultquiz_tf.php'" type="button" class="btn btn-outline-primary">Result</button>
                                                        <button onclick="location.href='listquiz_tf.php'" type="button" class="btn btn-outline-primary">View Quiz</button></div></td>   
                                                        <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button onclick="location.href='resultquiz_obj.php'" type="button" class="btn btn-outline-primary">Result</button>
                                                        <button onclick="location.href='listquiz_obj.php'" type="button" class="btn btn-outline-primary">View Quiz</button></div></td>                                                
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                </section>
          
 <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>
 