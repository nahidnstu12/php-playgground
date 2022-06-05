<?php

require_once "../../functions.php";
$pdo = require_once '../../database.php';

$id = $_POST['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}
$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

$statement = $pdo->prepare('DELETE FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();

if($statement->rowCount() >= 1){
    echo "Successfully Deleted";
}else{
    echo "Can't Delete";
}

// $count = $statement->rowCount();
//  echo '<pre>'; 
// var_dump($count);
// exit;
// echo '<pre>'; 

header('Location: index.php');