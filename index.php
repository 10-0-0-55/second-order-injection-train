<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
include "db.php";
$stmt = $conn->prepare("SELECT age FROM user WHERE username=?");
$stmt->bind_param("s", $_SESSION['user']);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_array();
$age = $row[0];
echo "your age is: ".$age."<br>";
$stmt->close();
$stmt = $conn->prepare("SELECT username FROM user WHERE username!=? AND age=$age");
$stmt->bind_param("s", $_SESSION['user']);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_array();
echo $row[0]."和你的年龄相同";