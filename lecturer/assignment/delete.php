<?php
session_start();
include_once("../../database/config.php");
$id = $_GET['file_id'];

$find_file="SELECT * FROM assignment WHERE id = " .$id;
echo "<br>" . $find_file;
$result_find_file = mysqli_query($con, $find_file);


// fetch file to download from database


//echo $sql;



$row_find_file = mysqli_fetch_array($result_find_file);

$filename = $row_find_file['name'];
echo "<br>" . $filename;

$filepath = "./lecturer-uploads/$filename";
   
if($result_find_file){
    $sql = "DELETE FROM assignment WHERE id = " . $id;
    $result = mysqli_query($con, $sql);
    if($result){
        // Use unlink() function to delete a file 
        if (!unlink($filepath)) {
            
            echo $filepath;
            echo ("$filepath cannot be deleted cant find file"); 
            header("Location: ../assignment/index.php?worktype=assignment&lecturer_id=". $_GET['lecturer_id'] ."&workload_id=". $_GET['workload_id'] . "&subject_id=".$_GET['subject_id']."&error=1");
            // header('Location: ')
        } 
        else { 
            // $delete = "DELETE FROM assignment WHERE id = $id";
            // mysqli_query($con, $delete);
            echo ("$filepath has been deleted"); 
            header("Location: ../assignment/index.php?worktype=assignment&lecturer_id=". $_GET['lecturer_id'] ."&workload_id=". $_GET['workload_id'] . "&subject_id=".$_GET['subject_id']."");
        } 
    } else{
        header("Location: ../assignment/index.php?worktype=assignment&lecturer_id=". $_GET['lecturer_id'] ."&workload_id=". $_GET['workload_id'] . "&subject_id=".$_GET['subject_id']."&error=1");
        
    }
} 
// else {
//     echo "$filepath cannot be deleted due to null result";
//     header("Location: ../assignment/index.php?worktype=assignment&lecturer_id=". $_GET['lecturer_id'] ."&workload_id=". $_GET['workload_id'] . "&subject_id=".$_GET['subject_id']."&error=1");
// }



?>