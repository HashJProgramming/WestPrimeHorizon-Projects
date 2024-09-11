<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $type = $_POST['type'];
    $course = $_POST['course'];
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];

    $sql_check = "SELECT * FROM `test` WHERE name = :name AND id != :id";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':name', $name);
    $stmt_check->bindParam(':id', $id);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'test already exists!');
    } else {
        $sql = "UPDATE `test` SET name = :name, description = :description, time = :duration, type = :type, course_id = :course_id, subject_id = :subject_id, teacher_id = :teacher_id, start_date = :start_date, end_date = :end_date WHERE id = :id";
                
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
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
            $response = array('status' => 'success', 'message' => 'test updated successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update test!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
