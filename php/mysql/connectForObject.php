
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "172.16.0.126";
$dataName = "vipvideo";
$username = "root";
$password = "zCVH5rZmpZPpEWNm";
// 创建连接
$con = mysqli_connect($servername, $username, $password, $dataName);
// 检测连接
if (!$con)//没出错则表示链接成功
    {
    die('Could not connect: ' . mysql_error());
}
$sql1 = "insert into vv_video_recommend (vr_type,vr_keyword,vr_time,vr_order) 
value ('m','ssss','2017-1-2','2')";
if (mysqli_query($con, $sql1)) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
}
mysqli_close($con);
// some code

?>
  
</body>
</html>