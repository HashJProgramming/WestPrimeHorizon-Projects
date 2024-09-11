<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)
require_once('ssp.class.php');

$database = 'vcfsis';
$username = 'root';
$password = 'hash';
$host = 'localhost';

$db = new PDO("mysql:host=$host", $username, $password);
$query = "CREATE DATABASE IF NOT EXISTS $database";
try {
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec($query);
    $db->exec("USE $database");
    $db->exec("CREATE TABLE IF NOT EXISTS `users` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL,
                `username` VARCHAR(255) NOT NULL,
                `password` VARCHAR(255) NOT NULL,
                `role` VARCHAR(255) DEFAULT 'user',
                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
            );
        ");

    $db->exec("CREATE TABLE IF NOT EXISTS `members` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(255) NOT NULL,
            `school` VARCHAR(255) NOT NULL,
            `birthdate` VARCHAR(255) NOT NULL,
            `phone` VARCHAR(255) NOT NULL,
            `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`)
        );
    ");

    $db->exec("CREATE TABLE IF NOT EXISTS `announcement` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL,
                `descriptions` VARCHAR(255) NOT NULL,
                `venue` VARCHAR(255) NOT NULL,
                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
            );
        ");

    $db->exec("CREATE TABLE IF NOT EXISTS `student_attendance` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `member_id` INT NOT NULL,
            `announcement_id` INT NOT NULL,
            `status` ENUM('Present', 'Absent') NOT NULL DEFAULT 'Absent',
            `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            FOREIGN KEY (`member_id`) REFERENCES `members`(`id`) ON DELETE CASCADE,
            FOREIGN KEY (`announcement_id`) REFERENCES `announcement`(`id`) ON DELETE CASCADE
        );
    ");

    $db->beginTransaction();

    $stmt = $db->prepare("SELECT COUNT(*) FROM `users` WHERE `username` = 'admin'");
    $stmt->execute();
    $userExists = $stmt->fetchColumn();

    if (!$userExists && basename($_SERVER['PHP_SELF']) != 'create-account.php') {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        header('Location: create-account.php');
        exit();
    }

    $db->commit();
} catch (PDOException $e) {
    die("Error creating database: " . $e->getMessage());
    $db = null;
}
