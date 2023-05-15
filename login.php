<?php
    session_start();
?>
<?php

    require "connectdb.php";
    $sql = "select email,password from employeee, manager";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) >0){
        foreach($result as $row){
            extract($row);
            if(strtolower($_POST['email']) == strtolower($email)  && $_POST['password']== $password){
                
                $_SESSION['employee']= $email;
                $_SESSION['usertype']= "user" ;
                header("location:userprofile.php");
            }  
        }
        echo "Invalid email and password";
    }
?>
?>