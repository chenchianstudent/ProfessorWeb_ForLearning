<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:35
 */
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "105021007";
//資料庫管理者帳號
$db_user = "105021007";
//資料庫管理者密碼
$db_passwd = "#yV5X55K0";
//對資料庫連線
if(!$link = new mysqli($db_server, $db_user, $db_passwd))
    die("無法對資料庫連線");
//資料庫連線採UTF8
$link->set_charset("utf8");
//mysqli_query("SET NAMES utf8");
//選擇資料庫

if(!mysqli_select_db ( $link , $db_name))
    die("無法使用資料庫");
//?>

