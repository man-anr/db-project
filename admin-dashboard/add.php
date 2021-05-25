<?php
session_start();
	
    include('../database/config.php');
    
    $usernames = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['id'];

    $sql = "INSERT INTO admin (id, name, password) VALUES ('$usernames', '$name', '$password')";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        
    } else{
        
        if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        echo $usernames . $name . $password . "add successful admin";
        
        } else {
         
            
        //echo "Error: " . $sql . "<br>" . $con->error;
      } 
    }
    $query = "SELECT * FROM admin WHERE id='$username'";
    $results = mysqli_query($con, $query);
    $row = mysqli_fetch_array($results);
    echo "<script>console.log('Name: ". $row['name'] . "');</script>" ;
    header("Location: ../admin-dashboard/index.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  



      
    
  

        
        
        
?>