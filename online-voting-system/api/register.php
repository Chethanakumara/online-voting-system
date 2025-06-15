<?php
  include("connect.php");
  $id=$_POST['id'];
  
  $name = $_POST['name'];
  $voterid = $_POST['voterid'];
  $mobile = $_POST['mobile'];
  $date = $_POST['date'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $address = $_POST['address'];
  $image = $_FILES['photo']['name'];
  $tmp_name = $_FILES['photo']['tmp_name'];
  

  if($password==$cpassword){
    move_uploaded_file($tmp_name, "../uploads/$image");
    $insert = mysqli_query($connect, "INSERT INTO user(id,name,voterid,mobile,date,password,address,photo,votes,status,place,paty)VALUE ('$id','$name','$voterid','$mobile','$date','$password','$address','$image','not',0,'not','not')");
    if($insert){
      echo '
      <script>
         alert("Registration successfully!");
         window.location= "../index.html";
         </script>
         ';
    }
    else{
      echo '
      <script>
       alert("some error occured!");
       window.location= "../routes/register.html";
       </script>
       ';
    }
  }
  else{
    echo '
    <script>
    alert("password does not match!");
    window.location = "../routes/register.html";
    </script> 
    ';
  }

?>