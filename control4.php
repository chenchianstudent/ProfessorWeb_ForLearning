

<!doctype html>
<html lang="en">
<head>
    <title>王明祥著作</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
        /*table*/

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
                <li class="active"><a href="control4.php">著作</a></li>
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

<div class="container" style="background-color: #ffa313;width: 100%;height: 100%" align="center">
    <h2><span style="font-size:1.8em "><b>著作</b></span></h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">期刊論文／Journal Papers</a></li>
        <li><a data-toggle="tab" href="#menu1">專利／Patents</a></li>
        <li><a data-toggle="tab" href="#menu2">授課課程／Course Information</a></li>
        <li><a data-toggle="tab" href="#menu3">獲獎／Awards</a></li>
    </ul>

    <div class="tab-content" >
        <div id="home" class="tab-pane fade in active">
            <div id="content">
                <div class="post">

                    <h2 class="title">期刊論文／Journal Papers</h2>
                    <p></p>

                        <?php
                            include("mysql_connect.inc.php");
                            mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                            mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                            $poi=mysqli_select_db("journalpapers");//我要從member這個資料庫撈資料
                            mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                            $data=mysqli_query($link,"SELECT * FROM journalpapers");//從member中選取全部(*)的資料

                            ?>
                            <div class="entry">
                                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                                    <?php
                                    for($i=1;$i<=mysqli_num_rows($data);$i++)
                                    { $rows=mysqli_fetch_row($data);
                                    ?>
                                    <tbody><tr class="odd">
                                        <td width="5%"><?php echo $i?></td>
                                        <td><?php echo $rows[1]?>,<?php echo $rows[2]?>,<?php echo $rows[3]?><br>
                                            <?php echo $rows[4]?><br>
                                            <?php echo $rows[5]?>,<?php echo $rows[6]?><br>

                                        </td>
                                        <td width="5%" align="right">
                                            <p>
                                                <?php
                                                $sql = "SELECT * FROM journalpapers where number";
                                                $result = mysqli_query($link,$sql);
                                                $row = mysqli_fetch_row($result);
                                                echo "<form name=\"form\" method=\"post\" action=\"journalpapersupdate.php\">";
                                                echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                                                echo "</form>";

                                                ?>
                                            </p>
                                            <p>
                                                <?php
                                                $sql = "SELECT * FROM journalpapers where number";
                                                $result = mysqli_query($link,$sql);
                                                $row = mysqli_fetch_row($result);
                                                echo "<form name=\"form\" method=\"post\" action=\"journalpapersdelete_finish.php\">";
                                                echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                                                echo "</form>";

                                                ?>
                                            </p>
                                        </td>

                                    </tr>
                                    <?php }?>
                                    <tr class="odd">
                                        <td width="5%">新增</td>
                                        <td>
                                            <?php
                                            $sql = "SELECT * FROM journalpapers where number";
                                            $result = mysqli_query($link,$sql);
                                            $row = mysqli_fetch_row($result);
                                            echo "<form name=\"form\" method=\"post\" action=\"journalpapersregister_finish.php\">";
                                            //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                                            echo "期刊名稱：<input type=\"text\" name=\"pw\" value=\"*\" /> <br>";
                                            echo "出版社：<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                                            echo "EI/SCI：<input type=\"text\" name=\"address\" value=\"*\" /> <br>";
                                            echo "發表人：<input type=\"text\" name=\"other\" value=\"*\" /> <br>";
                                            echo "時間：<input type=\"text\" name=\"other1\" value=\"*\" /> <br>";
                                            echo "編碼：<input type=\"text\" name=\"other2\" value=\"*\" /> <br>";
                                            echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
                                            echo "</form>";


                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                            </tbody></table>
                        <p>&nbsp;</p>
                    </div>
                    <p></p>
                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div id="content">
                <div class="post">

                    <h2 class="title">專利／Patents</h2>
                    <p></p>
                    <div class="entry">
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                            <?php
                            include("mysql_connect.inc.php");
                            mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                            mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                            $poi=mysqli_select_db("patents");//我要從member這個資料庫撈資料
                            mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                            $data=mysqli_query($link,"SELECT * FROM patents");//從member中選取全部(*)的資料

                            ?>
                            <div class="entry">
                                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                                    <?php
                                    for($i=1;$i<=mysqli_num_rows($data);$i++)
                                    { $rows=mysqli_fetch_row($data);
                                    ?>
                                    <tbody><tr class="odd">
                                        <td width="5%"><?php echo $i?></td>
                                        <td><?php echo $rows[1]?>,<?php echo $rows[2]?>,<?php echo $rows[3]?>,<?php echo $rows[4]?></td>
                                        <td width="5%" align="right">
                                            <p>
                                                <?php
                                                $sql = "SELECT * FROM patents where number";
                                                $result = mysqli_query($link,$sql);
                                                $row = mysqli_fetch_row($result);
                                                echo "<form name=\"form\" method=\"post\" action=\"patentsupdate.php\">";
                                                echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                                                echo "</form>";

                                                ?>
                                            </p>
                                            <p>
                                                <?php
                                                $sql = "SELECT * FROM patents where number";
                                                $result = mysqli_query($link,$sql);
                                                $row = mysqli_fetch_row($result);
                                                echo "<form name=\"form\" method=\"post\" action=\"patentsdelete_finish.php\">";
                                                echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                                                echo "</form>";

                                                ?>
                                            </p>
                                        </td>

                                    </tr>
                                    <?php }?>
                                    <tr class="odd">
                                        <td width="5%">新增</td>
                                        <td>
                                            <?php
                                            $sql = "SELECT * FROM patents where number";
                                            $result = mysqli_query($link,$sql);
                                            $row = mysqli_fetch_row($result);
                                            echo "<form name=\"form\" method=\"post\" action=\"patentsregister_finish.php\">";
                                            //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                                            echo "名字：<input type=\"text\" name=\"pw\" value=\"*\" /> <br>";
                                            echo "申請地點：<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                                            echo "專利號：<input type=\"text\" name=\"address\" value=\"*\" /> <br>";
                                            echo "時間：<input type=\"text\" name=\"other\" value=\"*\" /> <br>";
                                            echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
                                            echo "</form>";

                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>


                                    </tbody></table>
                        <p>&nbsp;</p>
                    </div>

                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div id="content">
                <div class="post">


                    <h2 class="title">授課課程／Course Information</h2>
                    <p>點擊課名稱可取得詳細資訊</p>
                    <div class="entry">
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">

                            <?php
                            include("mysql_connect.inc.php");
                            mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                            mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                            $poi=mysqli_select_db("courseinformation");//我要從member這個資料庫撈資料
                            mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                            $data=mysqli_query($link,"SELECT * FROM courseinformation");//從member中選取全部(*)的資料

                            ?>
                            <div class="entry">
                                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                                    <?php
                                    for($i=1;$i<=mysqli_num_rows($data);$i++)
                                    { $rows=mysqli_fetch_row($data);
                                    ?>
                                    <tbody><tr class="odd">
                                        <td width="5%"><?php echo $i?></td>
                                        <td><a href="#" onclick="window.open('<?php echo $rows[3]?>')"><?php echo $rows[1]?></a><br><?php echo $rows[2]?></td>
                                        <td width="5%" align="right">
                                            <p>
                                                <?php
                                                $sql = "SELECT * FROM courseinformation where number";
                                                $result = mysqli_query($link,$sql);
                                                $row = mysqli_fetch_row($result);
                                                echo "<form name=\"form\" method=\"post\" action=\"courseinformationupdate.php\">";
                                                echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                                                echo "</form>";

                                                ?>
                                            </p>
                                            <p>
                                                <?php
                                                $sql = "SELECT * FROM courseinformation where number";
                                                $result = mysqli_query($link,$sql);
                                                $row = mysqli_fetch_row($result);
                                                echo "<form name=\"form\" method=\"post\" action=\"courseinformationdelete_finish.php\">";
                                                echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                                                echo "</form>";

                                                ?>
                                            </p>
                                        </td>

                                    </tr>
                                    <?php }?>
                                    <tr class="odd">
                                        <td width="5%">新增</td>
                                        <td>
                                            <?php
                                            $sql = "SELECT * FROM courseinformation where number";
                                            $result = mysqli_query($link,$sql);
                                            $row = mysqli_fetch_row($result);
                                            echo "<form name=\"form\" method=\"post\" action=\"courseinformationregister_finish.php\">";
                                            //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                                            echo "課程名稱：<input type=\"text\" name=\"pw\" value=\"*\" /> <br>";
                                            echo "備註：<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                                            echo "網址：<input type=\"text\" name=\"address\" value=\"*\" /> <br>";
                                            echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
                                            echo "</form>";

                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>

                                    </tbody></table>
                        <p>&nbsp;</p>
                    </div>
                    <p></p>

                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <div id="content">
                <div class="post">

                    <h2 class="title">獲獎／Awards</h2>
                    <p></p>
                    <div class="entry">
                        <?php
                        include("mysql_connect.inc.php");
                        mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                        mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                        $poi=mysqli_select_db("awards");//我要從member這個資料庫撈資料
                        mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                        $data=mysqli_query($link,"SELECT * FROM awards");//從member中選取全部(*)的資料

                        ?>
                        <div class="entry">
                            <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                                <?php
                                for($i=1;$i<=mysqli_num_rows($data);$i++)
                                { $rows=mysqli_fetch_row($data);
                                ?>
                                <tbody><tr class="odd">
                                    <td width="5%"><?php echo $i?></td>
                                    <td><?php echo $rows[1]?>,<?php echo $rows[2]?>,<?php echo $rows[3]?></td>
                                    <td width="5%" align="right">
                                        <p>
                                            <?php
                                            $sql = "SELECT * FROM awards where number";
                                            $result = mysqli_query($link,$sql);
                                            $row = mysqli_fetch_row($result);
                                            echo "<form name=\"form\" method=\"post\" action=\"awardsupdate.php\">";
                                            echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                            echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                                            echo "</form>";

                                            ?>
                                        </p>
                                        <p>
                                            <?php
                                            $sql = "SELECT * FROM awards where number";
                                            $result = mysqli_query($link,$sql);
                                            $row = mysqli_fetch_row($result);
                                            echo "<form name=\"form\" method=\"post\" action=\"awardsdelete_finish.php\">";
                                            echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                            echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                                            echo "</form>";

                                            ?>
                                        </p>
                                    </td>

                                </tr>
                                <?php }?>
                                <tr class="odd">
                                    <td width="5%">新增</td>
                                    <td>
                                        <?php
                                        $sql = "SELECT * FROM awards where number";
                                        $result = mysqli_query($link,$sql);
                                        $row = mysqli_fetch_row($result);
                                        echo "<form name=\"form\" method=\"post\" action=\"awardsregister_finish.php\">";
                                        //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                                        echo "獲獎名稱：<input type=\"text\" name=\"pw\" value=\"*\" /> <br>";
                                        echo "獲獎地點：<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                                        echo "時間：<input type=\"text\" name=\"address\" value=\"*\" /> <br>";
                                        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
                                        echo "</form>";

                                        ?>
                                    </td>
                                    <td></td>
                                </tr>

                                </tbody></table>
                        <p>&nbsp;</p>
                    </div>
                    <p></p>
                </div>
                <div style="clear: both;">&nbsp;</div>
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
    <?php
}else{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=pweb2.php>';

}
?>

