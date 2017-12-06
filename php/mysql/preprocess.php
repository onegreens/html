
<!DOCTYPE html>
<html>
<body>

<?php
include "jdbc.php";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("连接失败" . $conn->connect_error);
}
else {
    echo "连接成功";
}
//预处理及绑定
$sql = "insert into vv_video_recommend 
(vr_type,vr_keyword,vr_time,vr_order)
 values (?,?,?,?)";
$stmt = $conn->prepare($sql);
//第一个参数绑定参数的类型
/*
i - integer（整型）
d - double（双精度浮点型）
s - string（字符串）
b - BLOB（binary large object:二进制大对象）
*/
$stmt->bind_param("sssi", $vr_type, $vr_keyword, $vr_time, $vr_order);

//设置参数并执行
$vr_type = "m";
$vr_keyword = "rexuejianghu";
$vr_time = "2017-9-16";
$vr_order = 1;
$stmt->execute();

$stmt->close();
$conn->close();



?>
  
</body>
</html>