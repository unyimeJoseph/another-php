<?php
	
	//starting the php sesion
	session_start();

	$conn = mysqli_connect('localhost', 'root', 'root', 'registration');

	if (! $conn) die('could not connect to Database');