<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

$table = 'test_scores_view';
require('../connection.php');

// Table's primary key
$primaryKey = 'test_id';
$id = $_POST['id'];

$columns = array(
    array(
        'db' => 'test_id',
        'dt' => 0,
        'formatter' => function ($d, $row) {
            static $counter = 0;
            $counter++;
            return "$counter";
        }
    ),
    array('db' => 'student_name', 'dt' => 1),
    array('db' => 'score', 'dt' => 2),
);

// SQL server connection information
$sql_details = array(
    'user' => $username,
    'pass' => $password,
    'db'   => $database,
    'host' => $host
);


echo json_encode(
    SSP::complex($_POST, $sql_details, $table, $primaryKey, $columns, null, "test_id = $id")
);
