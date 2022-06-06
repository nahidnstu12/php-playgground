<?php
include_once "./controller.php";
$pdo = include_once "../productcrud/database.php";
$projectName = "Learning";

$status_id = $_GET["status_id"];
$task_id = $_GET["task_id"];

// var_dump($status_id);

$result = editTaskStatus($status_id,$task_id,$pdo);

?>