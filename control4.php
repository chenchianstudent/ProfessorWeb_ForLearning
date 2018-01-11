

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
                    <div class="entry">
                        <table cellpadding="0" cellspacing="0" class="tb_main">
                            <tbody><tr class="odd">
                                <td width="5%">1</td>
                                <td>The Capacity Analysis in the Secure Cooperative Communication System  ，International Journal of Network Security ,EI <br>J. S. Chen(Jong-Shin Chen)，C. Y. Yang(Cheng-Ying Yang)，黃明祥()<br>2017&nbsp;Nov，19(6):863-869</td>
                            </tr>
                            <tr>
                                <td width="5%">2</td>
                                <td>Digital Signature with Message Recovery Based on Factoring and Discrete Logarithm,” , vol. 62, no. 3, pp. 415-423, Sept. 2016.  ，IETE JOURNAL OF RESEARCH ,SCI <br>黃明祥()，S. M. Chen(Shih-Ming Chen)，Chi-Yu Liu(Chi-Yu Liu)<br>2017&nbsp;Sep，62(3):415-423</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">3</td>
                                <td>An Improved Dual Image-based Reversible Hiding Technique Using LSB Matching  ，International Journal of Network Security ,EI <br>Yu-Lun Wang(Yu-Lun Wang)，Jau-Ji Shen(Jau-Ji Shen)，黃明祥()<br>2017&nbsp;Sep，19(5):858-862</td>
                            </tr>
                            <tr>
                                <td width="5%">4</td>
                                <td>Development Of A Data Hiding Scheme Based On Combination Theory For Lowering The Visual Noise In Binary Images  ，DISPLAYS ,SCI <br>Nan-I Wu(Nan-I Wu)，黃明祥()<br>2017&nbsp;Sep，49(9):116-123</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">5</td>
                                <td>A Novel LSB Data Hiding Scheme with the Lowest Distortion,” , Volume: 65, Issue: 06, pages 371 – 378, Aug. 2017  ，IMAGING SCIENCE JOURNAL ,SCI <br>Nan-I Wu(Nan-I Wu)，黃明祥()<br>2017&nbsp;Aug，65(6):371-378</td>
                            </tr>
                            <tr>
                                <td width="5%">6</td>
                                <td>Password Authenticated Key Exchange and Protected Password Change Protocols  ，Symmetry-Basel ,SCI <br>T. Yi Chang(Ting-Yi Chang)，黃明祥()，C. C. Yang(Chou-Chen Yang)<br>2017&nbsp;Jul，9(8):1-12</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">7</td>
                                <td>An Improved Key-Management Scheme for Hierarchical Access Control  ，International Journal of Network Security ,EI <br>Wan-Yu Chao(Wan-Yu Chao)，C. Yi Tsai(Cheng-Yi Tsai)，黃明祥()<br>2017&nbsp;Jul，19(4):639-643</td>
                            </tr>
                            <tr>
                                <td width="5%">8</td>
                                <td>A Publicly Verifiable Authenticated Encryption Scheme Based on Factoring and Discrete Logarithms  ，International Journal of Network Security ,EI <br>C. Yi Tsai(Cheng-Yi Tsai)，Chi-Yu Liu(Chi-Yu Liu)，S. C. Tsaur(Shyh-Chang Tsaur)，黃明祥()<br>2017&nbsp;May，19(3):443-448</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">9</td>
                                <td>Achieving Dynamic Data Guarantee and Data Confidentiality of Public Auditing in Cloud Storage Service  ，JOURNAL OF CIRCUITS SYSTEMS AND COMPUTERS ,SCI <br>黃明祥()，T. H. Sun(Tsuei-Hung Sun)，C. C. Lee(Cheng-Chi Lee)<br>2017&nbsp;May，26(5):1-16</td>
                            </tr>
                            <tr>
                                <td width="5%">10</td>
                                <td>A Secure Privacy and Authentication Protocol for Passive RFID Tags  ，International Journal of Mobile Communications ,SSCI <br>Chia-Hui Wei(Chia-Hui Wei)，黃明祥()，Y. H. Chin(Augustin Yeh-Hao Chin)<br>2017&nbsp;Mar，15(3):266-277</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">11</td>
                                <td>A Secure and Efficient One-time Password Authentication Scheme for WSN  ，International Journal of Network Security ,EI <br>C. H. Ling(Chung-Huei Ling)，C. C. Lee(Cheng-Chi Lee)，C. C. Yang(Chou-Chen Yang)，黃明祥()<br>2017&nbsp;Mar，19(2):177-181</td>
                            </tr>
                            <tr>
                                <td width="5%">12</td>
                                <td>A New Lossless Embedding Techniques Based on HDWT  ，IETE TECHNICAL REVIEW ,SCI <br>Li C. Huang(Li-Chin Huang)，T. H. Feng(Tung-Huang Feng)，黃明祥()<br>2017&nbsp;Jan，37(1):40-48</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">13</td>
                                <td>Using a New Structure in Group Key Management for Pay-TV  ，International Journal of Network Security ,EI <br>S. M. Chen(Shih-Ming Chen)，C. R. Yang(Ching-Rong Yang)，黃明祥()<br>2017&nbsp;Jan，19(1):112-117</td>
                            </tr>
                            <tr>
                                <td width="5%">14</td>
                                <td>A Survey of Data Distortion Watermarking Relational Databases  ，International Journal of Network Security ,EI <br>Ming-Ru Xie(Ming-Ru Xie)，Chia-Chun Wu(Chia-Chun Wu)，Jau-Ji Shen(Jau-Ji Shen)，黃明祥()<br>2016&nbsp;Nov，18(6):1022-1033</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">15</td>
                                <td>A Survey of Attribute-based Access Control with User Revocation in Cloud Data Storage  ，International Journal of Network Security ,EI <br>Chi-Wei Liu(Chi-Wei Liu)，Wei-Fu Hsien(Wei-Fu Hsien)，C. C. Yang(Chou-Chen Yang)，黃明祥()<br>2016&nbsp;Sep，18(5):900-916</td>
                            </tr>
                            <tr>
                                <td width="5%">16</td>
                                <td>A Survey of Public Auditing for Shared Data Storage with User Revocation in Cloud Computing  ，International Journal of Network Security ,EI <br>Chi-Wei Liu(Chi-Wei Liu)，Wei-Fu Hsien(Wei-Fu Hsien)，C. C. Yang(Chou-Chen Yang)，黃明祥()<br>2016&nbsp;Jul，18(4):650-666</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">17</td>
                                <td>Cryptanalysis of Tseng-Wu Group Key Exchange Protocol  ，International Journal of Network Security ,EI <br>C. H. Ling(Chung-Huei Ling)，S. M. Chen(Shih-Ming Chen)，黃明祥()<br>2016&nbsp;May，18(3):590-593</td>
                            </tr>
                            <tr>
                                <td width="5%">18</td>
                                <td>A Double Circular Chain Intrusion Detection for Cloud Computing Based on AdjointVM Approach  ，International Journal of Network Security ,EI <br>C. H. Ling(Chung-Huei Ling)，Wei-Fu Hsien(Wei-Fu Hsien)，黃明祥()<br>2016&nbsp;Mar，18(2):397-400</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">19</td>
                                <td>A Survey of Public Auditing for Secure Data Storage in Cloud Computing  ，International Journal of Network Security ,EI <br>Wei-Fu Hsien(Wei-Fu Hsien)，Chou-Chen Ya(Chou-Chen Yang)，黃明祥()<br>2016&nbsp;Jan，18(1):133-142</td>
                            </tr>
                            <tr>
                                <td width="5%">20</td>
                                <td>The Moderately Hard DoS-resistant Authentication Protocol on Client Puzzles  ，INFORMATICA ,SCI <br>黃明祥()，S. K. Chong(Song-Kong Chong)，Hsia-Hung Ou(Hsia-Hung Ou)<br>2016&nbsp;Jan，27(1):1-18</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">21</td>
                                <td>Cases Study and Analysis of the Court Judgement of Cybercrimes in Taiwan  ，International Journal of Law Crime and Justice ,SSCI <br>Jia-Rong Sun(Jia-Rong Sun)，施茂林()，黃明祥()<br>2015&nbsp;Dec，43(4):412-423</td>
                            </tr>
                            <tr>
                                <td width="5%">22</td>
                                <td>A Safety Review on Fuzzy-based Relay Selection in Wireless Sensor Networks  ，International Journal of Network Security ,EI <br>馮棟煌(Tung-Huang Feng)，施能義(Neng-Yih Shih)，黃明祥()<br>2015&nbsp;Nov，17(6):712-721</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">23</td>
                                <td>A Survey of Digital Evidences Forensic and Cybercrime Investigation Procedure  ，International Journal of Network Security ,EI <br>孫加榮(Jia-Rong Sun)，施茂林()，黃明祥()<br>2015&nbsp;Sep，17(5):497-509</td>
                            </tr>
                            <tr>
                                <td width="5%">24</td>
                                <td>An Efficient Batch Verifying Scheme for Detecting Illegal Signatures  ，International Journal of Network Security ,EI <br>YanLi Ren(YanLi Ren)，S. Z Wang(Shuozhong Wang)，X. P.Zhang(Xinpeng Zhang)，黃明祥()<br>2015&nbsp;Jul，17(4):463-470</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">25</td>
                                <td>The Secure Transaction Protocol in NFC Card Emulation Mode  ，International Journal of Network Security ,EI <br>紀逸倫(Yi-Lun Chi)，C. H. Chen(Cheng Hao Chen)，I. C. Lin(Iuon-Chang Lin)，黃明祥()<br>2015&nbsp;Jul，17(4):431-438</td>
                            </tr>
                            <tr>
                                <td width="5%">26</td>
                                <td>An Efficient IC-Lock Self-Reader Data Security in Cloud Computing  ，Applied Mathematics &amp; Information Sciences ,SCI <br>黃明祥()，C. C. Lee(Cheng-Chi Lee)，P. S. Chung(Pei-Shan Chung)<br>2015&nbsp;Jul，9(4):2099-2106</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">27</td>
                                <td>An Efficient IC-Lock Self-Reader Data Security in Cloud Computing  ，Applied Mathematics &amp; Information Sciences ,SCI <br>黃明祥()，Cheng-Chi Le()，Pei-Shan Chu()<br>2015&nbsp;Jul，9(4):2099-2106</td>
                            </tr>
                            <tr>
                                <td width="5%">28</td>
                                <td>Security Analysis of an Enhanced Mobile Agent Device for RFID Privacy Protection  ，IETE TECHNICAL REVIEW ,SCI <br>Chia-Hui Wei(Chia-Hui Wei)，黃明祥()，Y, H. Chin(Augustin Yeh-hao Chin)<br>2015&nbsp;May，32(3):183-187</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">29</td>
                                <td>A False Data Report Filtering Scheme in Wireless Sensor Networks: A Survey  ，International Journal of Network Security ,EI <br>馮棟煌(Tung-Huang Feng)，Wei Teng Li(Wei Teng Li)，黃明祥()<br>2015&nbsp;May，17(3):229-236</td>
                            </tr>
                            <tr>
                                <td width="5%">30</td>
                                <td>Improvement on Timestamp-based User Authentication Scheme with Smart Card Lost Attack Resistance  ，International Journal of Network Security ,EI <br>H. Wijayanto(Heri Wijayanto)，黃明祥()<br>2015&nbsp;Mar，17(2):160-164</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">31</td>
                                <td>A New Investigation Approach for Tracing Source IP in DDoS attack from Proxy Server  ，Frontiers in Artificial Intelligence and Applications ,EI <br>Jia-Rong Sun(Jia-Rong Sun)，黃明祥()<br>2015&nbsp;Jan，274():850-857</td>
                            </tr>
                            <tr>
                                <td width="5%">32</td>
                                <td>Group Rekeying in Wireless Sensor Networks: A Survey  ，International Journal of Network Security ,EI <br>Wei Teng Li(Wei Teng Li)，C. H. Ling(Chung-Huei Ling)，黃明祥()<br>2014&nbsp;Nov，16(6):400-410</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">33</td>
                                <td>Group Rekeying in Wireless Sensor Networks: A Survey  ，International Journal of Network Security ,EI <br>Wei Teng Li(Wei Teng Li)，林宗輝()，黃明祥()<br>2014&nbsp;Nov，16(6):400-410</td>
                            </tr>
                            <tr>
                                <td width="5%">34</td>
                                <td>Distributed Detecting Node Replication Attacks in Wireless Sensor Networks: A Survey  ，International Journal of Network Security ,EI <br>Wei Teng Li(Wei Teng Li)，馮棟煌(Tung-Huang Feng)，黃明祥()<br>2014&nbsp;Sep，16(5):323-330</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">35</td>
                                <td>Data Error Locations Reported by Public Auditing in Cloud Storage Service  ，Automated Software Engineering ,SCI <br>黃明祥()，C. C. Lee(Cheng-Chi Lee)，T. H. Sun(Tsuei-Hung Sun)<br>2014&nbsp;Sep，21(3):373-390</td>
                            </tr>
                            <tr>
                                <td width="5%">36</td>
                                <td>Distributed Detecting Node Replication Attacks in Wireless Sensor Networks: A Survey  ，International Journal of Network Security ,EI <br>Wei Teng Li(Wei Teng Li)，T. H. Feng(Tung-Huang Feng)，黃明祥()<br>2014&nbsp;Sep，16(5):323-330</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">37</td>
                                <td>A New Public Key Encryption with Conjunctive Field Keyword Search Scheme  ，Information Technology and Control ,SCI <br>黃明祥()，S. T. Hsu(Shih-Ting Hsu)，C. C. Lee(Cheng-Chi Lee)<br>2014&nbsp;Sep，43(3):277-288</td>
                            </tr>
                            <tr>
                                <td width="5%">38</td>
                                <td>Cryptanalysis of Tan's Improvement on a Password Authentication Scheme for Multi-server Environments  ，International Journal of Network Security ,EI <br>T. H. Feng(Tung-Huang Feng)，C. H. Ling(Chung-Huei Ling)，黃明祥()<br>2014&nbsp;Jul，16(4):318-321</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">39</td>
                                <td>Cryptanalysis of Tan's Improvement on a Password Authentication Scheme for Multi-server Environments  ，International Journal of Network Security ,EI <br>T. H. Feng(Tung-Huang Feng)，C. H. Ling(Chung-Huei Ling)，黃明祥()<br>2014&nbsp;Jul，16(4):318-321</td>
                            </tr>
                            <tr>
                                <td width="5%">40</td>
                                <td>A Conference Key Distribution Scheme in Tree Hierarchies  ，BRIS Journal of Advances in Science &amp; Technology ,SCI <br>L. C. Huang(Li-Chin Huang)，黃明祥()，W. P. Yang(Wei-Pang Yang)<br>2014&nbsp;Jul，2(4):76-81</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">41</td>
                                <td>Weaknesses of the Yoon-Kim-Yoo Remote User Authentication Scheme Using Smart Cards  ，2014 IEEE Workshop on Electronics, Computer and Applications ,EI <br>Te-Yu Chen(Te-Yu Chen)，林宗輝(Chung-Huei Ling)，黃明祥()<br>2014&nbsp;May，():771-774</td>
                            </tr>
                            <tr>
                                <td width="5%">42</td>
                                <td>Security on Improvement of Modified Authenticated Key Agreement Protocol,” INFORMATION - An International Interdisciplinary Journal, vol. 17, no. 4, pp.1173-1178.  ，Information-An International Interdisciplinary Journal ,SCI <br>黃明祥()，Shu-Yin Hsia(Shu-Yin Hsia)，W. P. Yang(Wei-Pang Yang)<br>2014&nbsp;Apr，17(4):1173-1178</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">43</td>
                                <td>An Efficient MQV Key Agreement Scheme  ，International Journal of Network Security ,EI <br>Li-Chin Huan(Li-Chin Huang)，黃明祥()<br>2014&nbsp;Mar，16(2):157-160</td>
                            </tr>
                            <tr>
                                <td width="5%">44</td>
                                <td>An Efficient MQV Key Agreement Scheme  ，International Journal of Network Security ,EI <br>L. C. Huang(Li-Chin Huang)，黃明祥()<br>2014&nbsp;Mar，16(2):157-160</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">45</td>
                                <td>A Study of Attribute-based Proxy Re-encryption Scheme in Cloud Environments  ，International Journal of Network Security ,EI <br>P. S. Chung(Pei-Shan Chung)，Chi-Wei Liu(Chi-Wei Liu)，黃明祥()<br>2014&nbsp;Jan，16(1):1-13</td>
                            </tr>
                            <tr>
                                <td width="5%">46</td>
                                <td>Towards Secure and Efficient User Authentication Scheme Using Smart Card for Multi-Server Environments  ，JOURNAL OF SUPERCOMPUTING ,SCI <br>Te-Yu Chen(Te-Yu Chen)，C. C. Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Jinn-Ke Jan(Jinn-Ke Jan)<br>2013&nbsp;Nov，66(2):1008-1032</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">47</td>
                                <td>Privacy Protection Data Access Control  ，International Journal of Network Security ,EI <br>Min-Yu Chen(Min-Yu Chen)，C. C. Yang(Chou-Chen Yang)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Nov，15(6):411-419</td>
                            </tr>
                            <tr>
                                <td width="5%">48</td>
                                <td>An Authentication Scheme for the Global Mobility Network  ，Parallel Processing Letters ,EI <br>S. K. Chong(Song-Kong Chong)，C. C. Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Sep，23(4):1-10</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">49</td>
                                <td>Using Smart Card to Achieve a Single Sign‑on for Multiple Cloud Services  ，IETE TECHNICAL REVIEW ,SCI <br>黃明祥(Min-Shiang Hwang)，T. H. Sun(Tsuei?Hung Sun)<br>2013&nbsp;Sep，30(5):410-416</td>
                            </tr>
                            <tr>
                                <td width="5%">50</td>
                                <td>A Study of Conjunctive Keyword Searchable Schemes  ，International Journal of Network Security ,EI <br>C. C. Lee(Cheng-Chi Lee)，S. T. Hsu(Shih-Ting Hsu)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Sep，15(5):321-330</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">51</td>
                                <td>Double Delegation-based Authentication and Key Agreement Protocol for PCSs", , Volume 72, Issue 1, Page 437-446, 2013.  ，WIRELESS PERSONAL COMMUNICATIONS ,SCI <br>Hsia-Hung Ou(Hsia-Hung Ou)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Sep，72(1):437-446</td>
                            </tr>
                            <tr>
                                <td width="5%">52</td>
                                <td>An Efficient Reversible Data Hiding Scheme Based on SMVQ  ，IMAGING SCIENCE JOURNAL ,SCI <br>S. F. Chiou(Shu-Fen Chiou)，Yung-Chih Lu(Yung-Chih Lu)，I-En Liao(I-En Liao)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Jul，61(6):467-474</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">53</td>
                                <td>A Survey on Attribute-Based Encryption Schemes of Access Control in Cloud Environments  ，International Journal of Network Security ,EI <br>Pei-Shan Chu(Cheng-Chi Lee)，Pei-Shan Chu(Pei-Shan Chung)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Jul，15(4):231-240</td>
                            </tr>
                            <tr>
                                <td width="5%">54</td>
                                <td>A Simple Key Assignment for Access Control Based on Polynomial  ，ARABIAN JOURNAL FOR SCIENCE AND ENGINEERING ,SCI <br>Jung-Wen Lo(Jung-Wen Lo)，黃明祥(Min-Shiang Hwang)，C. H. Liu(Chia-Hsin Liu)<br>2013&nbsp;Jun，38(6):1397-1403</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">55</td>
                                <td>Reversible Data Hiding for Medical Images in Cloud Computing Environments Based on Chaotic Hénon Map  ，Journal of Electronic Science and Technology ,EI <br>L. C. Huang(Li-Chin Huang)，黃明祥(Min-Shiang Hwang)，Lin-Yu Tseng(Lin-Yu Tseng)<br>2013&nbsp;Jun，11(2):230-236</td>
                            </tr>
                            <tr>
                                <td width="5%">56</td>
                                <td>A New Proxy Signature Scheme for a Specified Group of Verifiers  ，INFORMATION SCIENCES ,SCI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)<br>2013&nbsp;Apr，227():102-115</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">57</td>
                                <td>A Reversible Data Hiding Method by Histogram Shifting in High Quality Medical Images  ，JOURNAL OF SYSTEMS AND SOFTWARE ,SCI <br>Li-Chin Huang(Li-Chin Huang)，Lin-Yu Tseng(Lin-Yu Tseng)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Mar，86(3):716-727</td>
                            </tr>
                            <tr>
                                <td width="5%">58</td>
                                <td>A Study of Public Key Encryption with Keyword Search  ，International Journal of Network Security ,EI <br>Shih-Ting Hsu(Shih-Ting Hsu)，Chou-Chen Yang(Chou-Chen Yang)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Mar，15(2):71-79</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">59</td>
                                <td>A n2+n MQV Key Agreement Protocol  ，International Arab Journal of Information Technology ,SCI <br>L. C Hwang(Li-Chin Hwang)，C. C. Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Mar，10(2):137-142</td>
                            </tr>
                            <tr>
                                <td width="5%">60</td>
                                <td>A Key Agreement for Large Group Using Bilinear Maps  ，Journal of Theoretical and Applied Information Technology ,EI <br>Tzu-Chun Lin(Tzu-Chun Lin)，Te-Yu Chen(Te-Yu Chen)，C. S. Gau(Chiun-Shiang Gau)，黃明祥()<br>2013&nbsp;Mar，49(2):871-878</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">61</td>
                                <td>A New Group Signature Scheme Based on RSA Assumption  ，Information Technology and Control ,SCI <br>C. C. Yang(Chou-Chen Yang)，T. Y. Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Jan，42(1):61-66</td>
                            </tr>
                            <tr>
                                <td width="5%">62</td>
                                <td>Reversible and high-capacity data hiding in high quality medical images  ，KSII Transactions on Internet and Information Systems ,SCI <br>L. C. Huang(Li-Chin Huang)，黃明祥(Min-Shiang Hwang)，Lin-Yu Tseng(Lin-Yu Tseng)<br>2013&nbsp;Jan，7(1):132-148</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">63</td>
                                <td>Guessing Attacks on Strong-Password Authentication Protocol  ，International Journal of Network Security ,EI <br>Cheng-Chi Lee(Cheng-Chi Lee)，Chia-Hsin Liu(Chia-Hsin Liu)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Jan，15(1):64-67</td>
                            </tr>
                            <tr>
                                <td width="5%">64</td>
                                <td>Improved on Date Attachable Electronic Cash  ，Applied Mechanics and Materials ,EI <br>Jung-Wen Lo(Jung-Wen Lo)，Hung-Miao Lu(Hung-Miao Lu)，Tsuei-Hung Sun(Tsuei-Hung Sun)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Jan，284():3444-3448</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">65</td>
                                <td>Two-party Authenticated Multiple-key Agreement Based on Elliptic Curve Discrete Logarithm Problem  ，International Journal of  Smart Home ,EI <br>Li-Chin Huan(Li-Chin Huang)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Jan，7(1):9-18</td>
                            </tr>
                            <tr>
                                <td width="5%">66</td>
                                <td>A Secure and Anonymous Electronic Voting Scheme Based on Key Exchange Protocol  ，International Journal of  Security and Its Applications ,EI <br>Chun-Ta Li(Chun-Ta Li)，黃明祥(Min-Shiang Hwang)<br>2013&nbsp;Jan，7(1):59-70</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">67</td>
                                <td>Cryptanalysis on an Improved Version of ElGamal-Like Public-Key Encryption Scheme for Encrypting Large Messages  ，INFORMATICA ,SCI <br>Ting-Yi Chan(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)，Wei-Pang Yan(Wei-Pang Yang)<br>2012&nbsp;Dec，23(4):537-562</td>
                            </tr>
                            <tr>
                                <td width="5%">68</td>
                                <td>The Study on Data Hiding in Medical Images  ，International Journal of Network Security ,EI <br>Li-Chin Huang,(Li-Chin Huang,)，Lin-Yu Tseng(Lin-Yu Tseng)，黃明祥(Min-Shiang Hwang)<br>2012&nbsp;Nov，14(6):301-309</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">69</td>
                                <td>A Simple and Secure Key Agreement Protocol to Integrate a Key Distribution Procedure into the DSS  ，International Journal of Advancements in Computing Technology ,EI <br>Shu-Fen Chiou(Shu-Fen Chiou)，黃明祥(Min-Shiang Hwang)，Song-Kong Chong(Song-Kong Chong)<br>2012&nbsp;Oct，4(19):529-535</td>
                            </tr>
                            <tr>
                                <td width="5%">70</td>
                                <td>Improvement of Convertible Authenticated Encryption Schemes and Its Multiple Recipients Version  ，International Journal of  Security and Its Applications ,EI <br>T. Y. Chang(Ting-Yi Chang)，C. C. Yang(Chou-Chen Yang)，黃明祥(Min-Shiang Hwang)<br>2012&nbsp;Oct，6(4):151-162</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">71</td>
                                <td>An Improved Authentication Protocol for Mobile Agent Device in RFID  ，International Journal of Mobile Communications ,SSCI <br>Chia-Hui Wei(Chia-Hui Wei)，黃明祥(Min-Shiang Hwang)，Augustin Yeh-Hao Chin(Augustin Yeh-Hao Chin)<br>2012&nbsp;Sep，10(5):508-520</td>
                            </tr>
                            <tr>
                                <td width="5%">72</td>
                                <td>Study of an Intrusion Detection System  ，Journal of Electronic Science and Technology ,EI <br>Li-Chin Huang(Li-Chin Huang)，黃明祥(Min-Shiang Hwang)<br>2012&nbsp;Sep，10(3):269-275</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">73</td>
                                <td>A Modified Ohta-Okamoto Digital Signature for Batch Verification and Its Multi-Signature Version  ，International Journal of Engineering and Industries (IJEI) ,EI <br>Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)，Wei-Pang Yang(Wei-Pang Yang)，Kuo-Cheng Tsou(Kuo-Cheng Tsou)<br>2012&nbsp;Sep，3(3):75-83</td>
                            </tr>
                            <tr>
                                <td width="5%">74</td>
                                <td>A Secure Image Authentication Scheme for Tamper Detection and Recovery  ，IMAGING SCIENCE JOURNAL ,SCI <br>Te-Yu Chen(Te-Yu Chen)，黃明祥(Min-Shiang Hwang)，Jinn-Ke Jan(Jinn-Ke Jan)<br>2012&nbsp;Aug，60(4):219-233</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">75</td>
                                <td>An Effective AKA Protocol for UMTS  ，International Journal of Mobile Communications ,SSCI <br>Hsia-Hung Ou(Hsia-Hung Ou)，Iuon-Chang Lin(Iuon-Chang Lin)，黃明祥(Min-Shiang Hwang)<br>2012&nbsp;Aug，10(4):427-448</td>
                            </tr>
                            <tr>
                                <td width="5%">76</td>
                                <td>A New Proxy Electronic Voting Scheme Based on Proxy Signatures  ，Lecture Notes in Electrical Engineering ,EI <br>Cheng-Chi Lee(Cheng-Chi Lee)，Te-Yu Chen(Te-Yu Chen)，Shu-Chen Lin(Shu-Chen Lin)，黃明祥(Min-Shiang Hwang)<br>2012&nbsp;Jun，164():3-12</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">77</td>
                                <td>An Improved re-authentication Scheme Using Tickets Based on EAP TLS Authentication Protocol for Wireless Local Area Networks  ，Lecture Notes in Information Technology ,EI <br>Chou-Chen Yang(Chou-Chen Yang)，Shin-Hao Lo(Shin-Hao Lo)，黃明祥(Min-Shiang Hwang)<br>2012&nbsp;May，19():80-85</td>
                            </tr>
                            <tr>
                                <td width="5%">78</td>
                                <td>Design and Implementation of a P2P-Based DRM System  ，Lecture Notes in Information Technology ,EI <br>Chou-Chen Yang(Chou-Chen Yang)，Huan-Chin Hsu(Huan-Chin Hsu)，黃明祥(Min-Shiang Hwang)<br>2012&nbsp;May，19():73-79</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">79</td>
                                <td>Security Enhancement of Chang-Lee Anonymous E-Voting Schem  ，International Journal of Smart Home ,EI <br>Chun-Ta Li(Chun-Ta Li)，黃明祥(Min-Shiang Hwang)<br>2012&nbsp;Apr，6(2):45-52</td>
                            </tr>
                            <tr>
                                <td width="5%">80</td>
                                <td>A Hierarchical Data Access and Key Management in Cloud Computing  ，ICIC Express Letters ,EI <br>Tsuei-Hung Sun(Tsuei-Hung Sun)，黃明祥(Min-Shiang Hwang)<br>2012&nbsp;Feb，6(2):569-574</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">81</td>
                                <td>A secure routing protocol with node selfishness resistance in MANETs  ，International Journal of Mobile Communications ,SSCI <br>Chun-Ta Li(Chun-Ta Li)，Chou-Chen Yang(Chou-Chen Yang)，黃明祥(Min-Shiang Hwang)<br>2012&nbsp;Jan，10(1):103-118</td>
                            </tr>
                            <tr>
                                <td width="5%">82</td>
                                <td>A High Quality Image Sharing with Steganography and Adaptive Authentication Scheme  ，JOURNAL OF SYSTEMS AND SOFTWARE ,SCI <br>吳佳駿(Chia-Chun Wu)，高勝助(Shang-Juh Kao)，黃明祥(Min-Shiang Hwang)<br>2011&nbsp;Oct，84(12):2196-2207</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">83</td>
                                <td>A Lightweight Anonymous Routing Protocol without Public Key En/Decryptions for Wireless Ad Hoc Networks  ，INFORMATION SCIENCES ,SCI <br>李俊達(Chun-Ta Li)，黃明祥(Min-Shiang Hwang)<br>2011&nbsp;Oct，181(23):5333-5347</td>
                            </tr>
                            <tr>
                                <td width="5%">84</td>
                                <td>User’s Intention to Utilize an E-learning System with an Informal Formative Assessment  ，2011 15th Global Chinese Conference on Computers in Education, GCCCE 2011 ,EI <br>Cheng-YingYang(Cheng-YingYang)，Ming Chun Chen(Ming Chun Chen)，黃明祥(Min-Shiang Hwang)，Cheng-Yi Li(Cheng-Yi Li)，Victor R.L. Shen(Victor R.L. Shen)<br>2011&nbsp;May，():1542-1546</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">85</td>
                                <td>On The Security Of Self-Certified Public Keys  ，International Journal of Information Security and Privacy ,Other <br>Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，I-En Liao(I-En Liao)<br>2011&nbsp;Apr，5(2):55-62</td>
                            </tr>
                            <tr>
                                <td width="5%">86</td>
                                <td>On the Security of an Enhanced UMTS Authentication and Key Agreement Protocol  ，European Transactions on Telecommunications ,EI <br>黃明祥(Min-Shiang Hwang)，歐俠宏(Hsia-Hung Ou)，鐘松剛(Song-Kong Chong)<br>2011&nbsp;Apr，22(3):99-112</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">87</td>
                                <td>Generalization of Proxy Signature Based on Factorization  ，International Journal of Innovative Computing Information and Control ,SCI <br>Cheng-Chi Lee(Cheng-Chi Lee)，Tzu-Chun Lin(Tzu-Chun Lin)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)，黃明祥(Min-Shiang Hwang)<br>2011&nbsp;Mar，7(3):1039-1054</td>
                            </tr>
                            <tr>
                                <td width="5%">88</td>
                                <td>A Mutual Authentication Protocol for RFID  ，IT Professional ,EI <br>魏家惠(Chia-Hui Wei)，黃明祥(Min-Shiang Hwang)，金陽和(Augustin Yeh-hao Chin)<br>2011&nbsp;Mar，13(2):20-24</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">89</td>
                                <td>A Batch Verification for Multiple Proxy Signature  ，Parallel Processing Letters ,EI <br>Shiang-Feng Tzeng(Shiang-Feng Tzeng)，Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)<br>2011&nbsp;Mar，21(1):77-84</td>
                            </tr>
                            <tr>
                                <td width="5%">90</td>
                                <td>An Authentication Protocol for Low-cost RFID Tags  ，International Journal of Mobile Communications ,SSCI <br>Chia-Hui Wei(Chia-Hui Wei)，黃明祥(Min-Shiang Hwang)，Augustin Yeh-Hao Chin(Augustin Yeh-Hao Chin)<br>2011&nbsp;Mar，9(2):208-223</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">91</td>
                                <td>User-Anonymous and Short-Term Conference Key Distribution System via Link-Layer Routing in Mobile Communications”, International Journal of Mobile Communications  ，International Journal of Mobile Communications ,SSCI <br>Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)<br>2011&nbsp;Mar，9(2):144-158</td>
                            </tr>
                            <tr>
                                <td width="5%">92</td>
                                <td>An Efficient Key Assignment Scheme for Access Control in a Large Leaf Class Hierarchy  ，INFORMATION SCIENCES ,SCI <br>Jung-Wen Lo(Jung-Wen Lo)，黃明祥(Min-Shiang Hwang)，Chia-Hsin Liu(Chia-Hsin Liu)<br>2011&nbsp;Feb，181(4):917-925</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">93</td>
                                <td>A capacity-enhanced reversible data hiding scheme based on SMVQ  ，IMAGING SCIENCE JOURNAL ,SCI <br>邱淑芬(Shu-Fen Chiou)，廖宜恩(I-En Liao)，黃明祥(Min-Shiang Hwang)<br>2011&nbsp;Feb，59(1):17-24</td>
                            </tr>
                            <tr>
                                <td width="5%">94</td>
                                <td>An Efficient Authentication Protocol for Mobile Communications  ，TELECOMMUNICATION SYSTEMS ,SCI <br>Cheng-Chi Lee(Cheng-Chi Lee)，I-En Liao(I-En Liao)，黃明祥(Min-Shiang Hwang)<br>2011&nbsp;Jan，46(1):31-41</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">95</td>
                                <td>A Communication-Efficient Three-Party Password Authenticated Key Exchange Protocol  ，INFORMATION SCIENCES ,SCI <br>Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)，Wei-Pang Yang(Wei-Pang Yang)<br>2011&nbsp;Jan，181(1):217-226</td>
                            </tr>
                            <tr>
                                <td width="5%">96</td>
                                <td>A Secure Image Authentication Scheme for Tamper Detection and Recovery”, accepted (May 10, 2011) in Imaging Science Journal.  ，IMAGING SCIENCE JOURNAL ,SCI <br>陳德佑(Te-Yu Chen)，黃明祥(Min-Shiang Hwang)，詹進科(Jinn-Ke Jan)<br>2011&nbsp;，():</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">97</td>
                                <td>An Advanced Password Authenticated Key Exchange Protocol for Imbalanced Wireless Networks”, Journal of Internet Technology  ，Journal of Internet Technology ,SCI <br>Jung-Wen Lo(Jung-Wen Lo)，Ji-Zhe Lee(Ji-Zhe Lee)，黃明祥(Min-Shiang Hwang)，Yen-Ping Chu(Yen-Ping Chu)<br>2010&nbsp;Dec，11(7):997-1004</td>
                            </tr>
                            <tr>
                                <td width="5%">98</td>
                                <td>A Batch Verifying and Detecting the Illegal Signatures  ，International Journal of Innovative Computing Information and Control ,SCI <br>Chun-Ta Li(Chun-Ta Li)，黃明祥(Min-Shiang Hwang)，Shih-Ming Chen(Shih-Ming Chen)<br>2010&nbsp;Dec，6(12):5311-5320</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">99</td>
                                <td>A Secure and Efficient ECC-based AKA Protocol for Wireless Mobile Communications  ，International Journal of Innovative Computing Information and Control ,SCI <br>Jung-Wen Lo(Jung-Wen Lo)，Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Yen-Ping Chu(Yen-Ping Chu)<br>2010&nbsp;Nov，6(11):5249-5258</td>
                            </tr>
                            <tr>
                                <td width="5%">100</td>
                                <td>An Online Biometrics-based Secret Sharing Scheme for Multiparty Cryptosystem Using Smart Cards  ，International Journal of Innovative Computing Information and Control ,SCI <br>Chun-Ta Li(Chun-Ta Li)，黃明祥(Min-Shiang Hwang)<br>2010&nbsp;May，6(5):2181-2188</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">101</td>
                                <td>A provable billing protocol on the current UMTS  ，WIRELESS PERSONAL COMMUNICATIONS ,SCI <br>Hsia-Hung Ou(Hsia-Hung Ou)，黃明祥(Min-Shiang Hwang)，Jinn-Ke Jan(Jinn-Ke Jan)<br>2010&nbsp;Apr，55(4):551-556</td>
                            </tr>
                            <tr>
                                <td width="5%">102</td>
                                <td>A Key Agreement Scheme for Satellite Communications  ，INFORMATION TECHNOLOGY AND CONTROL ,SCI <br>Cheng-Chi Lee(Cheng-Chi Lee)，Tzu-Chun Lin(Tzu-Chun Lin)，黃明祥(Min-Shiang Hwang)<br>2010&nbsp;Mar，39(1):43-47</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">103</td>
                                <td>A Parallel Password-Authenticated Key Exchange Protocol for Wireless Environments  ，INFORMATION TECHNOLOGY AND CONTROL ,SCI <br>Jung-Wen Lo(Jung-Wen Lo)，Shu-Chen Lin(Shu-Chen Lin)，黃明祥(Min-Shiang Hwang)<br>2010&nbsp;Feb，39(2):146-151</td>
                            </tr>
                            <tr>
                                <td width="5%">104</td>
                                <td>A Cocktail Protocol with the Authentication and Key Agreement on the UMTS  ，JOURNAL OF SYSTEMS AND SOFTWARE ,SCI <br>Hsia-Hung Ou(Hsia-Hung Ou)，黃明祥(Min-Shiang Hwang)，Jinn-Ke Jan(Jinn-Ke Jan)<br>2010&nbsp;Feb，83(2):316-325</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">105</td>
                                <td>A New Group Signature Scheme Based on the Discrete Logarithm  ，Journal of Information Assurance and Security ,Other <br>李正吉(Cheng-Chi Lee)，Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)<br>2010&nbsp;Feb，5(1):54-57</td>
                            </tr>
                            <tr>
                                <td width="5%">106</td>
                                <td>DoS-resistant ID-based Password Authentication Scheme Using Smart Cards  ，JOURNAL OF SYSTEMS AND SOFTWARE ,SCI <br>黃明祥(Min-Shiang Hwang)，Song-Kong Chong(Song-Kong Chong)，Te-Yu Chen(Te-Yu Chen)<br>2010&nbsp;Jan，83():163-172</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">107</td>
                                <td>An Efficient Biometrics-based Remote User Authentication Scheme Using Smart Cards  ，JOURNAL OF NETWORK AND COMPUTER APPLICATIONS ,SCI <br>Chun-Ta Li(Chun-Ta Li)，黃明祥(Min-Shiang Hwang)<br>2010&nbsp;，33():1-5</td>
                            </tr>
                            <tr>
                                <td width="5%">108</td>
                                <td>A Simple Method for Detecting Protein Spots in 2D-GE Images Using Image Contrast  ，International Journal of Innovative Computing Information and Control ,SCI <br>Meng-Hsiun Tsai(Meng-Hsiun Tsai)，Shu-Fen Chiou(Shu-Fen Chiou)，黃明祥(Min-Shiang Hwang)<br>2009&nbsp;Dec，5(12):4617-4626</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">109</td>
                                <td>Adaptive Authentication Schemes for 3D Mesh Models  ，International Journal of Innovative Computing Information and Control ,SCI <br>Te-Yu Chen(Te-Yu Chen)，黃明祥(Min-Shiang Hwang)，Jinn-Ke Jan(Jinn-Ke Jan)<br>2009&nbsp;Dec，5(12):4561-4572</td>
                            </tr>
                            <tr>
                                <td width="5%">110</td>
                                <td>A New English Auction Scheme Using The Bulletin Board System  ，Information Management and Computer Security ,EI <br>李正吉(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Chih-Wei Lin(Chih-Wei Lin)<br>2009&nbsp;Nov，17(5):408-417</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">111</td>
                                <td>Privacy and Security Requirements for RFID Applications  ，Journal of Computers ,EI <br>黃明祥(Min-Shiang Hwang)，Chia-Hui Wei(Chia-Hui Wei)，Cheng-Yee Lee(Cheng-Yee Lee)<br>2009&nbsp;Oct，20(3):55-60</td>
                            </tr>
                            <tr>
                                <td width="5%">112</td>
                                <td>A Non-repudiable Multi-Proxy Multi-Signature Scheme  ，ICIC Express Letters ,EI <br>黃明祥(Min-Shiang Hwang)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)，Shu-Fen Chiou(Shu-Fen Chiou)<br>2009&nbsp;Sep，3(3):259-264</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">113</td>
                                <td>An Efficient Sensor-to-Sensor Authenticated Path-Key Establishment Scheme for Secure Communications in Wireless Sensor Networks  ，International Journal of Innovative Computing Information and Control ,SCI <br>C.T. Li(C.T. Li)，黃明祥(Min-Shiang Hwang)，Y.P. Chu(Y.P. Chu)<br>2009&nbsp;Aug，5(8):2107-2124</td>
                            </tr>
                            <tr>
                                <td width="5%">114</td>
                                <td>A Secure E-Auction Scheme Based on Group Signatures  ，INFORMATION SYSTEMS FRONTIERS ,SCI <br>李正吉(Cheng-Chi Lee)，Pi-Fang Ho(Pi-Fang Ho)，黃明祥(Min-Shiang Hwang)<br>2009&nbsp;Jul，11(3):335-343</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">115</td>
                                <td>TK-AKA: Using Temporary Key on Authentication and Key Agreement Protocol on UMTS  ，International Journal of Network Management ,EI <br>Hsia-Hung Ou(Hsia-Hung Ou)，Iuon-Chang Lin(Iuon-Chang Lin)，黃明祥(Min-Shiang Hwang)，Jinn-Ke Jan(Jinn-Ke Jan)<br>2009&nbsp;Jul，19(4):291-303</td>
                            </tr>
                            <tr>
                                <td width="5%">116</td>
                                <td>A New Approach to the Secret Image Sharing with Steganography and Authentication  ，IMAGING SCIENCE JOURNAL ,SCI <br>Chia-Chun Wu(Chia-Chun Wu)，黃明祥(Min-Shiang Hwang)，Shang-Juh Kao(Shang-Juh Kao)<br>2009&nbsp;Jun，57(3):140-151</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">117</td>
                                <td>A Progressive Image Transmission Method for 2D-GE Image Based on Context Feature with Different Thresholds  ，International Journal of Innovative Computing Information and Control ,SCI <br>Meng-Hsiun Tsai(Meng-Hsiun Tsai)，Shu-Fen Chiou(Shu-Fen Chiou)，黃明祥(Min-Shiang Hwang)<br>2009&nbsp;Feb，5(2):379-386</td>
                            </tr>
                            <tr>
                                <td width="5%">118</td>
                                <td>A Fair Non-transfer Exchange Protocol  ，International Journal of Electrical and Computer Engineering ,Other <br>李正吉(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Shu-Yin Hsiao(Shu-Yin Hsiao)<br>2009&nbsp;，4(14):879-885</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">119</td>
                                <td>An Extended Certificate-based Authentication and Security Protocol for Mobile Networks  ，INFORMATION TECHNOLOGY AND CONTROL ,SCI <br>李正吉(Cheng-Chi Lee)，I-En Liao(I-En Liao)，黃明祥(Min-Shiang Hwang)<br>2009&nbsp;，38(1):61-66</td>
                            </tr>
                            <tr>
                                <td width="5%">120</td>
                                <td>Identifying Attributes and Insecurity of A Public-channel Key Exchange Protocol Using Chaos Synchronization  ，CHAOS SOLITONS &amp; FRACTALS ,SCI <br>Song Han(Song Han)，Elizabeth Chang(Elizabeth Chang)，Tharam Dillon(Tharam Dillon)，黃明祥(Min-Shiang Hwang)，李正吉(Cheng-Chi Lee)<br>2009&nbsp;，40(5):2569-2575</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">121</td>
                                <td>A New Knapsack Public-Key Cryptosystem Based on Permutation Combination Algorithm  ，International Journal of Applied Mathematics and Computer Sciences ,Other <br>黃明祥(Min-Shiang Hwang)，李正吉(Cheng-Chi Lee)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)<br>2009&nbsp;，5(1):33-38</td>
                            </tr>
                            <tr>
                                <td width="5%">122</td>
                                <td>The UMTS-AKA Protocols for Intelligent Transportation Systems  ，EURASIP Journal on Wireless Communications and Networking ,SCI <br>Hsia-Hung Ou(Hsia-Hung Ou)，黃明祥(Min-Shiang Hwang)，Jinn-Ke Jan(Jinn-Ke Jan)<br>2009&nbsp;，2009():1-12</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">123</td>
                                <td>A New Convertible Authenticated Encryption Scheme Based on the ElGamal Cryptosystem  ，INTERNATIONAL JOURNAL OF FOUNDATIONS OF COMPUTER SCIENCE ,SCI <br>李正吉(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)<br>2009&nbsp;，20(2):351-359</td>
                            </tr>
                            <tr>
                                <td width="5%">124</td>
                                <td>Further Improvement on A Novel Privacy Preserving Authentication and Access Control Scheme for Pervasive Computing Environments  ，COMPUTER COMMUNICATIONS ,SCI <br>李俊達(Chun-Ta Li)，黃明祥(Min-Shiang Hwang)，朱延平(Yen-Ping Chu)<br>2008&nbsp;Dec，31(18):4255-4258</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">125</td>
                                <td>A Secure and Efficient Communication Scheme with Authenticated Key Establishment and Privacy Preserving for Vehicular Ad Hoc Networks  ，COMPUTER COMMUNICATIONS ,SCI <br>Chun-Ta Li(Chun-Ta Li)，黃明祥(Min-Shiang Hwang)，Yen-Ping Chu(Yen-Ping Chu)<br>2008&nbsp;Jul，31(12):2803-2814</td>
                            </tr>
                            <tr>
                                <td width="5%">126</td>
                                <td>An Electronic Voting Protocol with Deniable Authentication for Mobile Ad Hoc Networks  ，COMPUTER COMMUNICATIONS ,SCI <br>Chun-Ta Li(Chun-Ta Li)，黃明祥(Min-Shiang Hwang)，Chi-Yu Liu(Chi-Yu Liu)<br>2008&nbsp;Jun，31(10):2534-2540</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">127</td>
                                <td>Improving the Security of a Secure Anonymous Routing Protocol with Authenticated Key Exchange for Ad Hoc Networks  ，COMPUTER SYSTEMS SCIENCE AND ENGINEERING ,SCI <br>Chun-Ta Li(Chun-Ta Li)，黃明祥(Min-Shiang Hwang)，Yen-Ping Chu(Yen-Ping Chu)<br>2008&nbsp;May，23(3):227-234</td>
                            </tr>
                            <tr>
                                <td width="5%">128</td>
                                <td>A New Authentication Protocol Based on Pointer Forwarding for Mobile Communications  ，WIRELESS COMMUNICATIONS &amp; MOBILE COMPUTING ,SCI <br>李正吉(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，I-En Liao(I-En Liao)<br>2008&nbsp;May，8(5):661-672</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">129</td>
                                <td>An Improved Address Ownership in Mobile IPv6  ，COMPUTER COMMUNICATIONS ,SCI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Song-Kong Chong(Song-Kong Chong)<br>2008&nbsp;，31():3250-3256</td>
                            </tr>
                            <tr>
                                <td width="5%">130</td>
                                <td>A Key Management for Wireless Communications  ，Journal of Innovative Computing, Information and Control (IJICIC) ,Other <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Song-Kong Chong(Song-Kong Chong)，Jung-Wen Lo(Jung-Wen Lo)<br>2008&nbsp;，4(8):2045-2056</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">131</td>
                                <td>A High Quality Steganographic Method with Pixel-value Differencing and Modulus Function  ，JOURNAL OF SYSTEMS AND SOFTWARE ,SCI <br>Chung-Ming Wang(Chung-Ming Wang)，Nan-I Wu(Nan-I Wu)，Chwei-Shyong Tsai(Chwei-Shyong Tsai)，黃明祥(Min-Shiang Hwang)<br>2008&nbsp;，81(1):150-158</td>
                            </tr>
                            <tr>
                                <td width="5%">132</td>
                                <td>A Certificate-based Watermarking Scheme for Coloured Images  ，IMAGING SCIENCE JOURNAL ,SCI <br>Nan-I Wu(Nan-I Wu)，Chung-Ming Wang(Chung-Ming Wang)，Chwei-Shyong Tsai(Chwei-Shyong Tsai)，黃明祥(Min-Shiang Hwang)<br>2008&nbsp;，56():326-332</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">133</td>
                                <td>A Simple Mobile Communication Billing System Among Charged Parties  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>Hsia-Hung Ou(Hsia-Hung Ou)，黃明祥(Min-Shiang Hwang)，Jinn-Ke Jan(Jinn-Ke Jan)<br>2007&nbsp;Sep，192(2):487-495</td>
                            </tr>
                            <tr>
                                <td width="5%">134</td>
                                <td>An Efficient Multi-Round Anonymous Auction Protocol  ，Journal of Discrete Mathematical Sciences &amp; Cryptography ,Other <br>Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Chih-Wei Lin(Chih-Wei Lin)<br>2007&nbsp;Aug，10(4):547-557</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">135</td>
                                <td>A Key Authentication Scheme With Non-repudiation  ，Operating Systems Review (ACM) ,EI <br>黃明祥(Min-Shiang Hwang)，Li-Hua Li(Li-Hua Li)，Cheng-Chi Lee(Cheng-Chi Lee)<br>2007&nbsp;Jul，38(3):75-78</td>
                            </tr>
                            <tr>
                                <td width="5%">136</td>
                                <td>A New Convertible Authenticated Encryption Scheme with Message Linkages  ，COMPUTERS &amp; ELECTRICAL ENGINEERING ,SCI <br>Shiang-Feng Tzeng(Shiang-Feng Tzeng)，Yuan-Liang Tang(Yuan-Liang Tang)，黃明祥(Min-Shiang Hwang)<br>2007&nbsp;Mar，33(2):133-138</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">137</td>
                                <td>Data Hiding: Current Status and Key Issues  ，International Journal of Network Security ,Other <br>Nan-I Wu(Nan-I Wu)，黃明祥(Min-Shiang Hwang)<br>2007&nbsp;，4(1):1-9</td>
                            </tr>
                            <tr>
                                <td width="5%">138</td>
                                <td>Security Enhancement on A New Authentication Scheme with Anonymity for Wireless Environments  ，IEEE TRANSACTIONS ON INDUSTRIAL ELECTRONICS ,SCI <br>李正吉(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，I-En Liao(I-En Liao)<br>2006&nbsp;Oct，53(5):1683-1687</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">139</td>
                                <td>Password Authentication Schemes: Current Status and Key Issues  ，International Journal of Network Security ,Other <br>Chwei-Shyong Tsai(Chwei-Shyong Tsai)，Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)<br>2006&nbsp;Sep，3(2):101-115</td>
                            </tr>
                            <tr>
                                <td width="5%">140</td>
                                <td>A Study of Micro-payment Based on One-way Hash Chain  ，International Journal of Network Security ,Other <br>黃明祥(Min-Shiang Hwang)，Pei-Chen Sung(Pei-Chen Sung)<br>2006&nbsp;，2(2):81-90</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">141</td>
                                <td>Cryptanalysis and Improvement on Batch Verifying Multiple RSA Digital Signatures  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>Feng Bao(Feng Bao)，Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)<br>2006&nbsp;，172(2):1195-1200</td>
                            </tr>
                            <tr>
                                <td width="5%">142</td>
                                <td>Low-Cost RFID Authentication Protocol for Anti-Counterfeiting and Privacy Protection  ，Asian Journal of Health and Information Sciences ,Other <br>Yung-Chin Chen(Yung-Chin Chen)，Wei-Lin Wang(Wei-Lin Wang)，黃明祥(Min-Shiang Hwang)<br>2006&nbsp;，1(2):189-203</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">143</td>
                                <td>Improvement of Authenticated Encryption Schemes with Message Linkages for Message Flows  ，IEICE TRANSACTIONS ON INFORMATION AND SYSTEMS ,SCI <br>黃明祥(Min-Shiang Hwang)，Jung-Wen Lo(Jung-Wen Lo)，Shu-Yin Hsiao(Shu-Yin Hsiao)<br>2006&nbsp;，E89-D(4):1575-1577</td>
                            </tr>
                            <tr>
                                <td width="5%">144</td>
                                <td>Threshold Signatures: Current Status and Key Issues  ，International Journal of Network Security ,Other <br>黃明祥(Min-Shiang Hwang)，Ting-Yi Chang(Ting-Yi Chang)<br>2005&nbsp;Nov，1(3):123-137</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">145</td>
                                <td>Image Steganographic Scheme Based on Pixel-Value Differencing and LSB Replacement Methods  ，IEE PROCEEDINGS-VISION IMAGE AND SIGNAL PROCESSING ,SCI <br><br>2005&nbsp;Oct，152(5):611-615</td>
                            </tr>
                            <tr>
                                <td width="5%">146</td>
                                <td>A User Authentication System Using Back-Propagation Network  ，NEURAL COMPUTING &amp; APPLICATIONS ,SCI <br>林詠章()，Hsia-Hung Ou(Hsia-Hung Ou)，黃明祥(Min-Shiang Hwang)<br>2005&nbsp;Sep，14(3):243-249</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">147</td>
                                <td>Authenticated Encryption Schemes: Current Status and Key Issues  ，International Journal of Network Security ,Other <br>黃明祥(Min-Shiang Hwang)，Chi-Yu Liu(Chi-Yu Liu)<br>2005&nbsp;Sep，1(2):61-73</td>
                            </tr>
                            <tr>
                                <td width="5%">148</td>
                                <td>A New Blind Signature Based on the Discrete Logarithm Problem for Untraceability  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Wei-Pang Yang(Wei-Pang Yang)<br>2005&nbsp;May，164(3):837-841</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">149</td>
                                <td>A Secure On-line Software Transaction Scheme  ，COMPUTER STANDARDS &amp; INTERFACES ,SCI <br>Shiang-Feng Tzeng(Shiang-Feng Tzeng)，黃明祥(Min-Shiang Hwang)，Hsing-Bai Chen(Hsing-Bai Chen)<br>2005&nbsp;Mar，27(3):303-312</td>
                            </tr>
                            <tr>
                                <td width="5%">150</td>
                                <td>A New Proxy Signature Scheme with Revocation  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>Eric Jui-Lin Lu(Eric Jui-Lin Lu)，黃明祥(Min-Shiang Hwang)，Cheng-Jian Huang(Cheng-Jian Huang)<br>2005&nbsp;Feb，161(3):799-806</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">151</td>
                                <td>Improvement of Signature Scheme Based on Factoring and Discrete Logarithms  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>Li-Hua Li(Li-Hua Li)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)，黃明祥(Min-Shiang Hwang)<br>2005&nbsp;Feb，161(1):49-54</td>
                            </tr>
                            <tr>
                                <td width="5%">152</td>
                                <td>A New Multi-stage Secret Sharing Scheme Using One-way Function  ，Operating Systems Review (ACM) ,EI <br>Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)，Wei-Pang Yang(Wei-Pang Yang)<br>2005&nbsp;Jan，39(1):48-55</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">153</td>
                                <td>An Improvement on the Lin-Wu (t, n) Threshold Verifiable Multi-secret Sharing Scheme  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)，Wei-Pang Yang(Wei-Pang Yang)<br>2005&nbsp;，163(1):169-178</td>
                            </tr>
                            <tr>
                                <td width="5%">154</td>
                                <td>Improvement on the Flexible Tree-Based Key Management Framework  ，COMPUTERS &amp; SECURITY ,SCI <br>黃明祥(Min-Shiang Hwang)，Jung-Wen Lo(Jung-Wen Lo)，Chia-Hsin Liu(Chia-Hsin Liu)<br>2005&nbsp;，24():500-504</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">155</td>
                                <td>A Simple Broadcasting Cryptosystem in Computer Networks Using Exclusive-OR  ，International Journal of Computer Applications in Technology ,EI <br>Cheng-Chi Lee(Cheng-Chi Lee)，Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)<br>2005&nbsp;，24(3):180-183</td>
                            </tr>
                            <tr>
                                <td width="5%">156</td>
                                <td>Research Issues and Challenges for Multiple Digital Signatures  ，International Journal of Network Security ,Other <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)<br>2005&nbsp;，1(1):1-7</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">157</td>
                                <td>Cryptanalysis of an Authenticated Encryption Scheme Using Self-Certified Public Keys  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>Chwei-Shyong Tsai(Chwei-Shyong Tsai)，Shu-Chen Lin(Shu-Chen Lin)，黃明祥(Min-Shiang Hwang)<br>2005&nbsp;，166(1):118-122</td>
                            </tr>
                            <tr>
                                <td width="5%">158</td>
                                <td>The General Pay-Word: A Micro-payment Scheme Based on N-dimension One-way Hash Chain  ，DESIGNS CODES AND CRYPTOGRAPHY ,SCI <br>林詠章()，黃明祥(Min-Shiang Hwang)，Chin-Chen Chang(Chin-Chen Chang)<br>2005&nbsp;，36(1):53-67</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">159</td>
                                <td>Simple Authenticated Key Agreement and Protected Password Change Protocol  ，COMPUTERS &amp; MATHEMATICS WITH APPLICATIONS ,SCI <br>Ting-Yi Chang(Ting-Yi Chang)，Wei-Pang Yang(Wei-Pang Yang)，黃明祥(Min-Shiang Hwang)<br>2005&nbsp;，49():703-714</td>
                            </tr>
                            <tr>
                                <td width="5%">160</td>
                                <td>A Secure Protocol for Bluetooth Piconets Using Elliptic Curve Cryptography  ，TELECOMMUNICATION SYSTEMS ,SCI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Ji-Zhe Lee(Ji-Zhe Lee)，Chao-Chen Yang(Chao-Chen Yang)<br>2005&nbsp;，29(3):165-180</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">161</td>
                                <td>A Time-Stamping Protocol for Digital Watermarking  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>黃明祥(Min-Shiang Hwang)，Kuo-Feng Hwang(Kuo-Feng Hwang)，Chin-Chen Chang(Chin-Chen Chang)<br>2005&nbsp;，169():1276-1284</td>
                            </tr>
                            <tr>
                                <td width="5%">162</td>
                                <td>A Secure Strong-Password Authentication Protocol  ，FUNDAMENTA INFORMATICAE ,SCI <br>Hsien-Chu Wu(Hsien-Chu Wu)，黃明祥(Min-Shiang Hwang)，Chia-Hsin Liu(Chia-Hsin Liu)<br>2005&nbsp;，68():399-406</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">163</td>
                                <td>On the Efficiency of Nonrepudiable Threshold Proxy Signature Scheme with Known Signers  ，JOURNAL OF SYSTEMS AND SOFTWARE ,SCI <br>Cheng-Ying Yang(Cheng-Ying Yang)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;Nov，73(3):507-514</td>
                            </tr>
                            <tr>
                                <td width="5%">164</td>
                                <td>An Efficient User Identification Scheme Based on ID-based Cryptosystem  ，COMPUTER STANDARDS &amp; INTERFACES ,SCI <br>黃明祥(Min-Shiang Hwang)，Jung-Wen Lo(Jung-Wen Lo)，Shu-Chen Lin(Shu-Chen Lin)<br>2004&nbsp;Oct，26(6):565-569</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">165</td>
                                <td>Cryptanalysis of an Efficient Secure Group Signature Scheme  ，Operating Systems Review (ACM) ,EI <br>Li-Hua Li(Li-Hua Li)，Chi-Yu Liu(Chi-Yu Liu)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;Oct，38(4):67-69</td>
                            </tr>
                            <tr>
                                <td width="5%">166</td>
                                <td>Cryptanalysis of Simple Authenticated Key Agreement Protocols  ，IEICE TRANSACTIONS ON FUNDAMENTALS OF ELECTRONICS COMMUNICATIONS AND COMPUTER SCIENCES ,SCI <br>Chou-Chen Yang(Chou-Chen Yang)，Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;Aug，E87-A(8):2174-2176</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">167</td>
                                <td>A Threshold Signature Scheme for Group Communications without a Shared Distribution Center  ，Future Generation Computer Systems ,EI <br>Ting-Yi Chang(Ting-Yi Chang)，Chou-Chen Yang(Chou-Chen Yang)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;Aug，20(6):1013-1021</td>
                            </tr>
                            <tr>
                                <td width="5%">168</td>
                                <td>Enhanced of Key Agreement Protocols Resistant to a Denial-of-Service Attack  ，FUNDAMENTA INFORMATICAE ,SCI <br>黃明祥(Min-Shiang Hwang)，Jung-Wen Lo(Jung-Wen Lo)，Chia-Hsin Liu(Chia-Hsin Liu)<br>2004&nbsp;Jul，61(3):389-398</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">169</td>
                                <td>Cryptanalysis of Publicly Verifiable Authenticated Encryption  ，IEICE TRANSACTIONS ON FUNDAMENTALS OF ELECTRONICS COMMUNICATIONS AND COMPUTER SCIENCES ,SCI <br>Ting-Yi Chang(Ting-Yi Chang)，Chou-Chen Yang(Chou-Chen Yang)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;Jun，E87-A(6):1645-1646</td>
                            </tr>
                            <tr>
                                <td width="5%">170</td>
                                <td>A Nonrepudiable Threshold Multi-Proxy Multi-Signature Scheme with Shared Verification  ，Future Generation Computer Systems ,EI <br>Shiang-Feng Tzeng(Shiang-Feng Tzeng)，Cheng-Ying Yang(Cheng-Ying Yang)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;Jun，20(5):887-893</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">171</td>
                                <td>Efficient Access Control and Key Management Schemes for Mobile Agents  ，COMPUTER STANDARDS &amp; INTERFACES ,SCI <br>林詠章()，Hsia-Hung Ou(Hsia-Hung Ou)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;May，26(5):423-433</td>
                            </tr>
                            <tr>
                                <td width="5%">172</td>
                                <td>Threshold Untraceable Signature for Group Communications  ，IEE PROCEEDINGS-COMMUNICATIONS ,SCI <br>Ting-Yi Chang,(Ting-Yi Chang,)，Chou-Chen Yang(Chou-Chen Yang)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;Apr，151(2):179-184</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">173</td>
                                <td>An Improvement of Nonrepudiable Threshold Proxy Signature Scheme with Known Signers  ，COMPUTERS &amp; SECURITY ,SCI <br>Shiang-Feng Tzeng(Shiang-Feng Tzeng)，黃明祥(Min-Shiang Hwang)，Cheng-Ying Yang(Cheng-Ying Yang)<br>2004&nbsp;Apr，23(2):174-178</td>
                            </tr>
                            <tr>
                                <td width="5%">174</td>
                                <td>A Server-Assissted Authentication Protocol for Detecting Error Vectors  ，Operating Systems Review (ACM) ,EI <br>Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，I-En Liao(I-En Liao)<br>2004&nbsp;Apr，38(2):93-96</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">175</td>
                                <td>A (t,n) Multi-secret Sharing Scheme  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>Chou-Chen Yang(Chou-Chen Yang)，Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;Apr，151(2):483-490</td>
                            </tr>
                            <tr>
                                <td width="5%">176</td>
                                <td>Generalization of Proxy Signature Based on Elliptic Curves  ，COMPUTER STANDARDS &amp; INTERFACES ,SCI <br>黃明祥(Min-Shiang Hwang)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)，Chwei-Shyong Tsai(Chwei-Shyong Tsai)<br>2004&nbsp;Mar，26(2):73-84</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">177</td>
                                <td>Digital Signature with Message Recovery and Its Variants Based on Elliptic Curve Discrete Logarithm Problem  ，COMPUTER STANDARDS &amp; INTERFACES ,SCI <br>Shiang-Feng Tzeng(Shiang-Feng Tzeng)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;Mar，26(2):61-71</td>
                            </tr>
                            <tr>
                                <td width="5%">178</td>
                                <td>End-to-End Security Protocol for Mobile Communications with End-User Identification/Authentication  ，WIRELESS PERSONAL COMMUNICATIONS ,SCI <br>Chin-Chen Chang(Chin-Chen Chang)，Kuo-Lun Chen(Kuo-Lun Chen)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;Jan，28(2):95-106</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">179</td>
                                <td>A New Digital Signature Scheme Based on Factoring and Discrete Logarithms  ，INTERNATIONAL JOURNAL OF COMPUTER MATHEMATICS ,SCI <br>Shiang-Feng Tzeng(Shiang-Feng Tzeng)，Cheng-Ying Yang(Cheng-Ying Yang)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;，81(1):9-14</td>
                            </tr>
                            <tr>
                                <td width="5%">180</td>
                                <td>A New Anonymous Channel Protocol in Wireless Communications  ，AEU - International Journal of Electronics and Communications ,EI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Ji-Zhe Lee(Ji-Zhe Lee)<br>2004&nbsp;，58():218-222</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">181</td>
                                <td>A New Mutual Authentication and Key Exchange Protocol with Balanced Computational Power for Wireless Settings  ，EUROPEAN TRANSACTIONS ON TELECOMMUNICATIONS ,SCI <br>Chou-Chen Yang,(Chou-Chen Yang,)，Jian-Wei Li(Jian-Wei Li)，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;，15(2):91-99</td>
                            </tr>
                            <tr>
                                <td width="5%">182</td>
                                <td>A Secure LITESET Scheme  ，IEICE TRANSACTIONS ON INFORMATION AND SYSTEMS ,SCI <br>Jau-Ji Shen(Jau-Ji Shen)，林詠章()，黃明祥(Min-Shiang Hwang)<br>2004&nbsp;，E87-D(11):2509-2514</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">183</td>
                                <td>Traceability on RSA-Based Partially Signature with Low Computation  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Yan-Chi Lai(Yan-Chi Lai)<br>2003&nbsp;Dec，145(2-3):465-468</td>
                            </tr>
                            <tr>
                                <td width="5%">184</td>
                                <td>A Practical (t, n) Threshold Proxy Signature Scheme Based on the RSA Cryptosystem  ，IEEE TRANSACTIONS ON KNOWLEDGE AND DATA ENGINEERING ,SCI <br>黃明祥(Min-Shiang Hwang)，Eric Jui-Lin Lu(Eric Jui-Lin Lu)，Iuon-Chang Lin(Iuon-Chang Lin)<br>2003&nbsp;Dec，15(6):1552-1560</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">185</td>
                                <td>Security Enhancement for the Timestamp-Based Password Authentication Scheme Using Smart Cards  ，COMPUTERS &amp; SECURITY ,SCI <br>Jau-Ji Shen(Jau-Ji Shen)，Chih-Wei Lin(Chih-Wei Lin)，黃明祥(Min-Shiang Hwang)<br>2003&nbsp;Nov，22(7):591-595</td>
                            </tr>
                            <tr>
                                <td width="5%">186</td>
                                <td>An Authentication Scheme for Mobile Satellite Communication Systems  ，Operating Systems Review (ACM) ,EI <br>黃明祥(Min-Shiang Hwang)，Chou-Chen Yang(Chou-Chen Yang)，Cheng-Yeh Shiu(Cheng-Yeh Shiu)<br>2003&nbsp;Oct，37(4):42-47</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">187</td>
                                <td>A New Digital Multisignature Scheme with Distinguished Signing Authorities  ，JOURNAL OF INFORMATION SCIENCE AND ENGINEERING ,SCI <br>Shin-Jia Hwang(Shin-Jia Hwang)，黃明祥(Min-Shiang Hwang)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)<br>2003&nbsp;Sep，19(5):881-887</td>
                            </tr>
                            <tr>
                                <td width="5%">188</td>
                                <td>Controlling Access in Large Partially-Ordered Hierarchies Using Cryptographic Keys  ，JOURNAL OF SYSTEMS AND SOFTWARE ,SCI <br>黃明祥(Min-Shiang Hwang)，Wei-Pang Yang(Wei-Pang Yang)<br>2003&nbsp;Aug，67(2):99-107</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">189</td>
                                <td>Security Enhancement for Protecting Password Transmission  ，IEICE TRANSACTIONS ON COMMUNICATIONS ,SCI <br>Chou-Chen Yang(Chou-Chen Yang)，Ting-Yi Chang(Ting-Yi Chang)，Jian-Wei Li(Jian-Wei Li)，黃明祥(Min-Shiang Hwang)<br>2003&nbsp;Jul，E86-B(7):2178-2181</td>
                            </tr>
                            <tr>
                                <td width="5%">190</td>
                                <td>A New Key Authentication Scheme Based on Discrete Logarithms  ，APPLIED MATHEMATICS AND COMPUTATION ,SCI <br>Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Li-Hua Li(Li-Hua Li)<br>2003&nbsp;Jul，139(2):343-349</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">191</td>
                                <td>An Untraceable Blind Signature Scheme  ，IEICE TRANSACTIONS ON FUNDAMENTALS OF ELECTRONICS COMMUNICATIONS AND COMPUTER SCIENCES ,SCI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Yan-Chi Lai(Yan-Chi Lai)<br>2003&nbsp;Jul，E86-A(7):1902-1906</td>
                            </tr>
                            <tr>
                                <td width="5%">192</td>
                                <td>Security Enhancement for Optimal Strong-Password Authentication Protocol  ，Operating Systems Review (ACM) ,EI <br>Chih-Wei Lin(Chih-Wei Lin)，Jau-Ji Shen(Jau-Ji Shen)，黃明祥(Min-Shiang Hwang)<br>2003&nbsp;Jul，37(3):12-16</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">193</td>
                                <td>Untractable Blind Signature Schemes Based on Discrete Logarithm Problem  ，FUNDAMENTA INFORMATICAE ,SCI <br>Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Wei-Pang Yang(Wei-Pang Yang)<br>2003&nbsp;Jun，55(3-4):307-320</td>
                            </tr>
                            <tr>
                                <td width="5%">194</td>
                                <td>A Modified Remote User Authentication Scheme Using Smart Cards  ，IEEE TRANSACTIONS ON CONSUMER ELECTRONICS ,SCI <br>Jau-Ji Shen(Jau-Ji Shen)，Chih-Wei Lin(Chih-Wei Lin)，黃明祥(Min-Shiang Hwang)<br>2003&nbsp;May，49(2):414-416</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">195</td>
                                <td>A New Key Assignment Scheme for Enforcing Complicated Access Control Policies in Hierarchy  ，Future Generation Computer Systems ,EI <br>林詠章()，黃明祥(Min-Shiang Hwang)，Chin-Chen Chang(Chin-Chen Chang)<br>2003&nbsp;May，19(4):457-462</td>
                            </tr>
                            <tr>
                                <td width="5%">196</td>
                                <td>A New Anonymous Conference Key Distribution System Based on the Elliptic Curve Discrete Logarithm Problem  ，COMPUTER STANDARDS &amp; INTERFACES ,SCI <br>Chou-Chen Yang(Chou-Chen Yang)，Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)<br>2003&nbsp;May，25(2):141-145</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">197</td>
                                <td>Security Enhancement for Anonymous Secure E-Voting over a Network  ，COMPUTER STANDARDS &amp; INTERFACES ,SCI <br>林詠章()，黃明祥(Min-Shiang Hwang)，Chin-Chen Chang(Chin-Chen Chang)<br>2003&nbsp;May，25(2):131-139</td>
                            </tr>
                            <tr>
                                <td width="5%">198</td>
                                <td>Extension of Authentication Protocol for GSM  ，IEE PROCEEDINGS-COMMUNICATIONS ,SCI <br>Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Wei-Pang Yang(Wei-Pang Yang)<br>2003&nbsp;Apr，150(2):91-95</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">199</td>
                                <td>Traceability on Stadler et al.'s Fair Blind Signature Scheme  ，IEICE TRANSACTIONS ON FUNDAMENTALS OF ELECTRONICS COMMUNICATIONS AND COMPUTER SCIENCES ,SCI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Yan-Chi Lai(Yan-Chi Lai)<br>2003&nbsp;Feb，E86-A(2):513-514</td>
                            </tr>
                            <tr>
                                <td width="5%">200</td>
                                <td>Generalization of Proxy Signature Based on Discrete Logarithms  ，COMPUTERS &amp; SECURITY ,SCI <br>Li-Hua Li(Li-Hua Li)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)，黃明祥(Min-Shiang Hwang)<br>2003&nbsp;，22(3):245-255</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">201</td>
                                <td>Simple Generalized Group-oriented Cryptosystems Using ElGamal Cryptosystem  ，INFORMATICA ,SCI <br>Chou-Chen Yang(Chou-Chen Yang)，Ting-Yi Chang(Ting-Yi Chang)，Jian-Wei Li(Jian-Wei Li)，黃明祥(Min-Shiang Hwang)<br>2003&nbsp;，14(1):111-120</td>
                            </tr>
                            <tr>
                                <td width="5%">202</td>
                                <td>A New Remote User Authentication Scheme for Multi-Server Architecture  ，Future Generation Computer Systems ,EI <br>林詠章()，黃明祥(Min-Shiang Hwang)，Li-Hua Li(Li-Hua Li)<br>2003&nbsp;，19(1):13-22</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">203</td>
                                <td>Improved Non-repudiable Threshold Proxy Signature Scheme with Known Signers  ，INFORMATICA ,SCI <br>Chwei-Shyong Tsai(Chwei-Shyong Tsai)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)，黃明祥(Min-Shiang Hwang)<br>2003&nbsp;，14(3):393-402</td>
                            </tr>
                            <tr>
                                <td width="5%">204</td>
                                <td>The Security of the Improvement on the Methods for Protecting Password Transmission  ，INFORMATICA ,SCI <br>Chou-Chen Yang(Chou-Chen Yang)，Ting-Yi Chang(Ting-Yi Chang)，黃明祥(Min-Shiang Hwang)<br>2003&nbsp;，14(4):551-558</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">205</td>
                                <td>A New Privacy and Authentication Protocol for End-to-End Mobile Users  ，INTERNATIONAL JOURNAL OF COMMUNICATION SYSTEMS ,SCI <br>Cheng-Chi Lee(Cheng-Chi Lee)，Chou-Chen Yang(Chou-Chen Yang)，黃明祥(Min-Shiang Hwang)<br>2003&nbsp;，16():799-808</td>
                            </tr>
                            <tr>
                                <td width="5%">206</td>
                                <td>Cryptanalysis of the Hwang-Shi Proxy Signature Scheme  ，FUNDAMENTA INFORMATICAE ,SCI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Shin-Jia Hwang(Shin-Jia Hwang)<br>2002&nbsp;Nov，53(2):131-134</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">207</td>
                                <td>Improved Yen-Joye's Authenticated Multiple-key Agreement Protocol  ，ELECTRONICS LETTERS ,SCI <br>黃明祥(Min-Shiang Hwang)，Chih-Wei Lin(Chih-Wei Lin)，Cheng-Chi Le(Cheng-Chi Le)<br>2002&nbsp;Nov，38(23):1429-1431</td>
                            </tr>
                            <tr>
                                <td width="5%">208</td>
                                <td>A Remote User Authentication Scheme Using Hash Functions  ，Operating Systems Review (ACM) ,EI <br>Cheng-Chi Lee(Cheng-Chi Lee)，Li-Hua Li(Li-Hua Li)，黃明祥(Min-Shiang Hwang)<br>2002&nbsp;Oct，36(4):23-29</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">209</td>
                                <td>A Simple Remote User Authentication Scheme  ，MATHEMATICAL AND COMPUTER MODELLING ,SCI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Yuan-Liang Tang(Yuan-Liang Tang)<br>2002&nbsp;Oct，36():103-107</td>
                            </tr>
                            <tr>
                                <td width="5%">210</td>
                                <td>An Improvement of Mobile Users Authentication in the Integration Environments  ，AEU - International Journal of Electronics and Communications ,EI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Wei-Pang Yang(Wei-Pang Yang)<br>2002&nbsp;Sep，56(5):293-297</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">211</td>
                                <td>Improved Digital Signature Scheme Based on Factoring and Discrete Logarithms  ，Journal of Discrete Mathematical Sciences &amp; Cryptography ,Other <br>黃明祥(Min-Shiang Hwang)，Chao-Chen Yang(Chao-Chen Yang)，Shiang-Feng Tzeng(Shiang-Feng Tzeng)<br>2002&nbsp;Aug，5(2):151-155</td>
                            </tr>
                            <tr>
                                <td width="5%">212</td>
                                <td>A Flexible Remote User Authentication Scheme Using Smart Cards  ，Operating Systems Review (ACM) ,EI <br>Cheng-Chi Lee(Cheng-Chi Lee)，黃明祥(Min-Shiang Hwang)，Wei-Pang Yang(Wei-Pang Yang)<br>2002&nbsp;Jul，36(3):46-52</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">213</td>
                                <td>A Feature-Oriented Copyright Owner Proving Technique for Still Images  ，INTERNATIONAL JOURNAL OF SOFTWARE ENGINEERING AND KNOWLEDGE ENGINEERING ,SCI <br>Chin-Chen Chang(Chin-Chen Chang)，Kuo-Feng Hwang(Kuo-Feng Hwang)，黃明祥(Min-Shiang Hwang)<br>2002&nbsp;Jun，12(3):317-330</td>
                            </tr>
                            <tr>
                                <td width="5%">214</td>
                                <td>Broadcasting Cryptosystem in Computer Networks Using Geometric Properties of Lines  ，JOURNAL OF INFORMATION SCIENCE AND ENGINEERING ,SCI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Ting-Yi Chang(Ting-Yi Chang)<br>2002&nbsp;May，18(3):373-379</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">215</td>
                                <td>Traceability on Low-Computation Partially Blind Signatures for Electronic Cash  ，IEICE TRANSACTIONS ON FUNDAMENTALS OF ELECTRONICS COMMUNICATIONS AND COMPUTER SCIENCES ,SCI <br>黃明祥(Min-Shiang Hwang)，Cheng-Chi Lee(Cheng-Chi Lee)，Yan-Chi Lai(Yan-Chi Lai)<br>2002&nbsp;May，E85-A(5):1181-1182</td>
                            </tr>
                            <tr>
                                <td width="5%">216</td>
                                <td>An ElGamal-like Cryptosystem For Enciphering Large Messages  ，IEEE TRANSACTIONS ON KNOWLEDGE AND DATA ENGINEERING ,SCI <br>黃明祥(Min-Shiang Hwang)，Chin-Chen Chang(Chin-Chen Chang)，Kuo-Feng Hwang(Kuo-Feng Hwang)<br>2002&nbsp;Mar，14(2):445-446</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">217</td>
                                <td>A Robust Authentication Scheme for Protecting Copyrights of Images and Graphics  ，IEE PROCEEDINGS-VISION IMAGE AND SIGNAL PROCESSING ,SCI <br>Chin-Chen Chang(Chin-Chen Chang)，Kuo-Feng Hwang(Kuo-Feng Hwang)，黃明祥(Min-Shiang Hwang)<br>2002&nbsp;Feb，149(1):43-50</td>
                            </tr>
                            <tr>
                                <td width="5%">218</td>
                                <td>Adding Timestamps to the Secure Electronic Auction Protocol  ，DATA &amp; KNOWLEDGE ENGINEERING ,SCI <br>黃明祥(Min-Shiang Hwang)，Eric Jui-Lin Lu(Eric Jui-Lin Lu)，林詠章()<br>2002&nbsp;Feb，40(2):155-162</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">219</td>
                                <td>A New Method to Strengthen Ciphers  ，International Journal of Pure and Applied Mathematics ,Other <br>黃明祥(Min-Shiang Hwang)，S. Wesley Changchien(S. Wesley Changchien)，Cheng-Chi Lee(Cheng-Chi Lee)<br>2002&nbsp;，3(2):187-192</td>
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

                            <tbody><tr class="odd">

                                <td width="5%">1</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200052&amp;mCos_Class=A&amp;mSmtr=1061')"> (研究所碩士班    )論文研討(一)【第106學年第1學期：A班】<br>學習及運用新知</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">2</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100001&amp;mCos_Class=A&amp;mSmtr=1061')"> (研究所博士班    )作業系統【第106學年第1學期：A班】<br>作業系統是介於使用者與電腦硬體間的介面，所有電腦都會透過作業系統來做電腦資源管理，其中包括CPU、記憶體、及磁碟機管理。本課程主要傳授作業系統之概論、技術、安全、及其理論。</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">3</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200067&amp;mCos_Class=A&amp;mSmtr=1052')"> (研究所碩士班    )論文研討(二)【第105學年第2學期：A班】<br>1.使學生瞭解科技論文之要素。
                                        2.訓練研究生研讀論文之能力，及上台報告之台風。
                                        3.培養研究生具有獨立思考與理性批判問題的能力，從事正確的抉擇。</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">4</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200016&amp;mCos_Class=A&amp;mSmtr=1052')"> (研究所碩士班    )研究論文寫作【第105學年第2學期：A班】<br>提升研究生英文科技論文閱讀、寫作、與簡報能力。並灌輸其學術倫理概念。</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">5</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200052&amp;mCos_Class=A&amp;mSmtr=1051')"> (研究所碩士班    )論文研討(一)【第105學年第1學期：A班】<br>學習及運用新知</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">6</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100001&amp;mCos_Class=A&amp;mSmtr=1051')"> (研究所博士班    )作業系統【第105學年第1學期：A班】<br>作業系統是介於使用者與電腦硬體間的介面，所有電腦都會透過作業系統來做電腦資源管理，其中包括CPU、記憶體、及磁碟機管理。本課程主要傳授作業系統之概論、技術、安全、及其理論。</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">7</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200202&amp;mCos_Class=A&amp;mSmtr=1042')"> (研究所碩士班    )研究論文寫作【第104學年第2學期：A班】<br>提升研究生英文科技論文閱讀、寫作、與簡報能力。並灌輸其學術倫理概念。</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">8</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200067&amp;mCos_Class=A&amp;mSmtr=1042')"> (研究所碩士班    )論文研討(二)【第104學年第2學期：A班】<br>使學生瞭解科技論文之要素</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">9</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200052&amp;mCos_Class=A&amp;mSmtr=1041')"> (研究所碩士班    )論文研討(一)【第104學年第1學期：A班】<br>學習及運用新知</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">10</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100001&amp;mCos_Class=A&amp;mSmtr=1041')"> (研究所博士班    )作業系統【第104學年第1學期：A班】<br>作業系統是介於使用者與電腦硬體間的介面，所有電腦都會透過作業系統來做電腦資源管理，其中包括CPU、記憶體、及磁碟機管理。本課程主要傳授作業系統之概論、技術、安全、及其理論。</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">11</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00202&amp;mCos_Class=A&amp;mSmtr=1032')"> (研究所碩士班    )研究論文寫作【第103學年第2學期：A班】<br>提升研究生科技論文閱讀,寫作與簡報能力。</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">12</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00067&amp;mCos_Class=A&amp;mSmtr=1032')"> (研究所碩士班    )論文研討(二)【第103學年第2學期：A班】<br>探討資工領域方面的研究技巧</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">13</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=67D00001&amp;mCos_Class=A&amp;mSmtr=1031')"> (研究所博士班    )作業系統【第103學年第1學期：A班】<br>作業系統是介於使用者與電腦硬體間的介面，所有電腦都會透過作業系統來做電腦資源管理，其中包括CPU、記憶體、及磁碟機管理。本課程主要傳授作業系統之概論、技術、安全、及其理論。</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">14</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00166&amp;mCos_Class=A&amp;mSmtr=1022')"> (大學日間部      )資訊與應用【第102學年第2學期：A班】<br></a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">15</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00016&amp;mCos_Class=A&amp;mSmtr=1022')"> (研究所碩士班    )研究論文寫作【第102學年第2學期：A班】<br>提升研究生英文科技論文閱讀,寫作與簡報能力。</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">16</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=67D00001&amp;mCos_Class=A&amp;mSmtr=1021')"> (研究所博士班    )作業系統【第102學年第1學期：A班】<br>作業系統是介於使用者與電腦硬體間的介面，所有電腦都會透過作業系統來做電腦資源管理，其中包括CPU、記憶體、及磁碟機管理。本課程主要傳授作業系統之概論、技術、安全、及其理論。</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">17</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00166&amp;mCos_Class=A&amp;mSmtr=1012')"> (大學日間部      )資訊與應用【第101學年第2學期：A班】<br></a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">18</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00093&amp;mCos_Class=F&amp;mSmtr=1012')"> (大學日間部      )資訊與科技【第101學年第2學期：F班】<br>使學生理解電腦技術的演進及基本電腦技能。</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">19</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00093&amp;mCos_Class=F&amp;mSmtr=1012')"> (大學日間部      )資訊與科技【第101學年第2學期：F班】<br>使學生理解電腦技術的演進及基本電腦技能。</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">20</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00024&amp;mCos_Class=A&amp;mSmtr=1012')"> (研究所碩士班    )專題研討(二)【第101學年第2學期：A班】<br>學習及運用新知</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">21</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GOG00008&amp;mCos_Class=A&amp;mSmtr=1011')"> (大學日間部      )大學之路-2【第101學年第1學期：A班】<br>引導大學新鮮人於大學生活上快樂且正確學習、適應環境、激發潛能、培養合群互助精神，並於大學之路上儘早建立自我生涯規劃的藍圖。</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">22</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=67D00001&amp;mCos_Class=A&amp;mSmtr=1011')"> (研究所博士班    )作業系統【第101學年第1學期：A班】<br>作業系統是介於使用者與電腦硬體間的介面，所有電腦都會透過作業系統來做電腦資源管理，其中包括CPU、記憶體、及磁碟機管理。本課程主要傳授作業系統之概論、技術、安全、及其理論。</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">23</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00105&amp;mCos_Class=A&amp;mSmtr=1011')"> (研究所碩士班    )專題研討(一)【第101學年第1學期：A班】<br>學習及運用新知</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">24</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00093&amp;mCos_Class=D&amp;mSmtr=1002')"> (大學日間部      )資訊與科技【第100學年第2學期：D班】<br>使學生理解電腦技術的演進及基本電腦技能。</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">25</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00093&amp;mCos_Class=D&amp;mSmtr=1002')"> (大學日間部      )資訊與科技【第100學年第2學期：D班】<br>使學生理解電腦技術的演進及基本電腦技能。</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">26</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=67D00001&amp;mCos_Class=A&amp;mSmtr=1001')"> (研究所博士班    )作業系統【第100學年第1學期：A班】<br>作業系統是介於使用者與電腦硬體間的介面，所有電腦都會透過作業系統來做電腦資源管理，其中包括CPU、記憶體、及磁碟機管理。本課程主要傳授作業系統之概論、技術、安全、及其理論。</a>
                                </td>
                            </tr>

                            <tr class="odd">

                                <td width="5%">27</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00166&amp;mCos_Class=A&amp;mSmtr=0992')"> (研究所碩士班    )雲端計算【第099學年第2學期：A班】<br>雲端計算是近年來是一種基於網際網路的計算方式，它的一個重要應用是藉由分散且快速的運算能力來處理及分析大量的資料，並且可以從中取得所需的資訊或知識，透過這種方式，共享的軟硬體資源和資訊可以按照需要提供給電腦或其他裝置。本課程主要傳授雲端計算之概論、技術、安全、及其應用。</a>
                                </td>
                            </tr>

                            <tr>

                                <td width="5%">28</td>
                                <td>
                                    <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=64U00282&amp;mCos_Class=A&amp;mSmtr=0992')"> (大學日間部      )雲端計算【第099學年第2學期：A班】<br></a>
                                </td>
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

