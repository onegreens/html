
<!DOCTYPE html>
<html>
<body>

<?php
include "jdbc.php";
// 创建连接
$conn =Conn::getConn();

$sql =
"SELECT
vv_id,
vv_title,
vv_type
FROM
vv_video_recommend,
vv_video_message
WHERE
vr_keyWord = vv_keyWord 
AND vr_type = 'm'
ORDER BY
vr_time DESC,
vr_order
LIMIT 6;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "vv_id: " . $row["vv_id"] . " - vv_title: " . $row["vv_title"] . "- vv_type " . $row["vv_type"] . "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();

?>
  
</body>
</html>
