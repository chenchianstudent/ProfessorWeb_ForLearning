<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:42
 */
?>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['name']);
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=1;url="pweb2.php">';
?>
