<?php

$pdo = new PDO("mysql:host=localhost; dbname=workersdb", "root", '') or die("conn err");
$sql = "SELECT id,name,surname,email,info FROM workers";
$statement = $pdo->prepare($sql);
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WorkersApp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        th {
            font-size: 25px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All workers</h1>
            <a href="create_worker.php" class="btn btn-success">Add Worker</a>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>surname</th>
                    <th>email</th>
                    <th>info</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= $task['id']; ?></td>
                        <td><?= $task['name']; ?></td>
                        <td><?= $task['surname']; ?></td>
                        <td><?= $task['email']; ?></td>
                        <td><?= $task['info']; ?></td>
                        <td>
                            <a href="show.php?id=<?= $task['id']; ?>" class="btn btn-info">Show</a>
                            <a href="edit.php?id=<?= $task['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $task['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <? endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>