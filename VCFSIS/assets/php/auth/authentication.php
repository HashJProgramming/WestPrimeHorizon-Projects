<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)
$localIP = getHostByName(getHostName());
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: ./index.php');
}


function checkAccess($requiredRoles)
{
    if ((!in_array($_SESSION['role'], $requiredRoles))) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $response = [
                'status' => 'error',
                'message' => 'Access Denied! You do not have permission to access this page!',
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
?>
            <!doctype html>
            <html lang="en">

            <head>
                <title>Alert</title>
                <!-- Required meta tags -->
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

                <!-- Bootstrap CSS v5.2.1 -->
                <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
            </head>

            <body>
                <nav class="navbar navbar-expand-lg shadow navbar-light mb-4 bg-white">
                    <div class="container-fluid"><img class="mx-2" src="../assets/img/icon.png" width="60em">
                        <a class="navbar-brand d-flex align-items-center" href="/">
                            <span class="d-none d-md-block">
                                <strong>Class attendance and Assessment across platform technology</strong>
                            </span>
                            <span class="d-block d-md-none">
                                <strong>CAAAPT</strong>
                            </span>
                        </a>
                        <button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler">
                            <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="navbar-nav mx-auto">
                               
                            </ul>
                            <ul class="navbar-nav flex-nowrap ms-auto">
                                <li class="nav-item dropdown no-arrow">
                                    <div class="nav-item dropdown no-arrow">
                                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                            <span class="me-2 text-gray-600 small"><?php echo strtoupper($_SESSION['username']); ?></span>
                                            <img class="border rounded-circle img-profile" src="../assets/img/icon.png" width="30px">
                                        </a>
                                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">

                                            <a class="dropdown-item" href="index.php">
                                                <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>
                                                Home</a>


                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item" href="../assets/php/functions/auth/sign-out.php">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>
                                                Logout</a>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="p-5">
                    <div class="container">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Access Denied!</h4>
                            <p>You do not have permission to access this page!</p>
                            <hr>
                            <p class="mb-0">Please contact the administrator for further assistance.</p>
                        </div>
                    </div>
                </div>
                <script src="assets/js/jquery.min.js"></script>
                <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            </body>

            </html>

<?php
        }

        exit();
    }
}

?>