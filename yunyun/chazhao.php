<?php
  require_once("db.php");
	$get=$_GET;
	$name=$get['name'];
	$password=$get['password'];
  $sql= "select * from yun where name='{$name}'";
   $result= $dbh ->query($sql);
   $arr=[];
// foreach($result as $key=>$value){
//		$arr[$key]=$value['name'];
//	}
//	echo json_encode($arr);
//	$_SESSION['name']=$name;
//	$_SESSION['password']=$password;
//
foreach($result as $key=>$value){
		$arr[$key]=$value['name'];
		$arr["password"]=$value['password'];
	}
//	echo $value;
	if ($arr["password"] == $password) {
	   	$_SESSION["name"] = $name;
	   	$_SESSION["password"] = $password;
			echo 0;
	   }else{
	   		echo 1;
	   }
