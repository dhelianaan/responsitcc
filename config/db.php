<?php

$host = "ec2-54-227-251-33.compute-1.amazonaws.com";
$user = "psebzasvdgrumj";
$password = "017c8a3acb434cb0740c7159dc43d27bc287de375860a74cdb409eebe73d14aa";
$dbname = "dbe3uk1nnujc4d";
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
