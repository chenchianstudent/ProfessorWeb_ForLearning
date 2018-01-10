


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>學術</title>
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
                <li class="active"><a href="control3.php">學術</a></li>
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
                                <td width="5%" align="right">
                                    <p>
                                        <?php
                                        $sql = "SELECT * FROM studentsproject01 where number";
                                        $result = mysqli_query($link,$sql);
                                        $row = mysqli_fetch_row($result);
                                        echo "<form name=\"form\" method=\"post\" action=\"studentprojectupdate.php\">";
                                        echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                        echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                                        echo "</form>";

                                        ?>
                                    </p>
                                    <p>
                                    <?php
                                    $sql = "SELECT * FROM studentsproject01 where number";
                                    $result = mysqli_query($link,$sql);
                                    $row = mysqli_fetch_row($result);
                                    echo "<form name=\"form\" method=\"post\" action=\"studentprojectdelete_finish.php\">";
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
                                    $sql = "SELECT * FROM studentsproject where number";
                                    $result = mysqli_query($link,$sql);
                                    $row = mysqli_fetch_row($result);
                                    echo "<form name=\"form\" method=\"post\" action=\"studentprojectregister_finish.php\">";
                                    //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                                    echo "計畫名稱：<input type=\"text\" name=\"pw\" value=\"*\" /> <br>";
                                    echo "學年度：<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                                    echo "教授名稱：<input type=\"text\" name=\"address\" value=\"*\" /> <br>";
                                    echo "學生姓名：<input type=\"text\" name=\"other\" value=\"*\" /> <br>";
                                    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
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
                                    <p>
                                        <?php
                                        $sql = "SELECT * FROM thesisadvisor where number";
                                        $result = mysqli_query($link,$sql);
                                        $row = mysqli_fetch_row($result);
                                        echo "<form name=\"form\" method=\"post\" action=\"thesisadvisorupdate.php\">";
                                        echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                        echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                                        echo "</form>";

                                        ?>
                                    </p>
                                    <p>
                                        <?php
                                        $sql = "SELECT * FROM thesisadvisor where number";
                                        $result = mysqli_query($link,$sql);
                                        $row = mysqli_fetch_row($result);
                                        echo "<form name=\"form\" method=\"post\" action=\"thesisadvisordelete_finish.php\">";
                                        echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                        echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                                        echo "</form>";

                                        ?>
                                    </p>


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
                                    echo "英文論文名稱：<input type=\"text\" name=\"address\" value=\"*\" /> <br>";
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
        <div id="menu2" class="tab-pane fade">
            <div id="content">
                <div class="post">

                    <h2 class="title">研討會論文／Conference Papers</h2>
                    <p></p>
                    <div class="entry">
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                            <tbody><tr class="odd">
                                <td width="5%">1</td>
                                <td>Learning Performance Evaluation in eLearning with The Web-based Assessment<br>8th iCatse Conference on Information Science and Applications 2017<br>Macau, China，2017.3.20 ~ 2017.3.23<br>C. Y. Yang、T. Y. Chung、黃明祥、Cheng-Yi Li、J. F. JF Yao</td>
                            </tr>
                            <tr>
                                <td width="5%">2</td>
                                <td>Cryptanalysis of Efficient Dynamic ID Based Remote User Authentication Scheme in Multi-server Environment Using Smart Card<br>12th International Conference on Computational Intelligence and Security<br>Wuxi, Jiangsu Province, China，2016.12.16 ~ 2016.12.19<br>H. T. Pan、Chiu-Shu Pan、S. C. Tsaur、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">3</td>
                                <td>Cryptanalysis of an efficient password authentication scheme<br>The 2016 3rd IEEE International Conference on Systems and Informatics (ICSAI 2016)<br>Shaihai，2016.11.19 ~ 2016.11.21<br>Chiu-Shu Pan、C. Yi Tsaa、S. C. Tsaur、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">4</td>
                                <td>An Improved Password Authentication Scheme for Smart Card<br>2016 International Conference on Intelligent and Interactive Systems and Applications (IISA2016)<br>China/Shaihai，2016.6.25 ~ 2016.6.26<br>蔡正一、潘秋淑、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">5</td>
                                <td>Cryptanalysis of an Efficient and Secure Smart Card Based Password Authentication Scheme," ,  2016.<br>2016 International Conference on Intelligent and Interactive Systems and Applications (IISA2016)<br>China/Shaihai，2016.6.25 ~ 2016.6.26<br>劉志偉、蔡正一、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">6</td>
                                <td>Cryptanalysis of Biswas's Multi-party Keys Scheme Based on the Diffie-Hellman Technique<br>International Conference on Advances in Mechanical Engineering and Industrial Informatics (AMEII 2015)<br>Zhengzhou，2015.4.11 ~ 2015.4.12，Cryptanalysis of Biswas's Multi-party Keys Scheme Based on the Diffie-Hellman Technique<br>潘憲岑、孫加榮、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">7</td>
                                <td>Cryptanalysis of Dynamic Identity Based on a Remote User Authentication Scheme for a Multi-server Environment<br>International Conference on Advances in Mechanical Engineering and Industrial Informatics (AMEII 2015)<br>Zhengzhou，2015.4.11 ~ 2015.4.12</td>
                            </tr>
                            <tr>
                                <td width="5%">8</td>
                                <td>Cryptanalysis and Improvement of Zhuang-Chang-Wang-Zhu Password Authentication Scheme<br>The 2nd Congress on Computer Science and Application (CCSA 2014)<br>China/Sanya，2014.12.12 ~ 2014.12.14<br>S. M. Chen、C. S. Pan、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">9</td>
                                <td>An Improved Timestamp-based User Authentication Scheme with Smart Card<br>The 2nd Congress on Computer Science and Application (CCSA 2014)<br>China/Sanya，2014.12.12 ~ 2014.12.14<br>T. H. Feng、C. H. Ling、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">10</td>
                                <td>A New Investigation Approach for Tracing Source IP in DDoS attack from Proxy Server<br>2014 International Computer Symposium (ICS 2014)<br>Taiwan，2014.12.12 ~ 2014.12.14<br>J. R. Sun、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">11</td>
                                <td>Cryptanalysis and Improvement of the Li-Liu-Wu User Authentication Scheme<br>2014 International Conference on Future Communication Technology and Engineering (FCTE2014)<br>China/Shenzhen，2014.11.16 ~ 2014.11.17<br>T. H. Feng、W. Y. Chao、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">12</td>
                                <td>Cryptanalysis and Improvement of a Directed Digital Signature Scheme Using Non-interactive Public-key Distribution System<br>2014 International Conference on Future Communication Technology and Engineering (FCTE2014)<br>China/Shenzhen，2014.11.16 ~ 2014.11.17<br>J. R. Sun、S. C. Lin、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">13</td>
                                <td>Weaknesses of the Yoon-Kim-Yoo Remote User Authentication Scheme Using Smart Cards<br>2014 IEEE Workshop on Electronics, Computer and Applications, IWECA 2014<br>Chongqing，2014.5.30 ~ 2014.5.31<br>Te-Yu Chen</td>
                            </tr>
                            <tr>
                                <td width="5%">14</td>
                                <td>SecureDropbox: A file encryption system suitable for cloud storage services<br>2013 ACM Cloud and Autonomic Computing Conference (CAC 2013)<br>USA/Miami，2013.8.5 ~ 2013.8.9<br>Min-Yu Chen、Chi-Wei Liu、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">15</td>
                                <td>An Efficient Authenticated Key Agreement Scheme without Using Smart Card<br>2nd International Symposium on Security and Information/Communication Technologies (SICT 2011)<br>Orlando, USA，2011.7.19 ~ 2011.7.22<br>、黃明祥、</td>
                            </tr>
                            <tr>
                                <td width="5%">16</td>
                                <td>An Advanced Password Authenticated Key Exchange Protocol for Imbalanced Wireless Networks<br>The 15th Mobile Computing Workshop (MC2010)<br>Taichung，2010.5.28<br>、黃明祥、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">17</td>
                                <td>Cryptanalysis of a Secure Dynamic ID Based Remote User Authentication Scheme for Multi-server Environment<br>the Fourth International Conference on Innovative Computing, Information and Control (ICICIC-2009)<br>Kaohsiung, Taiwan，2009.12.7 ~ 2009.12.9<br>、、黃明祥、</td>
                            </tr>
                            <tr>
                                <td width="5%">18</td>
                                <td>Reversible Secret Image Sharing Based on Shamir’s Scheme<br>The Fifth International Conference on Intelligent Information Hiding and Multimedia Signal Processing (IIHMSP2009)<br>MIELPARQUE, Kyoto, Japan，2009.9.12 ~ 2009.9.4<br>、、、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">19</td>
                                <td>Peers Assisted Authentication Protocol in P2P Networking Systems<br>第十九屆資訊安全會議(CISC 2009)<br>台灣科技大學，2009.6.3 ~ 2009.6.5<br>、、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">20</td>
                                <td>具安全性的多人浮水印系統<br>第十九屆資訊安全會議(CISC 2009)<br>台灣科技大學，2009.6.3 ~ 2009.6.5<br>吳佳駿、郭文中、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">21</td>
                                <td>A Verifiable Electronic Voting Scheme Over the Internet<br>2009 Sixth International Conference on Information Technology: New Generations (ITNG 2009)<br>Las Vegas, Nevada, USA，2009.4.27 ~ 2009.4.29<br>、黃明祥、</td>
                            </tr>
                            <tr>
                                <td width="5%">22</td>
                                <td>Improving the Security of Non-PKI Methods for Public<br>2009 Sixth International Conference on Information Technology: New Generations (ITNG 2009)<br>Las Vegas, Nevada, USA，2009.4.27 ~ 2009.4.29<br>、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">23</td>
                                <td>Flexible RFID Location System Based on Artificial Neural Networks for Medical Care Facilities<br>The 2nd Joint Workshop On High Confidence Medical Devices, Software, and Systems (HCMDSS 2009) and Medical Device Plug-and-Play (MD PnP 2009)<br>San Francisco, CA，2009.4.6<br>、、、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">24</td>
                                <td>Adaptive Authentication Schemes for 3D Mesh Models<br>2008 International Symposium on Intelligent Informatics (ISII2008)<br>Tokai University, Kumamoto, Japan，2008.12.12 ~ 2008.12.13<br>陳德祐、黃明祥、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">25</td>
                                <td>A Simple Method for Detecting Protein Spots in 2D-GE Images Using Image Contrast<br>2008 International Symposium on Intelligent Informatics (ISII2008)<br>Tokai University, Kumamoto, Japan，2008.12.12 ~ 2008.12.13<br>、邱淑芬、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">26</td>
                                <td>應用無線感測器於教學環境之研究 ─ 以國內某校資管系為例<br>2008全球運籌管理產業實務研討暨論文發表會<br>台南科技大學，2008.12.25 ~ 2008.12.25<br>黃明祥、黃湘珺、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">27</td>
                                <td>An Ordered Multi-Proxy Multi-Signature Scheme<br>The 8th International Conference on Intelligent Systems Design and Applications (ISDA 2008)<br>Kaohsiung, Taiwan，2008.9.26 ~ 2008.9.28<br>黃明祥、、邱淑芬</td>
                            </tr>
                            <tr>
                                <td width="5%">28</td>
                                <td>An Exchangeable E-Cash Scheme by E-mint<br>The 8th International Conference on Intelligent Systems Design and Applications (ISDA 2008)<br>Kaohsiung, Taiwan，2008.9.26 ~ 2008.9.28<br>、黃明祥、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">29</td>
                                <td>Enhance the image sharing with steganography and authentication<br>The Fourth International Conference on Intelligent Information Hiding and Multimedia Signal Processing (IIHMSP 2008)<br>Harbin, China，2008.8.15 ~ 2008.8.17<br>、、、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">30</td>
                                <td>An Improvement of Strong Proxy Signature and Its Applications<br>International Conference on Security and Cryptography (SECRYPT 2008)<br>Porto, Portugal，2008.7.26 ~ 2008.7.29<br>黃明祥、、邱淑芬</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">31</td>
                                <td>基於數位浮水印技術之數位內容與產權管理系統<br>2008第十四屆海峽兩岸資訊管理發展策略研討會<br>國立中央大學，2008.7.15 ~ 2008.7.16<br>黃明祥、曾雅筠、邱淑芬</td>
                            </tr>
                            <tr>
                                <td width="5%">32</td>
                                <td>A Robust-FragileWatermarking Scheme for Image Authentication<br>The Third International Conference on Innovative Computing, Information and Control (ICICIC 2008)<br>Dalian, China，2008.6.18 ~ 2008.6.20<br>吳佳駿、、、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">33</td>
                                <td>整合無線射頻辨識與生物辨識技術之身份識別系統<br>2008 RFID科技論文研討會<br>台北科技大學，2008.2.1 ~ 2008.2.1<br>李政毅、洪正杉、吳佳駿、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">34</td>
                                <td>A New Nonrepudiable Threshold Proxy Signature Scheme with Valid Delegation Period<br>International Conference on Computational Science and Its Applications (ICCSA 2007)<br>Kuala Lumpur, Malaysia，2007.8.26 ~ 2007.8.29<br>黃明祥、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">35</td>
                                <td>An Electronic Cash Scheme with Crime-Resistance<br>International Computer Symposium 2006 (ICS 2006)<br>Taipei, Taiwan，2006.12.4 ~ 2006.12.6<br>黃明祥、</td>
                            </tr>
                            <tr>
                                <td width="5%">36</td>
                                <td>Identity-based Deniable Authentication Protocol from Pairings<br>IASTED International Conference on Internet and Multimedia Systems and Applications (IMSA 2006)<br>Honolulu, USA，2006.8.14 ~ 2006.8.16<br>、李正吉、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">37</td>
                                <td>Security Enhancement for a Dynamic ID-based Remote User Authentication Scheme<br>International Conference on Next Generation Web Services Practices (NWeSP 2005)<br>Seoul, Korea，2005.8.23 ~ 2005.8.27<br>、、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">38</td>
                                <td>Digital Signature for Diffie-Hellman Public Keys Using Time Stamp<br>The 18th International Conference on Internet &amp; Multimedia Systems &amp; Applications (IMSA 2004)<br>Kauai, Hawaii, USA，2004.8.16 ~ 2004.8.18<br>李正吉、李麗華、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">39</td>
                                <td>具高安全性之電子投票機制<br>二○○四數位生活與網際網路科技研討會<br>成功大學，2004.6.24 ~ 2004.6.24<br>、、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">40</td>
                                <td>Extension to Self-Encryption Mechanism for Authentication of Roaming Services<br>2004第十四屆全國資訊安全會議<br>台灣科技大學，2004.6.10 ~ 2004.6.10<br>、黃明祥、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">41</td>
                                <td>Cryptanalysis of A User Friendly Remote Authentication Scheme with Smart Card<br>2004第十四屆全國資訊安全會議<br>台灣科技大學，2004.6.10 ~ 2004.6.10<br>、黃明祥、駱榮問、</td>
                            </tr>
                            <tr>
                                <td width="5%">42</td>
                                <td>應用於無線網路環境上之密碼金鑰認證交換協定<br>2004通信電子科技與應用研討會(CECA2004)<br>樹德科技大學，2004.3.28 ~ 2004.3.28<br>林淑真、林士強、林慧珊、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">43</td>
                                <td>On the Security of an Enhanced Authentication Key Exchange Protocol<br>The 18th International Conference on Advanced Information Networking and Applications (AINA2004)<br>Fukuoka, Japan，2004.3.29 ~ 2004.3.31<br>黃明祥、、、蔡垂雄</td>
                            </tr>
                            <tr>
                                <td width="5%">44</td>
                                <td>Study and Implementation of All IP-based AAA Security Infrastructure<br>2003網路與通訊技術發展與應用研討會<br>Taichung, Taiwan，2003.12.25 ~ 2003.12.25<br>楊朝成、黃明祥、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">45</td>
                                <td>行動電話小額付款機制整合零售業之研發<br>2003網路與通訊技術發展與應用研討會<br>Taichung, Taiwan，2003.12.25 ~ 2003.12.25<br>、、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">46</td>
                                <td>A Fast and Efficient Watermarking for Color Image<br>2003網路與通訊技術發展與應用研討會<br>Taichung, Taiwan，2003.12.25 ~ 2003.12.25<br>黃明祥、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">47</td>
                                <td>WAP就診預約掛號系統設計及實作<br>2003網路與通訊技術發展與應用研討會<br>Taichung, Taiwan，2003.12.25 ~ 2003.12.25<br>蕭舒尹、蘇建豪、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">48</td>
                                <td>成績查詢系統在WAP平台之服務與應用<br>2003網路與通訊技術發展與應用研討會<br>Taichung, Taiwan，2003.12.25 ~ 2003.12.25<br>何碧芳、吳男益、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">49</td>
                                <td>Enhanced of Key Agreement Protocol Resistant to a Denial-of-Service Attack<br>2003網路與通訊技術發展與應用研討會<br>Taichung, Taiwan，2003.12.25 ~ 2003.12.25<br>黃明祥、駱榮問、</td>
                            </tr>
                            <tr>
                                <td width="5%">50</td>
                                <td>New Authentication Method for Wireless Communications<br>2003網路與通訊技術發展與應用研討會<br>Taichung, Taiwan，2003.12.25 ~ 2003.12.25<br>黃明祥、駱榮問、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">51</td>
                                <td>隱藏式附加日期電子現金<br>2003年電子商務經營管理研討會<br>逢甲大學，2003.12.13 ~ 2003.12.13<br>張庭毅、謝東宏、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">52</td>
                                <td>Ma-Chen公開驗證鑑別加密法之攻擊<br>第九屆資訊管理暨實務研討會<br>大葉大學，2003.12.13 ~ 2003.12.13<br>蕭舒尹、林卿雅、林晶瑩、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">53</td>
                                <td>消費者對無線網路產品接受意願之研究<br>2003年第二屆管理新思維學術研討會<br>國立台灣科技大學，2003.11.7 ~ 2003.11.7<br>邱思齊、李健三、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">54</td>
                                <td>架構於迷袋系統之認證加密系統機制研究及實作開發<br>2003年產學合作產業電子化研討會<br>台北國際會議中心，2003.10.3 ~ 2003.10.3<br>黃明祥、曾祥峰、楊昱宸、陳建宏</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">55</td>
                                <td>用戶申裝ADSL滿意度之研究探討：以中華電信公司為例<br>第一屆流通與全球運籌論文研討會<br>國立台中技術學院，2003.10.31 ~ 2003.10.31<br>宋佩貞、黃麗錦、鄭國民、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">56</td>
                                <td>有效的雙向驗證電子投票協定之研究<br>2003年台灣網際網路研討會(TANET)<br>國立政治大學，2003.10.29 ~ 2003.10.31<br>曾祥峰、林晶瑩、林卿雅、趙雅雯、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">57</td>
                                <td>支援向量機應用於防止信用卡的盜刷<br>2003 資訊管理技術與實務應用發展專題研討會<br>新埔技術學院，2003.9.17 ~ 2003.9.17<br>何俊德、白上勤、陳榮靜、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">58</td>
                                <td>更具安全性的電子競標機制<br>2003 資訊管理技術與實務應用發展專題研討會<br>新埔技術學院，2003.9.17 ~ 2003.9.17<br>黃明祥、林志偉、李佳芬、郭靜怡</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">59</td>
                                <td>資料探勘於客服中心之應用與研究─以手機維修為例<br>2003 資訊管理技術與實務應用發展專題研討會<br>新埔技術學院，2003.9.17 ~ 2003.9.17<br>江茂綸、蔡君聖、洪宗良、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">60</td>
                                <td>A New Secure Generalization of Threshold Signature Scheme<br>IEEE International Conference on Information Technology: Research and Education (ITRE 2003)<br>Newark, New Jersey, USA，2003.8.11 ~ 2003.8.13<br>黃明祥、、蔡垂雄</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">61</td>
                                <td>Deniable Authentication Protocol Based on Elliptic Curve Cryptography<br>7th World Multiconference on Systemics, Cybernetics and Informatics (SCI 2003)<br>Orlando, Florida, USA，2003.7.27 ~ 2003.7.30<br>黃明祥、、</td>
                            </tr>
                            <tr>
                                <td width="5%">62</td>
                                <td>Security Enhancement for the Fingerprint-Based Remote User Authentication Scheme Using Smart Cards<br>International Conference on Computer, Communication and Control Technologies (CCCT '03)<br>Orlando, Florida, USA，2003.7.31 ~ 2003.8.2<br>、、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">63</td>
                                <td>線上軟體交易安全之研究<br>2003 產業電子化運籌管理學術暨實務研討會<br>逢甲大學，2003.7.12 ~ 2003.7.12<br>曾祥峰、林志偉、陳星百、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">64</td>
                                <td>校園無線區域網路使用現況暨提昇使用率之研究探討<br>2003年管理思維與實務學術研討會<br>銘傳大學，2003.6.14 ~ 2003.6.14<br>楊宗裕、王仁群、林淑真、薛夙珍、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">65</td>
                                <td>具彈性的樹狀金鑰管理系統<br>2003年資訊技術應用與發展研討會<br>國立屏東商業技術學院，2003.6.28 ~ 2003.6.28<br>黃明祥、楊政穎、劉家欣</td>
                            </tr>
                            <tr>
                                <td width="5%">66</td>
                                <td>使用者介面與軟硬體支援度對Linux的接受程度之影響<br>第二屆資訊與管理應用研討會<br>元培科學技術學院，2003.5.31 ~ 2003.5.31<br>劉曜彰、陳保孝、曾玉玓、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">67</td>
                                <td>首頁廣告型式吸引度之分析－以入口網站為例<br>第二屆資訊與管理應用研討會<br>元培科學技術學院，2003.5.31 ~ 2003.5.31<br>李季哲、陳俊宏、黃渝臻、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">68</td>
                                <td>電玩系所成立所帶來衝擊之探討<br>2003年產業管理創新研討會<br>修平技術學院，2003.5.16 ~ 2003.5.16<br>蔡宸玄、陳俊宇、蔡易呈、羅有隆、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">69</td>
                                <td>圖書館資訊系統的使用者滿意度之研究<br>2003年管理創新與新願景研討會<br>真理大學，2003.5.16 ~ 2003.5.15<br>劉後欣、林文慶、黃建榮、林芳昌、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">70</td>
                                <td>客戶服務中心員工生涯錨探討－以中華電信行動通信公司臺中營運處為例<br>2003年管理創新與新願景研討會<br>真理大學，2003.5.16 ~ 2003.5.16<br>謝正嘉、林合成、陳榮靜、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">71</td>
                                <td>透過動態資料探勘輔助教學決策<br>2003第七屆資訊管理學術暨警政資訊實務研討會<br>中央警察大學，2003.5.9 ~ 2003.5.9<br>廖虹雲、林怡君、劉瓊雙、楊朝成、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">72</td>
                                <td>系統版本更新之顧客滿意度相關因素研究<br>2003第七屆資訊管理學術暨警政資訊實務研討會<br>中央警察大學，2003.5.9 ~ 2003.5.9<br>賴美娟、林恆正、沈肇基、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">73</td>
                                <td>商用車裝載量及即時資訊下動態車輛路徑選擇問題之研究<br>第四屆管理學域學術研討會<br>朝陽科技大學，2003.5.6 ~ 2003.5.6<br>廖彩雲、周淑蓉、曾偉育、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">74</td>
                                <td>網路同步教學之使用意願調查<br>2003年全球化運籌管理學術研討會<br>國立高雄海洋技術學院，2003.5.16 ~ 2003.5.16<br>柳建良、洪志榮、陳靜婷、唐元亮、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">75</td>
                                <td>企業實施知識管理與競爭力提昇關連性之實例探討<br>2003年全球化運籌管理學術研討會<br>國立高雄海洋技術學院，2003.5.16 ~ 2003.5.16<br>沈肇基、李俊達、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">76</td>
                                <td>An MQV Key Agreement Protocol for Establishing (n2+1) Keys<br>第十三屆全國資訊安全會議，2003.5 ~ 2003.5<br>黃明祥、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">77</td>
                                <td>電子市集的發展現況與未來趨勢<br>第四屆電子化企業經營管理理論與實務研討會<br>大葉大學，2003.5.10 ~ 2003.5.10<br>陳星琳、李金鳳、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">78</td>
                                <td>協同設計與網路服務上的整合應用<br>第四屆電子化企業經營管理理論與實務研討會<br>大葉大學，2003.5.10 ~ 2003.5.10<br>陳宜惠、藍君琪、莊博允、呂瑞麟、廖彩雲、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">79</td>
                                <td>以節省廣告代理商托播成本為基礎，進行高效度網路廣告推薦之研究<br>第四屆網際網路應用與發展學術研討會<br>遠東技術學院，2003.5.9 ~ 2003.5.9<br>詹啟琳、吳志宏、黃如慧、李金鳳、李麗華、張簡尚偉、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">80</td>
                                <td>行動式顧客關係管理之研究—以電信業者為例<br>第四屆網際網路應用與發展學術研討會<br>遠東技術學院，2003.5.9 ~ 2003.5.9<br>謝依蓓、李政雄、沈肇基、薛夙珍、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">81</td>
                                <td>Exact Image Authentication Based on Intersecting Signature Blocks<br>The 14th International Conference on Information Management (ICIM 2003)<br>Chiayi, Taiwan，2003 ~ 2003<br>、黃明祥、</td>
                            </tr>
                            <tr>
                                <td width="5%">82</td>
                                <td>An Efficient MAKEP for Wireless Network<br>The 2002 International Computer Symposium，2002.12 ~ 2002.12<br>楊朝成、黃明祥、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">83</td>
                                <td>確保檔案資訊安全，拓展檔案資訊加值運用 - 子議題一：推動電子檔案管理機制<br>檔案管理策略研討會<br>行政院研考會，2002.8.29 ~ 2002.8.30<br>黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">84</td>
                                <td>確保檔案資訊安全，拓展檔案資訊加值運用 - 子議題二：建立檔案資訊安全機制<br>檔案管理策略研討會<br>行政院研考會，2002.8.29 ~ 2002.8.30<br>黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">85</td>
                                <td>確保檔案資訊安全，拓展檔案資訊加值運用 - 子議題三：提升檔案目錄及全文資訊檢索效能<br>檔案管理策略研討會<br>行政院研考會，2002.8.29 ~ 2002.8.30<br>黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">86</td>
                                <td>分散式智慧財產權管理系統之電子檔案儲存機制<br>第一屆數位典藏技術研討會, 中央研究院資訊科學研究所，2002.7.25 ~ 2002.7.26<br>黃明祥、李正吉、孫耀國、關華蓉、江岡旻、黎凡煒、陳志維</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">87</td>
                                <td>A New Authentication Scheme for Mobile IP Networks<br>2002 Symposium on Digital Life and Internet Technologies<br>Chen-Kung University，2002.6.27 ~ 2002.6.28<br>楊朝成、張庭毅、李建緯、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">88</td>
                                <td>網際網路安全交談系統<br>九十一年朝陽資訊管理實務專題研討會<br>朝陽科技大學資管系，2002.5.7 ~ 2002.5.11<br>黃明祥、何雪桃、李宗豪、林明玉、劉家欣、張瑞文</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">89</td>
                                <td>智慧型題庫發展系統<br>九十一年朝陽資訊管理實務專題研討會<br>朝陽科技大學資管系，2002.5.7 ~ 2002.5.11<br>黃明祥、劉信義、鄭懋樺、林家仁、蔡馥羽、黃曉玫</td>
                            </tr>
                            <tr>
                                <td width="5%">90</td>
                                <td>電子檔案儲存安全認證系統<br>九十一年朝陽資訊管理實務專題研討會<br>朝陽科技大學資管系，2002.5.7 ~ 2002.5.11<br>黃明祥、孫耀國、關華蓉、江岡旻、黎凡煒、陳志維</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">91</td>
                                <td>以下一代加密標準(AES)為基礎的網路書店<br>九十一年朝陽資訊管理實務專題研討會<br>朝陽科技大學資管系，2002.5.7 ~ 2002.5.11<br>黃明祥、盧怡真、陳惠君、陳曉婷、林慧瓊、賴美雯</td>
                            </tr>
                            <tr>
                                <td width="5%">92</td>
                                <td>整批驗證多重簽章錯誤偵測之研究<br>2002年第六屆資訊管理學術暨警政資訊實務研討會<br>中央警察大學，2002.5.10 ~ 2002.5.10<br>黃明祥、陳世明</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">93</td>
                                <td>A Nonrepudiable Threshold Multi-Proxy Multi-Signature Scheme with Shared Verification<br>Proceedings of National Information Security Conference 2002<br>Taichung，2002.5<br>、、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">94</td>
                                <td>二維檢查法之多層次資料庫<br>ｅ世紀的挑戰國際學術研討會<br>銘傳大學，2002.3.23 ~ 2002.3.23<br>黃明祥、陳曉萍</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">95</td>
                                <td>An Efficient Identification Scheme Based on the Elliptic Curve Discrete Logarithm Problem<br>International Conference on Advanced Communications Technology (ICACT 2002)<br>Korea，2002.2.6 ~ 2002.2.8<br>、、楊朝成、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">96</td>
                                <td>Detecting the Illegal Signature in Multiple Signatures<br>International Conference on Advanced Communications Technology (ICACT 2002)<br>Korea，2002.2.6 ~ 2002.2.8<br>黃明祥、李正吉、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">97</td>
                                <td>A New Image Authentication Scheme Based on One-Way Hash Functions<br>International Conference on Advanced Communications Technology (ICACT 2002)<br>Korea，2002.2.6 ~ 2002.2.8<br>、黃明祥、</td>
                            </tr>
                            <tr>
                                <td width="5%">98</td>
                                <td>Robust Image Authentication Based on Wavelet Transforms<br>The 8th CSIM Conference on Information Management Research and Practice (CSIM 2002)<br>Kaohsiung, Taiwan，2002 ~ 2002<br>、黃明祥、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">99</td>
                                <td>電子檔案認證與安全管理<br>數位時代檔案管理研討會<br>台北，2001.11.30 ~ 2001.11.30<br>黃明祥、林詠章、李正吉</td>
                            </tr>
                            <tr>
                                <td width="5%">100</td>
                                <td>An Improvement of Proxy Multi-Signature Scheme<br>Youth Forum in Computer Science and Engineering, YUFORIC’2001<br>Valencia, Spain，2001.9.29 ~ 2001.9.30<br>黃明祥、、林詠章</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">101</td>
                                <td>可驗證錯誤之批次簽章驗證法<br>2001年資訊管理學術暨實務研討會<br>桃園，2001.6.8 ~ 2001.6.8<br>黃明祥、賴彥池</td>
                            </tr>
                            <tr>
                                <td width="5%">102</td>
                                <td>以XML/EDI為基礎的安全性電子商務系統<br>九十年朝陽資訊管理實務專題研討會<br>Taichung，2001.5.9 ~ 2001.5.8<br>黃明祥、王威澤、張益峰、蕭雅齡、楊舒雯、白芳怡</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">103</td>
                                <td>ADSL網路之服務調訂技術及應用<br>2001 Annual Conference of the National Defense Integrated Logistics Support<br>Taipei，2001.5.28 ~ 2001.5.29<br>、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">104</td>
                                <td>Cryptanalysis of The Hwang-Shi Proxy Signature Scheme<br>Proceedings of National Information Security Conference 2001<br>Cheng-Kung University，2001.5<br>黃明祥、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">105</td>
                                <td>A Lightweight ATM Security Service Mechanism<br>Proceedings of National Information Security Conference 2001<br>Cheng-Kung University，2001.5<br>、黃明祥</td>
                            </tr>
                            <tr>
                                <td width="5%">106</td>
                                <td>電子影像完整性之偵測技術<br>第二屆管理學域學術研討會<br>Taichung，2001.5.8 ~ 2001.5.8<br>康元亮、蔡中瑋、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">107</td>
                                <td>An Authentication Scheme with Subscriber Anonymity in Personal Communication System<br>International Conference on Advanced Communications Technology (ICACT 2001)<br>Korea，2001.2.8 ~ 2001.2.10<br>黃明祥、、李正吉</td>
                            </tr>
                            <tr>
                                <td width="5%">108</td>
                                <td>以類神經網路為基礎之使用者認證系統<br>中華民國第八屆模糊理論及其應用會議<br>Taipe，2000.12.1 ~ 2000.12.2<br>、黃明祥、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">109</td>
                                <td>安全的行動代理程式傳輸協定(A Secure Mobile Agent Protocol)<br>Proceedings of the Fifth Symposium on Computer &amp; Communication Technology<br>Da Yeh University，2000.10<br>黃明祥、、</td>
                            </tr>
                            <tr>
                                <td width="5%">110</td>
                                <td>Security Enhancement for the 'Simple Authentication Key Agreement Algorithm<br>The 24th International Computer Software and Applications Conference (IEEE-COMPSAC00)<br>Taipei, Taiwan，2000.8 ~ 2000.8<br>林詠章、張真誠、黃明祥</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">111</td>
                                <td>Traffic Control in an ATM Network Using Distributed Key Techniques<br>Proceedings of National Information Security Conference 2000<br>Dong-Hwa University，2000.5<br>黃明祥、</td>
                            </tr>
                            <tr>
                                <td width="5%">112</td>
                                <td>An Authentication Scheme for Mobile Satellite Communication Systems<br>Proceedings of National Information Security Conference 2000<br>Dong-Hwa University，2000.5<br>黃明祥、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">113</td>
                                <td>社區網路系統<br>八十九年朝陽資訊管理實務專題研討會<br>台中，2000.5.9 ~ 2000.5.9<br>黃明祥、林妙琦、林廷隆、劉俞青、林淑麗、陳元泰</td>
                            </tr>
                            <tr>
                                <td width="5%">114</td>
                                <td>防火牆與電腦病毒防疫系統<br>八十九年朝陽資訊管理實務專題研討會<br>台中，2000.5.9 ~ 2000.5.9<br>黃明祥、姚吉峰、黃祥德、林律菁、吳忠傑、李華洋</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">115</td>
                                <td>An Efficient Authentication Protocol for GSM Networks<br>EuroComm'2000<br>Munich, Germany，2000.3 ~ 2000.3<br>黃明祥、、李正吉</td>
                            </tr>
                            <tr>
                                <td width="5%">116</td>
                                <td>A New Protocol Using Time-stamp for Mobile Network Authentication and Security<br>The 6th Mobile Computing Workshop<br>Providence University，2000.3.24<br>黃明祥、、</td>
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
                                     <p>
                                         <?php
                                         $sql = "SELECT * FROM researchgrant where number";
                                         $result = mysqli_query($link,$sql);
                                         $row = mysqli_fetch_row($result);
                                         echo "<form name=\"form\" method=\"post\" action=\"researchgrantupdate.php\">";
                                         echo "<input type='hidden' name=\"id\" value=\"$rows[0]\" />";
                                         echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                                         echo "</form>";

                                         ?>
                                     </p>
                                     <p>
                                         <?php
                                         $sql = "SELECT * FROM researchgrant where number";
                                         $result = mysqli_query($link,$sql);
                                         $row = mysqli_fetch_row($result);
                                         echo "<form name=\"form\" method=\"post\" action=\"researchgrantdelete_finish.php\">";
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
                                     $sql = "SELECT * FROM researchgrant where number";
                                     $result = mysqli_query($link,$sql);
                                     $row = mysqli_fetch_row($result);
                                     echo "<form name=\"form\" method=\"post\" action=\"researchgrantregister_finish.php\">";
                                     //echo "編號：<input type=\"text\" name=\"id\" value=\"*\" /><br>";
                                     echo "種類：<input type=\"text\" name=\"pw\" value=\"*\" /> <br>";
                                     echo "編碼：<input type=\"text\" name=\"telephone\" value=\"*\" /> <br>";
                                     echo "參與人員：<input type=\"text\" name=\"address\" value=\"*\" /> <br>";
                                     echo "研究處：<input type=\"text\" name=\"other\" value=\"*\" /> <br>";
                                     echo "計畫名稱：<input type=\"text\" name=\"other1\" value=\"*\" /> <br>";
                                     echo "時間：<input type=\"text\" name=\"time\" value=\"*\" /> <br>";
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