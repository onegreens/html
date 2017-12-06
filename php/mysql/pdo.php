
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "172.16.0.126";
$dbname = "vipvideo";
$username = "root";
$password = "zCVH5rZmpZPpEWNm";
// 创建连接
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT into vv_video_recommend (vr_type,vr_keyword,vr_time,vr_order) VALUE ('m','mmmm','2017-1-2','1')";;
    // 使用 exec() ，没有结果返回 
    $conn->exec($sql);
    echo "新记录插入成功";
} catch (PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


?>
  
</body>
</html>