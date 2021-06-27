<?php 
	session_start();
  $_SESSION['error'] = 0;
  include('../database/config.php');
  include('../template/navs.php');
  include("./../alerts/toast.php");

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
                <span class="ms-3 text-center fs-3 fw-bold align-middle">Dashboard <?php echo $_SESSION['error']?></span>
            </div>
          </div>

          <div class="row py-4">

            <div class="col-md-3 mb-3">
              <div class="card bg-primary text-white h-100">
                <div class="card-body py-5">Primary Card</div>
                <div class="card-footer d-flex">
                  View Details
                  <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card bg-warning text-dark h-100">
                <div class="card-body py-5">Warning Card</div>
                <div class="card-footer d-flex">
                  View Details
                  <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body py-5">Success Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
              <div class="card-body py-5">Danger Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>

                 <a type="button" class="btn btn-primary" id="toastbtn" onClick="location.href='testingz.php?error=<?php echo "1"?>'">Initialize toast</a>
              </div>
            </div>
          </div>
        </div>

       



        </div>
        
         <?php 
         include("./../alerts/toast.php");
         
         ?>




          </div>

          
        

        </main>
      </div>
    </div>

        
  </body>

</html>

