<?php 
	session_start();
  include('../database/config.php');
  
  include_once('../template/navs-lect.php');

  $_SESSION['current_table'] = "workload";
  echo "<script>console.log('table: ". $_SESSION['current_table'] . "');</script>" ;

  $sql = "
  SELECT lecturer.name as lecturer_name, subject.name subject_name, workload.lecturer_id, workload.subject_id, workload.id as workload_id
  FROM 
  ((workload 
    INNER JOIN lecturer ON lecturer.id = workload.lecturer_id) 
    INNER JOIN subject ON subject.id = workload.subject_id) 
    WHERE lecturer.id = '".$_SESSION['userid']."'
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

        
          <div class="row py-4 md-3 shadow-sm bg-white">
            <div class="col ">
              <span class="border rounded-2 shadow-sm p-3 align-middle"><i class="bi bi-speedometer text-dark"></i></span>
                <span class="ms-3 text-center fs-3 fw-bold align-middle">Your list of <?php echo $_SESSION['current_table']?>(s)</span>
            </div>
          </div>



          <div class="row justify-content-md-start">
            <div class="col">
              <?php

                                
              if($result = mysqli_query($con, $sql)){
                  if(mysqli_num_rows($result) >= 0){
                    
                      while($row = mysqli_fetch_array($result)){
                        ?>

                          <div class="card my-4 shadow">
                            <div class="card-header"><i class="bi bi-view-list me-2"></i><?php echo $row['subject_id']." - ".$row['subject_name']?></div>

                            <div class="card-body">

                              <div class="row g-0">


                              

                            

                              <div class="col my-auto">
                                <div class="card shadow-sm border-primary">

                                 <div class="card-body">
                                  <h5 class="card-title text-dark"><i class="bi bi-award-fill me-2"></i>Overview</h5>
                                  <div class="progress my-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>

                                  <div class="progress my-2">
                                  
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                                  </div>

                                  <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>



                                 </div>
                                  
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="card-body">
                        
                                  <div class="row my-2">
                                    <div class="dropend">
                                      <button class="btn btn-outline-primary dropdown-toggle w-100 shadow-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="bi bi-book me-2"></i>
                                        Assignment/Tutorial
                                      </button>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item text-success" href="./assignment/result.php?&workload_id=<?php echo $row['workload_id'];?>&worktype=assignment&lecturer_id=<?php echo $_SESSION['userid'];?>&subject_id=<?php echo $row['subject_id'];?>"><i class="bi bi-journal-check me-1"></i>Result</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-primary" href="./assignment/index.php?worktype=assignment&lecturer_id=<?php echo $_SESSION['userid'];?>&workload_id=<?php echo $row['workload_id'];?>&subject_id=<?php echo $row['subject_id'];?>"><i class="bi bi-journal-plus me-1"></i>Create/View</a></li>
                                      </ul>
                                    </div>
                                  </div>

                                  <div class="row my-2">
                                    <div class="dropend ">
                                      <button class="btn btn-outline-primary dropdown-toggle w-100 shadow-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="bi bi-journals me-2"></i>
                                        Objectives Quiz 
                                      </button>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item text-success" href="./quiz/multiple/result.php?quiz_id=&workload_id=<?php echo $row['workload_id'];?>&quiz_type=multiple&lecturer_id=<?php echo $_SESSION['userid'];?>&subject_id=<?php echo $row['subject_id'];?>"><i class="bi bi-journal-check me-1"></i>Result</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-primary" href="./quiz/multiple/create.php?quiz_id=&workload_id=<?php echo $row['workload_id'];?>&quiz_type=multiple&lecturer_id=<?php echo $_SESSION['userid'];?>&subject_id=<?php echo $row['subject_id'];?>"><i class="bi bi-journal-plus me-1"></i>Create/View</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="row my-2">
                                    <div class="dropend ">
                                      <button class="btn btn-outline-primary dropdown-toggle w-100 shadow-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="bi bi-journal-text me-2"></i>  
                                        True False Quiz 
                                      </button>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item text-success" href="./quiz/truefalse/result.php?quiz_id=&workload_id=<?php echo $row['workload_id'];?>&quiz_type=truefalse&lecturer_id=<?php echo $_SESSION['userid'];?>&subject_id=<?php echo $row['subject_id'];?>"><i class="bi bi-journal-check me-1"></i>Result</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-primary" href="./quiz/truefalse/create.php?quiz_id=&workload_id=<?php echo $row['workload_id'];?>&quiz_type=truefalse&lecturer_id=<?php echo $_SESSION['userid'];?>&subject_id=<?php echo $row['subject_id'];?>"><i class="bi bi-journal-plus me-1"></i>Create/View</a></li>
                                      </ul>
                                    </div>
                                  </div>

                                </div>
                              </div>

                            </div>
                                

                              
                            </div>
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
            
          </div>  
        </main>
      </div>
    </div>

   
    <script type="text/javascript">
     

    </script>
    
      
  </body>
</html>
