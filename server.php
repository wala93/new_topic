<?php
 $date_today=date("l  Y m d H i s");


echo $date_today ;
date_default_timezone_set("Asia/Amman");
echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo $_SERVER['QUERY_STRING'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
$pswrd=md5($_POST['demo']);
echo $pswrd;

$demo="walaa hatem alomari";
$convArr=explode("a",$demo);
foreach($convArr as $value)
{ echo "  ".$value ;}
echo "<br>";
var_dump($convArr);
$rtrn=implode($convArr);
echo "<br>";
echo $rtrn;
?>
<form action="" method="POST">

<input type="text" name="demo">
<input type="submit">
</form>