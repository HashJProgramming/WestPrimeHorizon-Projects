<?php
include_once 'assets/php/connection.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    header('Location: dashboard.php');
}


$checkSql = "SELECT * FROM users WHERE `role` = 'admin'";
$checkStmt = $db->prepare($checkSql);
$checkStmt->execute();
$existingUser = $checkStmt->fetch(PDO::FETCH_ASSOC);
if ($existingUser) {
    header('Location: index.php');
    exit;
}


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Insert data into database
    $insertSql = "INSERT INTO users (`name`, `username`, `password`, `role`) VALUES ('Administrator', :username, :password, 'admin')"; 
    $insertStmt = $db->prepare($insertSql);
    $insertStmt->bindParam(':username', $username);
    $insertStmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));
    $insertStmt->execute();

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['role'] = $user['role'];
    $_SESSION['authenticated'] = true;

    header('Location: assets/php/init.php');

}

?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create Account - Class attendance and Assessment across platform technology</title>
    <meta name="description" content="Class attendance and Assessment across platform technology">
    <link rel="icon" type="image/png" sizes="480x480" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Set background color */
        }

        .container {
            margin-top: 50px; /* Adjust top margin for centering */
        }

        form {
            background-color: #fff; /* Set form background color */
            padding: 20px; /* Add some padding */
            border-radius: 10px; /* Add border radius for rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="container text-center">
                <h2 class="text-center">Create Account</h2>
                <p>Here you can create your administrator account</p>
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" id="create-account-btn" onclick="disableButton()">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/sweetalert2.js"></script>
    <script>
        function disableButton() {
            let timerInterval;
                Swal.fire({
                title: "Database Initialization",
                html: "When you press create account the system is going to generating data for the database. This process will take approximately 5 to 10 minutes. <br><br> I will close in <b></b> milliseconds and then you'll be redirected to the dashboard Please wait....",
                timer: 600000,
                timerProgressBar: true,
                showConfirmButton: false,
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                    timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                }
                }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log("I was closed by the timer");
                }
                });
        }
    </script>
</body>
</html>
