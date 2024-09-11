<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $response = array('status' => 'error', 'message' => 'Please fill in all fields!');
        echo json_encode($response);
        exit();
    }

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = $user['role'];
        $_SESSION['authenticated'] = true;
        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() + (86400 * 30), "/");
            setcookie('password', $password, time() + (86400 * 30), "/");
        } else {
            setcookie('username', '', time() - 3600, "/");
            setcookie('password', '', time() - 3600, "/");
        }

        $response = array('status' => 'success', 'message' => 'User authenticated successfully!', 'role' => $user['role']);
    } else {
        $response = array('status' => 'error', 'message' => 'Invalid username or password!');
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
