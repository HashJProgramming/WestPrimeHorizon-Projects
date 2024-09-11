<?php
include_once '../connection.php';

$regCode = $_POST['regCode'];

$sql = 'SELECT * FROM `province` WHERE `regCode` = :regCode';
$stmt = $db->prepare($sql);
$stmt->bindParam(':regCode', $regCode);
$stmt->execute();
$results = $stmt->fetchAll();

$jsonData = json_encode($results);
echo $jsonData;
