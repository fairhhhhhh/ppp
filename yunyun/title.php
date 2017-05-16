<?php
require_once("db.php");
$get=$_GET;
$title = $get['title'];
$textarea =$get['content'];
$sql="insert into yun(
	     title,
	     textarea
	)values(
	     '{$title}',
	     '{$textarea}'
	)";
//	echo $sql;
	$result =$dbh -> exec($sql);
 //查找
    $we= "select * from yun where textarea='{$textarea}'";
   $rr= $dbh ->query($we);
   
   $arr=[];
   
   foreach($rr as $key=>$value){
//		$arr[$key]=$value['name'];
//		print_r($value);
		$arr["textarea"]=$value['textarea'];
		$arr["title"]=$value['title'];
	}
//	print_r($arr);
//	echo $arr["textarea"];
	if ( $arr["title"] == $title and $arr["textarea"] == $textarea) {
	   $_SESSION["title"] = $title;
	   	$_SESSION["textarea"] = $textarea;
	   		$yunyun=[$textarea,$title];
	   		$yun=json_encode($yunyun);
			echo $yun;
//			echo $textarea;
//			echo $title;
	   }else{
	   		echo 1;
	   }
	   