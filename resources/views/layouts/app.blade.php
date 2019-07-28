<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Job Portal</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>
<header id="home" class="hero-area">
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
            <div class="theme-header clearfix">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item active" href="index.html">Home 1</a></li>
                                <li><a class="dropdown-item" href="index-2.html">Home 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about.html">About</a></li>
                                <li><a class="dropdown-item" href="job-page.html">Job Page</a></li>
                                <li><a class="dropdown-item" href="job-details.html">Job Details</a></li>
                                <li><a class="dropdown-item" href="resume.html">Resume Page</a></li>
                                <li><a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                <li><a class="dropdown-item" href="pricing.html">Pricing Tables</a></li>
                                <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Candidates
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="browse-jobs.html">Browse Jobs</a></li>
                                <li><a class="dropdown-item" href="browse-categories.html">Browse Categories</a></li>
                                <li><a class="dropdown-item" href="add-resume.html">Add Resume</a></li>
                                <li><a class="dropdown-item" href="manage-resumes.html">Manage Resumes</a></li>
                                <li><a class="dropdown-item" href="job-alerts.html">Job Alerts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Employers
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="post-job.html">Add Job</a></li>
                                <li><a class="dropdown-item" href="manage-jobs.html">Manage Jobs</a></li>
                                <li><a class="dropdown-item" href="manage-applications.html">Manage Applications</a></li>
                                <li><a class="dropdown-item" href="browse-resumes.html">Browse Resumes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog.html">Blog - Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-full-width.html"> Blog full width</a></li>
                                <li><a class="dropdown-item" href="single-post.html">Blog Single Post</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Sign In</a>
                        </li>
                        <li class="button-group">
                            <a href="post-job.html" class="button btn btn-common">Post a Job</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu" data-logo="assets/img/logo-mobile.png"></div>
    </nav>
    <div class="container">
        <div class="row space-100">
            <div class="col-lg-7 col-md-12 col-xs-12">
                <div class="contents">
                    <h2 class="head-title">Find the <br> job that fits your life</h2>
                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non.</p>
                    <div class="job-search-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Job Title or Company Name">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select>
                                                    <option value="none">Locations</option>
                                                    <option value="none">New York</option>
                                                    <option value="none">California</option>
                                                    <option value="none">Washington</option>
                                                    <option value="none">Birmingham</option>
                                                    <option value="none">Chicago</option>
                                                    <option value="none">Phoenix</option>
                                                </select>
                                            </label>
                                        </div>
                                        <i class="lni-map-marker"></i>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-xs-12">
                                    <button type="submit" class="button"><i class="lni-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12">
                <div class="intro-img">
                    <img src="assets/img/intro.png" alt="">
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="widget">
                        <div class="footer-logo"><img src="{{ asset('assets/img/logo-footer.png') }}" alt=""></div>
                        <div class="textwidget">
                            <p>Sed consequat sapien faus quam bibendum convallis quis in nulla. Pellentesque volutpat odio eget diam cursus semper.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Quick Links</h3>
                        <ul class="menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">License</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <ul class="menu">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Refferal Terms</a></li>
                            <li><a href="#">Product License</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Subscribe Now</h3>
                        <p>Sed consequat sapien faus quam bibendum convallis.</p>
                        <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                            <div class="form-group is-empty">
                                <input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Enter Email..." required="">
                                <button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-envelope"></i></button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                        <ul class="mt-3 footer-social">
                            <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p>Designed and Developed by <a href="#" rel="nofollow">Uzzal kar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
</a>
<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>

<script src="{{ asset('assets/js/jquery-min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
