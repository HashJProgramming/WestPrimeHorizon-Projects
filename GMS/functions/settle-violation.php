<?php
// connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_gms', 'root', '');


$id = $_POST['violation_id'];
$sanctions = $_POST['sanctions'];
$age =  date_diff(date_create($birthday), date_create('today'))->y;

// update the student record in the database
$sql = "UPDATE violations SET
            sanctions = :sanctions
        WHERE id = :id";
$statement = $db->prepare($sql);
$statement->bindParam(':id', $id);
$statement->bindParam(':sanctions', $sanctions);
$statement->execute();

// redirect to the dashboard after updating the student
header('Location: ../dashboard.php#success');
exit();

?>