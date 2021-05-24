<?php      
        include('config.php');  
        $username = $_POST['user'];  
        $password = $_POST['pass'];
		$table = $_POST['usertype'];  
          
            //to prevent from mysqli injection  
            // $username = stripcslashes($username);  
            // $password = stripcslashes($password);  
            // $username = mysqli_real_escape_string($con, $username);  
            // $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select * from $table where id = '$username' and password = '$password'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($table == "admin" && $count == 1){  
                echo $username . $table . "login successful admin";
				
            }
			else if($table == "lecturer" && $count == 1){  
                echo $username . $table . "login successful lecturer";
				
            }
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }
			echo "<script>console.log('PHP: Table: ". $table. "');</script>" ; 
			echo "<script>console.log('PHP: Username: ". $username. "');</script>" ;       
    ?>  