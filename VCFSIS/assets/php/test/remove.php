<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    
    $sql = "DELETE FROM `test` WHERE id = :id";
                
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
        $response = array('status' => 'success', 'message' => 'Test deleted successfully!');
    } else {
        $response = array('status' => 'error', 'message' => 'Failed to delete test!');
    }
    
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
