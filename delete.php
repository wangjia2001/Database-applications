<?php
error_reporting(0);
$link = @mysql_connect("127.0.0.1","root","snnucs") or die("Connection failed: ".mysql_error());
mysql_select_db('2019',$link);    
mysql_set_charset('utf8',$link);

$id = $_GET['id'];
//删除指定数据  
mysql_query("DELETE FROM 41812192w WHERE id={$id}",$link) or die('Error deleting data: '.mysql_error()); 
header("Location:index.php");  