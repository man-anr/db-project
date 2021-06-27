<?php
session_start();
include_once("../../../database/config.php");
include("../../../template/navs-lecturer.php");
$_SESSION['current_table'] = "quiz_marks";
$quiz_id = "";





$num_row = 0;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lecturer Dashboard</title>
  </head>
  <body class="bg-light ">



      
    <!-- Main Container -->
    <div class="container-fluid ">

    

      <!-- Main row -->
      <div class="row">

    
        <!-- Main div -->
        <main class="col">

        
            <div class="table-responsive">
                <div class="card my-4 shadow-sm">
                    <div class="card-header">
                        <span><i class="bi bi-table me-2"></i><?php echo $_GET['subject_id']?></span>
                
                        <span class="float-right"><?php echo " - Quiz ".$_GET['quiz_type']?> <i class="bi bi-toggle-off text-right"></i></span>
                
                    </div>
                    <div class="card-body">
                        <table class="table table-border table-hover data-table">
                            <thead class="">
                                <tr>
                                    <th scope='col' >No</th>
                                    <th scope='col' >ID</th>
                                    <th scope='col' >Name</th>
                                    <th scope='col' >Marks</th>
                
                                </tr>
                            </thead>
                
                
                            <tbody class="">
                                
                                <?php
                                    $student_marks = "
                                    SELECT quiz_marks.enroll_id, enroll.workload_id, quiz_marks.quiz_id, enroll.student_id, student.name, quiz.type ,quiz_marks.marks
                                    FROM (((quiz_marks
                                    LEFT JOIN enroll
                                    ON quiz_marks.enroll_id = enroll.id)
                                    LEFT JOIN quiz
                                    ON quiz_marks.quiz_id = quiz.id)
                                    LEFT JOIN student
                                    on enroll.student_id = student.id)
                                    WHERE quiz.type = 'multiple' AND
                                    enroll.workload_id = " . $_GET['workload_id'];
                                    $result_student_marks = mysqli_query($con, $student_marks);
                                    if($result_student_marks){
                                        while($row_marks = mysqli_fetch_array($result_student_marks)){
                                            $num_row++;
                                            ?>
                                            <tr>
                                                <td><?php echo $num_row?></td>
                                                <td><?php echo $row_marks['student_id']?></td>
                                                <td><?php echo $row_marks['name']?></td>
                                                <td><?php echo $row_marks['marks']?></td>
                                            </tr>
                                            <?php

                                            $quiz_id = $row_marks['quiz_id'];
                                            

                                        }
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <?php
                        
                        
                        $check_passing_mark = "
                        SELECT * FROM mult_quiz WHERE quiz_id = 
                        " . $quiz_id;
                        // echo $check_passing_mark;
                        $query_check_passing_mark = mysqli_query($con, $check_passing_mark);
                        $total_row_check_passing_mark = mysqli_num_rows($query_check_passing_mark);
                        // echo $total_row_check_passing_mark/2;

                        $get_mark_student_pass = "SELECT * FROM quiz_marks WHERE quiz_id = $quiz_id AND marks >= " . $total_row_check_passing_mark/2;
                        // echo $get_mark_student;
                        $query_get_mark_student_pass = mysqli_query($con, $get_mark_student_pass);
                        $total_row_get_mark_student_pass = mysqli_num_rows($query_get_mark_student_pass);
                        ?>
                        
                        <span class="">Number of student(s) pass:<span class="badge bg-success ms-2"><?php echo $total_row_get_mark_student_pass;?></span></span>
                        
                        <?php

                        $get_mark_student_fail = "SELECT * FROM quiz_marks WHERE quiz_id = $quiz_id AND marks < " . $total_row_check_passing_mark/2;
                        // echo $get_mark_student;
                        $query_get_mark_student_fail = mysqli_query($con, $get_mark_student_fail);
                        $total_row_get_mark_student_fail = mysqli_num_rows($query_get_mark_student_fail);

                        ?>
                        
                        <span class="ms-4">Number of student(s) fail:<span class="badge bg-warning ms-2"><?php echo $total_row_get_mark_student_fail;?></span></span>
                        
                        <?php




                        
                        ?>
                    </div>


                </div>
            </div>
          
        </main>
        <!-- Main div -->

                        
        
    </div>

    
    
      
  </body>
</html>






