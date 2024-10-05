<?php

$connect = mysqli_connect("localhost", "root", "", "team_web");
    
    $email = isset($_POST['email']) ? $_POST['email'] : '';
  
    $password = isset($_POST['password']) ? $_POST['password'] : '';
 

    $check = mysqli_query($connect,"select * from users where email='$email' and password ='$password'");  
    
    if(mysqli_num_rows($check)>0){
      
        echo  "
       <script>
       window.location = '../dashboard.php';
       </script>";

    }
    else{
        echo  "
       <script>
       alert ('User Not Found');
       window.location = '../login.html';
       </script>";
    }
?>

