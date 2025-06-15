<?php

  include("connect.php");
// Assuming you've established a database connection already


    $id = $_POST['id'];  // Assuming the form field is named "id"

    // Other fields you want to update
    $place=$_POST['booth'];

    // SQL query to update the row where id matches
    

    $sql =mysqli_query($connect,"UPDATE user set place='$place' ");
    if ($sql=== TRUE) {
      
        echo 
        '
        <script>
        alert("your booth is selected successfully!");
        window.location = "../routes/party.html";
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