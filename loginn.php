<?php
    session_start();
?>
<?php

    require "connectdb.php";
    $sql = "select email,password from employee,manager";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) >0){
        foreach($result as $row){
            extract($row);
            if(strtolower($_POST['username']) == strtolower($username)  && $_POST['password']== $password){
                
                $_SESSION['username']= $username;
               
            
            }  
        }
        echo "Invalid username and password";
    }
?>