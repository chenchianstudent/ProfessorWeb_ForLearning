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
    $id = $_SESSION['name'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM nani where name='$id'";
    echo $sql."<br>";
    $result = mysqli_query($sql);
    echo $result."<br>";
    $row = mysqli_fetch_row($result);
    echo $row."<br>";
    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[1]\" />(此項目無法修改) <br>";
    echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
    echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
    echo "手機：<input type=\"text\" name=\"telephone\" value=\"$row[3]\" /> <br>";
    echo "信箱：<input type=\"text\" name=\"address\" value=\"$row[4]\" /> <br>";
    echo "type：<textarea name=\"other\" cols=\"45\" rows=\"5\">$row[5]</textarea> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
}
/*else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index1.php>';
}
?>*/
