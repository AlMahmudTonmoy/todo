<?php 
require_once 'db.php';
$get_query = "SELECT * FROM todo";
$data = mysqli_query($connection, $get_query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>TO Do</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="container-fluid">
	<div class="row text-center">
		<div class="col-10 text-center offset-1 mt-4">
			<form action="action_page.php" method="post">
				What To Do:<br>
				<input type="text" name="todo" placeholder="What To Do"><br>
				Date:<br>
				<input type="date" name="date">
				<br><br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	
	<div class="row text-center">
		<div class="col-10 text-center offset-1 mt-4">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">TODo</th>
			      <th scope="col">Date</th>
			      <th scope="col">
			      	<a href="mark_all_read.php" class="btn btn-primary">Mark All Read</a>
			      	<a href="delete_all.php" class="btn btn-danger">Delete All</a>
			      </th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$serial = 1; 
			  		foreach ($data as $returned):
			  	?>
			    <tr class="
			    <?php
			    	if($returned['status'] == 1){
			    		echo "text-white bg-secondary";
			    	}
			    ?>
			    ">
			      <th scope="row"><?=$serial++?></th>
			      <td><?=$returned['todo']?></td>
			      <td><?=$returned['date']?></td>
			      <td>
			      	<?php
			      		if($returned['status'] == 1):
			      	?>
			      	<a href="mark_read.php?data_id=<?=$returned['id']?>" class="btn btn-primary">Mark Read</a>
			      	<?php
			      		endif;
			      	?>
			      	<a href="delete.php?data_id=<?=$returned['id']?>" class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php
					endforeach;
				?>
			  </tbody>
			</table>
		</div>
	</div> 
</body>
</html>