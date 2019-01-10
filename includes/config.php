<?php
  ob_start();
  session_start();

  $timezone = date_default_timezone_set("America/Los_Angeles");

  $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
  $cleardb_server   = $cleardb_url["host"];
  $cleardb_username = $cleardb_url["user"];
  $cleardb_password = $cleardb_url["pass"];
  $cleardb_db       = substr($cleardb_url["path"],1);


  $con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

  // $con = mysqli_connect("localhost", "ronny", "hello123", "musik");

  if(mysqli_connect_errno()){
    echo "Failed to connect: " . mysqli_connect_errno();
  }

?>