<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"-->
<!--          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">-->
<!--    <link rel="stylesheet" href="public/css/style.css">-->

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
<!--            <div class="col-md-4 d-flex align-items-center py-4">-->
<!--                <a class="navbar-brand" href="index.html"><span class="flaticon-bee mr-1"></span>Bee.</a>-->
<!--            </div>-->
            <div class="col-lg-8 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <div class="text d-flex align-items-center">
                            <span>oleg9791@tut.by</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <div class="text d-flex align-items-center">
                            <span>Call Us: + 375 25 945 77 81</span>
                        </div>
                    </div>
<!--                    <div class="col-md topper d-flex align-items-center align-items-stretch">-->
<!--                        <p class="mb-0 d-flex d-block">-->
<!--                            <a href="#" class="btn btn-primary d-flex align-items-center justify-content-center">-->
<!--                                <span>Request A Quote</span>-->-->
<!--                            </a>-->
<!--                        </p>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
<!--        <form action="#" class="searchform order-lg-last">-->
<!--            <div class="form-group d-flex">-->
<!--                <input type="text" class="form-control pl-3" placeholder="Search">-->
<!--                <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>-->
<!--            </div>-->
<!--        </form>-->
        <div class="collapse navbar-collapse" id="ftco-nav">
<!--            <ul class="navbar-nav mr-auto">-->
<!--                <li class="nav-item active"><a href="index.html" class="nav-link pl-0">Home</a></li>-->
<!--                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>-->
<!--                <li class="nav-item"><a href="project.html" class="nav-link">Project</a></li>-->
<!--                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>-->
<!--                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>-->
<!--            </ul>-->
            <?php

            include "menu_" . ($_SESSION['user']['code'] ?? 'guest') . ".php";
            ?>

        </div>
    </div>
</nav>
<!-- END nav -->

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(/public/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate pl-md-5">
                    <!-- <h1 class="mb-4">Base Construction <span>Build The Future</span></h1> -->
                    <!-- <h3 class="subheading">A small river named Duden flows by their place and supplies it with the necessary regelialia</h3>
                    <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Request A Quote</a></p> -->
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(/public/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate pl-md-5">
                    <!-- <h1 class="mb-4">We Turn Your <span>Vision Into Reality</span></h1>
                    <h3 class="subheading">A small river named Duden flows by their place and supplies it with the necessary regelialia</h3> -->
<!--                    <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Request A Quote</a></p>-->
                </div>
            </div>
        </div>
    </div>
</section>


<!--<section class="ftco-section ftco-no-pt ftco-margin-top">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4">-->
<!--                <div class="request-quote">-->
<!--                     <div class="bg-primary py-4">-->
<!--                        <span class="subheading">Be Part of our Business</span>-->
<!--                        <h3>Request A Quote</h3>-->
<!--                    </div> -->-->
<!--                    <form action="#" class="request-form ftco-animate">-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" class="form-control" placeholder="First Name">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" class="form-control" placeholder="Last Name">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <div class="form-field">-->
<!--                                <div class="select-wrap">-->
<!--                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>-->
<!--                                    <select name="" id="" class="form-control">-->
<!--                                        <option value="">Select Your Services</option>-->
<!--                                        <option value="">Construction</option>-->
<!--                                        <option value="">Renovation</option>-->
<!--                                        <option value="">Interior Design</option>-->
<!--                                        <option value="">Exterior Design</option>-->
<!--                                        <option value="">Painting</option>-->
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" class="form-control" placeholder="Phone">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-8 wrap-about py-5 ftco-animate">-->
<!--                <div class="heading-section mb-5">-->
<!--                    <h2 class="mb-4">We Are Highly Recommendable Construction Firm</h2>-->
<!--                </div>-->
<!--                <div class="">-->
<!--                    <p class="mb-5">On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>-->
<!--                    <p><a href="#" class="btn btn-secondary px-5 py-3">Read More</a></p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="ftco-services ftco-no-pt">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center mb-5 pb-2">-->
<!--            <div class="col-md-8 text-center heading-section ftco-animate">-->
<!--                <span class="subheading">Services</span>-->
<!--                <h2 class="mb-4">Our Services</h2>-->
<!--                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">-->
<!--                <div class="media block-6 d-block text-center">-->
<!--                    <div class="icon d-flex justify-content-center align-items-center">-->
<!--                        <span class="flaticon-hook"></span>-->
<!--                    </div>-->
<!--                    <div class="media-body p-2 mt-3">-->
<!--                        <h3 class="heading">Construction</h3>-->
<!--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">-->
<!--                <div class="media block-6 d-block text-center">-->
<!--                    <div class="icon d-flex justify-content-center align-items-center">-->
<!--                        <span class="flaticon-skyline"></span>-->
<!--                    </div>-->
<!--                    <div class="media-body p-2 mt-3">-->
<!--                        <h3 class="heading">House Renovation</h3>-->
<!--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">-->
<!--                <div class="media block-6 d-block text-center">-->
<!--                    <div class="icon d-flex justify-content-center align-items-center">-->
<!--                        <span class="flaticon-stairs"></span>-->
<!--                    </div>-->
<!--                    <div class="media-body p-2 mt-3">-->
<!--                        <h3 class="heading">Painting</h3>-->
<!--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">-->
<!--                <div class="media block-6 d-block text-center">-->
<!--                    <div class="icon d-flex justify-content-center align-items-center">-->
<!--                        <span class="flaticon-home"></span>-->
<!--                    </div>-->
<!--                    <div class="media-body p-2 mt-3">-->
<!--                        <h3 class="heading">Architecture Design</h3>-->
<!--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!---->
<!--<section class="ftco-intro" style="background-image: url(/public/images/bg_3.jpg);" data-stellar-background-ratio="0.5">-->
<!--    <div class="overlay"></div>-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-9 text-center">-->
<!--                <h2>Lets Build Your Dream Together</h2>-->
<!--                <p>We can manage your dream building A small river named Duden flows by their place</p>-->
<!--                <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Know more about us</a></p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="ftco-section">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center mb-5 pb-2">-->
<!--            <div class="col-md-8 text-center heading-section ftco-animate">-->
<!--                <span class="subheading">Team</span>-->
<!--                <h2 class="mb-4">Our Professional Team</h2>-->
<!--                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="staff">-->
<!--                    <div class="img-wrap d-flex align-items-stretch">-->
<!--                        <div class="img align-self-stretch" style="background-image: url(/public/images/team-1.jpg);"></div>-->
<!--                    </div>-->
<!--                    <div class="text pt-3 text-center">-->
<!--                        <h3>Daren Wilson</h3>-->
<!--                        <span class="position mb-2">Head Engineer</span>-->
<!--                        <div class="faded">-->
<!--                             <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->-->
<!--                            <ul class="ftco-social text-center">-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="staff">-->
<!--                    <div class="img-wrap d-flex align-items-stretch">-->
<!--                        <div class="img align-self-stretch" style="background-image: url(/public/images/team-2.jpg);"></div>-->
<!--                    </div>-->
<!--                    <div class="text pt-3 text-center">-->
<!--                        <h3>Warren Parker</h3>-->
<!--                        <span class="position mb-2">Ass. Engineer</span>-->
<!--                        <div class="faded">-->
<!--                             <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->-->
<!--                            <ul class="ftco-social text-center">-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="staff">-->
<!--                    <div class="img-wrap d-flex align-items-stretch">-->
<!--                        <div class="img align-self-stretch" style="background-image: url(/public/images/team-3.jpg);"></div>-->
<!--                    </div>-->
<!--                    <div class="text pt-3 text-center">-->
<!--                        <h3>Eva Gustavo</h3>-->
<!--                        <span class="position mb-2">Engineer</span>-->
<!--                        <div class="faded">-->
<!--                             <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->-->
<!--                            <ul class="ftco-social text-center">-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="staff">-->
<!--                    <div class="img-wrap d-flex align-items-stretch">-->
<!--                        <div class="img align-self-stretch" style="background-image: url(/public/images/team-4.jpg);"></div>-->
<!--                    </div>-->
<!--                    <div class="text pt-3 text-center">-->
<!--                        <h3>Mike Henderson</h3>-->
<!--                        <span class="position mb-2">Architect</span>-->
<!--                        <div class="faded">-->
<!--                            <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->-->
<!--                            <ul class="ftco-social text-center">-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>-->
<!--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="ftco-section ftco-no-pt ftco-no-pb">-->
<!--    <div class="container-fluid p-0">-->
<!--        <div class="row no-gutters justify-content-center mb-5 pb-2">-->
<!--            <div class="col-md-6 text-center heading-section ftco-animate">-->
<!--                <span class="subheading">Projects</span>-->
<!--                <h2 class="mb-4">Featured Projects</h2>-->
<!--                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row no-gutters">-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="project">-->
<!--                    <img src="/public/images/work-1.jpg" class="img-fluid" alt="Colorlib Template">-->
<!--                    <div class="text">-->
<!--                        <span>Commercial</span>-->
<!--                        <h3><a href="project.html">San Francisco Tower</a></h3>-->
<!--                    </div>-->
<!--                    <a href="/public/images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">-->
<!--                        <span class="icon-expand"></span>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="project">-->
<!--                    <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">-->
<!--                    <div class="text">-->
<!--                        <span>Commercial</span>-->
<!--                        <h3><a href="project.html">San Francisco Tower</a></h3>-->
<!--                    </div>-->
<!--                    <a href="/public/images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">-->
<!--                        <span class="icon-expand"></span>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="project">-->
<!--                    <img src="/public/images/work-3.jpg" class="img-fluid" alt="Colorlib Template">-->
<!--                    <div class="text">-->
<!--                        <span>Commercial</span>-->
<!--                        <h3><a href="project.html">San Francisco Tower</a></h3>-->
<!--                    </div>-->
<!--                    <a href="/public/images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">-->
<!--                        <span class="icon-expand"></span>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="project">-->
<!--                    <img src="/public/images/work-4.jpg" class="img-fluid" alt="Colorlib Template">-->
<!--                    <div class="text">-->
<!--                        <span>Commercial</span>-->
<!--                        <h3><a href="project.html">San Francisco Tower</a></h3>-->
<!--                    </div>-->
<!--                    <a href="/public/images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">-->
<!--                        <span class="icon-expand"></span>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="project">-->
<!--                    <img src="/public/images/work-5.jpg" class="img-fluid" alt="Colorlib Template">-->
<!--                    <div class="text">-->
<!--                        <span>Commercial</span>-->
<!--                        <h3><a href="project.html">San Francisco Tower</a></h3>-->
<!--                    </div>-->
<!--                    <a href="/public/images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">-->
<!--                        <span class="icon-expand"></span>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="project">-->
<!--                    <img src="/public/images/work-6.jpg" class="img-fluid" alt="Colorlib Template">-->
<!--                    <div class="text">-->
<!--                        <span>Resedencial</span>-->
<!--                        <h3><a href="project.html">Rose Villa House</a></h3>-->
<!--                    </div>-->
<!--                    <a href="/public/images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">-->
<!--                        <span class="icon-expand"></span>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="project">-->
<!--                    <img src="/public/images/work-7.jpg" class="img-fluid" alt="Colorlib Template">-->
<!--                    <div class="text">-->
<!--                        <span>Commercial</span>-->
<!--                        <h3><a href="project.html">San Francisco Tower</a></h3>-->
<!--                    </div>-->
<!--                    <a href="/public/images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">-->
<!--                        <span class="icon-expand"></span>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 ftco-animate">-->
<!--                <div class="project">-->
<!--                    <img src="/public/images/work-8.jpg" class="img-fluid" alt="Colorlib Template">-->
<!--                    <div class="text">-->
<!--                        <span>Commercial</span>-->
<!--                        <h3><a href="project.html">San Francisco Tower</a></h3>-->
<!--                    </div>-->
<!--                    <a href="/public/images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">-->
<!--                        <span class="icon-expand"></span>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section class="ftco-counter img" id="section-counter" style="background-image: url(/public/images/bg_3.jpg);" data-stellar-background-ratio="0.5">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                <div class="block-18 d-flex">-->
<!--                    <div class="text d-flex align-items-center">-->
<!--                        <strong class="number" data-number="30">0</strong>-->
<!--                    </div>-->
<!--                    <div class="text-2">-->
<!--                        <span>Years of <br>Experienced</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                <div class="block-18 d-flex">-->
<!--                    <div class="text d-flex align-items-center">-->
<!--                        <strong class="number" data-number="1500">0</strong>-->
<!--                    </div>-->
<!--                    <div class="text-2">-->
<!--                        <span>Project <br>Successful</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                <div class="block-18 d-flex">-->
<!--                    <div class="text d-flex align-items-center">-->
<!--                        <strong class="number" data-number="100">0</strong>-->
<!--                    </div>-->
<!--                    <div class="text-2">-->
<!--                        <span>Professional <br>Expert</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                <div class="block-18 d-flex">-->
<!--                    <div class="text d-flex align-items-center">-->
<!--                        <strong class="number" data-number="300">0</strong>-->
<!--                    </div>-->
<!--                    <div class="text-2">-->
<!--                        <span>Happy <br>Customers</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="ftco-section testimony-section">-->
<!--    <div class="container">-->
<!--        <div class="row ftco-animate">-->
<!--            <div class="col-md-6 col-lg-6 col-xl-4">-->
<!--                <div class="heading-section ftco-animate">-->
<!--                    <span class="subheading">Services</span>-->
<!--                    <h2 class="mb-4">Experience Great Services</h2>-->
<!--                </div>-->
<!--                <div class="services-flow">-->
<!--                    <div class="services-2 p-4 d-flex ftco-animate">-->
<!--                        <div class="icon">-->
<!--                            <span class="flaticon-engineer"></span>-->
<!--                        </div>-->
<!--                        <div class="text">-->
<!--                            <h3>Expert &amp; Professional</h3>-->
<!--                            <p>Separated they live in. A small river named Duden flows</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="services-2 p-4 d-flex ftco-animate">-->
<!--                        <div class="icon">-->
<!--                            <span class="flaticon-engineer-1"></span>-->
<!--                        </div>-->
<!--                        <div class="text">-->
<!--                            <h3>High Quality Work</h3>-->
<!--                            <p>Separated they live in. A small river named Duden flows</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="services-2 p-4 d-flex ftco-animate">-->
<!--                        <div class="icon">-->
<!--                            <span class="flaticon-engineer-2"></span>-->
<!--                        </div>-->
<!--                        <div class="text">-->
<!--                            <h3>24/7 Help Support</h3>-->
<!--                            <p>Separated they live in. A small river named Duden flows</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xl-1 d-xl-block d-none"></div>-->
<!--            <div class="col-md-6 col-lg-6 col-xl-7">-->
<!--                <div class="heading-section ftco-animate mb-5">-->
<!--                    <span class="subheading">Testimonials</span>-->
<!--                    <h2 class="mb-4">Satisfied Customer</h2>-->
<!--                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>-->
<!--                </div>-->
<!--                <div class="carousel-testimony owl-carousel">-->
<!--                    <div class="item">-->
<!--                        <div class="testimony-wrap">-->
<!--                            <div class="text bg-light p-4">-->
<!--                  	<span class="quote d-flex align-items-center justify-content-center">-->
<!--                      <i class="icon-quote-left"></i>-->
<!--                    </span>-->
<!--                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
<!--                                <p class="name">Racky Henderson</p>-->
<!--                                <span class="position">Farmer</span>-->
<!--                            </div>-->
<!--                            <div class="user-img" style="background-image: url(/public/images/person_1.jpg)">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="testimony-wrap">-->
<!--                            <div class="text bg-light p-4">-->
<!--                  	<span class="quote d-flex align-items-center justify-content-center">-->
<!--                      <i class="icon-quote-left"></i>-->
<!--                    </span>-->
<!--                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
<!--                                <p class="name">Henry Dee</p>-->
<!--                                <span class="position">Businessman</span>-->
<!--                            </div>-->
<!--                            <div class="user-img" style="background-image: url(/public/images/person_2.jpg)">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="testimony-wrap">-->
<!--                            <div class="text bg-light p-4">-->
<!--                  	<span class="quote d-flex align-items-center justify-content-center">-->
<!--                      <i class="icon-quote-left"></i>-->
<!--                    </span>-->
<!--                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
<!--                                <p class="name">Mark Huff</p>-->
<!--                                <span class="position">Students</span>-->
<!--                            </div>-->
<!--                            <div class="user-img" style="background-image: url(/public/images/person_3.jpg)">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="testimony-wrap">-->
<!--                            <div class="text bg-light p-4">-->
<!--                  	<span class="quote d-flex align-items-center justify-content-center">-->
<!--                      <i class="icon-quote-left"></i>-->
<!--                    </span>-->
<!--                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
<!--                                <p class="name">Rodel Golez</p>-->
<!--                                <span class="position">Striper</span>-->
<!--                            </div>-->
<!--                            <div class="user-img" style="background-image: url(/public/images/person_4.jpg)">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="testimony-wrap">-->
<!--                            <div class="text bg-light p-4">-->
<!--                  	<span class="quote d-flex align-items-center justify-content-center">-->
<!--                      <i class="icon-quote-left"></i>-->
<!--                    </span>-->
<!--                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
<!--                                <p class="name">Ken Bosh</p>-->
<!--                                <span class="position">Manager</span>-->
<!--                            </div>-->
<!--                            <div class="user-img" style="background-image: url(/public/images/person_1.jpg)">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!---->
<!--<section class="ftco-section bg-light">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center mb-5 pb-2">-->
<!--            <div class="col-md-8 text-center heading-section ftco-animate">-->
<!--                <span class="subheading">Blog</span>-->
<!--                <h2 class="mb-4">Recent Blog</h2>-->
<!--                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-4 ftco-animate">-->
<!--                <div class="blog-entry">-->
<!--                    <a href="blog-single.html" class="block-20" style="background-image: url('/public/images/image_1.jpg');">-->
<!--                        <div class="meta-date text-center p-2">-->
<!--                            <span class="day">07</span>-->
<!--                            <span class="mos">February</span>-->
<!--                            <span class="yr">2019</span>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <div class="text pt-4">-->
<!--                        <h3 class="heading"><a href="#">Office of the Florida</a></h3>-->
<!--                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
<!--                        <div class="d-flex align-items-center mt-4">-->
<!--                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>-->
<!--                            <p class="ml-auto mb-0">-->
<!--                                <a href="#" class="mr-2">Admin</a>-->
<!--                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 ftco-animate">-->
<!--                <div class="blog-entry">-->
<!--                    <a href="blog-single.html" class="block-20" style="background-image: url('/public/images/image_2.jpg');">-->
<!--                        <div class="meta-date text-center p-2">-->
<!--                            <span class="day">07</span>-->
<!--                            <span class="mos">February</span>-->
<!--                            <span class="yr">2019</span>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <div class="text pt-4">-->
<!--                        <h3 class="heading"><a href="#">Office of the Florida</a></h3>-->
<!--                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
<!--                        <div class="d-flex align-items-center mt-4">-->
<!--                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>-->
<!--                            <p class="ml-auto mb-0">-->
<!--                                <a href="#" class="mr-2">Admin</a>-->
<!--                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 ftco-animate">-->
<!--                <div class="blog-entry">-->
<!--                    <a href="blog-single.html" class="block-20" style="background-image: url('/public/images/image_3.jpg');">-->
<!--                        <div class="meta-date text-center p-2">-->
<!--                            <span class="day">07</span>-->
<!--                            <span class="mos">February</span>-->
<!--                            <span class="yr">2019</span>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <div class="text pt-4">-->
<!--                        <h3 class="heading"><a href="#">Office of the Florida</a></h3>-->
<!--                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
<!--                        <div class="d-flex align-items-center mt-4">-->
<!--                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>-->
<!--                            <p class="ml-auto mb-0">-->
<!--                                <a href="#" class="mr-2">Admin</a>-->
<!--                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<?//= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "" ?>
<?php
if (!empty($_SESSION['warnings'])) {
    foreach ($_SESSION['warnings'] as $warning) {
        echo "<div class='alert alert-warning' role='alert'>$warning</div>";
    }
    $_SESSION['warnings'] = [];
}
?>
<?php
/**
 * @var $this App\View\View
 */
$this->body();
?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 logo"><span class="flaticon-bee"></span>Bee.</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Construction</a></li>
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Renovation</a></li>
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Painting</a></li>
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Interior Design</a></li>
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Exterior Design</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Recent Blog</h2>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(/public/images/image_1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Feb. 07, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-5 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(/public/images/image_2.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Feb. 07, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Newsletter</h2>
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="form-control submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"-->
<!--        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"-->
<!--        crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"-->
<!--        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"-->
<!--        crossorigin="anonymous"></script>-->
</body>
</html>