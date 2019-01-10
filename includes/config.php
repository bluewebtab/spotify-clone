<?php
  ob_start();
  session_start();

  $timezone = date_default_timezone_set("America/Los_Angeles");

  $host = "us-cdbr-iron-east-01.cleardb.net";
  $username = "b881f0a57f7cb9";
  $password = "bf2c1713";
  $dbName = "heroku_4ffe31d912bbbd6";


  $con = mysqli_connect($host, $username, $password, $dbName);
  
  // $con = mysqli_connect("localhost", "ronny", "hello123", "musik");

  if(mysqli_connect_errno()){
    echo "Failed to connect: " . mysqli_connect_errno();
  }

?>