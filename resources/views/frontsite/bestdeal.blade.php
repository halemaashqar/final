<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Tezkar- @yield('page-title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<br>
<br>
<br>


@include('frontsite.layouts.header')

<!-- best deals -->
<div id="b-deals" class="services-box main-timeline-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Best Gifts</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <figure class="effect-service">
                    <img src="images/d1.png" alt="" />
                    <figcaption>
                        <h2>Gifts wrapping</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-6 col-sm-6">
                <figure class="effect-service">
                    <img src="images/d2.png" alt="" />
                    <figcaption>
                        <h2>Flowers</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-6 col-sm-6">
                <figure class="effect-service">
                    <img src="images/d3.png" alt="" />
                    <figcaption>
                        <h2>Women Gifts</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-6 col-sm-6">
                <figure class="effect-service">
                    <img src="images/d4.png" alt="" />
                    <figcaption>
                        <h2>Men Gifts</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
            </div>

        </div>

    </div>
</div>
<!-- best deals -->

<!-- Start Footer -->
@include('frontsite.layouts.footer')
<!-- End Footer -->

<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/slider-index.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/images-loded.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

