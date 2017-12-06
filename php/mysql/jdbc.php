<?php

$servername = "172.16.0.126";
$dbname = "vipvideo";
$username = "root";
$password = "zCVH5rZmpZPpEWNm";
class Conn
{
    static function getConn()
    {
        $servername = "172.16.0.126";
        $dbname = "vipvideo";
        $username = "root";
        $password = "zCVH5rZmpZPpEWNm";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("连接失败" . $conn->connect_error);
        } else {
            echo "数据库连接成功";            
            return $conn;
        }
    }
}
?>