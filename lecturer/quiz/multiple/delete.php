<?php
session_start();
	
    include('../../../database/config.php');

    echo "<script>console.log('table: ". $_SESSION['current_table'] . "');</script>" ;

    
    
    
    

    
    $question_id = $_GET['id'];
    $quiz_id = $_GET['quiz_id'];
    $sql = "DELETE FROM " . $_SESSION['current_table'] . " WHERE id='$question_id'";
    echo $sql;

    $result = mysqli_query($con, $sql);
    if (!$result) {
      echo "Error: " . $sql . "<br>" . $con->error;
        
    } else{

        header("Location: ./create.php?quiz_id=".$quiz_id.""); 
         
     
    }
    // $query = "SELECT * FROM " . $_SESSION['current_table'] . " WHERE id='$username'";
    // $results = mysqli_query($con, $query);
    // $row = mysqli_fetch_array($results);
    // echo "<script>console.log('Name: ". $row['name'] . "');</script>" ;

   
    



      
    
  

        
        
        
?>