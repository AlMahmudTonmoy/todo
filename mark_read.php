<?php
require_once 'db.php';
$data_id = $_GET['data_id'];

$update_query = "UPDATE todo SET status = 2 WHERE id = $data_id";
mysqli_query($connection, $update_query);
header('location: todo.php');
?>