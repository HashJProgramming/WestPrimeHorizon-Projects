<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

$table = 'test_view';
require('../connection.php');

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'name', 'dt' => 1),
    array('db' => 'description', 'dt' => 2),
    array('db' => 'type', 'dt' => 3),
    array(
        'db' => 'time',
        'dt' => 4,
        'formatter' => function ($time) {
            $hours = floor($time / 60);
            $minutes = $time % 60;
            $formattedTime = '';

            if ($hours > 0) {
                $formattedTime .= $hours . 'h ';
            }

            if ($minutes > 0) {
                $formattedTime .= $minutes . 'mins';
            }

            return $formattedTime;
        }
    ),
    array(
        'db' => 'start_date', 'dt' => 5,
        'formatter' => function ($d, $row) {
            return date('F j, Y g:i A', strtotime($d));
        }
    ),
    array(
        'db' => 'end_date', 'dt' => 6,
        'formatter' => function ($d, $row) {
            return date('F j, Y g:i A', strtotime($d));
        }
    ),
    array('db' => 'course_name', 'dt' => 7),
    array('db' => 'subject_name', 'dt' => 8),
    array('db' => 'teacher_name', 'dt' => 9),
    array(
        'db' => 'id',
        'dt' => 10,
        'formatter' => function ($d, $row) {
            return '<td class="text-center">
                    <div class="dropdown">
                        <button
                        class="btn btn-primary dropdown-toggle"
                        aria-expanded="false"
                        data-bs-toggle="dropdown"
                        type="button"
                        >
                        Action
                        </button>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" data-bs-target="#score" data-id="' . $row['id'] . '" data-bs-toggle="modal">View Score</button>
                            <a class="dropdown-item" href="questions.php?id='. $row['id'] .'" type="button">View Questions</a>

                            <button class="dropdown-item" data-bs-target="#update"
                            data-id="' . $row['id'] . '" 
                            data-name="' . $row['name'] . '" 
                            data-description="' . $row['description'] . '" 
                            data-type="' . $row['type'] . '"
                            data-duration="' . $row['time'] . '"
                            data-course="' . $row['course_id'] . '"
                            data-subject="' . $row['subject_id'] . '"
                            data-teacher="' . $row['teacher_id'] . '"
                            data-startdate="' . $row['start_date'] . '"
                            data-enddate="' . $row['end_date'] . '"

                             data-bs-toggle="modal">Update</button>

                            <button class="dropdown-item" data-bs-target="#remove" data-id="' . $row['id'] . '" data-bs-toggle="modal">Delete</button>
                        </div>
                    </div>
                    </td>
        ';
        }
    ),
    array('db' => 'teacher_id', 'dt' => 11),
    array('db' => 'course_id', 'dt' => 12),
    array('db' => 'subject_id', 'dt' => 13)
);

// SQL server connection information
$sql_details = array(
    'user' => $username,
    'pass' => $password,
    'db'   => $database,
    'host' => $host
);


echo json_encode(
    SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns)
);
