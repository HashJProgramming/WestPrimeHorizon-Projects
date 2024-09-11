<?php
include_once '../connection.php';

$regCode = $_POST['regCode'];
$provCode = $_POST['provCode'];
$citymunCode = $_POST['citymunCode'];
$sql = 'SELECT * FROM `barangay` WHERE `regCode` = :regCode AND `provCode` = :provCode AND `citymunCode` = :citymunCode';
$stmt = $db->prepare($sql);
$stmt->bindParam(':regCode', $regCode);
$stmt->bindParam(':provCode', $provCode);
$stmt->bindParam(':citymunCode', $citymunCode);
$stmt->execute();
$results = $stmt->fetchAll();

$jsonData = json_encode($results);
echo $jsonData;
