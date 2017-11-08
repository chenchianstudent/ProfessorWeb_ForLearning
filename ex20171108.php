<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:04
 */
$var = 陳麒安105021007poi;
$n=$_POST['n'];
$m=$_POST['m'];
$r=$_POST['r'];
$g=$_POST['g'];
$b=$_POST['b'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php echo "<h1 align='center'><span style='color:rgb($r,$g,$b);'>".$var."</h1></span>" ?>
<table align="center" border="2">
    <?php

    for($i=1;$i<=$n;$i++){
        echo"<tr>";
        for($j=1;$j<=$m;$j++){
            echo "<td style='width=30px' align='center'><span style='font-size: 1.2em'>". $i*$j. "</span></td>";
        }
        echo"</tr>";
    }
    ?>
</table>

</body>
</html>
