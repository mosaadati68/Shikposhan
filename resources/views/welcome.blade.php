<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/img/kit/free/apple-icon.png">
    <link rel="icon" href="/img/kit/free/favicon.png">
    <title>
        Material Kit by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/material-kit.css?v=2.0.2">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets-for-demo/demo.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.css">
    <link rel="stylesheet" href="bower_components/ladda/dist/ladda-themeless.min.css">
    <!-- iframe removal -->
    <script>
        var baseUrl = "{{url('/')}}/";
        var csrfToken = "{{ csrf_token() }}";
    </script>
</head>

<body class="index-page" ng-controller="globalController" ng-cloak>
<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg " id="sectionsNav">
    <div class="container">
        <div class="col-4">
            <div class="navbar-translate">
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom"
                       href="https://twitter.com/CreativeTim" target="_blank"
                       data-original-title="دنبال کردن در تویتر">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom"
                       href="https://www.facebook.com/CreativeTim" target="_blank"
                       data-original-title="Like us on Facebook">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom"
                       href="https://www.instagram.com/CreativeTimOfficial" target="_blank"
                       data-original-title="Follow us on Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-8">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">apps</i> Components
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="./index.html" class="dropdown-item">
                                <i class="material-icons">layers</i> All Components
                            </a>
                            <a href="http://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html"
                               class="dropdown-item">
                                <i class="material-icons">content_paste</i> Documentation
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">
                            <i class="material-icons">home</i>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            ({{ $countCart }}) سبد خرید
                            <b class="caret"></b>
                            <div class="ripple-container"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @foreach($Cart as $itemCart)
                                <a href="#pablo" class="dropdown-item"  style="text-align: right;">
                                    <img class="img-circle" src="{{$itemCart->options->productImage}}" width="25" height="25"/>
                                    {{$itemCart->name}}
                                    <span class="badge badge-success">{{$itemCart->qty}}</span>

                                </a>
                            @endforeach
                            <div class="dropdown-divider"></div>
                            <a href="#pablo" class="dropdown-item">جمع کل: {{$total}} ریال</a>
                            <div class="dropdown-divider"></div>
                            <a href="#pablo" class="dropdown-item">One more separated link</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                            <div class="profile-photo-small">
                                <img src="/img/kit/faces/avatar.jpg" alt="Circle Image"
                                     class="rounded-circle img-fluid">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <h6 class="dropdown-header">Dropdown header</h6>
                            <a href="#pablo" class="dropdown-item">Me</a>
                            <a href="#pablo" class="dropdown-item">Settings and other stuff</a>
                            <a href="#pablo" class="dropdown-item">Sign out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true"
     style="background-image: url('/img/kit/bg2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1>Material Kit.</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div ng-view></div>
</div>
<!-- Classic Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <div class="modal-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean. A small river named Duden flows by their place and supplies it with the necessary
                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic
                    life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the
                    far World of Grammar.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link">Nice Button</button>
                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->
<footer class="footer ">
    <div class="container">
        <div class="subscribe-line subscribe-line-image" style="background-image: url('assets/img/bg7.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="text-center">
                            <h3 class="title">ایجاد اشتراک در خبرنامه ما</h3>
                            <p class="description">
                                Join our newsletter and get news in your inbox every week! We hate spam too, so no
                                worries about this.
                            </p>
                        </div>
                        <div class="card card-raised card-form-horizontal">
                            <div class="card-body ">
                                <form method="" action="">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6 ">
                                                    <span class="bmd-form-group"><div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">mail</i>
                                                            </span>
                                                        </div>
                                                        <input type="email" value="" placeholder="Your Email..."
                                                               class="form-control">
                                                    </div></span>
                                        </div>
                                        <div class="col-lg-4 col-md-6 ">
                                            <button type="button" class="btn btn-primary btn-block">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            , made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="/js/core/jquery.min.js"></script>
<script src="/js/core/popper.min.js"></script>
<script src="/js/bootstrap-material-design.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/js/plugins/nouislider.min.js"></script>
<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="/js/material-kit.js?v=2.0.2"></script>
<!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
<script src="/assets-for-demo/js/material-kit-demo.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
{{--<script type="text/javascript" src="bower_components/angular-animate/angular-animate.js"></script>--}}
<script src="bower_components/wow/dist/wow.min.js"></script>
<script type="text/javascript" src="bower_components/angular-route/angular-route.js"></script>
<script type="text/javascript" src="bower_components/angular-messages/angular-messages.js"></script>

<script type="text/javascript" src="bower_components/angular-bootstrap/ui-bootstrap.min.js"></script>
<script type="text/javascript" src="bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
<script type="text/javascript"
        src="bower_components/angular-bootstrap-lightbox/dist/angular-bootstrap-lightbox.min.js"></script>
<script type="text/javascript" src="bower_components/angular-cookies/angular-cookies.js"></script>
<script type="text/javascript" src="bower_components/dropzone/dist/dropzone.js"></script>
<script type="text/javascript" src="bower_components/zxcvbn/dist/zxcvbn.js"></script>
<script type="text/javascript" src="bower_components/angular-loading-bar/build/loading-bar.min.js"></script>
<script src="bower_components/ladda/js/spin.js"></script>
<script src="bower_components/ladda/js/ladda.js"></script>
<script src="bower_components/angular-ladda/dist/angular-ladda.min.js"></script>
<script src="bower_components/ngprogress/build/ngprogress.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-messages.min.js"></script>

<!-- Angular Material Library -->
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.js"></script>

<script type="text/javascript"
        src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="/js/rzslider.min.js"></script>

<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/controllers/homeController.js"></script>
<script type="text/javascript" src="js/controllers/authController.js"></script>
<script type="text/javascript" src="js/controllers/userController.js"></script>
<script type="text/javascript" src="js/controllers/navController.js"></script>
<script type="text/javascript" src="js/controllers/globalController.js"></script>
<script type="text/javascript" src="js/controllers/galleryController.js"></script>
<script type="text/javascript" src="js/controllers/cartController.js"></script>
<script type="text/javascript" src="js/controllers/dashboardController.js"></script>
<script type="text/javascript" src="js/controllers/testController.js"></script>
<script type="text/javascript" src="js/models/userModel.js"></script>
<script type="text/javascript" src="js/models/productModel.js"></script>
<script type="text/javascript" src="js/models/galleryModel.js"></script>
<script type="text/javascript" src="js/models/cartModel.js"></script>
<script type="text/javascript" src="js/models/servicesShared.js"></script>
<script>
    $(document).ready(function () {

        //init DateTimePickers
        materialKit.initFormExtendedDatetimepickers();

        // Sliders Init
        materialKit.initSliders();
    });
</script>
</body>

</html>