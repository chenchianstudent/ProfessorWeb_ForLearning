<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:36
 */
?>

<?php session_start(); ?>
    <!--上方語法為啟用session，此語法要放在網頁最前方-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = sha1($_POST['pw']);

//搜尋資料庫資料
$sql = "SELECT * FROM nani where id = '$id'";
//echo $sql;


//$result = mysqli_query($link,$sql);


//$row = @mysqli_fetch_row($result);

$result = $link->query($sql);
//$row = $result->fetch_assoc();
$row = $result->fetch_row();
$email=$row[4];
//echo "+___+";
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
//echo $id."<br>";
//echo $pw."<br>";
//echo ">>".$row[0]."<<<br>";
//echo ">>".$row[2]."<<<br>";
if($id != null && $pw != null && $row[0] == $id && $row[2] == $pw)
{
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['name'] = $id;
    echo '登入成功!';
    require_once ("mailTest.php");
    $sql="INSERT INTO log(`email`,`event_type`,`description`)VALUES('$email','login','user login success from".get_client_ip()."') ";
   // echo $sql;
    $link->query($sql);
    echo '<meta http-equiv=REFRESH CONTENT=1;url=backcontrol.php>';

}
else
{
    echo '登入失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=pweb2.php>';
}
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
?>