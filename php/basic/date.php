<!DOCTYPE html>
<html>
<body>

<?php
echo "时间函数 ： date(format,timestamp)";
echo "<br>";
echo "今天是 " . date("Y/m/d") . "<br>";
echo "今天是 " . date("Y.m.d") . "<br>";
echo "今天是 " . date("Y-m-d") . "<br>";
echo "今天是 " . date("l") . "<br>";
echo "现在时间是 " . date("h:i:sa") . "<br>";
echo "设时区：Asia/Shanghai" . "<br>";
date_default_timezone_set("Asia/Shanghai");
echo "当前时间是 " . date("h:i:sa") . "<br>";

echo "创建时间 ： mktime(hour,minute,second,month,day,year)" . "<br>";

$d=mktime(9, 12, 31, 6, 10, 2015);
echo "创建日期是 " . date("Y-m-d h:i:sa", $d). "<br>";
?>
<?php
$d=strtotime("10:38pm April 15 2015");
echo "创建日期是 " . date("Y-m-d h:i:sa", $d). "<br>";
?>
<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";


?>
<?php include 'array.php';?>


</body>
</html>