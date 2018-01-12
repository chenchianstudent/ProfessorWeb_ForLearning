<!DOCTYPE html>
<html lang="en">
<head>
    <title>學生</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 100%}

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
        /*table */
        .tb_main {
            border-collapse: collapse;
            border: 2px solid #996;
            font: normal 80%/140% verdana, arial, helvetica, sans-serif;
            color: #222222;
            background: #fbfff9;
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
            background: #bcf1ff;
        }
        .tb_main tr:hover {
            color: #333;
            background: #fbfff9;
        }
        .tb_main tr:hover th,
        .tb_main tr.odd:hover th {
            color: #333;
            background: #ddd59b;
        }
    </style>
</head>
<body>
<?php
session_start();
include("mysql_connect.inc.php");
if($_SESSION['name'] != null){
?>
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

                <li><a href="backcontrol.php">控制台</a></li>
                <li><a href="pweb-1.php">簡歷</a></li>
                <li><a href="control3.php">學術</a></li>
                <li><a href="control4.php">著作</a></li>
                <li><a href="student.php">學生</a></li>
                <li class="active"><a href="control6.php">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>
                        Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content" style="background-color: #ffb71d">
        <div class="col-sm-2 sidenav" style="background-color:  #ffb71d">
        </div>
        <div class="col-sm-8 text-left">
            <h1 align="center" style="font-size:3.5em "><b>常用網址</b></h1>
            <?php
            include("mysql_connect.inc.php");
            mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
            mysqli_select_db("105021007");//我要從member這個資料庫撈資料
            $poi=mysqli_select_db("web");//我要從member這個資料庫撈資料
            mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
            $data=mysqli_query($link,"SELECT * FROM web");//從member中選取全部(*)的資料

            ?>
            <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                <?php
                for($i=1;$i<=mysqli_num_rows($data);$i++)
                { $rows=mysqli_fetch_row($data);
                ?>
                <tbody><tr class="odd">
                    <td><p align="center" style="font-size: 20px;"><b><?php echo $rows[1]?></b><br></p>
                        <p align="center">網址: <a href="<?php echo $rows[2]?>"><?php echo $rows[2]?></a></p></td>
                    <td width="5%" align="right">
                        <p>
                            <?php
                            $sql = "SELECT * FROM web where number";
                            $result = mysqli_query($link,$sql);
                            $row = mysqli_fetch_row($result);
                            echo "<form name=\"form\" method=\"post\" action=\"webupdate.php\">";
                            echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                            echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"修改\" />";
                            echo "</form>";

                            ?>
                        </p>
                        <p>
                            <?php
                            $sql = "SELECT * FROM web where number";
                            $result = mysqli_query($link,$sql);
                            $row = mysqli_fetch_row($result);
                            echo "<form name=\"form\" method=\"post\" action=\"webdelete_finish.php\">";
                            echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                            echo "<input class='poi' type=\"submit\" name=\"button\" value=\"刪除\" />";
                            echo "</form>";

                            ?>
                        </p>


                    </td>
                </tr>
                <?php }?>
                </tbody></table>

        </div>
        <div class="col-sm-2 sidenav" style="background-color: #ffb71d">
            <h2 align="center">新增</h2>
            <div class="well" style="background-color: #fffaad">
                <?php
                $sql = "SELECT * FROM web where number";
                $result = mysqli_query($link,$sql);
                $row = mysqli_fetch_row($result);
                echo "<form name=\"form\" method=\"post\" action=\"webregister_finish.php\">";
                //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                echo "網站名：<input type=\"text\" name=\"pw\" value=\"*\" /> <br>";
                echo "網址：<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"確定\" />";
                echo "</form>";

                ?>
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
<?php
}else{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=pweb2.php>';

}
?>
