<?php


$pdo = new PDO("mysql:host=localhost; dbname=testnotepad", "root", "");
$sql = "SELECT * FROM tasks WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/slate/bootstrap.min.css">
    <title>Create</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <br>

            <h1><?= $task['title'];?></h1>
            <p><?= $task['content'];?></p>
            <a href="index.php">Go Back</a>
        </div>


    </div>
</div>
</body>
</html>