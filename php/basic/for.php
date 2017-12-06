
<!DOCTYPE html>
<html>
<body>
<?php
for ($x = 0; $x <= 10; $x++) {
    echo "数字是：$x <br>";
}

function writeMsg()
{
    echo "Hello world!";
}

writeMsg();

function familyName($fname)
{
    echo "$fname Zhang.<br>";
}

familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");

function setHeight($minheight=50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // 将使用默认值 50
  setHeight(135);
  setHeight(80);
?>



</body>
</html>