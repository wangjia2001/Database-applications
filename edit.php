<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改</title>
</head>
<body>
<?php
    $link = @mysql_connect("127.0.0.1","root","snnucs") or die("Connection failed: ".mysql_error());
				mysql_select_db('2019',$link);
                mysql_set_charset('utf8',$link);
    
    $id = $_GET['id'];
    $sql = mysql_query("SELECT * FROM 41812192w WHERE id=$id",$link);
    $sql_arr = mysql_fetch_assoc($sql); 

?>

<form action="update.php?" method="post">
    <label>！此项修改无效: </label><input type="text" name="id" value="<?php echo $sql_arr['id']?>">
    <label>日期: </label><input type="date" name="date_create" value="<?php echo $sql_arr['date_create']?>">
	<label>书目: </label><input type="text" name="book" value="<?php echo $sql_arr['book']?>">
    <label>作者：</label><input type="text" name="author" value="<?php echo $sql_arr['author']?>">
    <label>摘要：</label><input type="text" name="content" value="<?php echo $sql_arr['content']?>">
    <input type="submit" value="提交">
</form>

</body>
</html>