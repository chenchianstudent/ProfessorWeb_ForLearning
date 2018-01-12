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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
            height: 700px;
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #fffe82;
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
        .tb_main {
            border-collapse: collapse;
            border: 2px solid #996;
            font: normal 80%/140% verdana, arial, helvetica, sans-serif;
            color: #222222;
            background: #fffff0;
        }
        .tb_main caption {
            padding: 0 .4em .4em;
            text-align: left;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            color: #333;
            background: transparent;
        }
        .tb_main td, th {
            border-left: 1px solid #cc9;
            border-bottom: 1px solid #cc9;
            padding: .3em;
        }
        .tb_main thead th, tfoot th {
            border: 1px solid #cc9;
            text-align: left;
            font-size: 1em;
            font-weight: bold;
            color: #444;
            background: #dbd9c0;
        }
        .tb_main td a {
            background: transparent;
            color: #222222;
            text-decoration: none;
            border-bottom: 1px dotted #cc9;
        }
        .tb_main td a:hover {
            background: transparent;
            color: #666;
            border-bottom: 1px dotted #72724c;
        }
        .tb_main th a {
            background: transparent;
            color: #72724c;
            text-decoration: none;
            font-weight:bold;
            border-bottom: 1px dotted #cc9;
        }
        .tb_main th a:hover {
            background: transparent;
            color: #666;
            border-bottom: 1px dotted #72724c;
        }
        .tb_main th, tbody td {
            vertical-align: top;
            text-align: left;
        }
        .tb_main tfoot td {
            border: 1px solid #996;
        }
        .tb_main .odd {
            color: #222222;
            background: #f7f5dc;
        }
        .tb_main tr:hover {
            color: #333;
            background: #fff;
        }
        .tb_main tr:hover th,
        .tb_main tr.odd:hover th {
            color: #333;
            background: #ddd59b;
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
                <li><a href="pweb2.php">首頁</a></li>
                <li class="active"><a href="pweb1.php">簡歷</a></li>
                <li><a href="pweb3.php">學術</a></li>
                <li><a href="pweb4.php">著作</a></li>
                <li><a href="pweb5.php">學生</a></li>
                <li><a href="pweb6.php">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://120.108.117.245/~105021007/login"><span class="glyphicon glyphicon-log-in"></span>
                        Login</a></li>
            </ul>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid" align="center" style="background-color: #e2ffb7">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h5></h5>
            <img src="990102449.jpg" width="300" height="408" alt="黃明祥教授">
            <h4 style="font-size: 4em"><b>黃明祥</b></h4>
            <br>
            <div class="input-group">
                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">基本資料</a></li>
                    <li><a data-toggle="pill" href="#menu1">學歷</a></li>
                    <li><a data-toggle="pill" href="#menu2">經歷</a></li>
                    <li><a data-toggle="pill" href="#menu3">專長</a></li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div id="content">
                    <div class="post">


                        <h2 class="title" style="font-size: 3em"><b>基本資料</b></h2><br>
                        <?php
                        include("mysql_connect.inc.php");
                        mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                        mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                        $poi=mysqli_select_db("basicinformation");//我要從member這個資料庫撈資料
                        mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                        $data=mysqli_query($link,"SELECT * FROM basicinformation");//從member中選取全部(*)的資料

                        ?>
                         <?php
                            for($i=1;$i<=mysqli_num_rows($data);$i++)
                            { $rows=mysqli_fetch_row($data);
                            ?>
                                <p><b>姓名:<?php echo $rows[1]?></b></p><br>
                                <p><b>任職單位:<?php echo $rows[2]?></b></p><br>
                                <p><b>E-mail:<a href="mailto:<?php echo $rows[3]?>"><?php echo $rows[3]?></a></b></p><br>

                            <?php }?>


                            <div class="entry">

                        </div>

                    </div>

                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <div id="content">
                    <div class="post">


                        <h2 class="title"style="font-size: 3em"><b>學歷</b></h2><br>
                        <?php
                        include("mysql_connect.inc.php");
                        mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                        mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                        $poi=mysqli_select_db("education");//我要從member這個資料庫撈資料
                        mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                        $data=mysqli_query($link,"SELECT * FROM education");//從member中選取全部(*)的資料

                        ?>
                        <?php
                        for($i=1;$i<=mysqli_num_rows($data);$i++)
                        { $rows=mysqli_fetch_row($data);
                            ?>
                            <p><b><?php echo $rows[1]?></b></p><br>


                        <?php }?>

                        <div class="entry">

                        </div>


                    </div>

                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div id="content">
                    <div class="post">

                        <h2 class="title" style="font-size: 3em"><b>經歷</b></h2><br>
                        <?php
                        include("mysql_connect.inc.php");
                        mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                        mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                        $poi=mysqli_select_db("experience");//我要從member這個資料庫撈資料
                        mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                        $data=mysqli_query($link,"SELECT * FROM experience");//從member中選取全部(*)的資料

                        ?>
                        <?php
                        for($i=1;$i<=mysqli_num_rows($data);$i++)
                        { $rows=mysqli_fetch_row($data);
                            ?>
                            <p><b><?php echo $rows[1]?></b>(<b><?php echo $rows[2]?></b>)</p><br>
                        <?php }?>

                        <div class="entry">
                            <p></p>

                        </div>

                    </div>
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div id="content">
                    <div class="post">

                        <h2 class="title" style="font-size: 3em"><b>專長</b></h2><br>
                        <?php
                        include("mysql_connect.inc.php");
                        mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                        mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                        $poi=mysqli_select_db("expertise");//我要從member這個資料庫撈資料
                        mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                        $data=mysqli_query($link,"SELECT * FROM expertise");//從member中選取全部(*)的資料

                        ?>
                        <?php
                        for($i=1;$i<=mysqli_num_rows($data);$i++)
                        { $rows=mysqli_fetch_row($data);
                            ?>
                            <p><b><?php echo $rows[1]?></b></p><br>
                        <?php }?>

                        <div class="entry">


                            <p>&nbsp;</p>
                        </div>
                        <p></p>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <footer class="container-fluid text-center">
        <p>Powerd by 絕對不是陳麒安  但分數請打給陳麒安</p>
        <script src="http://www.dreamhome.com.tw/escounter/counter.asp?name=28437699&dir=1"></script>
    </footer>
</body>
</html>