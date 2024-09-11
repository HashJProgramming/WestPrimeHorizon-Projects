<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)
    set_time_limit(6000);
    require_once 'connection.php';
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec($query);
        $db->exec("USE $database");
        // $db->exec("");
        // $db->beginTransaction();
        // $db->commit();
        header("Location: ../../../index.php");
    } catch(PDOException $e) {
        die("Error creating database: " . $e->getMessage());
        $db = null;
    }
?>