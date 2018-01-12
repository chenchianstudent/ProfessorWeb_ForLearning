


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>學術</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                <li class="active"><a href="control3.php">學術</a></li>
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

<div class="container" style="background-color: #ffb907;width: 100%;height: 150%" align="center">
    <h2> <span style="font-size:1.8em "><b>學術</b></span></h2>
    <p align="center">就是學術 別懷疑</p>
    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home">指導大專生計畫／College Student Participation in Research Projects</a></li>
        <li><a data-toggle="pill" href="#menu1">指導論文／Thesis advising</a></li>
        <li><a data-toggle="pill" href="#menu2">研討會論文/Conference Papers</a></li>
        <li><a data-toggle="pill" href="#menu3">研究計畫/Research Grant</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div id="content">
                <div class="post">


                    <h2 class="title">
                        指導大專生計畫／College Student Participation in Research Projects</h2>
                    <button type="submit"><a href="addPDF.php">下載pdf</a></button>
                    <p></p>
                    <?php
                    include("mysql_connect.inc.php");
                    mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                    mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                    $poi=mysqli_select_db("studentsproject01");//我要從member這個資料庫撈資料
                    mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                    $data=mysqli_query($link,"SELECT * FROM studentsproject01");//從member中選取全部(*)的資料

                    ?>
                    <div class="entry">
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                            <?php
                            for($i=1;$i<=mysqli_num_rows($data);$i++)
                            { $rows=mysqli_fetch_row($data);
                            ?>
                            <tbody><tr >
                                <td width="5%"><?php echo $i?></td>
                                <td>學年度:<?php echo $rows[2]?><br>計畫名稱:<?php echo $rows[1]?><br>指導教授: <?php echo $rows[3]?><br>學生姓名:<?php echo $rows[4]?><br></td>
                                <td width="5%" align="right" colspan="2">

                                        <?php
                                        $sql = "SELECT * FROM studentsproject01 where number";
                                        $result = mysqli_query($link,$sql);
                                        $row = mysqli_fetch_row($result);
                                        echo "<form name=\"form\" method=\"post\" action=\"studentprojectupdate.php\">";
                                        echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                        echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"修改\" />";
                                        echo "</form>";

                                        ?>

                                        <?php
                                        $sql = "SELECT * FROM studentsproject01 where number";
                                        $result = mysqli_query($link,$sql);
                                        $row = mysqli_fetch_row($result);
                                        echo "<form name=\"form\" method=\"post\" action=\"studentprojectdelete_finish.php\">";
                                        echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                        echo "<input class='poi' type=\"submit\" name=\"button\" value=\"刪除\" />";
                                        echo "</form>";

                                        ?>

                                </td>

                            </tr>
                            <?php }?>
                            <tr class="odd">
                                <td width="5%">新增</td>
                                <td>
                                    <?php
                                    $sql = "SELECT * FROM studentsproject where number";
                                    $result = mysqli_query($link,$sql);
                                    $row = mysqli_fetch_row($result);
                                    echo "<form name=\"form\" method=\"post\" action=\"studentprojectregister_finish.php\">";
                                    //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                                    echo "計畫名稱：<input type=\"text\" name=\"pw\" value=\"*\"/> <br>";
                                    echo "學年度：<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                                    echo "教授名稱：<input type=\"text\" name=\"address\" value=\"*\" /> <br>";
                                    echo "學生姓名：<input type=\"text\" name=\"other\" value=\"*\" /> <br>";
                                    echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"確定\" />";
                                    echo "</form>";

                                    ?>
                                </td>
                                <td></td>
                            </tr>

                            </tbody></table>
                    </div>

                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div id="content">
                <div class="post">


                    <h2 class="title">指導論文／Thesis Advisor</h2>
                    <p></p>
                    <?php
                    include("mysql_connect.inc.php");
                    mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                    mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                    $poi=mysqli_select_db("thesisadvisor");//我要從member這個資料庫撈資料
                    mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                    $data=mysqli_query($link,"SELECT * FROM thesisadvisor");//從member中選取全部(*)的資料

                    ?>
                    <div class="entry">
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                            <?php
                            for($i=1;$i<=mysqli_num_rows($data);$i++)
                            { $rows=mysqli_fetch_row($data);
                            ?>
                            <tbody><tr class="odd">
                                <td width="5%"><?php echo $i?></td>
                                <td><?php echo $rows[1]?><br><?php echo $rows[2]?><br><?php echo $rows[3]?><br><?php echo $rows[4]?><br></td>
                                <td width="5%" align="right">

                                        <?php
                                        $sql = "SELECT * FROM thesisadvisor where number";
                                        $result = mysqli_query($link,$sql);
                                        $row = mysqli_fetch_row($result);
                                        echo "<form name=\"form\" method=\"post\" action=\"thesisadvisorupdate.php\">";
                                        echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                        echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"修改\" />";
                                        echo "</form>";

                                        ?>

                                        <?php
                                        $sql = "SELECT * FROM thesisadvisor where number";
                                        $result = mysqli_query($link,$sql);
                                        $row = mysqli_fetch_row($result);
                                        echo "<form name=\"form\" method=\"post\" action=\"thesisadvisordelete_finish.php\">";
                                        echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                        echo "<input class='poi' type=\"submit\" name=\"button\" value=\"刪除\" />";
                                        echo "</form>";

                                        ?>



                                </td>
                            </tr>
                            <?php }?>
                            <tr>
                                <td width="5%">新增</td>
                                <td>
                                    <?php
                                    $sql = "SELECT * FROM thesisadvisor where number";
                                    $result = mysqli_query($link,$sql);
                                    $row = mysqli_fetch_row($result);
                                    echo "<form name=\"form\" method=\"post\" action=\"thesisadvisorregister_finish.php\">";
                                    //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                                    echo "學生姓名：<input type=\"text\" name=\"pw\" value=\"*\" /> <br>";
                                    echo "論文名稱<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                                    echo "英文論文名稱：<input type=\"text\" name=\"address\" value=\"*\"/> <br>";
                                    echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"確定\" />";
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
        <div id="menu2" class="tab-pane fade">
            <div id="content">
                <div class="post">

                    <h2 class="title">研討會論文／Conference Papers</h2>
                    <p></p>
                    <div class="entry">
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">

                            <?php
                            include("mysql_connect.inc.php");
                            mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                            mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                            $poi=mysqli_select_db("conferencepapers");//我要從member這個資料庫撈資料
                            mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                            $data=mysqli_query($link,"SELECT * FROM conferencepapers");//從member中選取全部(*)的資料

                            ?>
                            <div class="entry">
                                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                                    <?php
                                    for($i=1;$i<=mysqli_num_rows($data);$i++)
                                    { $rows=mysqli_fetch_row($data);
                                    ?>
                                    <tbody><tr class="odd">
                                        <td width="5%"><?php echo $i?></td>
                                        <td><?php echo $rows[1]?><br>
                                            <?php echo $rows[2]?><br>
                                            <?php echo $rows[3]?>,<?php echo $rows[4]?><br>
                                            <?php echo $rows[5]?><br>
                                        </td>
                                        <td width="5%" align="right">

                                                <?php
                                                $sql = "SELECT * FROM conferencepapers where number";
                                                $result = mysqli_query($link,$sql);
                                                $row = mysqli_fetch_row($result);
                                                echo "<form name=\"form\" method=\"post\" action=\"conferencepapersupdate.php\">";
                                                echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                                echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"修改\" />";
                                                echo "</form>";

                                                ?>

                                                <?php
                                                $sql = "SELECT * FROM conferencepapers where number";
                                                $result = mysqli_query($link,$sql);
                                                $row = mysqli_fetch_row($result);
                                                echo "<form name=\"form\" method=\"post\" action=\"conferencepapersdelete_finish.php\">";
                                                echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                                echo "<input class='poi' type=\"submit\" name=\"button\" value=\"刪除\" />";
                                                echo "</form>";

                                                ?>

                                        </td>

                                    </tr>
                                    <?php }?>
                                    <tr class="odd">
                                        <td width="5%">新增</td>
                                        <td>
                                            <?php
                                            $sql = "SELECT * FROM conferencepapers where number";
                                            $result = mysqli_query($link,$sql);
                                            $row = mysqli_fetch_row($result);
                                            echo "<form name=\"form\" method=\"post\" action=\"conferencepapersregister_finish.php\">";
                                            //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                                            echo "論文名稱：<input type=\"text\" name=\"pw\" value=\"*\" /> <br>";
                                            echo "備註：<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                                            echo "發表地點：<input type=\"text\" name=\"address\" value=\"*\" /> <br>";
                                            echo "時間：<input type=\"text\" name=\"other\" value=\"*\" /> <br>";
                                            echo "姓名：<input type=\"text\" name=\"other1\" value=\"*\" /> <br>";
                                            echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"確定\" />";
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

                    <h2 class="title">研究計畫／Research Grant</h2>
                    <p></p>
                    <div class="entry">
                        <?php
                        include("mysql_connect.inc.php");
                        mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                        mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                        $poi=mysqli_select_db("researchgrant");//我要從member這個資料庫撈資料
                        mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                        $data=mysqli_query($link,"SELECT * FROM researchgrant");//從member中選取全部(*)的資料

                        ?>
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                                <?php
                                for($i=1;$i<=mysqli_num_rows($data);$i++)
                                { $rows=mysqli_fetch_row($data);
                                ?>
                             <tbody><tr class="odd">
                                <td width="5%"><?php echo $i?></td>
                                <td><?php echo $rows[1]?>,<?php echo $rows[2]?>,<?php echo $rows[3]?>,<?php echo $rows[4]?>,<?php echo $rows[5]?>,<?php echo $rows[6]?></td>
                                 <td width="5%" align="right">

                                         <?php
                                         $sql = "SELECT * FROM researchgrant where number";
                                         $result = mysqli_query($link,$sql);
                                         $row = mysqli_fetch_row($result);
                                         echo "<form name=\"form\" method=\"post\" action=\"researchgrantupdate.php\">";
                                         echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                         echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"修改\" />";
                                         echo "</form>";

                                         ?>

                                         <?php
                                         $sql = "SELECT * FROM researchgrant where number";
                                         $result = mysqli_query($link,$sql);
                                         $row = mysqli_fetch_row($result);
                                         echo "<form name=\"form\" method=\"post\" action=\"researchgrantdelete_finish.php\">";
                                         echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                         echo "<input class='poi' type=\"submit\" name=\"button\" value=\"刪除\" />";
                                         echo "</form>";

                                         ?>



                                 </td>
                             </tr>
                             <?php }?>
                             <tr class="odd">
                                 <td width="5%">新增</td>
                                 <td>
                                     <?php
                                     $sql = "SELECT * FROM researchgrant where number";
                                     $result = mysqli_query($link,$sql);
                                     $row = mysqli_fetch_row($result);
                                     echo "<form name=\"form\" method=\"post\" action=\"researchgrantregister_finish.php\">";
                                     //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                                     echo "種類：<input type=\"text\" name=\"pw\" value=\"*\" /> <br>";
                                     echo "編碼：<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                                     echo "參與人員：<input type=\"text\" name=\"address\" value=\"*\" /> <br>";
                                     echo "研究處：<input type=\"text\" name=\"other\" value=\"*\" /> <br>";
                                     echo "計畫名稱：<input type=\"text\" name=\"other1\" value=\"*\" size='50' /> <br>";
                                     echo "時間：<input type=\"text\" name=\"time\" value=\"*\" /> <br>";
                                     echo "<input class='poi2' type=\"submit\" name=\"button\" value=\"確定\" />";
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