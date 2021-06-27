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
                <h3>Class Submission Assignments</h3>
                <p class="text-subtitle text-muted">shows student that have submitted file assignments/lab</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="Class.php">My Class</a></li>
                        <li class="breadcrumb-item"><a href="classassignment.php">Class Assignment</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Student Submission
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Submit File: "file name" </h4>
                            </div>
                           <!-- Table with outer spacing -->
                           <div class="table-responsive">
                                            <table class="table table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>DATE UPLOAD</th>
                                                        <th>FILE NAME</th>
                                                        <th>DESCRIPTION</th>
                                                        <th>SUBMITTED BY</th>
                                                        <th>MARKS</th>
                                                        <th>ACTION</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold-500">2020-12-21 10:12:04</td>
                                                        <td>File Name</td>
                                                        <td class="text-bold-500">blabla bla</td>
                                                        <td>Student Name</td>
                                                        <td>  <input type="text" class="form-control" id="basicInput" placeholder="Marks" style="width: 100px;">  </td>
                                                        <td> <a href="#" class="btn btn-info"><i class="bi bi-download"></i></a> <a href="" class="btn btn-success">SAVE</a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">2020-12-21 10:12:04</td>
                                                        <td>File Name</td>
                                                        <td class="text-bold-500">blabla bla</td>
                                                        <td>Student Name</td>
                                                        <td>  <input type="text" class="form-control" id="basicInput" placeholder="Marks" style="width: 100px;">  </td>
                                                        <td> <a href="#" class="btn btn-info"><i class="bi bi-download"></i></a> <a href="" class="btn btn-success">SAVE</a> </td>
                                                    </tr>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                        </div>
                    </section>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>
