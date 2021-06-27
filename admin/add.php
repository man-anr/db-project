<?php
session_start();
	
    include('../database/config.php');

    echo "<script>console.log('table: ". $_SESSION['current_table'] . "');</script>" ;

    
    
    
    

    if($_SESSION['current_table'] == "lecturer"){
      $usernames = $_POST['id'];
      $name = $_POST['name'];
      $password = $_POST['id'];
      $sql = "INSERT INTO " . $_SESSION['current_table'] . " (id, name, password, mod_by) VALUES ('$usernames', '$name', '$password','".$_SESSION['userid']."')";
    } elseif($_SESSION['current_table'] == "student"){
      $usernames = $_POST['id'];
      $name = $_POST['name'];
      $password = $_POST['id'];
      // $email = $_POST['email'];
      $sql = "
      INSERT INTO " . $_SESSION['current_table'] . " (id, name, password, email, mod_by) 
      VALUES ('$usernames', '$name', '$password', '$usernames@siswa.com', '".$_SESSION['userid']."')";
    } elseif ($_SESSION['current_table'] == "subject"){
      $usernames = $_POST['id'];
      $name = $_POST['name'];
      $sql = "INSERT INTO " . $_SESSION['current_table'] . " (id, name, mod_by) VALUES ('$usernames', '$name', '".$_SESSION['userid']."')";
    } elseif ($_SESSION['current_table'] == "workload"){
      $lecturer = $_POST['lecturer'];
      $subject = $_POST['subject'];
      $sql = "INSERT INTO " . $_SESSION['current_table'] . " (id ,lecturer_id, subject_id, mod_by) VALUES (NULL,'$lecturer', '$subject', '".$_SESSION['userid']."')";
    } else{
      $usernames = $_POST['id'];
      $name = $_POST['name'];
      $password = $_POST['id'];
      $sql = "INSERT INTO " . $_SESSION['current_table'] . " (id, name, password) VALUES ('$usernames', '$name', '$password')";
    }

   
    $result = mysqli_query($con, $sql);
    if (!$result) {
       echo "Error: " . $sql . "<br>" . $con->error."lol";

      if($_SESSION['current_table'] == "admin"){
            header("Location: ../admin/admin.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=2");  
      
      } elseif($_SESSION['current_table'] == "lecturer"){
        header("Location: ../admin/lecturer.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=2");  
  
      } elseif($_SESSION['current_table'] == "student"){
        header("Location: ../admin/student.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=2");  
        
      } elseif ($_SESSION['current_table'] == "subject"){
        header("Location: ../admin/subject.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=2");  
      } elseif ($_SESSION['current_table'] == "workload"){
        header("Location: ../admin/workload.php?id=".$_SESSION['userid']."&name=".$_SESSION['usersname']."&error=2");  
      }
      
        
    } else{

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
         
            
      
    }
    // $query = "SELECT * FROM " . $_SESSION['current_table'] . " WHERE id='$username'";
    // $results = mysqli_query($con, $query);
    // $row = mysqli_fetch_array($results);
    // echo "<script>console.log('Name: ". $row['name'] . "');</script>" ;

   
    



      
    
  

        
        
        
?>