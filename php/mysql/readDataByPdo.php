
<!DOCTYPE html>
<html>
<body>

<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>vv_id</th><th>vv_title</th><th>vv_type</th></tr>";
 
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }
 
    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }
 
    function beginChildren() { 
        echo "<tr>"; 
    } 
 
    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 
include "jdbc.php";
//使用pdo可进行异常捕获
try {
// 创建连接
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//设置pdo错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//预处理及绑定
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

    $stmt =$conn->prepare($sql);
    $stmt->execute();
    //设置结果为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
} catch (PDOException $e) {
    echo "error " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
  
</body>
</html>
