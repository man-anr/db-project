<?php
include('includes/header.php');
include('includes/classnavbar.php');
?>

<!--- Default Layout ----->
<div id="main-content">

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Assignments</h3>
                <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="Class.php">My Class</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Class Assignment </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
           
            <div class="card-body">
                  <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">File</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                            <div class="form-group">
                                        <label for="basicInput">File Name</label>
                                        <input type="text" class="form-control" id="basicInput"
                                            placeholder="Enter File Name">

                                     </div>
                                     <div class="form-group mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    
                                    </div>
                                    </div>
                                           
                                        </div>
                                       
                                       
                                        <div class="col-lg-8 col-md-12">
                            
                                           
                                            <!-- Table with outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>DATE UPLOAD</th>
                                                        <th>FILE NAME</th>
                                                        <th>DESCRIPTION</th>
                                                        <th>ACTION</th>
                                                
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>27-04-2021</td>
                                                        <td>Lab Tutorial 1</td>
                                                        <td>ini lab </td>
                                                        <td> <a href="classsubmit.php" class="btn btn-success"><i class="bi bi-folder"></i></a> 
                                                        <a href="#" class="btn btn-info"><i class="bi bi-download"></i></a> <a href="#" class="btn btn-danger"><i class="bi bi-x"></i></a> </td>
                                                        

                                                    </tr>
                                                    <tr>
                                                    <td>29-04-2021</td>
                                                        <td>Assignment 1</td>
                                                        <td>ini Assignment</td>
                                                        <td> <a href="classsubmit.php" class="btn btn-success"><i class="bi bi-folder"></i></a> <a href="#" class="btn btn-info"><i class="bi bi-download"></i></a> 
                                                        <a href="#" class="btn btn-danger"><i class="bi bi-x"></i></a> 
                                                      

                                                    </tr>
                                                    <tr>
                                                         <td>26-06-2021</td>
                                                        <td>Lab Tutorial 2</td>
                                                        <td>ini lab </td>
                                                        <td> <a href="classsubmit.php" class="btn btn-success"><i class="bi bi-folder"></i></a> <a href="#" class="btn btn-info"><i class="bi bi-download"></i></a> 
                                                        <a href="#" class="btn btn-danger"><i class="bi bi-x"></i></a> 
                                                    </tr>
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                
                        </div>
        </div>
    </section>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>
