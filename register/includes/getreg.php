<?php


if (isset($_POST['reg'])) {
	include 'connect.php';

      $user_name =  $_POST['user_name'];
      $pass1 =  $_POST['pass1'];
      $email =$_POST['email'];
      $user_phone = $_POST['user_phone'];
      $user_status =  $_POST['user_status'];
      $msg="";
    
     $SELECT = "SELECT user_email From users Where user_email = ? Limit 1";
     $INSERT = "INSERT Into users (user_email, user_name, user_password,user_phone,user_status) values(?, ?, ?, ?,?)";
     //Prepare statement
     $stmt1 = $conn->prepare($SELECT);
     $stmt1->bind_param("s", $email);
     $stmt1->execute();
    
     $stmt1->bind_result($email);
     $stmt1->store_result();
     $rnum = $stmt1->num_rows;
     if ($rnum==0) {
      $stmt1->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss", $email, $user_name, $pass1, $user_phone,$user_status);
      $stmt->execute();
       
         
    header("location:../log.php");
     } else {
      
         header("location:../reg.php?error");
     }
     
    }

    
    

    
    
?>