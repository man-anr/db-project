<?php
// Include the database configuration file
session_start();
include_once("../../database/config.php");

if (isset($_POST['submit'])) {
    $workload_id = $_GET['workload_id'];
    $assignment_id = $_GET['assignment_id'];
    $enroll_id = $_SESSION['enroll_id'];
    $title = $_POST['title'];


    //check if form is submitted
    $title = $_POST['title'];
    $filename = $_FILES['file']['name'];
    $mime = $_FILES['file']['type'];
    $file = $_FILES['file']['tmp_name'];
    $blob = addslashes(file_get_contents($_FILES['file']['tmp_name']));

        
    $size = $_FILES['file']['size'];
    $destination = 'student-uploads/' . $filename;
    
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($extension, ['zip', 'pdf', 'docx', 'png', 'jpg'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['file']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO assignment_answer(assignment_id, enroll_id, title,mime, data, name, size) VALUES('$assignment_id', '$enroll_id','$title','$mime','$blob', '$filename', '$size')";
            // echo "<br>".  $sql;
            $result = mysqli_query($con, $sql);
            if (!$result) {
            echo "Error: <br>" . $con->error;
                
            } else{
                echo "successfull";
                header("Location: ../index.php");
                
            }
        }
        else {
            echo "Failed to upload file.";
        }
    }
}
            

?>