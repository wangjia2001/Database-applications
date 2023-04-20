<?php

$link = @mysql_connect("127.0.0.1","root","snnucs") 
or die("Connection failed: ".mysql_error());
mysql_select_db('2019',$link);
               
mysql_set_charset('utf8',$link);

$date_create = $_POST['date_create'];
$book = $_POST['book'];
$author = $_POST['author'];
$content = $_POST['content'];

mysql_query("INSERT INTO 41812192w (date_create, book, author, content) VALUES ('$date_create','$book','$author','$content')",$link)
or die('failed to add: '.mysql_error()); 
header("Location:index.php");  