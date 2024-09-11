<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $type = $_POST['type'];
    $course = $_POST['course'];
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];


    $sql_check = "SELECT * FROM `test` WHERE name = :name";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':name', $name);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'test already exists!');
    } else {
        $sql = "INSERT INTO `test` (name, description, time, type, course_id, subject_id, teacher_id, start_date, end_date) VALUES (:name, :description, :duration, :type, :course_id, :subject_id, :teacher_id, :start_date, :end_date)";
                
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':duration', $duration);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':course_id', $course);
        $stmt->bindParam(':subject_id', $subject);
        $stmt->bindParam(':teacher_id', $teacher);
        $stmt->bindParam(':start_date', $startdate);
        $stmt->bindParam(':end_date', $enddate);
        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'test added successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to add test!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
