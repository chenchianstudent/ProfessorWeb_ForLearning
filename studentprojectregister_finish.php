<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:43
 */
?>
<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 =$_POST['pw2'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$other = $_POST['other'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($pw != null)
{
    //新增資料進資料庫語法
    $sql = "insert into studentsproject01 (projectname, annual, professor,studentname) values ('$pw','$telephone', '$address', '$other')";
    if(mysqli_query($link,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control3.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control3.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index1.php>';
}
?>