<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEB-SERVICE HCS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="/public/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/animate.css">

    <link rel="stylesheet" href="/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/public/css/magnific-popup.css">

    <link rel="stylesheet" href="/public/css/aos.css">

    <link rel="stylesheet" href="/public/css/ionicons.min.css">

    <link rel="stylesheet" href="/public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/public/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/public/css/flaticon.css">
    <link rel="stylesheet" href="/public/css/icomoon.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
<div class="bg-top navbar-light">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                        <div class="text d-flex align-items-center">
                            <span>oleg9791@tut.by</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                        <div class="text d-flex align-items-center">
                            <span>Call Us: + 375 25 945 77 81</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                    class="icon-user"></span></div>
                        <div class="text d-flex align-items-center">
                            <span><a href="https://www.linkedin.com/in/oleg-zaytsev-87a64521a/">Linkedin</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <div class="collapse navbar-collapse" id="ftco-nav">
            <?php
            include "menu_" . ($_SESSION['user']['code'] ?? 'guest') . ".php";
            ?>
        </div>
    </div>
</nav>
<?php
/**
 * @var $this App\View\View
 */
$this->body();
?>
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(/public/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(/public/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        </div>
    </div>
</section>

<?php
if (!empty($_SESSION['warnings'])) {
    foreach ($_SESSION['warnings'] as $warning) {
        echo "<div class='alert alert-warning' role='alert'>$warning</div>";
    }
    $_SESSION['warnings'] = [];
}
?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="col-md-12 text-center">

        <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            All rights reserved<i class="icon-airplay" aria-hidden="true"></i> Oleg Zaitcev <a
                    href="https://colorlib.com" target="_blank"></a>
            </p>
    </div>
</footer>

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

<script src="/public/js/jquery.min.js"></script>
<script src="/public/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/public/js/popper.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/jquery.easing.1.3.js"></script>
<script src="/public/js/jquery.waypoints.min.js"></script>
<script src="/public/js/jquery.stellar.min.js"></script>
<script src="/public/js/owl.carousel.min.js"></script>
<script src="/public/js/jquery.magnific-popup.min.js"></script>
<script src="/public/js/aos.js"></script>
<script src="/public/js/jquery.animateNumber.min.js"></script>
<script src="/public/js/bootstrap-datepicker.js"></script>
<script src="/public/js/jquery.timepicker.min.js"></script>
<script src="/public/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/public/js/google-map.js"></script>
<script src="/public/js/main.js"></script>

</body>
</html>
</body>
</html>