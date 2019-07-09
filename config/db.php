<?php

$host = "ec2-174-129-227-205.compute-1.amazonaws.com";
$user = "dvcborprastrxh";
$password = "cecfef83500426a0fef4d0e917ce2ec28c5404e51cc7f3000246733b5bb18039";
$dbname = "deslh2gdbf46af";
$port = "5432";

try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
  ?>
