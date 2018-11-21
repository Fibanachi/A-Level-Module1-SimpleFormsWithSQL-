<?php


$data = [
    "id" => $_GET['id'],
    "title" => $_POST['title'],
    "content" => $_POST['content']
];


$pdo = new PDO("mysql:host=localhost; dbname=testnotepad", "root", "");

$sql = 'UPDATE tasks SET title=:title, content=:content WHERE id=:id';
$statement = $pdo->prepare($sql);
/*$statement->bindParam("id", "$_POST['id]")*/
$statement->execute($data);

header("Location: index.php"); exit;