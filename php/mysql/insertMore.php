
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "172.16.0.126";
$dataName = "vipvideo";
$username = "root";
$password = "zCVH5rZmpZPpEWNm";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dataName);
// 检测连接
if (!$conn)//没出错则表示链接成功
{
    die("连接失败: " . $conn->connect_error);
}
//插入多条记录 使用 .= 连接语句
$sql = "insert into vv_video_recommend (vr_type,vr_keyword,vr_time,vr_order) value ('m','ssss','2017-1-2','3');";
$sql .= "insert into vv_video_recommend (vr_type,vr_keyword,vr_time,vr_order) value ('m','ssss','2017-1-2','4');";
$sql .= "insert into vv_video_recommend (vr_type,vr_keyword,vr_time,vr_order) value ('m','ssss','2017-1-2','5')";
//使用 multi_query执行语句
if ($conn->multi_query($sql) === TRUE) {
    echo "新记录插入成功";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
// some code

?>
  
</body>
</html>