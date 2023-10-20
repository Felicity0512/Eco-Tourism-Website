<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "binangonan_ecotours_db";
    try {

      $con = new PDO("mysql:dbname=$db;port=3306;host=$host", 
      	$user, $password);
      // set the PDO error mode to exception
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      echo "Connected successfully <br/>";
    } catch(PDOException $e) {
      echo "Connection failed: <br/>".
       $e->getMessage();
      echo $e->getTraceAsString();
      exit;
    }

    session_start();

?>