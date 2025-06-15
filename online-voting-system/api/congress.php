<?php
  session_start();
  include("connect.php");
  
  $arty = $_POST['congress'];

 $result=mysqli_query($connect,"UPDATE user set paty='$arty'");
  
  if($result=true){
    
    echo '
    <script>
       alert("party is selected!");
       window.location= "../routes/captcha.html";
       </script>
       ';
  }
  else{
    echo "update are no longer allowed";
    
     
  }
?>