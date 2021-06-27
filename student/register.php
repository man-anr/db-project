<?php
session_start();
	
    include('../database/config.php');

    

    
    
    
    $_SESSION['current_table'] = "enroll";
    echo "<script>console.log('table: ". $_SESSION['current_table'] . "');</script>" ;

    $student_id = $_GET['student_id'];
    $workload_id = $_GET['workload_id'];

    $checkregistered = "SELECT * FROM ".$_SESSION['current_table']." WHERE student_id=$student_id AND workload_id=$workload_id ";
    $resultregistered = mysqli_query($con, $checkregistered);
    $rowregistered = mysqli_fetch_array($resultregistered);

    if(!$rowregistered){

        $sql = "INSERT INTO ".$_SESSION['current_table']." (student_id, workload_id) VALUES ('$student_id', '$workload_id') ";
    
        $result = mysqli_query($con, $sql);
        if (!$result) {
        echo "Error: " . $sql . "<br>" . $con->error;
            
        } else{

            echo $sql;
            header("Location: ./index.php?id=".$_SESSION['userid']."&name=". $_SESSION['usersname'] ."&table=". $_SESSION['usertable'] . "");

            
            
                
        
        }

    } else{
        echo "you have registred";
        header("Location: ./index.php?id=".$_SESSION['userid']."&name=". $_SESSION['usersname'] ."&table=". $_SESSION['usertable'] . "&error=2");
    }


    
    
    
    // $query = "SELECT * FROM " . $_SESSION['current_table'] . " WHERE id='$username'";
    // $results = mysqli_query($con, $query);
    // $row = mysqli_fetch_array($results);
    // echo "<script>console.log('Name: ". $row['name'] . "');</script>" ;

   
    



      
    
  

        
        
        
?>