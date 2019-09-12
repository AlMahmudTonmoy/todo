<?php 
require_once 'db.php';
$todo = $_POST['todo'];
$date = $_POST['date'];
$insert_query = "INSERT INTO todo(todo, date) VALUES ('$todo', '$date')";
mysqli_query($connection, $insert_query);
header('location: todo.php');
?>