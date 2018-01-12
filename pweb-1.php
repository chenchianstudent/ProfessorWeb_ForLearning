<!doctype html>
<html lang="en">
<head>
    <title>王明祥簡歷</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
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
            <a class="navbar-brand" href="pweb2.php">Min-Shiang's Web</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" >
                <li><a href="backcontrol.php">控制台</a></li>
                <li class="active"><a href="pweb-1.php">簡歷</a></li>
                <li><a href="control3.php">學術</a></li>
                <li><a href="control4.php">著作</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="control6.php">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>
                        Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="background-color: #adffad;width: 100%;height: 100%" align="center">
    <div class="col-sm-3 sidenav">
        <h5></h5>
        <img src="990102449.jpg" width="300" height="408" alt="黃明祥教授">
        <h4 style="font-size: 4em"><b>黃明祥</b></h4>
        <br>
        <div class="input-group">
            <ul class="nav nav-tabs">
                <liclass="active"><a data-toggle="tab" href="#home" style="font-size: 2em"><b>基本資料</b></a></li>
                <li><a data-toggle="tab" href="#menu1" style="font-size: 2em"><b>學歷</b></a></li>
                <li><a data-toggle="tab" href="#menu2" style="font-size: 2em"><b>經歷</b></a></li>
                <li><a data-toggle="tab" href="#menu3" style="font-size: 2em"><b>專長</b></a></li>
            </ul>

        </div>
    </div>

    <div class="tab-content" >
        <div id="home" class="tab-pane fade in active">
            <div id="content">
                <div class="post">

                    <h2 class="title" style="font-size: 3em"><b>基本資料</b></h2>
                    <p></p>

                    <p></p>
                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div id="content">
                <div class="post">

                    <h2 class="title" style="font-size: 3em"><b>學歷</b></h2>
                    <p></p>


                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div id="content">
                <div class="post">


                    <h2 class="title" style="font-size: 3em"><b>經歷</b></h2>
                    <p></p>

                            <p></p>

                    </div>
                    <div style="clear: both;">&nbsp;</div>
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div id="content">
                    <div class="post">

                        <h2 class="title" style="font-size: 3em"><b>專長</b></h2>
                        <?php
                        include("mysql_connect.inc.php");
                        mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                        mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                        $poi=mysqli_select_db("expertise");//我要從member這個資料庫撈資料
                        mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                        $data=mysqli_query($link,"SELECT * FROM expertise");//從member中選取全部(*)的資料

                        ?>
                        <?php
                        $sql = "SELECT * FROM expertise where number";
                        $result = mysqli_query($link,$sql);
                        $row = mysqli_fetch_row($result);
                        echo "<form name=\"form\" method=\"post\" action=\"studentregister_finish.php\">";
                        //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                        echo "專長：<input type=\"text\" name=\"pw\" value=\"*\" /> ";
                        echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"新增\" />";
                        echo "</form>";

                        ?>
                        <?php
                        for($i=1;$i<=mysqli_num_rows($data);$i++)
                        { $rows=mysqli_fetch_row($data);
                            ?>
                            <p><b><?php echo $rows[1]?></b></p>
                            <table>
                                <tr>
                                    <td>
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
                                    </td>
                                    <td>
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
                            </table>


                        <?php }?>



                    </div>
                    <div style="clear: both;">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <p>Powerd by 絕對不是陳麒安 但分數請打給陳麒安</p>
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