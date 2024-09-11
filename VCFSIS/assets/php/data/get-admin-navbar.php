<nav class="navbar navbar-expand-lg shadow navbar-light mb-4 bg-white">
    <div class="container-fluid">
        <img class="mx-2" src="assets/img/icon.png" width="60em">
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
                <li class="nav-item">
                    <a class="nav-link link-primary" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" data-bs-original-title="Here you can see your Dashboard." href="index.php" style="color:#393939;">
                        <i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" data-bss-tooltip="" data-bs-placement="right" data-bs-original-title="Here you can see your Clase Schedules.">Class Scheduling</a>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header text-center">Menu</h6>
                            <a class="dropdown-item" href="course.php"><i class="fas fa-book"></i> Course</a>
                            <a class="dropdown-item" href="subjects.php"><i class="fas fa-book"></i> Subject</a>
                            <a class="dropdown-item" href="room.php"><i class="fas fa-chalkboard-teacher"></i> Room</a>
                            <div class="dropdown-divider">

                            </div>
                            <a class="dropdown-item" href="schedule.php"><i class="fas fa-clock"></i> Schedule</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" data-bss-tooltip="" data-bs-placement="right" data-bs-original-title="Here you can see your Test/Quiz/Exam/Assessment.">Test Management</a>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header text-center">menu</h6>
                            <a class="dropdown-item" href="tests.php"><i class="fas fa-calendar-alt"></i> Test</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" data-bss-tooltip="" data-bs-placement="right" data-bs-original-title="Here you can see your Register Student, Create Users and Register Teacher.">User Management</a>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header text-center">menu</h6>
                            <a class="dropdown-item" href="student.php"><i class="fas fa-book"></i> Students</a>
                            <a class="dropdown-item" href="teacher.php"><i class="fas fa-chalkboard-teacher"></i> Teachers</a>
                            <a class="dropdown-item" href="users.php"><i class="fas fa-chalkboard-teacher"></i> Users</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav flex-nowrap ms-auto">
                <li class="nav-item dropdown no-arrow">
                    <div class="nav-item dropdown no-arrow">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <span class="me-2 text-gray-600 small"><?php echo strtoupper($_SESSION['username']); ?></span>
                            <img class="border rounded-circle img-profile" src="assets/img/icon.png" width="30px"></a>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                            <a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Change Password</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i> Activity log</a>
                            <div class="dropdown-divider">

                            </div>
                            <a class="dropdown-item" href="assets/php/functions/auth/sign-out.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>