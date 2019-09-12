<?php
require_once 'db.php';
$data_id = $_GET['data_id'];

$delete_query = "DELETE FROM todo WHERE id = $data_id";
mysqli_query($connection, $delete_query);
header('location: todo.php');
?>