<?php
$q = $_GET["q"];
// $q = isset($_GET["q"]) ? intval($_GET["q"]) : '';

if(empty($q)) {
    echo '请选择一个网站';
    exit;
}
 
$servername = "172.16.0.126";
$dataName = "vipvideo";
$username = "root";
$password = "zCVH5rZmpZPpEWNm";
// 创建连接
$con = mysqli_connect($servername, $username, $password, $dataName);
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
// 设置编码，防止中文乱码
mysqli_set_charset($con, "utf8");
 
$sql =
"SELECT
vv_id,
vv_title,
vv_type,
vv_score
FROM
vv_video_recommend,
vv_video_message
WHERE
vr_keyWord = vv_keyWord 
AND vr_type = '".$q."'
ORDER BY
vr_time DESC,
vr_order
LIMIT 6;";
 
$result = mysqli_query($con,$sql);
 
echo "<table border='1'>
<tr>
<th>ID</th>
<th>视频名称</th>
<th>类型</th>
<th>评分</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['vv_id'] . "</td>";
    echo "<td>" . $row['vv_title'] . "</td>";
    echo "<td>" . $row['vv_type'] . "</td>";
    echo "<td>" . $row['vv_score'] . "</td>";
    echo "</tr>";
}
echo "</table>";
 
mysqli_close($con);
?>