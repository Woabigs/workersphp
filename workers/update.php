<?php
$id = $_GET['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$info = $_POST['info'];


$pdo = new PDO("mysql:host=localhost; dbname=workersdb", "root", '') or die("conn err");
$sql = "UPDATE workers SET name=:name,surname=:surname,email=:email,info=:info WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statement->bindParam(":name", $name);
$statement->bindParam(":surname", $surname);
$statement->bindParam(":email", $email);
$statement->bindParam(":info", $info);
$statement->execute();

header("Location: /");
exit();

?>