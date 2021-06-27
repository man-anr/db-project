<?php

session_start();
	

    include('../../../database/config.php');

    $question = $_POST['updatequestion'];
    $update_correct_answers = $_POST['update_correct_answer'];
    $id = $_GET['id'];
    $quiz_id= $_GET['quiz_id'];
    $sqls = "UPDATE " . $_SESSION['current_table'] . " SET question='$question', answer='$update_correct_answers', mod_by='".$_SESSION['userid']."', mod_date=CURRENT_TIMESTAMP WHERE id='$id'";
    echo $sqls;
    echo "<br>". $update_correct_answers;
    
    $result = mysqli_query($con, $sqls);
    if (!$result) {

        
    } else{
        
        if ($con->query($sqls) === TRUE) {
            echo "New updated successfully";

            header("Location: ./index.php?quiz_id=".$quiz_id."");
            
        } else {
         
            
            echo "Error: " . $sqls . "<br>" . $con->error;
      } 
    }

    
    



      
    
  

        
        
        
?>