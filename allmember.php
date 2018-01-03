<?php
include("mysql_connect.inc.php");
mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysqli_select_db("105021007");//我要從member這個資料庫撈資料
$poi=mysqli_select_db("nani");//我要從member這個資料庫撈資料
if($poi==null){
    echo '>____<';
}
mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
$data=mysqli_query($link,"SELECT * FROM nani");//從member中選取全部(*)的資料
if(!$data){

    echo '沒有連接到';
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>無標題文件</title>
</head>

<body>
<table width="546" border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>pw</td>
        <td>phone</td>
        <td>email</td>
        <td>type</td>
    </tr>

    <?php
    for($i=1;$i<=mysqli_num_rows($data);$i++)
    { $rows=mysqli_fetch_row($data);
        ?><tr>
        <td><?php echo $rows[0]?></td>
        <td><?php echo $rows[1]?></td>
        <td><?php echo $rows[2]?></td>
        <td><?php echo $rows[3]?></td>
        <td><?php echo $rows[4]?></td>
        <td><?php echo $rows[5]?></td>
        </tr>
    <?php }?>


</table>
</body>
</html>