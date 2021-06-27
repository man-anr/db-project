<?php
session_start();
	
    include('../../../database/config.php');

    echo "<script>console.log('table: ". $_SESSION['current_table'] . "');</script>" ;

    
    $question = $_POST['addquestion'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $correct_answer = $_POST['correct_answer'];
    $quiz_id = $_GET['quiz_id'];
            // INSERT INTO `mult_quiz`    (`id`, `quiz_id`, `question`, `a`, `b`, `c`, `d`, `answer`, `mod_by`, `mod_date`) VALUES (NULL, '64', '1', '1', '2', '3', '4', 'a', '20001', CURRENT_TIMESTAMP); 
    $sql = "INSERT INTO " . $_SESSION['current_table'] . " (id, quiz_id, question, a, b, c, d, answer, mod_by, mod_date) VALUES (NULL, '$quiz_id', '$question', '$a','$b','$c','$d', '$correct_answer', '".$_SESSION['userid']."', CURRENT_TIMESTAMP) ";
    echo $sql;

    $result = mysqli_query($con, $sql);
    if (!$result) {
      echo "Error: " . $sql . "<br>" . $con->error;
        
    } else{

        header("Location: ./index.php?quiz_id=".$quiz_id.""); 
         
            
      
    }
    // $query = "SELECT * FROM " . $_SESSION['current_table'] . " WHERE id='$username'";
    // $results = mysqli_query($con, $query);
    // $row = mysqli_fetch_array($results);
    // echo "<script>console.log('Name: ". $row['name'] . "');</script>" ;

   
    



      
    
  

        
        
        
?>