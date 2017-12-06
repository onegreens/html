
<!DOCTYPE html>
<html>
<body>

<?php
class Test
{
    static function test1()
    {
        echo "输出成功 test1";
    }
    function test2()
    {
        echo "输出成功 test2";
    }

}

$a = new Test;
//调用静态方法
$a::test1();
//调用非静态方法
$a->test2();
?>
  
</body>
</html>
