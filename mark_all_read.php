<?php
require_once 'db.php';

$update_query = "UPDATE todo SET status = 2";
mysqli_query($connection, $update_query);
header('location: todo.php');
?>