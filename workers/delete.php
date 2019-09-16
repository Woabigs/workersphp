<?php
$id = $_GET['id'];

$pdo = new PDO("mysql:host=localhost; dbname=workersdb", "root", '') or die("conn err");
$sql = "DELETE FROM workers WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id",$id);
$statement->execute();

header('Location: /');

?>

