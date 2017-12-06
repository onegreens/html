<!DOCTYPE html>
<html>
<body>

<?php
echo "我的第一段 PHP 脚本！";
echo "我的第一段 PHP 脚本！";
echo "我的第一段 PHP 脚本！";


$x=5;
$y=6;
$z=$x+$y;
echo $z;



?>
<br/>
<p>作用域</p>
Local 和 Global 作用域
<br/>函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。
<br/>函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
<?php
$x=5;
$y=10;

function myTest() {
    global $y,$x; // 局部作用域
    echo "<p>测试函数内部的变量：</p>";
    echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$y";
  } 
  
  myTest();
  
  echo "<p>测试函数之外的变量：</p>";
  echo "变量 x 是：$x";
  echo "<br>";
  echo "变量 y 是：$y";
?>

<?php
echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This", " string", " was", " made", " with multiple parameters.";
?>
<?php
print "<h2>PHP is fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>
</body>
</html>