<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

$table = 'student_view';
require('../connection.php');

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'user_username', 'dt' => 1),
    array('db' => 'course_name', 'dt' => 2),
    array('db' => 'firstname', 'dt' => 3),
    array('db' => 'lastname', 'dt' => 4),
    array('db' => 'middlename', 'dt' => 5),
    array('db' => 'suffix', 'dt' => 6),
    array('db' => 'birthdate', 'dt' => 7),
    array('db' => 'sex', 'dt' => 8),
    array('db' => 'region', 'dt' => 9),
    array('db' => 'province', 'dt' => 10),
    array('db' => 'municipality', 'dt' => 11),
    array('db' => 'barangay', 'dt' => 12),
    array('db' => 'address', 'dt' => 13),
    array('db' => 'phone', 'dt' => 14),
    array('db' => 'guardian', 'dt' => 15),
    array('db' => 'guardian_phone', 'dt' => 16),
    array('db' => 'guardian_address', 'dt' => 17),
    array('db' => 'guardian_relationship', 'dt' => 18),
    array('db' => 'guardian_occupation', 'dt' => 19),
    array('db' => 'elementary', 'dt' => 20),
    array('db' => 'elementary_address', 'dt' => 21),
    array('db' => 'elementary_year_graduated', 'dt' => 22),
    array('db' => 'secondary', 'dt' => 23),
    array('db' => 'secondary_address', 'dt' => 24),
    array('db' => 'secondary_year_graduated', 'dt' => 25),
    array('db' => 'school_last_attended', 'dt' => 26),
    array('db' => 'school_last_attended_address', 'dt' => 27),
    array('db' => 'school_last_attended_year_graduated', 'dt' => 28),
    array('db' => 'new_student', 'dt' => 29),
    array('db' => 'school_year', 'dt' => 30),
    array('db' => 'status', 'dt' => 31),
    array(
        'db' => 'created_at', 'dt' => 32,
        'formatter' => function ($d, $row) {
            return date('F j, Y g:i A', strtotime($d));
        }
    ),
    array(
        'db' => 'id',
        'dt' => 33,
        'formatter' => function ($d, $row) {
            return '<td class="text-center">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                        Action
                        </button>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" data-bs-target="#update" 
                                    data-id="' . $row['id'] . '" 
                                    data-user_username="' . $row['user_username'] . '"
                                    data-course_name="' . $row['course_name'] . '"
                                    data-firstname="' . $row['firstname'] . '"
                                    data-middlename="' . $row['middlename'] . '"
                                    data-lastname="' . $row['lastname'] . '"
                                    data-suffix="' . $row['suffix'] . '"
                                    data-birthdate="' . $row['birthdate'] . '"
                                    data-sex="' . $row['sex'] . '"
                                    data-region="' . $row['region'] . '"
                                    data-province="' . $row['province'] . '"
                                    data-municipality="' . $row['municipality'] . '"
                                    data-barangay="' . $row['barangay'] . '"
                                    data-address="' . $row['address'] . '"
                                    data-phone="' . $row['phone'] . '"
                                    data-guardian="' . $row['guardian'] . '"
                                    data-guardian_phone="' . $row['guardian_phone'] . '"
                                    data-guardian_address="' . $row['guardian_address'] . '"
                                    data-guardian_relationship="' . $row['guardian_relationship'] . '"
                                    data-guardian_occupation="' . $row['guardian_occupation'] . '"
                                    data-elementary="' . $row['elementary'] . '"
                                    data-elementary_address="' . $row['elementary_address'] . '"
                                    data-elementary_year_graduated="' . $row['elementary_year_graduated'] . '"
                                    data-secondary="' . $row['secondary'] . '"
                                    data-secondary_address="' . $row['secondary_address'] . '"
                                    data-secondary_year_graduated="' . $row['secondary_year_graduated'] . '"
                                    data-school_last_attended="' . $row['school_last_attended'] . '"
                                    data-school_last_attended_address="' . $row['school_last_attended_address'] . '"
                                    data-school_last_attended_year_graduated="' . $row['school_last_attended_year_graduated'] . '"
                                    data-new_student="' . $row['new_student'] . '"
                                    data-school_year="' . $row['school_year'] . '"
                                    data-status="' . $row['status'] . '"
                                    data-bs-toggle="modal">Update</button>
                            <button class="dropdown-item" data-bs-target="#remove" data-id="' . $row['id'] . '" data-bs-toggle="modal">Delete</button>
                        </div>
                    </div>
                    </td>';
        }
    )
);

// SQL server connection information
$sql_details = array(
    'user' => $username,
    'pass' => $password,
    'db'   => $database,
    'host' => $host
);

echo json_encode(
    SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, null, null)
);
