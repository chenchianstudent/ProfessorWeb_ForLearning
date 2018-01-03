<?php
/**
 * Created by PhpStorm.
 * User: chentest1605
 * Date: 2018/1/3
 * Time: 下午 07:53
 */?>
<?php
mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysqli_select_db("105021007");//我要從member這個資料庫撈資料
$poi=mysqli_select_db("titlename");//我要從member這個資料庫撈資料
mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
$data=mysqli_query($link,"SELECT * FROM titlename");//從member中選取全部(*)的資料
$rows=mysqli_fetch_row($data);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>黃明祥教授網頁二代</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Min-Shiang's Web</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="pweb2.php">首頁</a></li>
                <li><a href="http://120.108.117.245/~105021007/pweb-1">簡歷</a></li>
                <li><a href="http://120.108.117.245/~105021007/pweb3">學術</a></li>
                <li><a href="http://120.108.117.245/~105021007/pweb4">著作</a></li>
                <li><a href="http://120.108.117.245/~105021007/student">學生</a></li>
                <li><a href="http://isrc.ccs.asia.edu.tw/www/index.php">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://120.108.117.245/~105021007/login"><span class="glyphicon glyphicon-log-in"></span>
                        Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">poi</a></p>
            <p><a href="#">poi1</a></p>
            <p><a href="#">poi2</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1><span style="font-size: 1.5em">黃明祥</span><span style="font-size: 1em">教授</span></h1>
            <p>多數人的失敗不是因為他們的無能，而是他的心志不專一</p>
            <?php echo $rows[1]?>
            <hr>
            <h3><span style="font-size: 1.2em">聯絡方式</span></h3>
            <p><span style="font-size:1em ">●tel:+886-4-23323456  分機：1864</span></p>
            <p><span style="font-size:1em ">●Office：I420</span></p>
            <p><span style="font-size:1em ">●E-mail:mshwang@asia.edu.tw</span></p>


        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <img src="mshwang.jpg" width="150" height="204" alt="黃明祥教授">

            </div>
            <p style="font-weight:bold;font-size: 1.5em ">黃明祥教授</p>
            <p>專任講授教授</p>

        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Powerd by 絕對不是陳麒安 但分數請打給陳麒安</p>
    <script src="http://www.dreamhome.com.tw/escounter/counter.asp?name=28437699&dir=1"></script>
</footer>

</body>
</html>

