<?php
  require_once("db.php");
   $get=$_GET;
   $title = $get['title'];
   $textarea =$get['content'];
$update="delete from yun where title = '{$title }' and textarea = '{$textarea}'";
$updatesql =$dbh ->query($update);
   //将该用户的标题和留言向匹配。然后将其删除
  if($updatesql){
  	 echo 1; //成功
  }else{
  	echo 0 ; //不成功
  }

