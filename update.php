<?php
$link = @mysql_connect("127.0.0.1","root","snnucs") 
or die("Connection failed: ".mysql_error());
mysql_select_db('2019',$link);
mysql_set_charset('utf8',$link);

//$id = $_GET['id'];
$id = $_POST['id'];
$date_create = $_POST['date_create'];
$book = $_POST['book'];
$author = $_POST['author'];
$content = $_POST['content'];
// 更新数据

mysql_query("UPDATE 41812192w SET date_create='$date_create', book='$book', author='$author',content='$content' 
WHERE id=$id",$link) 
or die('Error modifying data: '.mysql_error()); 

header("Location:index.php");  