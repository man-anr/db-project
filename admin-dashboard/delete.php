<?php
session_start();
    include('../database/config.php');

    $id = $_GET['id'];
    
   
    if($id != $_SESSION['userid']){
        $sql = "DELETE FROM admin WHERE id='$id'";
        if (mysqli_query($con, $sql)) {
            
            echo "Record deleted successfully";
            header("Location: ../admin-dashboard/index.php?id=".$_SESSION['userid']."&name=". $_SESSION['usersname'] . "");

        
            
        } else {
            echo "Error deleting record: " . mysqli_error($con);
        }
    }else{
        header("Location: ../admin-dashboard/index.php?id=".$_SESSION['userid']."&name=". $_SESSION['usersname'] . "");
    }
    mysqli_close($con);
?>