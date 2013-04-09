<?php

// PDO
// $pdo = new PDO("mysql:host=localhost;dbname=vibin", 'root', 'root');



try {
	$conn = new PDO('mysql:host=localhost; dbname=vibin', 'root', 'root');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}	catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
}

/*connect to the database
mysql_connect('localhost', 'root', 'root') or die("Could not connect");
mysql_select_db('mysql') or die("Can't find database table");
*/
?>