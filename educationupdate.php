<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:46
 */
?>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

if($_SESSION['name'] != null)
{
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id = $_POST['id'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM education where number='$id'";


    $result = mysqli_query($link,$sql);

    $row = mysqli_fetch_row($result);
    echo "<form name=\"form\" method=\"post\" action=\"educationupdate_finish.php\">";
    echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" /><br>";
    echo "學歷：<input type=\"text\" name=\"pw\" value=\"$row[1]\" /> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=pweb2.php>';
}
?>
