<?php
    include('../database/config.php');
    
    $username = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['id'];

    $sql = "INSERT INTO admin (id, name, password) VALUES ('$username', '$name', '$password')";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        header("Location: index.php?username=$username");
    } else{
        
        if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        echo $username . $name . $password . "add successful admin";
        header("Location: index.php?username=$username");
        } else {
         
            header("Location: index.php?username=$username");
        //echo "Error: " . $sql . "<br>" . $con->error;
      } 
    }



      
    
  

        
        
        
?>