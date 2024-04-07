<?php
  $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $databasename = "siteweb";

    // CREATE CONNECTION 
    $conn = new mysqli( $servername,
      $username, $password, $databasename );

    // GET CONNECTION ERRORS 
    if ( $conn->connect_error ) {
      die( "Connection failed: " . $conn->connect_error );
    }
?>