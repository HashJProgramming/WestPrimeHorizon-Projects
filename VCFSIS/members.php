<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - VCFSIS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">VCFSIS</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="members.php">members</a></li>
                    <li class="nav-item"><a class="nav-link" href="announcement.php">announcement</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>VICTORY PAGADIAN</h1><span class="subheading">WE EXIST TO HONOR GOD, TO MAKE DISCIPLE</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Members</h3><button class="btn btn-primary btn-sm d-none d-sm-inline-block" type="button" data-bs-target="#add" data-bs-toggle="modal"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;ADD MEMBER</button>
        </div>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Member Info</p>
            </div>
            <div class="card-body">
                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact #</th>
                                <th>School</th>
                                <th>Age</th>
                                <th>Birthdate</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td class="text-center">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">option</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#" data-bs-target="#update" data-bs-toggle="modal">Update</a><a class="dropdown-item" href="#" data-bs-target="#remove" data-bs-toggle="modal">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td class="text-center">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">option</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#" data-bs-target="#update" data-bs-toggle="modal">Update</a><a class="dropdown-item" href="#" data-bs-target="#remove" data-bs-toggle="modal">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td class="text-center">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">option</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#" data-bs-target="#update" data-bs-toggle="modal">Update</a><a class="dropdown-item" href="#" data-bs-target="#remove" data-bs-toggle="modal">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td><strong>Contact #</strong></td>
                                <td><strong>School</strong></td>
                                <td><strong>Age</strong></td>
                                <td><strong>Birthdate</strong></td>
                                <td class="text-center"><strong>Action</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
                    </ul>
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;VCFSIS 2024</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" role="dialog" tabindex="-1" id="add">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Member</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Username" name="username"><label class="form-label">Name</label></div>
                        <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Username" name="username"><label class="form-label">Contact #</label></div>
                        <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Username" name="username"><label class="form-label">School</label></div>
                        <div class="form-floating mb-3"><input class="form-control form-control" placeholder="Username" name="username" type="date"><label class="form-label">Birthdate</label></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button">save</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="update">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Member</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Username" name="username"><label class="form-label">Name</label></div>
                        <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Username" name="username"><label class="form-label">Contact #</label></div>
                        <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Username" name="username"><label class="form-label">School</label></div>
                        <div class="form-floating mb-3"><input class="form-control form-control" placeholder="Username" name="username" type="date"><label class="form-label">Birthdate</label></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button">save</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="remove">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Member</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this member?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">No</button><button class="btn btn-danger" type="button">Yes</button></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>