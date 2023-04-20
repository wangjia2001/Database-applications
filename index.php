<!DOCTYPE html>
<html>
<body background="http://219.244.186.4:8088/2019/41812192/a.jpg">
</body>
<head>
    <meta charset="UTF-8">
    <title>41812192</title>
</head>
<style type="text/css">
.wrapper {width: 1000px;margin: 80px auto;}
h2 {text-align: center;}
.add {margin-bottom: 20px;}
.add a {text-decoration: none;color: #fff;background-color: black;padding: 6px;border-radius: 5px;}
td {text-align: center;}
</style>
<body>

    <div class="wrapper">
        <h2>读书笔记</h2>
        <div class="add">
            <a href="add.html">增加记录</a>
        </div>
        <table width="1000" border="3">
            <tr>
                <th>日期</th>
				<th>书目</th>
				<th>作者</th>
                <th>摘要</th>
                <th>操作</th>
            </tr> 
<?php
                $link = @mysql_connect("127.0.0.1","root","snnucs") or die("Connection failed: ".mysql_error());
				mysql_select_db('2019',$link);
                mysql_set_charset('utf8',$link);
                $sql = 'select * from 41812192w order by date_create asc';
                $result = mysql_query($sql,$link);         
                $Num=mysql_num_rows($result);  
                for($i=0; $i<$Num; $i++){
                    $row = mysql_fetch_assoc($result);
                    echo "<tr>";
                    echo "<td>{$row['date_create']}</td>";
                    echo "<td>{$row['book']}</td>";
                    echo "<td>{$row['author']}</td>";
                    echo "<td>{$row['content']}</td>";
                    echo "<td>
                            <a href='javascript:del({$row['id']})'>删除</a>
                            <a href='edit.php?id={$row['id']}'>修改</a>
                          </td>";
                    echo "</tr>";
                }
                mysql_free_result($result);
                mysql_close($link);
            ?>			
        </table>
    </div> 
    <script type="text/javascript">
        function del (id) {
            if (confirm("确定删除这条记录吗？")){
                window.location = "delete.php?id="+id;
            }
        }
    </script>
</body>
</html>