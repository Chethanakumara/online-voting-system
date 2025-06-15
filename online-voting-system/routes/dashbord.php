<?php
   session_start();
   if(!isset($_SESSION['userdata'])){
    header("location: ../");
   }
   $userdata =$_SESSION['userdata'];
   if($_SESSION['userdata']['status']==1){
    $status = '<b style="color:green">voted</b>';
   }
   else{
     $status = '<b style="color:red">not voted</b>';
   }
?>
<html>
    <head>
        <title>dashbord</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
  <body style="
    background-image: url(../img/vdash.jpg);
    background-position: center;
    background-size: cover;
    
    position: relative;">
    <style>
        #backbtn
          {
            padding: 8px;
            font-size: 15px;
            color: aquamarine;
            border-radius: 5px;
            background-color: 000; 
            float: left; 
            margin: 10px;
          }
       #logoutbtn{
          padding: 8px;
          font-size: 15px;
          color: aquamarine;
          border-radius: 5px;
          background-color: 000;
          float: right; 
          margin: 10px; 
             }
       #profile{
           background-color:  rgb(214, 192, 209);;
           width: 35%;
           padding: 20px;
           float: left;
               }
        #groupbtn{
          padding: 10px;
          font-size: 20px;
          color: aquamarine;
          border-radius: 10px;
          background-color: rgb(192, 179, 202);;
          float: right; 
          margin: 10px; 
        }
        #votebtn{
            padding: 10px;
            font-size: 15px;
            color: aquamarine;
            border-radius: 5px;
            background-color: blueviolet; 
            float: left; 
                }
         #mainpenel{
             padding: 10px;

                   }
        #voted{
             padding: 10px;
             font-size: 15px;
             color: green;
             border-radius: 5px;
             background-color: blueviolet; 
             float: left; 
              }
   
    </style>

   <div id="mainSection">
            <center>
              <div id="headerSection" style="background-image: url(../img/back2.jpg);
              background-position: center;
          background-size: cover;
    
          position: relative;">
                    <a href="../routes/timer.html"><button id="backbtn">BACK</button></a>
                    <a href="logout.php"><button id="logoutbtn">LOGOUT</button></a>
                    <h1 style="color: aliceblue;">online voting system</h1>
              </div><br>
            </center>
            <hr>

       <div id="mainpanel">
        <div id="profile" style="background-image: url(../img/lb6.jpg);
        background-position: center;
      background-size: cover;
      width: 30pc;">
          <center><img src="../uploads/<?php echo $userdata['photo']?>" height="100" width="100" ><br><br>
          <b>Name:</b> <?php echo $userdata['name']?><br><br>
          <b>voter id:</b> <?php echo $userdata['voterid']?><br><br>
          <b>mobile:</b> <?php echo $userdata['mobile']?><br><br>
          <b>Address:</b> <?php echo $userdata['address']?><br><br>
          <b>Status:</b> <?php echo $status ?><br><br>
          </center>
        </div>
         
             <a href="../routes/group.html"><button id="groupbtn" style="
                padding: 15px;
                font-size: 15px;
                color: green(162, 185, 196);
                border-radius: 5px;
                background-color: rgb(12, 2, 24); 
                float:center; ">GO FOR VOTE</button></a><br><br><br><br>

                <a href="../routes/help.html"><button id="groupbtn" style="
               padding: 15px;
                font-size: 15px;
                color: green(162, 185, 196);
                border-radius: 5px;
                background-color: rgb(12, 2, 24);
                float:right; ">HELP</button></a><br><br><br><br>


        
      </div>
  </body>
</html>