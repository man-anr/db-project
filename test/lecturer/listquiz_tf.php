<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

<div id="main-content">
<section class="section">
                    <div class="row" id="table-bordered">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">QUESTIONS</h4>
                                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List
                        </li>
                    </ol>
                </nav>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">SUBJECT: DATABASE
                                        </p>
                                        <p class="card-text">SUBJECT CODE: BIC21404
                                        </p>
                                    </div>
                                    <!-- table bordered -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>NO.</th>
                                                    <th>QUESTION</th>
                                                    <th>ANSWER</th>
                                                    <th>MODIFIED ON</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Database is a data that store in the memory.</td>
                                                    <td>FALSE</td>
                                                    <td></td>
                                                    <td><a class="btn btn-primary" onclick="location.href='createquiz_tf.php'" role="button">Update</a></td>
                                                    <td><a class="btn btn-primary" href="#" role="button">Delete</a></td>
                                                </tr>
                                                <tr>
                                                <td>2</td>
                                                    <td>DBMS is an acronym for 'Database Merging System'. </td>
                                                    <td>FALSE</td>
                                                    <td></td>
                                                    <td><a class="btn btn-primary" onclick="location.href='createquiz_tf.php'" role="button">Update</a></td>
                                                    <td><a class="btn btn-primary" href="#" role="button">Delete</a></td>
                                                </tr>
                                                <tr>
                                                <td>3</td>
                                                    <td>The process of performing corrections on the existing data is Editing.</td>
                                                    <td>TRUE</td>
                                                    <td></td>
                                                    <td><a class="btn btn-primary" onclick="location.href='createquiz_tf.php'" role="button">Update</a></td>
                                                    <td><a class="btn btn-primary" href="#" role="button">Delete</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
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