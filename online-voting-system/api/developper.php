<?php
session_start();
include("connect.php");


$programmerId = "DVD123";
$programmerPasswordHash = password_hash("AbD123", PASSWORD_DEFAULT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["developperid"];
    $password = $_POST["password"];

    if ($username === $programmerId && password_verify($password, $programmerPasswordHash)) {
        $_SESSION["logged_in"] = true;
        
        echo '
    <script>
       alert("ID and password are verified!");
       window.location= "../routes/table.php";
       </script>
       '; 
        
    } else {
        echo '
    <script>
     alert("invalid ID or password!");
     window.location= "../routes/developper.html";
     </script>
     ';
    }
}
?>
