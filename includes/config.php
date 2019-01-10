<?php
  ob_start();
  session_start();

  $timezone = date_default_timezone_set("America/Los_Angeles");

  $con = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "b881f0a57f7cb9", "bf2c1713", "heroku_4ffe31d912bbbd6");
  if($con){
    echo "It works";
  }else{
    echo "It doesn't";
  }
  // $con = mysqli_connect("localhost", "ronny", "hello123", "musik");

  if(mysqli_connect_errno()){
    echo "Failed to connect: " . mysqli_connect_errno();
  }

?>