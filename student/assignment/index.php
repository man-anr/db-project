<?php
session_start();
include_once("../../database/config.php");
include_once("../../template/navs-lecturer-assignment.php");
$_SESSION['current_table'] = "assignment";
$_SESSION['enroll_id'] = $_GET['enroll_id'];
 


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
    <title>Student Dashboard</title>
  </head>
  <body class="bg-light">



  


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
                <span class="badge rounded-pill bg-info text-dark me-2"><?php echo $_GET['subject_id'];?></span>Download or Submit Your Task
              </div>
              
              


              <div class="card-body table-responsive">
              
              
                
                
              <table class="table table-border table-hover data-table">
              <thead>
                  <th scope="col">No</th>
                  <th scope="col">Title</th>
                  <th scope="col">Filename</th>
                  <th scope="col">size (in mb)</th>
                  <th scope="col">Actions</th>
              </thead>
              <tbody>
                <?php  



                  $sql = "

                  SELECT * FROM assignment WHERE workload_id = " . $_GET['workload_id'];

                    // echo $sql;

                  $result = mysqli_query($con, $sql);
                    
                  $row = mysqli_fetch_array($result) ;

                  if($result = mysqli_query($con, $sql)){
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){ $num_row++;
                ?>

                  <!-- Modal -->
                  <div class="modal fade" id="submitAssignment-<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Upload a file for <?php echo $row['title'];?></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                          <!-- Modal Content -->
                              
                              
                              <form name="upload" class="needs-validation" action="upload.php?enroll_id=<?php echo $_SESSION['enroll_id'];?>&assignment_id=<?php echo $row['id'];?>&worktype=assignment&lecturer_id=<?php echo $_SESSION['userid'];?>&workload_id=<?php echo $_GET['workload_id'];?>&subject_id=<?php echo $_GET['subject_id'];?>" method="post" enctype="multipart/form-data"  novalidate>

                                  <div class="form-floating mb-3">
                                    <input type="text" name="title" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput">Assignment/Tutorial/Lab</label>
                                    <div class="invalid-feedback">
                                      Please write a title.
                                    </div>
                                  </div>
                                  <div class="input-group">
                                    <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-outline-primary" type="submit" name="submit" id="inputGroupFileAddon04">Upload</button>
                                    <div class="invalid-feedback">
                                      Please upload a file.
                                    </div>
                                  </div>
                                  

                                  
                                </form>

                            








                          <!-- Modal Content -->
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <tr>
                    <th><?php echo $num_row; ?></th>

                    <td><?php echo $row['title']; ?></td>
                    <?php 
                    $student_assignment_answer = "
                    SELECT assignment.id as assignment_id, assignment_answer.enroll_id, assignment_answer.assignment_id, assignment_answer.name, assignment_answer.title as assignment_answer_title ,assignment_answer.size, enroll.workload_id, student.id as student_id
                    FROM assignment_answer
                    INNER JOIN assignment
                    ON assignment_answer.assignment_id = assignment.id
                    INNER JOIN enroll
                    ON assignment_answer.enroll_id = enroll.id 
                    INNER JOIN student
                    ON enroll.student_id = student.id
                    WHERE assignment_answer.assignment_id = " . $row['id'] ." AND enroll.workload_id = " . $_GET['workload_id'] . " AND student.id ='" .$_SESSION['userid']."'";
                    
                    //echo $student_assignment_answer;
                    //echo "<br>" . $student_assignment_answer;
                    $result_student_assignment_answer = mysqli_query($con, $student_assignment_answer);
                    if(mysqli_num_rows($result_student_assignment_answer) >= 1){
                      while($row_student_assignment_answer = mysqli_fetch_array($result_student_assignment_answer)){
                        
                        
                        ?>
                        <td><?php echo $row_student_assignment_answer['name']; ?></td>
                        <td><?php echo number_format($row_student_assignment_answer['size'] / 100000,2) . ' mb'; ?></td>
                        <td class="text-center">
                                      
                      <button class="btn btn-light dropdown float-right" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                          <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                      </button>

                      <ul class="dropdown-menu bg-outline-secondary" aria-labelledby="dropdownMenuLink">
                        <li><h6 class="dropdown-header">Actions</h6></li>
                        <li><hr class="dropdown-divider-dark"></li>
          
                        <li><a class="dropdown-item "  href="./lecturer-uploads/<?php echo $row['name'];?>"  target="_blank" ><i class="bi bi-file-earmark-easel-fill"></i> Open</a></li>
                        <li><a class="dropdown-item text-success"  href="downloads.php?file_id=<?php echo $row['id'] ?>"><i class="bi bi-file-earmark-arrow-down-fill"></i> Download</a></li>

                        <li><hr class="dropdown-divider-dark"></li>
                        <li><button class="dropdown-item " data-bs-toggle="modal" data-bs-target="#submitAssignment-<?php echo $row['id'];?>" href=""  target="" disabled><i class="bi bi-file-earmark-easel-fill" ></i> Submited</button></li>
                      </ul>

                    </td>
                        <?php

                      }
                    } else {
                        echo "<td class='text-muted'>Not submited</td>";
                        echo "<td class='text-muted'>Not submited</td>";
                        ?>
                        <td class="text-center">
                                      
                      <button class="btn btn-light dropdown float-right" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                          <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                      </button>

                      <ul class="dropdown-menu bg-outline-secondary" aria-labelledby="dropdownMenuLink">
                        <li><h6 class="dropdown-header">Actions</h6></li>
                        <li><hr class="dropdown-divider-dark"></li>
          
                        <li><a class="dropdown-item "  href="./lecturer-uploads/<?php echo $row['name'];?>"  target="_blank" ><i class="bi bi-file-earmark-easel-fill"></i> Open</a></li>
                        <li><a class="dropdown-item text-success"  href="downloads.php?file_id=<?php echo $row['id'] ?>"><i class="bi bi-file-earmark-arrow-down-fill"></i> Download</a></li>

                        <li><hr class="dropdown-divider-dark"></li>
                        <li><a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#submitAssignment-<?php echo $row['id'];?>" href=""  target="" ><i class="bi bi-file-earmark-easel-fill"></i> Submit</a></li>
                      </ul>

                    </td>
                        
                        
                        <?php
                    }

                    ?>
                    

                    

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




   
    (function () {
    'use strict'

    
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
