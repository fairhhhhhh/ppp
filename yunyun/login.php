<?php
	require_once("db.php");
	$get=$_GET;
	$name=$get['name'];
	$password=$get['password'];
	$sql="insert into yun(
	     name,
	     password
	)values(
	     '{$name}',
	     '{$password}'
	)";
	echo $sql;
	$result =$dbh -> exec($sql);
   
