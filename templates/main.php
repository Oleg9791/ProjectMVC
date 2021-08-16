<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bee - Free Bootstrap 4 Template by Colorlib</title>
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
            <div class="col-lg-8 d-block">
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
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--            <span class="oi oi-menu"></span> Menu-->
        <!--        </button>-->
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

<? //= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "" ?>
<?php
if (!empty($_SESSION['warnings'])) {
    foreach ($_SESSION['warnings'] as $warning) {
        echo "<div class='alert alert-warning' role='alert'>$warning</div>";
    }
    $_SESSION['warnings'] = [];
}
?>
<?php
///**
// * @var $this App\View\View
// */
//$this->body();
//?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <!--    <div class="container">-->
    <!--        <div class="row mb-5">-->
    <!--            <div class="col-md">-->
    <!--                <div class="ftco-footer-widget mb-5">-->
    <!--                    <h2 class="ftco-heading-2 logo"><span class="flaticon-bee"></span>Bee.</h2>-->
    <!--                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
    <!--                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">-->
    <!--                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>-->
    <!--                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>-->
    <!--                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--            <div class="col-md">-->
    <!--                <div class="ftco-footer-widget mb-5 ml-md-4">-->
    <!--                    <h2 class="ftco-heading-2">Оказываемые услуги</h2>-->
    <!--                    <ul class="list-unstyled">-->
    <!--                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Строительство</a></li>-->
    <!--                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Ремонт</a></li>-->
    <!--                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Перепланировка</a></li>-->
    <!--                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Дизайн интерьера</a></li>-->
    <!--                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Внешний дизайн</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-5">-->
    <!--                <div class="ftco-footer-widget mb-5">-->
    <!--                    <h2 class="ftco-heading-2">Примеры выполненых работ</h2>-->
    <!--                    <div class="block-21 mb-4 d-flex">-->
    <!--                        <a class="blog-img mr-4" style="background-image: url(/public/images/image_1.jpg);"></a>-->
    <!--                        <div class="text">-->
    <!--                            <h3 class="heading"><a href="#"></a></h3>-->
    <!--                            <div class="meta">-->
    <!--                                <div><a href="#"><span class="icon-calendar"></span> Mar. 03, 2021</a></div>-->
    <!--                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>-->
    <!--                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="block-21 mb-5 d-flex">-->
    <!--                        <a class="blog-img mr-4" style="background-image: url(/public/images/image_2.jpg);"></a>-->
    <!--                        <div class="text">-->
    <!--                            <h3 class="heading"><a href="#"></a></h3>-->
    <!--                            <div class="meta">-->
    <!--                                <div><a href="#"><span class="icon-calendar"></span> Sep. 09, 2021</a></div>-->
    <!--                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>-->
    <!--                                <div><a href="#"><span class="icon-chat"></span> 24</a></div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md">-->
    <!--                <div class="ftco-footer-widget mb-5">-->
    <!--                    <h2 class="ftco-heading-2">Новостная рассылка</h2>-->
    <!--                    <form action="#" class="subscribe-form">-->
    <!--                        <div class="form-group">-->
    <!--                            <input type="text" class="form-control mb-2 text-center" placeholder="Введите ваш email">-->
    <!--                            <input type="submit" value="Подписаться" class="form-control submit px-3">-->
    <!--                        </div>-->
    <!--                    </form>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <div class="col-md-12 text-center">

        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            All rights reserved<i class="icon-airplay" aria-hidden="true"></i> Oleg Zaitcev <a
                    href="https://colorlib.com" target="_blank"></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
    <!--        </div>-->
    <!--    </div>-->
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