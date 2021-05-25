<?php      
        $host = "localhost";  
        $user = "man";  
        $password = '12345';  
        $db_name = "quiz_system";
        $port = '3308';  
          
        $con = mysqli_connect($host, $user, $password, $db_name, $port);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }
        
    ?>  