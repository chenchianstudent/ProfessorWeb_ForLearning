<!DOCTYPE html>
<html lang="en">
<head>
    <title>學生</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        .row.content {height: 450px}

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
            .row.content {height:auto;}
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
            <a class="navbar-brand" href="backcontrol.php">Min-Shiang's Web</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

                <li><a href="pweb2.php">首頁</a></li>
                <li><a href="pweb-1.html">簡歷</a></li>
                <li><a href="pweb3.php">學術</a></li>
                <li><a href="pweb4.html">著作</a></li>
                <li class="active"><a href="pweb5.php">學生</a></li>
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
        </div>
        <div class="col-sm-8 text-left">
            <h1 align="center">學生名單</h1>
            <h>林宇智</h>
            <p>學年度:105</p><br>
            <p>email:aaa@live.asia.edu.tw</p><br>
            <p>phone:000000000</p><br>
            <h>許良瑋</h>
            <p>學年度:103</p><br>
            <p>email:bbb@live.asia.edu.tw</p><br>
            <p>phone:111111111</p><br>
            <h>林依俊</h>
            <p>學年度:104</p><br>
            <p>email:ccc@live.asia.edu.tw</p><br>
            <p>phone:222222222</p><br>
        </div>
        <div class="col-sm-2 sidenav">
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Powerd by 絕對不是陳麒安 注意!!!你正在管理員介面</p>
    <script src="http://www.dreamhome.com.tw/escounter/counter.asp?name=28437699&dir=1"></script>
</footer>

</body>
</html>
