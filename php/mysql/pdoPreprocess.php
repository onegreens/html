
<!DOCTYPE html>
<html>
<body>

<?php
include "jdbc.php";
//使用pdo可进行异常捕获
try {
// 创建连接
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//设置pdo错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//预处理及绑定
    $sql = "INSERT into vv_video_recommend (vr_type,vr_keyword,vr_time,vr_order) VALUES (:vr_typea, :vr_keyworda, :vr_timea, :vr_ordera)";

    $stmt =$conn->prepare($sql);
//分别绑定对应参数

    $stmt->bindParam(':vr_typea', $vr_type,PDO::PARAM_STR, 12);
    $stmt->bindParam(':vr_keyworda', $vr_keyword,PDO::PARAM_STR, 12);
    $stmt->bindParam(':vr_timea', $vr_time,PDO::PARAM_STR, 12);
    $stmt->bindParam(':vr_ordera', $vr_order, PDO::PARAM_INT);
//设置参数并执行
    $vr_type = "m";
    $vr_keyword = "assdgge";
    $vr_time = "2017-9-16";
    $vr_order = 2;
    $stmt->execute();
    echo "新记录插入成功";
} catch (PDOException $e) {
    echo "error " . $e->getMessage();
}
$conn = null;
?>
  
</body>
</html>
