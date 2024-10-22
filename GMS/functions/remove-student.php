<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_gms', 'root', '');

// Get the form data
$id = $_POST['data_id'];

// Check if the user exists
$sql = "SELECT * FROM students WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() === 0) {
  echo "The user does not exist.";
  exit;
}

// Check if the user exists
$sql = "SELECT * FROM violations WHERE student_id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() > 0) {
  $sql = "DELETE FROM violations WHERE student_id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

// Remove the user from the database 
$sql = "DELETE FROM students WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Redirect the user to the home page
header('Location: ../dashboard.php#success');

?>