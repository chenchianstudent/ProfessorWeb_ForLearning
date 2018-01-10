<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:45
 */
?>
<?php
session_start();
include("mysql_connect.inc.php");
if($_SESSION['name'] != null){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="register_finish.php">
    帳號：<input type="text" name="id" /> <br>
    名字：<input type="text" name="username" /> <br>
    密碼：<input type="password" name="pw" /> <br>
    再一次輸入密碼：<input type="password" name="pw2" /> <br>
    電話：<input type="text" name="telephone" /> <br>
    信箱：<input type="text" name="address" /> <br>
    type：<input type="text" name="other" /> <br>
    <input type="submit" name="button" value="確定" />
</form>
    <?php
}else{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=pweb2.php>';

}
?>