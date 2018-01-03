<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:47
 */
?>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
//$pw = sha1($_POST['pw']);
//$pw2 =sha1( $_POST['pw2']);
$pw = $_POST['pw'];
$pw2 =$_POST['pw2'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
//$other = $_POST['other'];
//紅色字體為判斷密碼是否填寫正確
if($_SESSION['name'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
    $id = $_SESSION['name'];

    //更新資料庫資料語法
    $sql = "update nani set pw='$pw', phone='$telephone', email='$address' where id='$id'";

    if(mysqli_query($link,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=backcontrol.php>';
    }
    else
    {
        echo '修改失敗!';
        echo $sql;
//        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
}
/*else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index1.php>';
}
?>
*/