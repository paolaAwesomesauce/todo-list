<?php
	$task_id = strip_tags($POST['id']);
	require('connect.php');
	$mysqli = new mysqli('localhost', 'root', 'root', 'task');

	if ($result = $mysqli->query("DELETE FROM tasks WHERE id='task_id'")) {
	 	# code...
	 } 
?>