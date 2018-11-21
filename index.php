<?php

$pdo = new PDO("mysql:host=localhost; dbname=testnotepad", "root", "");
$statement = $pdo->prepare("SELECT * FROM tasks");
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/slate/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <br>
            <h1>All Tasks</h1>
            <a href="create.php" class="btn btn-info">Add Task</a>
            <table class="table">
                <theard>
                    <th>id</th>
                    <th>Title</th>
                    <th>Actions</th>
                </theard>
                <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= $task['id'];?></td>
                        <td><?= $task['title'];?></td>
                        <td>
                            <a href="show.php?id=<?= $task['id'];?>" class="btn btn-info">
                                Show
                            </a>
                            <a href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>