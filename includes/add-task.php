<?php
	$task = strip_tags($_POST['task']);
	$date = data('Y-m-d');
	$time = date(H:i:s);

	included('connect.php');

	$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
	$mysqli ->query("INSERT INTO task VALUES ('', '$task', '$date', '$time')");
?>