
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
            <h1>Edit Task</h1>
            <form action="update.php?id=<?= $task['id'];?>" method="post">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="<?= $task['title'];?>">
                </div>


                <div class="form-group">
                    <textarea name="content" class="form-control"><?= $task['content'];?></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-warning" type="Submit">Submit</button>
                </div>
            </form>
        </div>


    </div>
</div>
</body>
</html>