<?php 
	session_start();
  include('../database/config.php');

  include_once('../template/navs.php');
    include_once("./../alerts/toast.php");

  $_SESSION['current_table'] = "lecturer";
  echo "<script>console.log('table: ". $_SESSION['current_table'] . "');</script>" ;

  $sql = "SELECT * FROM lecturer";
  $result = mysqli_query($con, $sql);
  
  $row = mysqli_fetch_array($result) ;
	
	if(isset($_SESSION['admin'])){
		header("Location: ../index.php");
    
	}
  
  
  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Lecturer</title>
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
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo "Update, ". $row['name'];?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        <!-- Modal Content -->
                        <h6 class="ps-3"><strong>Think twice, </strong>you are updating fields...</h6>
                        <form class="" id="updateform" name="updateform"  method = "POST" novalidate="" autocomplete="off">
                         
                            <div class="input-group p-3">
                              <span class="input-group-text" id="basic-addon1">ID</span>
                              <input name="updateid" type="id" class="form-control" id="updateid" placeholder="">
                            </div>
                          
                            <div class="input-group p-3">
                              <span class="input-group-text" id="basic-addon1">Name</span>
                              <input name="updatename" type="name" class="form-control" id="updatename" placeholder="">
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

                <div class="table-responsive p-1">
                  <?php

                    
                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) >= 0){
                            echo "<table id='example' class='table data-table table-border table-hover '>";
                            echo "<thead class=''>";
                                echo "<tr>";
                                    echo "<th scope='col' >ID</th>";
                                    echo "<th scope='col' >Name</th>";
                                    echo "<th scope='col' >Modified By</th>";
                                    echo "<th scope='col' >Modified On</th>";
                                    echo "<th scope='col' class='text-center'>Actions</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                              
                                echo "<tr  ". $row ['id'].">";
                                    echo "<th name='name2' id='th". $row ['id']."' scope = 'row' >" . $row['id'] . "</td>";
                                    echo "<td id='td". $row ['name']."'>" . $row['name'] . "</td>";
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
                                      <li><a id='<?php echo $row ['id']; ?>' class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="myFunction('<?php echo $row ['id']; ?>','<?php echo $row ['name']; ?>','<?php echo $_SESSION['current_table']; ?>')" href="#">Update</a></li>
                                      <li><a class="dropdown-item text-danger" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></li>
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

                          <td>
                            <div class=" ">
                              <input name="id" type="id" class="form-control" id="exampleDropdownFormEmail1" placeholder="ID">
                            </div>
                          </td>
                          <td>
                            <div class="">
                              <input name="name" type="name" class="form-control" id="exampleDropdownFormPassword1" placeholder="Name">
                            </div>
                          </td>
                          
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

    

      function myFunction(elementId,elementName,currentTable) {
        console.log("update.php?id=" + elementId + "&name=" + elementName + "&current table=" + currentTable);
        var id = elementId;
        var name = elementName;
        var action = "update.php?id=" + elementId + "&name=" + elementName;
        document.getElementById("exampleModalLabel").innerHTML  = name;//Now you get the js variable inside your form element
        document.getElementById("updateid").placeholder = id;
        document.getElementById("updatename").placeholder = name;
        document.getElementById("updateform").action = action;

      }

    </script>
    
      
  </body>
</html>