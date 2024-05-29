<?php
$password_hash = password_hash('admin123', PASSWORD_DEFAULT);
echo $password_hash;

// if (password_verify('123', $password_hash)) {
//     echo 'correct password';
// } else {
//     echo 'incorrect password';
// }