<?php
//ne conectam la baza de date mydb, de pe localhost cu user-ul root, cu parola goala
	$dbc = new mysqli('localhost', 'root', '', 'mydb');
	
	if($dbc->connect_errno) { 
		die('DB not connected');
	}

?>