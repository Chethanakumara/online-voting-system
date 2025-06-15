<?php
  session_start();
  include("connect.php");
  

  $mobile = $_POST['mobile'];
  $password = $_POST['password'];


 $result=mysqli_query($connect,"UPDATE user set password='$password' ");
  
  if($result=true){
    
    echo '
    <script>
       alert("password is updated!");
       window.location= "../index.html";
       </script>
       ';
  }
  else{
    echo "update are no longer allowed";
    
     
  }
?>