<?php
session_start();
    include('../database/config.php');

    $id = $_GET['id'];
    
    
   
    if($id != $_SESSION['userid']){
      if ($_SESSION['current_table'] == "workload"){
        $lecturer = $_GET['id'];
        $subject_id = $_GET['subject_id'];
        $sql = "DELETE FROM ".$_SESSION['current_table']." WHERE ".$_SESSION['current_table'].".lecturer_id = $id AND ".$_SESSION['current_table'].".subject_id = $subject_id";
      } else{

        $sql = "
        DELETE FROM " . $_SESSION['current_table'] . " WHERE id='$id'";
      }
        
        if (mysqli_query($con, $sql)) {
            
            echo "console.log('Record deleted successfully')";

            if($_SESSION['current_table'] == "admin"){
                header("Location: ../admin/admin.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
          
            } elseif($_SESSION['current_table'] == "lecturer"){
              header("Location: ../admin/lecturer.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
        
            } elseif($_SESSION['current_table'] == "student"){
              header("Location: ../admin/student.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
            } elseif ($_SESSION['current_table'] == "subject"){
              header("Location: ../admin/subject.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
            } elseif ($_SESSION['current_table'] == "workload"){
              header("Location: ../admin/workload.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
              
            } 
        
            
        } else {
          echo "console.log('Error deleting record: " . mysqli_error($con)."');";
          if($_SESSION['current_table'] == "admin"){
            header("Location: ../admin/admin.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=1");  
        
          } elseif($_SESSION['current_table'] == "lecturer"){
            header("Location: ../admin/lecturer.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=1");  
      
          } elseif($_SESSION['current_table'] == "student"){
            header("Location: ../admin/student.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=1");  
          } elseif ($_SESSION['current_table'] == "subject"){
            header("Location: ../admin/subject.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=1");  
          } elseif ($_SESSION['current_table'] == "workload"){
            header("Location: ../admin/workload.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=1");  
            
          } 
            
    
        } 
    } else{
       if($_SESSION['current_table'] == "admin"){
          header("Location: ../admin/admin.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=1");  
      
        } elseif($_SESSION['current_table'] == "lecturer"){
          header("Location: ../admin/lecturer.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=1");  
    
        } elseif($_SESSION['current_table'] == "student"){
          header("Location: ../admin/student.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=1");  
        } elseif ($_SESSION['current_table'] == "subject"){
          header("Location: ../admin/subject.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=1");  
        } elseif ($_SESSION['current_table'] == "workload"){
          header("Location: ../admin/workload.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=1");  
          
        } 
    }
    mysqli_close($con);
?>