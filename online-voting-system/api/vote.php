<?php
session_start();
include('connect.php');
$votes = $_POST['votes'];
$total_votes = $votes+1;

$update_votes = mysqli_query($connect, "UPDATE user SET votes='$total_votes'");
$update_votes_status =mysqli_query($connect, "UPDATE user SET status='voted' ");

if($update_votes and $update_votes_status){
    $groups = mysqli_query($connect,"SELECT * FROM user WHERE votes='$votes'");
    $groupsdata = mysqli_fetch_all($groups,MYSQLI_ASSOC);
    $_SESSION['userdata']['status'] = 1;
     $_SESSION['groupsdata'] = $groupsdata;
     echo '
      <script>
      alert("voting successful!");
      window.location = "../routes/dashbord.php";
      </script> 
      ';
}
else{
    echo '
      <script>
      alert("something worng!");
      window.location = "../routes/dashbord.php";
      </script> 
      ';
}
?>