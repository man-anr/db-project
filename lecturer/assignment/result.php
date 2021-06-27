<?php
session_start();
include_once("../../database/config.php");
include_once("../../template/navs-lecturer-assignment.php");
include('../../alerts/toast.php');
$_SESSION['current_table'] = "assignment";


$num_row = 0;

;

  // echo $sql;

// $result = mysqli_query($con, $sql);
  
// $row = mysqli_fetch_array($result) ;


  // $result = mysqli_query($con, $sql);
  
  // $row = mysqli_fetch_array($result) ;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lecturer Dashboard</title>
  </head>
  <body class="">


    <!-- Main Container -->
    <div class="container-fluid">

      <!-- Main row -->
      <div class="row">

        <!-- Main div -->
        <main class="col bg-red">

        <div class="row">
           

          <div class="col">
            <div class="card my-4 shadow-sm">
              <div class="card-header">
                View your uploaded files
              </div>
              


              <div class="card-body table-responsive">
              
              
                
                
              <table class="table table-border table-hover data-table">
              <thead>
                  <th scope="col">No</th>
                  <th scope="col">Title</th>
                  <th scope="col">Student ID</th>
                  <th scope="col">Student name</th>
                  <th scope="col">File</th>
                  <th scope="col">size (in mb)</th>
                  <th scope="col">Actions</th>
              </thead>
              <tbody>
                <?php  



                    $sql_assignment = "
                    SELECT assignment_answer.id as assignment_answer_id, assignment_answer.enroll_id, assignment_answer.assignment_id, assignment_answer.name, assignment.title as assignment_answer_title,assignment_answer.size, student.name as student_name, student.id as student_id, enroll.workload_id 
                    FROM assignment_answer
                    INNER JOIN assignment
                    ON assignment_answer.assignment_id = assignment.id 
                    INNER JOIN enroll
                    ON assignment_answer.enroll_id = enroll.id 
                    INNER JOIN student
                    ON enroll.student_id = student.id 
                
                    WHERE enroll.workload_id = " . $_GET['workload_id'];

                    // echo $sql_assignment;

                    $result_assignment = mysqli_query($con, $sql_assignment);
                    
                  


                  if($result = mysqli_query($con, $sql_assignment)){
                    if(mysqli_num_rows($result_assignment) > 0){
                      while($row = mysqli_fetch_array($result_assignment)){ $num_row++;
 ?>
                  <tr>
                    <th><?php echo $num_row; ?></th>
                    <td><?php echo $row['assignment_answer_title']; ?></td>
                    
                    <td><?php echo $row['student_id']; ?></td>
                    <td><?php echo $row['student_name']; ?></td>
                    
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo number_format($row['size'] / 100000,2) . ' mb'; ?></td>

                    <td class="text-center">
                                      
                    <a class="btn btn-light dropdown float-right" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                      </svg>
                    </a>

                    <ul class="dropdown-menu bg-outline-secondary" aria-labelledby="dropdownMenuLink">
                      <li><h6 class="dropdown-header">Actions</h6></li>
                      <li><hr class="dropdown-divider-dark"></li>
                      <li><a class="dropdown-item text-success"  href="downloads-student.php?file_id=<?php echo $row['assignment_answer_id'];?>"><i class="bi bi-file-earmark-arrow-down-fill"></i> Download</a></li>
                    </ul>

                  </tr>
                <?php }}}?>

              </tbody>
              </table>
              
              </div>

            








            </div>
          </div>
        
        
        </div>

       
       

        </main>
        <!-- Main div -->

      </div>
      <!-- Main row -->

    </div>
    <!-- Main Container -->


    
   <script type="text/javascript">




    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
      })
    })()


    var alertList = document.querySelectorAll('.alert')
      alertList.forEach(function (alert) {
        new bootstrap.Alert(alert)
    })


  </script>
      
      
  </body>
</html>