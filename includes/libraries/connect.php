<?php
	$host=DB_HOST;
	$dbms=DBMS   ; 
	$user=DB_USER;
	$pass=DB_PASS;
	$name=DB_NAME;

	try{
		$conn = new PDO("$dbms:host=$host;dbname=$name",$user,$pass,
			array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_PERSISTENT=>false)
	);

	
	}
	catch(PDOException $e){
		echo "Not Connected :".$e->getMessage();
	}

?>