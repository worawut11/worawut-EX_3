<?php
$servername="locaihost";
$usename="root";
$password="";
$dbname="worawut_ex3";

//Cract connection สร้างการเชื่อมต่อ
$connection = new mysqli($Name,$Email,$Phone,$address);

// Check connection ตรวจสอบการเชื่อมต่อ
if ($connection->connect_errno){
    die("connection failed: " . $coonection->connect_error);
}
//Read all row from datada eadle อ่านข้อมูลทั้งตาราง
$sql = "SELECT * FROM worawut_ex3";
$result = $connection->query($sql);

if (!$result){
    ("Invalid query: " . $connection_assoc);

}

?>