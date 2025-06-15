<?php
  session_start();
  include("connect.php");
  $party = $_POST['bjp'];
  //$party = $_POST['congress'];
 //$party = $_POST['jds'];
 // $party = $_POST['other'];

 $result=mysqli_query($connect,"UPDATE user set paty='$party'");
  
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