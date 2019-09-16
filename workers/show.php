<?php

$pdo = new PDO("mysql:host=localhost; dbname=workersdb", "root", '') or die("conn err");
$sql = "SELECT name,surname,email,info FROM workers WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Worker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>
                <?= $task['name']; ?>
            </h1>
            <p>
                <?= $task['surname']; ?>
            </p>
            <p>
                <?= $task['email']; ?>
            </p>
            <p>
                <?= $task['info']; ?>
            </p>
            <a href="/">go back</a>
        </div>
    </div>
</div>
</body>
</html>