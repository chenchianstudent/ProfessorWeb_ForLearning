<!DOCTYPE html>
<html lang="en">
<head>
    <title>簡歷</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
            height: 700px;
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #19ff40;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: #fff4f4;
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
            <a class="navbar-brand" href="pweb2.php">Min-Shiang's Web</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="backcontrol.php">控制台</a></li>
                <li class="active"><a href="pweb-1.php">簡歷</a></li>
                <li><a href="control3.php">學術</a></li>
                <li><a href="control4.php">著作</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="http://isrc.ccs.asia.edu.tw/www/index.php">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>
                        Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid" align="center" style="background-color: #ffb907">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h5></h5>
            <img src="990102449.jpg" width="300" height="408" alt="黃明祥教授">
            <h4 style="font-size: 6em">黃明祥</h4>
            <br>
            <div class="input-group">

            </div>
        </div>
        <div align="center" >
            <h3>基本資料</h3>
            <p>姓名：黃明祥／Min-Shiang Hwang</p>
            <p>任職單位：資訊工程學系 講座教授</p>
            <p>E-mail：<a href="mailto:mshwang@asia.edu.tw">mshwang@asia.edu.tw</a></p>
            <h3>學歷</h3>
            <p>交通大學資訊工程與科學博士</p>
            <p>清華大學工業工程碩士</p>
            <p>台北工專電子工程</p>
            <h3>經歷</h3>
            <p>亞洲大學資工系講座教授(2011-至今)</p>
            <p>亞洲大學資訊學院院長(2011-2015)</p>
            <p>中興大學資訊管理學系特聘教授(2007-2011)</p>
            <p>中興大學資訊管理學系教授兼系主任(2003-2009)</p>
            <h3>專長</h3>
            <p>密碼學</p>
            <p>資訊網路與網路安全</p>
            <p>隱像學</p>
            <p>行動通信與計算</p>
            <p>電子商務</p>
        </div>

    </div>
</div>

<footer class="container-fluid">
    <p align="center">Powerd by 絕對不是陳麒安 但分數請打給陳麒安</p>
</footer>

</body>
</html>