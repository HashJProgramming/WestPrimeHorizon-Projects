<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
session_destroy();
header('Location: ../../../index.php');