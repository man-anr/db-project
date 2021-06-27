<?php
include_once("../../database/config.php");
$id = $_GET['file_id'];

// fetch file to download from database
$sql = "SELECT * FROM assignment WHERE id=$id";
$result = mysqli_query($con, $sql);

$file = mysqli_fetch_assoc($result);
$filepath = '../../lecturer/assignment/lecturer-uploads/' . $file['name'];
echo $filepath;

if (isset($_GET['file_id'])) {
    
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: ' . $file['mime']);
        header('Content-Disposition: attachment; filename='. basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../../lecturer/assignment/lecturer-uploads/' . $file['name']));
        readfile('../../lecturer/assignment/lecturer-uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE assignment SET downloads=$newCount WHERE id=$id";
        mysqli_query($con, $updateQuery);
        exit;
    } else{
        echo "lol";
    }

}


?>