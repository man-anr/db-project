<?php 
	session_start();
  include('../database/config.php');
  
  include_once('../template/navs.php');
include("./../alerts/toast.php");
  $_SESSION['current_table'] = "workload";
  $_SESSION['workload'] = "yes";
  echo "<script>console.log('table: ". $_SESSION['current_table'] . "');</script>" ;

  $sql = "
  SELECT lecturer.name as lecturer_name, subject.name subject_name, workload.lecturer_id, workload.subject_id , workload.mod_by, workload.mod_date
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
    <title>Workload</title>
  </head>
  <body class="bg-light">

      
    <!-- Main Container -->
    <div class="container-fluid">

      <!-- Main row -->
      <div class="row">
      

        <!-- Main Class -->
        <main class="col">

        
        <div class="row py-4 md-3 shadow-sm bg-white">
            <div class="col-mb-12">
              <span class="border rounded-2 shadow-sm p-3 align-middle"><i class="bi bi-speedometer text-dark"></i></span>
                <span class="ms-3 text-center fs-3 fw-bold align-middle"><?php echo $_SESSION['current_table']?></span>
            </div>
          </div>

          <!-- Admin Card -->
          <div class="card shadow my-4">  
            
            <!-- Admin Class -->
            <div class="">

              <!-- Card Header -->
              <div class="card-header" >
              <span><i class="bi bi-table me-2"></i></span><?php echo $_SESSION['current_table']?>
              </div>

              <!-- Card Body -->
              <div class="card-body ">

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo "Update, ". $row['lecturer_name'];?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        <!-- Modal Content -->
                        <h6 class="ps-3"><strong>Think twice, </strong>you are updating fields...</h6>
                        <form class="" id="updateform" name="updateform"  method = "POST" novalidate="" autocomplete="off">
                        <div class="input-group p-3">
                          <label class="input-group-text" for="inputGroupSelect01">Lecturer</label>
                          <select  name="lecturer" class="form-select " aria-label="Default select example">
                            <option disabled selected value id="lecturer_id_update">Choose a lecturer</option>


                            <?php
                              $sql_lecturer = "SELECT * FROM lecturer";
                              $result_lecturer = mysqli_query($con, $sql_lecturer);
                              
                              $row_lecturer = mysqli_fetch_array($result_lecturer) ;
                              if($result_lecturer = mysqli_query($con, $sql_lecturer)){
                                if(mysqli_num_rows($result_lecturer) > 0){
                                  while($row_lecturer = mysqli_fetch_array($result_lecturer)){
                                    echo'<option value="'.$row_lecturer['id'].'">'.$row_lecturer['id'].' - '. $row_lecturer['name'].'</option>';
                                    

                                  }
                                }
                              }
                            ?>
                          </select>
                          
                        </div>

                        <div class="input-group p-3">
                          <label class="input-group-text" for="inputGroupSelect01">Subject</label>
                          <select class="form-select " name="subject" aria-label="Default select example">
                            <option disabled selected value id="subject_id_update">Choose a Subject</option>


                            <?php
                              $sql_subject = "SELECT * FROM subject";
                              $result_subject = mysqli_query($con, $sql_subject);
                              
                              $row_subject = mysqli_fetch_array($result_subject) ;
                              if($result_subject = mysqli_query($con, $sql_subject)){
                                if(mysqli_num_rows($result_subject) > 0){
                                  while($row_subject = mysqli_fetch_array($result_subject)){
                                    echo'<option value="'.$row_subject['id'].'">'.$row_subject['id'].' - '. $row_subject['name'].'</option>';
                                    echo "<script>console.log('suject_id: ".$row_subject['id']."-". $row_subject['name']."');</script>" ;

                                  }
                                }
                              }
                            ?>
                          </select>
                          
                        </div>
                        
                         

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                         
                          
                            
                        </form>
                        <!-- Modal Content -->
                      </div>
                      
                    </div>
                  </div>
                </div>




                <!-- Main Table Admin -->

                <div class="table-responsive">
                  <?php

                    
                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) >= 0){
                            echo "<table id='example' class='table table-responsive table-border table-hover data-table'>";
                            echo "<thead class=''>";
                                echo "<tr>";
                                    echo "<th scope='col' >ID</th>";
                                    echo "<th scope='col' >Name</th>";
                                    echo "<th scope='col' >Subject</th>";
                                    echo "<th scope='col' >Modfied By</th>";
                                    echo "<th scope='col' >Modified On</th>";
                                    echo "<th scope='col' class='text-center'>Actions</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                              
                                echo "<tr  ". $row ['lecturer_id'].">";
                                    echo "<th name='name2' id='th". $row ['lecturer_id']."' scope = 'row' >" . $row['lecturer_id'] . "</td>";
                                    echo "<td id='td". $row ['lecturer_name']."'>" . $row['lecturer_name'] . "</td>";
                                    echo "<td id='td". $row ['subject_id']."'>" . $row['subject_id'] . " - " . $row['subject_name'] . "</td>";
                                    echo "<td id='td". $row ['mod_by']."'>" . $row['mod_by'] . "</td>";
                                    echo "<td id='td". $row ['mod_date']."'>" . $row['mod_date'] . "</td>";
                                    


                                    
                                    
                                    
                                    ?>


                                    <td class="text-center">
                                      
                                    <a class="btn btn-light dropdown float-right" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                      </svg>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <li><h6 class="dropdown-header">Actions</h6></li>
                                      <li><hr class="dropdown-divider-dark"></li>
                                      <li><a id='<?php echo $row ['lecturer_id']; ?>' class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="myFunction('<?php echo $row ['lecturer_id']; ?>','<?php echo $row ['lecturer_name']; ?>','<?php echo $row ['subject_id']; ?>','<?php echo $row ['subject_name']; ?>','<?php echo $_SESSION['current_table']; ?>')" href="#">Update</a></li>
                                      <li><a class="dropdown-item text-danger" href="<?php echo "delete.php?id=".$row['lecturer_id']."&subject_id=".$row['subject_id'] ?>">Delete</a></li>
                                    </ul>

                                    </td>


                                    <?php
                                echo "</tr>";
                            
                          }
                          
                          echo "</tbody>";
                          ?>
                              
                          <?php
                  
                          
                            echo "</table>";
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
            
            
            
            

              </div>

              <div class="card-footer px-4 py-3">
                <span><i class="bi bi-table me-2"></i></span>Add, <?php echo $_SESSION['current_table']?>
                <!-- <span class="mb-4"><i class="bi bi-plus-square"></i>  admin</span> -->

                <table style="width:100%" class="p-1 mt-2">

                
                  
                  <form class="row row-cols-lg-auto g-3 " name="login" action = "add.php" method = "POST">
                    <tr>
                    <td colspan="2">
                                <div class="input-group">
                                <label class="input-group-text" for="inputGroupSelect01">Lecturer</label>
                                  <select  name="lecturer" class="form-select" aria-label="Default select example">
                                    <option disabled selected value>Choose a lecturer</option>


                                    <?php
                                      $sql_lecturer = "SELECT * FROM lecturer";
                                      $result_lecturer = mysqli_query($con, $sql_lecturer);
                                      
                                      $row_lecturer = mysqli_fetch_array($result_lecturer) ;
                                      if($result_lecturer = mysqli_query($con, $sql_lecturer)){
                                        if(mysqli_num_rows($result_lecturer) > 0){
                                          while($row_lecturer = mysqli_fetch_array($result_lecturer)){
                                            echo'<option value="'.$row_lecturer['id'].'">'.$row_lecturer['id'].' - '. $row_lecturer['name'].'</option>';
                                           
      
                                          }
                                        }
                                      }
                                    ?>
                                  </select>
                                  </div>
                                  <!-- <div class="input-group ">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                    <input name="name" type="name" class="form-control" id="exampleDropdownFormPassword1" placeholder="Name">
                                  </div> -->
                                </td>
                                <td>
                                <div class="input-group">
                                <label class="input-group-text" for="inputGroupSelect01">Subject</label>
                                <?php

                                echo '
                                <select  name="subject" class="form-select" aria-label="Default select example">
                                <option disabled selected value>Choose a subject</option>
                                ';

                                $sql_subject = "SELECT * FROM subject";
                                $result_subject = mysqli_query($con, $sql_subject);
                                
                                $row_subject = mysqli_fetch_array($result_subject) ;
                                if($result_subject = mysqli_query($con, $sql_subject)){
                                  if(mysqli_num_rows($result_subject) > 0){
                                    while($row_subject = mysqli_fetch_array($result_subject)){
                                      echo'<option value="'.$row_subject['id'].'">'.$row_subject['id'].' - '. $row_subject['name'].'</option>';
                                      echo "<script>console.log('suject_id: ".$row_subject['id']."-". $row_subject['name']."');</script>" ;

                                    }
                                  }
                                }
                                echo '</select>';
                                ?>
                                </div>
                                </td>
                                <td colspan="2"></td>
                                <td>
                                  <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                  </div>
                                </td>
                    </tr>
                                
                                
                        
                    </form>
                </table> 
              </div>

            </div>
          </div>
        </main>
      </div>
    </div>

   
    <script type="text/javascript">
      function myFunction(lecturerId,lecturerName,subjectId,subjectName,currentTable) {
        // console.log("update.php?id=" + lecturerId + "&name=" + lecturerName + "&current table=" + currentTable);
        console.log("update.php?lecturer=" + lecturerId + "&subject=" + subjectId);
        var action = "update.php?lecturer=" + lecturerId + "&subject=" + subjectId;
        // document.getElementById("exampleModalLabel").innerHTML  = name;//Now you get the js variable inside your form element
        // document.getElementById("").placeholder = id;
        document.getElementById("lecturer_id_update").innerHTML = lecturerId + " - " + lecturerName;
        document.getElementById("subject_id_update").innerHTML = subjectId + " - " + subjectName;
        document.getElementById("updateform").action = action;

      }

    </script>
    
      
  </body>
</html>