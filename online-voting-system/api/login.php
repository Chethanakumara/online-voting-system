<?php
   session_start();
   include("connect.php");
   set_time_limit(30);
   $votreid = $_POST['voterid'];
   $mobile = $_POST['mobile'];
   $password = $_POST['password'];
   
   
   $check = mysqli_query($connect,"SELECT * FROM user WHERE voterid='$votreid'AND mobile='$mobile'AND password='$password'" );
   if(mysqli_num_rows($check)>0){
     $userdata = mysqli_fetch_array($check);
     $_SESSION['userdata'] = $userdata;
     echo'
     <script>
        window.location = "../routes/timer.html";
        </script>
        ';

  }
   else{
      echo '
      <script>
      alert("invalid cridencials!");
      window.location = "../";
      </script> 
      ';
   }
   

?>