<?php

session_start();
	

    include('../database/config.php');
    
    
    
    
    echo "<script>console.log('Location: ../admin/workload.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."' );</script>";
    // echo "<script>console.log('Name: " . $name . "' );</script>";
    // echo "<script>console.log('Original Username: " . $getusername . "' );</script>";
    echo "<script>console.log('Original Username: " .$_SESSION['userid']."' );</script>";



    if($_SESSION['current_table'] == "student"){
      $getusername = $_GET['id'];
      $getname = $_GET['name'];
      if(!$_POST['updateid']){
      $username = $getusername;
      }else{
          $username = $_POST['updateid'];
      }
      if(!$_POST['updatename']){
      $name = $getname;
      }else{
          $name = $_POST['updatename'];
      }
      $getemail = $_GET['email'];
      if(!$_POST['updateemail']){
      $email = $getemail;
      }else{
          $email = $_POST['updateemail'];
      }
      $sql = "
      
      UPDATE ".$_SESSION['current_table']." 
      SET id = '$username', name = '$name', email='$email', mod_by = '".$_SESSION['userid']."', 
      mod_date=CURRENT_TIMESTAMP WHERE id = '$getusername' ";
    } elseif($_SESSION['current_table'] == "lecturer"){
      $getusername = $_GET['id'];
      $getname = $_GET['name'];
      if(!$_POST['updateid']){
      $username = $getusername;
      }else{
          $username = $_POST['updateid'];
      }
      if(!$_POST['updatename']){
      $name = $getname;
      }else{
          $name = $_POST['updatename'];
      }

      $sql = "UPDATE ".$_SESSION['current_table']." SET id = '$username', name = '$name', mod_by = '".$_SESSION['userid']."', mod_date=CURRENT_TIMESTAMP WHERE id = '$getusername' ";
    } elseif($_SESSION['current_table'] == "subject"){
      $getusername = $_GET['id'];
      $getname = $_GET['name'];
      if(!$_POST['updateid']){
      $username = $getusername;
      }else{
          $username = $_POST['updateid'];
      }
      if(!$_POST['updatename']){
      $name = $getname;
      }else{
          $name = $_POST['updatename'];
      }

      $sql = "UPDATE ".$_SESSION['current_table']." SET id = '$username', name = '$name', mod_by = '".$_SESSION['userid']."', mod_date=CURRENT_TIMESTAMP WHERE id = '$getusername' ";
    } elseif($_SESSION['current_table'] == "workload"){
              // UPDATE `workload`                     SET `lecturer_id` = '20001'        WHERE `workload`.`lecturer_id` = 20002 AND `workload`.`subject_id` = 40404; 
      if(!$_POST['subject']){
      $subjectid = $_GET['subject'];
      }else{
          $subjectid = $_POST['subject'];
      }
      if(!$_POST['lecturer']){
      $lecturerid = $_GET['lecturer'];
      }else{
          $lecturerid = $_POST['lecturer'];
      }
        echo "UPDATE ".$_SESSION['current_table']." SET lecturer_id = '$lecturerid', subject_id = '$subjectid', mod_by = '".$_SESSION['userid']."', mod_date=CURRENT_TIMESTAMP WHERE ".$_SESSION['current_table'].".lecturer_id = '".$_GET['lecturer']."' AND ".$_SESSION['current_table'].".subject_id = '".$_GET['subject']."'";
      $sql = "UPDATE ".$_SESSION['current_table']." SET lecturer_id = '$lecturerid', subject_id = '$subjectid', mod_by = '".$_SESSION['userid']."', mod_date=CURRENT_TIMESTAMP WHERE ".$_SESSION['current_table'].".lecturer_id = '".$_GET['lecturer']."' AND ".$_SESSION['current_table'].".subject_id = '".$_GET['subject']."' ";
    } elseif($_SESSION['current_table'] == "admin"){
      $getusername = $_GET['id'];
      $getname = $_GET['name'];
      

      if(!$_POST['updateid']){
      $username = $getusername;
      
      }else{
          $username = $_POST['updateid'];
      }
      if(!$_POST['updatename']){
      $name = $getname;
      }else{
          $name = $_POST['updatename'];
      }

      $password = $username;

      $sql = "UPDATE ".$_SESSION['current_table']." SET id = '$username', name = '$name', password = '$password'  WHERE id = '$getusername' ";
      
    } else{
      
      

      $sql = "UPDATE ".$_SESSION['current_table']." SET id = '$username', name = '$name', mod_date=CURRENT_TIMESTAMP WHERE id = '$getusername' ";
    }


    
    $result = mysqli_query($con, $sql);
    if (!$result) {
      if($_SESSION['current_table'] == "admin"){
        header("Location: ../admin/admin.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
  
      } elseif($_SESSION['current_table'] == "lecturer"){
        header("Location: ../admin/lecturer.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
  
      } elseif($_SESSION['current_table'] == "student"){
        header("Location: ../admin/student.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
        
      } elseif ($_SESSION['current_table'] == "subject"){
        header("Location: ../admin/subject.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
      } 
      elseif ($_SESSION['current_table'] == "workload"){
        header("Location: ../admin/workload.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
        
      }

        
    } else{
        
        if ($con->query($sql) === TRUE) {
            echo "New updated created successfully";
            echo $username . $name ." add successful admin";
            if($_SESSION['current_table'] == "admin"){
                header("Location: ../admin/admin.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
          
              } elseif($_SESSION['current_table'] == "lecturer"){
                header("Location: ../admin/lecturer.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
          
              } elseif($_SESSION['current_table'] == "student"){
                header("Location: ../admin/student.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
                
              } elseif ($_SESSION['current_table'] == "subject"){
                header("Location: ../admin/subject.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
              } 
              elseif ($_SESSION['current_table'] == "workload"){
                header("Location: ../admin/workload.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
                
              }
        } else {
         
            // if($_SESSION['current_table'] == "admin"){
            //     header("Location: ../admin/admin.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
          
            //   } elseif($_SESSION['current_table'] == "lecturer"){
            //     header("Location: ../admin/lecturer.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
          
            //   } elseif($_SESSION['current_table'] == "student"){
            //     header("Location: ../admin/student.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
                
            //   } elseif ($_SESSION['current_table'] == "subject"){
            //     header("Location: ../admin/subject.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."");  
            //   }
            echo "Error: " . $sql . "<br>" . $con->error;
      } 
    }

    
    



      
    
  

        
        
        
?>