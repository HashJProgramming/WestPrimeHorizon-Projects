<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact us - VCFSIS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">VCFSIS</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">announcement</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">contact us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-target="#login" data-bs-toggle="modal">login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/contact-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Contact Me</h1><span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <form id="contactForm" name="sentMessage">
                    <div>
                        <div class="form-floating mb-3"><input class="form-control" type="text" id="name" required="" placeholder="Name"><label class="form-label" for="name">Name</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div>
                        <div class="form-floating mb-3"><input class="form-control" type="email" id="email" required="" placeholder="Email Address"><label class="form-label">Email Address</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div>
                        <div class="form-floating mb-3"><input class="form-control" type="tel" id="phone" required="" placeholder="Phone Number"><label class="form-label">Phone Number</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div>
                        <div class="form-floating mb-3"><textarea class="form-control" id="message" data-validation-required-message="Please enter a message." required="" placeholder="Message" style="height: 150px;"></textarea><label class="form-label">Message</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success"></div>
                    <div class="mb-3"><button class="btn btn-primary" id="sendMessageButton" type="submit">Send</button></div>
                </form>
            </div>
        </div>
    </div>
    <hr>
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>