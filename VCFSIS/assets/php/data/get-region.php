<?php
include_once '../connection.php';

$sql = 'SELECT * FROM `region`';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

$jsonData = json_encode($results);
echo $jsonData;
