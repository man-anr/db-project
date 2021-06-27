<?php
session_start();
include_once("./../../../database/config.php");

$_SESSION['current_table'] = "quiz";

$workload_id = $_GET['workload_id'];
$quiz_type = $_GET['quiz_type'];




$duplicatecheck= "select * from quiz where workload_id=$workload_id and type='$quiz_type' ";
echo $duplicatecheck;
$dupresult = mysqli_query($con, $duplicatecheck);
$row = mysqli_fetch_array($dupresult, MYSQLI_ASSOC);  
$count = mysqli_num_rows($dupresult);





if($count == 0){
    echo "<br>no records";

 
    $sql = "
        INSERT INTO ".$_SESSION['current_table']." (id, workload_id, type) VALUES (NULL,".$workload_id.", '".$quiz_type."')
        ";
    $result = mysqli_query($con, $sql);
    echo $sql;
    


    if (!$result) {
        echo "Error: " . $sql . "<br>" . $con->error;
    } else {

        echo
        "<br>
        INSERT INTO ".$_SESSION['current_table']." (id, workload_id, type) VALUES (NULL,".$workload_id.", ".$quiz_type.") <br>
        <br>";
        
        echo "<br>New record created successfully";

        header("Location: ../../index.php");
          
      
        
    }
    
} else{

    echo "<br>has records";
    $duplicatedelete = "
    DELETE FROM quiz  WHERE id NOT IN (   SELECT id from (     SELECT MIN(id) AS id     FROM quiz     GROUP BY type, workload_id   ) as ids )
    ";
    $delresult = mysqli_query($con,$duplicatedelete);


    $sql = "
    SELECT * FROM quiz WHERE workload_id = ".$workload_id." AND type = '".$quiz_type."'
    
    ";

    $result = mysqli_query($con, $sql);
    
    $row = mysqli_fetch_array($result) ;
    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $redirect = "Location: ./index.php?quiz_id=".$row['id']."&workload_id=".$row['workload_id']."&quiz_type=".$row['type']."";
                // echo $redirect;
                header ("$redirect");
            }
        }
    }


    // header("Location: ./truefalse/index.php?quiz_id=&".$row['id']."&workload_id=".$row['workload_id']."&quiz_type=".$row['quiz_type']."");
    // echo $sql;
    // echo "Location: ./truefalse/index.php?quiz_id=&".$row['id']."&workload_id=".$row['workload_id']."&quiz_type=".$row['type']."";
    
    
}















?>