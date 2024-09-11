<?php
require_once 'authentication.php';
$role = $_SESSION['role'];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    switch ($role) {
        case 'student':
            header('Location: ../../../student/index.php');
            exit();
        case 'teacher':
            header('Location: ../../../teacher/index.php');
            exit();
        case 'user':
            header('Location: ../../../dashboard.php');
            exit();
        case 'admin':
            header('Location: ../../../dashboard.php');
            exit();
        default:
            header('Location: ../../../index.php');
            exit();
    }
} else {
    echo 'You are not allowed to access this page!';
}
