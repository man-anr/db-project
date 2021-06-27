<?php 
	session_start();
  include('../database/config.php');
  
  include_once('../template/navs-student.php');
  include('./../alerts/toast.php');
  $_SESSION['current_table'] = "workload";
  echo "<script>console.log('table: ". $_SESSION['current_table'] . "');</script>" ;

  $sql = "
  
  SELECT lecturer.name as lecturer_name, subject.name subject_name, workload.lecturer_id, workload.subject_id , workload.id as workload_id
  FROM ((workload 
  INNER JOIN lecturer ON lecturer.id = workload.lecturer_id) 
  INNER JOIN subject ON subject.id = workload.subject_id)

  ";
  $result = mysqli_query($con, $sql);
  
  $row = mysqli_fetch_array($result) ;
	
	if(isset($_SESSION['admin'])){
		header("Location: ../index.php");
    
	}


  
  
  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lecturer Dashboard</title>
  </head>
  <body class="bg-light">

      
    <!-- Main Container -->
    <div class="container-fluid">

      <!-- Main row -->
      <div class="row">
      

        <!-- Main Class -->
        <main class="col">

          <ul class="nav nav-pills ms-2 my-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Register</button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">View Registered</button>
              </li>
              <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
              </li> -->
          </ul>
          
          <div class="tab-content md-3" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  

              <!-- register content -->

              <div class="row p-3 ps-3 d-flex justify-content-start">
            
                  <?php

                                    
                  if($result = mysqli_query($con, $sql)){
                      if(mysqli_num_rows($result) >= 0){
                        
                          while($row = mysqli_fetch_array($result)){
                            ?>

                              <div class="card my-2 me-3 shadow" style="max-width: 22rem;;">
                                <div class="card-body ">
                                  <h5 class="card-title"><?php echo $row['subject_id']." - ".$row['subject_name']?></h5>
                                  <p class="card-text text-muted"><strong>Lecturer: </strong><span class="badge rounded-pill bg-info text-dark"><?php echo $row['lecturer_name']?></span></p>
                                </div>
                                
                                <a class="btn btn-primary mb-3" type="submit" value="View" href="register.php?student_id=<?php echo $_SESSION['userid'];?>&workload_id=<?php echo $row['workload_id'];?>">Register</a>
                               
                                
                              </div>
                            
                            <?php
                            
                              
                          
                        }
                          // Free result set
                          //mysqli_free_result($result);
                      } else{
                          echo "No records matching your query were found.";
                      }
                  } else{
                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                  }

                  ?>
                
              </div>


              <!-- register content -->


              </div>

              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                  <!-- register content -->

              <div class="row p-3 ps-3 d-flex justify-content-start">
            
                  <?php

                                    
                  if($result = mysqli_query($con, $sql)){
                      if(mysqli_num_rows($result) >= 0){
                        
                        while($row = mysqli_fetch_array($result)){

                            $query = "SELECT * FROM enroll WHERE workload_id =". $row['workload_id']." AND student_id ='". $_SESSION['userid']."'";
                            $query_result = mysqli_query($con, $query);
                            
                            if($query_result = mysqli_query($con, $query)){
                              if(mysqli_num_rows($query_result) >= 1){

                              $button_state = "";
                                
                                    

                                  
                                
                                ?>

                              

                                <div class="card my-2 me-3 shadow" style="max-width: 22rem;">
                                  <div class="card-body ">
                                    <h5 class="card-title"><?php echo $row['subject_id']." - ".$row['subject_name']?></h5>
                                    <p class="card-text text-muted"><strong>Lecturer: </strong><span class="badge rounded-pill bg-info text-dark"><?php echo $row['lecturer_name']?></span></p>
                                    <?php

                                    while($enroll = mysqli_fetch_array($query_result)){
                                    $_SESSION['enroll_id'] = $enroll['id'];
                                    }
                                    
                                      $marks = "SELECT enroll.student_id, enroll.workload_id, quiz_marks.quiz_id, quiz.type, quiz_marks.marks FROM 
                                            ((quiz_marks 
                                            INNER JOIN enroll ON enroll.id = quiz_marks.enroll_id) 
                                            INNER JOIN quiz on quiz_marks.quiz_id = quiz.id)
                                            WHERE enroll.workload_id =". $row['workload_id']." AND student_id ='". $_SESSION['userid']."'";
                                      // echo $marks;
                                      $marks_result = mysqli_query($con, $marks);
                                      // echo $marks_result;
                                      
                                      
                                      if(mysqli_num_rows($marks_result) >= 1){
                                        while($marks_row = mysqli_fetch_array($marks_result)){
                                        if ($marks_row['marks'] > 0){
                                          echo " <p class='card-text text-muted'><strong>Mark ".$marks_row['type'] . ": </strong> <span class='badge rounded-pill bg-primary'>" . $marks_row['marks']."</span></p>";
                                        } elseif ($marks_row['marks'] == 0) {
                                          echo " <p class='card-text text-muted'><strong>Mark ".$marks_row['type'] . ": </strong> <span class='badge rounded-pill bg-secondary'>" . $marks_row['marks']."</span></p>";
                                        }
                                          
                                        }
                                      

                                      }else{
                                        // echo " <p class='card-text text-muted'><strong>Assignment: </strong> <span class='badge rounded-pill bg-primary'>Not Created</span></p>";
                                        // echo " <p class='card-text text-muted'><strong>Nothing here yet...</strong></p>";

                                      }
                                      



                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    ?>
                                   
                                  </div>

                                  <?php

                                    $check_assignment = "SELECT * FROM assignment WHERE workload_id = " . $row['workload_id'];
                                    $result_check_assignment = mysqli_query($con, $check_assignment);
                                    $num_rows_assignment = mysqli_num_rows($result_check_assignment);
                                    if ($num_rows_assignment >= 1){
                                      ?>
                                        <a class="btn btn-primary mb-2" type="button" value="View" href="assignment/index.php?enroll_id=<?php echo $_SESSION['enroll_id'];?>&workload_id=<?php echo $row['workload_id'];?>&subject_id=<?php echo $row['subject_id'];?>">View Assignment</a>
                                      <?php
                                    } else {
                                      ?>
                                        <button class="btn btn-outline-secondary mb-2" type="button" value="View" href="assignment/index.php?workload_id=<?php echo $row['workload_id'];?>&subject_id=<?php echo $row['subject_id'];?>" disabled>Assignment not created</button>
                                      <?php
                                    }


                                    $check_quiz_tf = "SELECT * FROM quiz WHERE type = 'truefalse' AND workload_id = " . $row['workload_id'];
                                    $result_check_quiz_tf = mysqli_query($con, $check_quiz_tf);
                                    $num_rows_quiz_tf = mysqli_num_rows($result_check_quiz_tf);
                                    
                                    if ($num_rows_quiz_tf >= 1){
                                      $check_mark_tf = "SELECT * 
                                      FROM quiz_marks INNER JOIN quiz 
                                      ON quiz_marks.quiz_id = quiz.id where type = 'truefalse' AND workload_id = " . $row['workload_id'] ." AND enroll_id = ". $_SESSION['enroll_id'];
                                      // echo $row['workload_id'];
                                      $result_check_mark_tf = mysqli_query($con, $check_mark_tf);
                                      $row_check_mark_tf = mysqli_fetch_array($result_check_mark_tf);
                                      if ($row_check_mark_tf['marks'] > 0){
                                        ?>
                                          <button class="btn btn-secondary mb-2" type="button" value="View" onClick='location.href="./truefalse/index.php?workload_id=<?php echo $row['workload_id'];?>&quiz_type=truefalse&enroll_id=<?php echo $_SESSION['enroll_id'];?>"' disabled>Answer Quiz True False</button>
                                        <?php
                                      } else {
                                        ?>
                                          <button class="btn btn-primary mb-2" type="button" value="View" onClick='location.href="./truefalse/index.php?workload_id=<?php echo $row['workload_id'];?>&quiz_type=truefalse&enroll_id=<?php echo $_SESSION['enroll_id'];?>"'>Answer Quiz True False</button>
                                          
                                        <?php
                                      }
                                      
                                    } else {
                                      ?>
                                          <button class="btn btn-outline-secondary mb-2" type="button" value="View" onClick='location.href="./truefalse/index.php?workload_id=<?php echo $row['workload_id'];?>&quiz_type=truefalse&enroll_id=<?php echo $_SESSION['enroll_id'];?>"' disabled>Quiz True False Not Created</button>
                                        <?php
                                    }


                                    $check_quiz_multiple = "SELECT * FROM quiz WHERE type = 'multiple' AND workload_id = " . $row['workload_id'];
                                    $result_check_quiz_multiple = mysqli_query($con, $check_quiz_multiple);
                                    $num_rows_quiz_multiple = mysqli_num_rows($result_check_quiz_multiple);
                                    
                                    if ($num_rows_quiz_multiple >= 1){
                                      $check_mark_multiple = "SELECT * 
                                      FROM quiz_marks INNER JOIN quiz 
                                      ON quiz_marks.quiz_id = quiz.id where type = 'multiple' AND workload_id = " . $row['workload_id'] ." AND enroll_id = ". $_SESSION['enroll_id'];
                                      // echo $check_mark_multiple;
                                      $result_check_mark_multiple = mysqli_query($con, $check_mark_multiple);
                                      $row_check_mark_multiple = mysqli_fetch_array($result_check_mark_multiple);
                                      if ($row_check_mark_multiple['marks'] > 0){
                                        ?>
                                          <button class="btn btn-secondary mb-3" type="button" value="View" onClick='location.href="./multiple/index.php?workload_id=<?php echo $row['workload_id'];?>&quiz_type=multiple&enroll_id=<?php echo $_SESSION['enroll_id'];?>"' disabled>Answer Quiz Multiple</button>
                                        <?php
                                      } else {
                                        ?>
                                          <button class="btn btn-primary mb-3" type="button" value="View" onClick='location.href="./multiple/index.php?workload_id=<?php echo $row['workload_id'];?>&quiz_type=multiple&enroll_id=<?php echo $_SESSION['enroll_id'];?>"' >Answer Quiz Multiple</button>
                                        <?php
                                      }
                                      
                                    } else {
                                      ?>
                                          <button class="btn btn-outline-secondary mb-3" type="button" value="View" onClick='location.href="./multiple/index.php?workload_id=<?php echo $row['workload_id'];?>&quiz_type=multiple&enroll_id=<?php echo $_SESSION['enroll_id'];?>"' disabled>Quiz Multiple Not Created</button>
                                        <?php
                                    }
                                  ?>
                                  
                                  
                                   <!-- <button class="btn btn-success mb-2" type="button" value="View" onClick='location.href="./truefalse/index.php?workload_id=<?php echo $row['workload_id'];?>&quiz_type=truefalse&enroll_id=<?php echo $_SESSION['enroll_id'];?>"' <?php  if($marks_row['marks'] > 0){echo "disabled";}?>>View Quiz True False</button> -->
                                  <!-- <button class="btn btn-success mb-3" type="button" value="View" onClick='location.href="./multiple/index.php?workload_id=<?php echo $row['workload_id'];?>&quiz_type=multiple&enroll_id=<?php echo $_SESSION['enroll_id'];?>"' >View Quiz Multiple</button> -->

                              
                                  
                                   
                                  </div>
                                  
                              
                                
                                
                                <?php
                               
                              } else{
                                ?>
                                
                                
                                
                                <?php
                              }
                              
                            }
                            ?>

                              
                            
                            <?php
                            
                              
                          
                        }
                          // Free result set
                          //mysqli_free_result($result);
                      } else{
                          echo "No records matching your query were found.";
                      }
                  } else{
                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                  }

                  ?>
                
              </div>


              <!-- register content -->
              
              </div>

              <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              
              </div> -->
          </div>

        
          <!-- <div class="row py-4 md-3 shadow-sm bg-white">
            <div class="col-mb-12 ">
              <span class="border rounded-2 shadow-sm p-3 align-middle"><i class="bi bi-speedometer text-dark"></i></span>
                <span class="ms-3 text-center fs-3 fw-bold align-middle">Your list of <?php echo $_SESSION['current_table']?>(s)</span>
            </div>
          </div> -->



          


        

         





            
          


                
                  
                  
            
            








          
        </main>
      </div>
    </div>

   
    <script type="text/javascript">
     

    </script>
    
      
  </body>
</html>