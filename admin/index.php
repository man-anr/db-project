<?php 
	session_start();
  include('../database/config.php');
  include('../template/navs.php');

  $_SESSION['current_table'] = "admin";
  echo "<script>console.log('table: ". $_SESSION['current_table'] . "');</script>" ;

  $sql = "SELECT * FROM admin";
  $result = mysqli_query($con, $sql);
  
  $row = mysqli_fetch_array($result) ;
	
	if(isset($_SESSION['admin'])){
		header("Location: ../index.php");
    
	}
  
  
  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Admin Dashboard</title>
  </head>
  <body class="bg-light">
    

    <div class="container-fluid">
    

      <!-- Main row -->
      <div class="">
      

        <!-- Main Class -->
        <main class="col">
        <div class="row py-4 md-3 shadow-sm bg-white">
            <div class="col-mb-12">
              <span class="border rounded-2 shadow-sm p-3 align-middle"><i class="bi bi-speedometer text-dark"></i></span>
                <span class="ms-3 text-center fs-3 fw-bold align-middle">Dashboard</span>
            </div>
          </div>

          <div class="row py-4">

            <div class="col-md-3 mb-3">
              <div class="card bg-primary text-white h-100 shadow">
                <div class="card-body"><div class="text-center" style="font-size: 4rem;"><i class="bi bi-person-badge-fill"></i></div></div>
                <div class="card-footer d-grid">
                  <button class="btn btn-outline-light my-1" onClick="location.href='./admin.php'">
                    Admin accounts
                    <span class="ms-auto">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </button>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card bg-warning text-dark h-100 shadow">
                <div class="card-body"><div class="text-center" style="font-size: 4rem;"><i class="bi bi-building"></i></div></div>
                <div class="card-footer d-grid">
                  <button class="btn btn-outline-dark my-1" onClick="location.href='./lecturer.php'">
                    Lecturer accounts
                    <span class="ms-auto">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </button>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100 shadow">
              <div class="card-body"><div class="text-center" style="font-size: 4rem;"><i class="bi bi-people-fill"></i></div></div>
              <div class="card-footer d-grid">
                  <button class="btn btn-outline-light my-1" onClick="location.href='./student.php'">
                    Student accounts
                    <span class="ms-auto">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </button>
                </div>
            </div>
          </div>
          
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100 shadow">
              <div class="card-body"><div class="text-center" style="font-size: 4rem;"><i class="bi bi-card-list"></i></div></div>
              <div class="card-footer d-grid">
                  <button class="btn btn-outline-light my-1" onClick="location.href='./subject.php'">
                    Subject(s)
                    <span class="ms-auto">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </button>
                </div>
            </div>
          </div>


          <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white h-100 shadow">
              <div class="card-body"><div class="text-center" style="font-size: 4rem;"><i class="bi bi-card-list"></i></div></div>
              <div class="card-footer d-grid">
                  <button class="btn btn-outline-light my-1" onClick="location.href='./workload.php'">
                    Workload(s)
                    <span class="ms-auto">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </button>
                </div>
            </div>
          </div>


        </div>



        </div>




          </div>

          
        

        </main>
      </div>
    </div>

        
  </body>
</html>