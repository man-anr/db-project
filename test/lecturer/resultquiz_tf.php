<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

<section class="section">
                    <div class="row" id="table-bordered">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">RESULT QUIZ (TRUE/FALSE)</h4>
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
                                                    <th>STUDENT NAME</th>
                                                    <th>STUDENT ID</th>
                                                    <th>RESULT QUIZ (TRUE/FALSE)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>BASSIMAN ANUAR</td>
                                                    <td>AI190276</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>NURLISA AZMI</td>
                                                    <td>CI190065</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>NUR SYAHIRAH</td>
                                                    <td>CI190007</td>
                                                    <td>20</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="d-grid gap-2">
  <div class="p-2 bg-light border">Number student pass  : 3</div>
  <div class="p-2 bg-light border">Number student fail  : 0</div>
</div>
<?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>