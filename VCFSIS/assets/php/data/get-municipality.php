<?php
include_once '../connection.php';


$regCode = $_POST['regCode'];
$provCode = $_POST['provCode'];
$sql = 'SELECT * FROM `municipality` WHERE `regCode` = :regCode AND `provCode` = :provCode';
$stmt = $db->prepare($sql);
$stmt->bindParam(':regCode', $regCode);
$stmt->bindParam(':provCode', $provCode);
$stmt->execute();
$results = $stmt->fetchAll();

$jsonData = json_encode($results);
echo $jsonData;
