<?php
session_start();      
include('../database/config.php');

$username = $_POST['user'];  
$password = $_POST['pass'];
$table = $_POST['usertype'];

$_SESSION["userid"] = $username;
$_SESSION["userpassword"] = $password;
$_SESSION['usertable'] = $table;





$sql = "select * from $table where id = '$username' and password = '$password'"; 
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

$query = "SELECT * FROM $table WHERE id='$username'";
$results = mysqli_query($con, $query);
$row = mysqli_fetch_array($results);
$_SESSION['usersname'] = $row['name'];
echo $query;



if($table == "admin" && $count == 1){  

    
    if($username === $password){
        header("Location: ../reset/reset.php?id=$username");} else{
        echo "<h1>Login Successful<br><br>Username: ". $username ."<br>Table: ". $table . "<br>Password : " . $password . "<h1>";
        header("Location: ../admin/index.php?id=".$_SESSION['userid']."&name=". $_SESSION['usersname'] ."&table=". $_SESSION['usertable'] . "");
    
    
    }
    
}
else if($table == "lecturer" && $count == 1){  
    if($username === $password){header("Location: ../reset/reset.php?id=$username");} else{

    echo "<h1>Login Successful<br><br>Username: ". $username ."<br>Table: ". $table . "<br>Password : " . $password . "<h1>";
    header("Location: ../lecturer/index.php?id=".$_SESSION['userid']."&name=". $_SESSION['usersname'] ."&table=". $_SESSION['usertable'] . "");

    }
    
}
else if($table == "student" && $count == 1){  
    if($username === $password){header("Location: ../reset/reset.php?id=$username");} else{

        echo "<h1>Login Successful<br><br>Username: ". $username ."<br>Table: ". $table . "<br>Password : " . $password . "<h1>";
        header("Location: ../student/index.php?id=".$_SESSION['userid']."&name=". $_SESSION['usersname'] ."&table=". $_SESSION['usertable'] . "");
    
    }
    
    
}
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";
    header("Location: invalid-auth.php?id=".$username."");  
}

echo "<script>console.log('Table: ". $table. "');</script>" ; 
echo "<script>console.log('Username: ". $username . "');</script>" ; 
echo "<script>console.log('Password: ". $password . "');</script>" ; 

            
?>  