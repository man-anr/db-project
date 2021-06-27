<?php
include('includes/header.php');
include('includes/navbar.php');
?>

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
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Assignments
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
           
            <div class="card-body">
                  <div class="row">
                                        <div class="col-lg-6 col-md-12">
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
                                       
                                       
                                        <div class="col-lg-6 col-md-12">
                                            <h5> check class that you want to put file in </h5>
                                           
                                            <!-- Table with outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table table-lg">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>SUBJECT NAME</th>
                                                        <th>SUBJECT CODE</th>
                                                
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> <div class="checkbox">
                                                        <input type="checkbox" id="checkbox1" class="form-check-input"
                                                           >
                                                        <label for="checkbox1"></label>
                                                    </div></td>
                                                        <td class="text-bold-500">Database</td>
                                                        <td>BIE21404</td>
                                                        

                                                    </tr>
                                                    <tr>
                                                    <td> <div class="checkbox">
                                                        <input type="checkbox" id="checkbox1" class="form-check-input"
                                                            checked>
                                                        <label for="checkbox1"></label>
                                                    </div></td>
                                                        <td class="text-bold-500">Visual Programming</td>
                                                        <td>BIE20303</td>
                                                      

                                                    </tr>
                                                    <tr>
                                                    <td> <div class="checkbox">
                                                        <input type="checkbox" id="checkbox1" class="form-check-input"
                                                            checked>
                                                        <label for="checkbox1"></label>
                                                    </div></td>
                                                        <td class="text-bold-500">Memasak</td>
                                                        <td>BIE666</td>
                                                        

                                                    </tr>
                                                 
                                                </tbody>
                                            </table>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit"class="btn btn-success me-1 mb-1">UPLOAD</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                
                        </div>
        </div>
    </section>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
