<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:34
 */
?>
<?php
session_start();
include("mysql_connect.inc.php");
if($_SESSION['name'] != null){
    ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="connect.php">
    帳號：<input type="text" name="id" /> <br>
    密碼：<input type="password" name="pw" /> <br>
    <input type="submit" name="button" value="登入" />&nbsp;&nbsp;
    <a href="register.php">申請帳號</a>
</form>
    <?php
}else{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=pweb2.php>';

}
?>
