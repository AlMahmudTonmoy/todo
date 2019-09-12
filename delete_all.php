<?php
require_once 'db.php';

$delete_query = "DELETE FROM todo";
mysqli_query($connection, $delete_query);
header('location: todo.php');
?>