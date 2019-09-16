<?php

$pdo = new PDO("mysql:host=localhost; dbname=workersdb", "root", '') or die("conn err");
$sql = "SELECT name,surname,email,info FROM workers WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit task</h1>
            <form action="update.php?id=<?= $task['id']; ?>" method="post">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" value="<?= $task['name']; ?>">
                </div>
                <div class="form-group">
                    <input name="surname" type="text" class="form-control" value="<?= $task['surname']; ?>">
                </div>
                <div class="form-group">
                    <input name="email" type="text" class="form-control" value="<?= $task['email']; ?>">
                </div>
                <div class="form-group">
                    <input name="info" type="text" class="form-control" value="<?= $task['info']; ?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="submit"">
                </div>
            </form>
        </div>
    </div>
</body>
</html>