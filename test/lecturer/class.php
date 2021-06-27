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
                <h3>My Class</h3>
                <p class="text-subtitle text-muted">Kelaih kawe ajo</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Class
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List of Student Name in the class</h4>
                            </div>
                            <div class="table-responsive">
                                            <table class="table table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>STUDENT NAME</th>
                                                        <th>STUDENT ID</th>
                                                  
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold-500">Nurlisa Azmi</td>
                                                        <td>2100021</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Syahirah Sohaimi</td>
                                                        <td>2100022</td>
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
