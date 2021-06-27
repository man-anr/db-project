<?php
session_start();
include("./../../database/config.php");
$_SESSION['quiz_id'];
echo "enroll_id: " . $_SESSION['enroll_id'] . "<br>";

$sql = "

SELECT * FROM tf_quiz WHERE quiz_id = ".$_SESSION['quiz_id'] ;

echo $sql;


$mark = 0;



$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)){
   
    $answer = $row['id'];

    $student_answer = $_POST['answer-'.$answer];
    $correct_answer = $row['answer'];

    echo "<br>id: " . $row['id'] . "<br>correct answer" . $row['answer'] . "<br>student answer:" . $student_answer;

    if($student_answer == $correct_answer){
        $mark++; 
        $mark++; 
    } else {
        $mark--; 
        $mark--; 

    }
    
    

}



echo "<br>" . $mark;

if($mark < 0){
    $mark = 0;
} else{

}


$check_existing_mark = "

SELECT * FROM quiz_marks WHERE enroll_id = ".$_SESSION['enroll_id']." AND quiz_id = ".$_SESSION['quiz_id']." AND marks = 0

";

echo "<br>" . $check_existing_mark;

$query_check_existing_mark = mysqli_query($con, $check_existing_mark);
$rows_check_existing_mark = mysqli_num_rows($query_check_existing_mark);
if($rows_check_existing_mark >= 1){
    $update_new_mark = "UPDATE quiz_marks SET marks = $mark WHERE enroll_id = ".$_SESSION['enroll_id']." AND quiz_id = ".$_SESSION['quiz_id']; 
    echo "<br>" . $update_new_mark;
    $query_update_new_mark = mysqli_query($con, $update_new_mark);
} else {
    
    $insert_mark = "INSERT INTO quiz_marks (id, enroll_id, quiz_id, marks) VALUES (NULL, ".$_SESSION['enroll_id'].", ".$_SESSION['quiz_id'].", $mark)";
    $insert_mark_execute = mysqli_query($con, $insert_mark);
    echo "<br>" . $insert_mark;
}




header("Location: ../index.php");


// echo $insert_mark;
// $row = mysqli_fetch_array($result);


?>