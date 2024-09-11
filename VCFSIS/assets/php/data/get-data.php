<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

function teacher (){
    global $db;
    $sql = 'SELECT `id`, `firstname`, `middlename`, `lastname` FROM `teacher`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['firstname']?> <?=$row['middlename']?> <?=$row['lastname']?></option>
            <?php
    }
}

function teacher_select ($id){
    global $db;
    $sql = 'SELECT `id`, `firstname`, `middlename`, `lastname` FROM `teacher` WHERE `user_id` = '.$id;
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['firstname']?> <?=$row['middlename']?> <?=$row['lastname']?></option>
            <?php
    }
}

function student ($course){
    global $db;
    $sql = 'SELECT `id`, CONCAT(`lastname`, ", ", `firstname`, " ", `middlename`, " ", `suffix`) AS `fullname` FROM `students` WHERE `course_id` = '.$course;
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['fullname']?></option>
            <?php
    }
}

function course (){
    global $db;
    $sql = 'SELECT `id`, `name` FROM `course`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php
    }
}

function subject (){
    global $db;
    $sql = 'SELECT `id`, `name` FROM `subject`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php
    }
}

function room (){
    global $db;
    $sql = 'SELECT `id`, `name` FROM `room`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php
    }
}

function count_teacher() {
    global $db;
    $sql = 'SELECT `id` FROM `teacher`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    $count = count($results);

    return $count;
}


function count_course() {
    global $db;
    $sql = 'SELECT `id` FROM `course`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    $count = count($results);

    return $count;
}

function count_subject() {
    global $db;
    $sql = 'SELECT `id` FROM `subject`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    $count = count($results);

    return $count;
}

function count_room() {
    global $db;
    $sql = 'SELECT `id` FROM `room`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    $count = count($results);

    return $count;
}

function count_schedule() {
    global $db;
    $sql = 'SELECT `id` FROM `schedule`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    $count = count($results);

    return $count;
}

function count_users() {
    global $db;
    $sql = 'SELECT `id` FROM `users` WHERE `role` = "user"';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    $count = count($results);

    return $count;
}


function count_student() {
    global $db;
    $sql = 'SELECT `id` FROM `students`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    $count = count($results);

    return $count;
}


