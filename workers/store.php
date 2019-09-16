<?php

$pdo = new PDO("mysql:host=localhost; dbname=workersdb", "root", '') or die("conn err");
$sql = "INSERT INTO workers(name,surname,email,info) values(:name,:surname,:email,:info)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":name", $_POST['name']);
$statement->bindParam(":surname", $_POST['surname']);
$statement->bindParam(":email", $_POST['email']);
$statement->bindParam(":info", $_POST['info']);
$statement->execute();

header("Location: /");

?>
