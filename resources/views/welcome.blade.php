<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pixner.net/behoof/demo/home-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 16:33:01 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Behoof - Isometric Investment Website HTML Templates</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>

    <!-- preloader start -->
    <div class="preloader">
        <div class="preloader-box">
            <div>L</div>
            <div>O</div>
            <div>A</div>
            <div>D</div>
            <div>I</div>
            <div>N</div>
            <div>G</div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- signin-area start -->
    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bdr-radius">
                <div class="signin-wrapper">
                    <div class="signin-wrapper-header text-center">
                        <div class="logo"><img src="{{ asset('assets/images/elements/logo-icon.png') }}"
                                alt="image"></div>
                        <h3 class="title">Login with</h3>
                        <p>Welcome back, please sign in below</p>
                    </div>
                    <form action="{{ route('login') }}" method="POST" class="signin-form">
                        @csrf
                        <div class="form-group">
                            <label for="signinEmail">Email*</label>
                            <input type="email" name="email" class="form-control" id="signinEmail" placeholder="Enter your Email">
                        </div>
                        <div class="form-group">
                            <label for="signinPass">Password*</label>
                            <input type="password" name="password" class="form-control" id="signinPass" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox">
                                <input type="checkbox" name="id-1" id="id-1" checked>
                                <label for="id-1">Remember Password</label>
                                <span class="checkbox"></span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-hover">Log In</button>
                    </form>
                    <div class="signin-wrapper-footer">
                        <p class="bottom-text">Don’t have an account? <a href="#0" data-toggle="modal"
                                data-target="#signUpModal" data-dismiss="modal" aria-label="Close">Sign Up Now</a></p>
                        <div class="divider"><span>or</span></div>
                        <ul class="social-list">
                            <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signin-area end -->

    <!-- signup-area start -->
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bdr-radius">
                <div class="signin-wrapper">
                    <div class="signin-wrapper-header text-center">
                        <div class="logo"><img src="{{ asset('assets/images/elements/logo-icon.png') }}"
                                alt="image"></div>
                        <h3 class="title">Join Us</h3>
                        <p>Welcome to {{ env('APP_NAME') }} family</p>
                    </div>
                    <form action="{{ route('register') }}" method="POST" class="signin-form">
                        @csrf
                        <div class="form-group">
                            <label for="signinName">Name*</label>
                            <input type="text" name="name" class="form-control" id="signinName"
                                placeholder="Enter your Email">
                        </div>
                        <div class="form-group">
                            <label for="signinEmail">Email*</label>
                            <input type="email" name="email" class="form-control" id="signupEmail"
                                placeholder="Enter your Email">
                        </div>
                        <div class="form-group">
                            <label for="signinPass">Password*</label>
                            <input type="password" name="password" class="form-control" id="signupPass" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="signinPass">Confirm Password*</label>
                            <input type="password" name="password_confirmation" class="form-control" id="signupRePass" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox">
                                <input type="checkbox" name="remember" checked>
                                <label for="id-2">Remember me!</label>
                                <span class="checkbox"></span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-hover">Join</button>
                    </form>
                    <div class="signin-wrapper-footer">
                        <p class="bottom-text">Already have an account?<a href="{{ route('login') }}" data-toggle="modal"
                                data-target="#signInModal" data-dismiss="modal" aria-label="Close">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signup-area end -->

    <!--  header-section start  -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="header-top-left d-flex">
                            <div class="support-part">
                                <a href="tel:+88016558888454"><i class="fa fa-headphones"></i>Support</a>
                            </div>
                            <div class="email-part">
                                <a
                                    href="https://pixner.net/cdn-cgi/l/email-protection#cda4a3aba28dafa8a5a2a2abe3aea2a0"><i
                                        class="fa fa-envelope"></i><span class="__cf_email__"
                                        data-cfemail="1e777078715e7c7b76717178307d7173">[email&#160;protected]</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="header-top-right d-flex align-items-center justify-content-end">
                            <div class="language-part">
                                <i class="fa fa-globe"></i>
                                <select>
                                    <option>Eng</option>
                                    <option>Ban</option>
                                    <option>Rus</option>
                                    <option>Arb</option>
                                </select>
                            </div>
                            <div class="header-cart-count">
                                <a href="checkout.html">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>My cart (0)</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-xl">
                    <a class="site-logo site-title" href="home-one.html"><img
                            src="{{ asset('assets/images/logo.png') }}" alt="site-logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-menu ml-auto">
                            <li class="active menu_has_children"><a href="#0">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="home-one.html">Home One</a></li>
                                    <li><a href="home-two.html">Home Two</a></li>
                                    <li><a href="home-three.html">Home Three</a></li>
                                    <li><a href="home-four.html">Home Four</a></li>
                                    <li><a href="home-five.html">Home Five</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">about</a></li>
                            <li class="menu_has_children"><a href="#0">Investment</a>
                                <ul class="sub-menu">
                                    <li><a href="investment.html">Investment One</a></li>
                                    <li><a href="investment-two.html">Investment Two</a></li>
                                    <li><a href="investment-single.html">Investment Single</a></li>
                                </ul>
                            </li>
                            <li class="menu_has_children"><a href="#0">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="affiliate.html">Affiliate</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="contest.html">Contest</a></li>
                                    <li><a href="error-404.html">404 page</a></li>
                                    <li><a href="help.html">Help Page</a></li>
                                    <li><a href="how-work.html">How Work</a></li>
                                    <li><a href="promotion.html">Promotion</a></li>
                                    <li><a href="security.html">Security</a></li>
                                </ul>
                            </li>
                            <li class="menu_has_children"><a href="#0">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact us</a></li>
                        </ul>
                        <div class="header-join-part">
                            <button type="button" class="btn btn-primary btn-hover" data-toggle="modal"
                                data-target="#signUpModal">join us</button>
                        </div>
                    </div>
                </nav>
            </div>
        </div><!-- header-bottom end -->
    </header>
    <!--  header-section end  -->

    <!-- banner-section start -->
    <section class="banner-section">
        <div class="banner-elements-image anim-bounce"><img src="{{ asset('assets/images/elements/banner.png') }}"
                alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="banner-content-area">
                        <div class="banner-content">
                            <span class="banner-sub-title">Get Ultimate Profit</span>
                            <h2 class="banner-title">Build Your Future With Investments</h2>
                            <p>We are worldwide investment company who are committed to the principle of revenue
                                maximization & reduction of the financial risks at investing.</p>
                        </div>
                        <div class="banner-btn-area">
                            <a href="#0" class="btn btn-primary btn-round">get started now!</a>
                            <a href="https://www.youtube.com/embed/aFYlAzQHnY4" data-rel="lightcase:myCollection"
                                class="video-btn">
                                <span class="icon"><i class="icofont-ui-play"></i></span>
                                <span class="text">watch video</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- counter-section start -->
    <div class="counter-sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="counter-area d-flex justify-content-between">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/images/icons/counter/1.svg') }}" alt="icon">
                            </div>
                            <div class="counter-content">
                                <span>$</span>
                                <span class="counter">961</span>
                                <span>k</span>
                                <span class="caption">Invested in Pitches</span>
                            </div>
                        </div><!-- counter-item end -->
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/images/icons/counter/2.svg') }}" alt="icon">
                            </div>
                            <div class="counter-content">
                                <span>$</span>
                                <span class="counter">634</span>
                                <span>k</span>
                                <span class="caption">Registered Members</span>
                            </div>
                        </div><!-- counter-item end -->
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/images/icons/counter/3.svg') }}" alt="icon">
                            </div>
                            <div class="counter-content">
                                <span>$</span>
                                <span class="counter">14</span>
                                <span>k</span>
                                <span class="caption">Average Investment</span>
                            </div>
                        </div><!-- counter-item end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section pt-120 pb-120 bg_img"
        data-background="{{ asset('assets/images/elements/choose-us-bg-shape.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-subtitle">Boost your Money</span>
                        <h2 class="section-title">Why Should Choose Us</h2>
                        <p>Our service gives you better result and savings, as per your requirement and you can manage
                            youer investments from anywhere either form home or work place,any time.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-12 p-0">
                    <div class="choose-us-slider owl-carousel">
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{ asset('assets/images/choose-us/1.png') }}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">Fast Profit </h3>
                                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus
                                    and profit</p>
                                <a href="#0" class="read-more-btn">read more<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{ asset('assets/images/choose-us/2.png') }}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">Instant Withdraw</h3>
                                <p>We’re extremely excited to launch instant withdrawals.you can deposit and withdraw
                                    funds in just a few clicks.</p>
                                <a href="#0" class="read-more-btn">read more<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{ asset('assets/images/choose-us/3.png') }}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">Dedicated Server</h3>
                                <p>Dedicated server hosting with 100% guaranteed network uptime.There's no sharing of
                                    CPU time, RAM or bandwidth</p>
                                <a href="#0" class="read-more-btn">read more<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{ asset('assets/images/choose-us/4.png') }}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">DDoS Protection</h3>
                                <p>To protect your resources from modern DDoS attacks is through a multi-layer
                                    deployment of purpose-built DDoS mitigation </p>
                                <a href="#0" class="read-more-btn">read more<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{ asset('assets/images/choose-us/5.png') }}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">24/7 Support</h3>
                                <p>Our Technical Support team is available for any questions.Our multilingual 24/7
                                    support allows to keep in touch.</p>
                                <a href="#0" class="read-more-btn">read more<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{ asset('assets/images/choose-us/1.png') }}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">Fast Profit </h3>
                                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus
                                    and profit</p>
                                <a href="#0" class="read-more-btn">read more<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- choose-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->

    <!-- features-section start -->
    <section class="features-section pt-120 pb-120 section-md-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-subtitle">Our Amazing Features</span>
                        <h2 class="section-title">Investing For Everyone</h2>
                        <p>We are worldwide investment company who are committed to the principle of revenue
                            maximization and reduction of the financial risks at investing.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4">
                    <div class="feature-thumb anim-bounce">
                        <img src="{{ asset('assets/images/elements/features.png') }}" alt="image">
                    </div>
                </div>
                <div class="col-xl-4 offset-md-1 feature-item-wrapper">
                    <div class="feature-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{ asset('assets/images/icons/investment/1.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">Sign up in minutes</h3>
                            <p>Open an investment account in minutes and get started with as little as $5.</p>
                            <a href="#0">get strated</a>
                        </div>
                    </div><!-- feature-item end -->
                    <div class="feature-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{ asset('assets/images/icons/investment/2.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">Investing Made Easy</h3>
                            <p>Choose from three simple starting option - cautious , balanced & adventurous.We’ll take
                                care of the rest!</p>
                            <a href="#0">read more</a>
                        </div>
                    </div><!-- feature-item end -->
                    <div class="feature-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.7s">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{ asset('assets/images/icons/investment/3.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">Build Your Porfolio</h3>
                            <p>We’ll help you pick an investment strategy that reflects your interests,beliefs and
                                goals.</p>
                            <a href="#0">explore our investing </a>
                        </div>
                    </div><!-- feature-item end -->
                </div>
            </div>
        </div>
    </section>
    <!-- features-section end -->

    <!-- invest-section start -->
    <section class="invest-section pt-120 pb-120 bg_img" data-background="{{ asset('assets/images/bg-1.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-header text-center text-white">
                        <span class="section-subtitle">The smarter way to invest!</span>
                        <h2 class="section-title">Start investing! It’s never too late</h2>
                        <p>Make sound investment decisions with the help of our research & analytical assets.The minimum
                            deposit is $5, and maximum is $100,000. We pay 7 days per week. You may make additional
                            deposits at any time. All our payments are instant payments.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="invest-table-area wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <table>
                            <thead>
                                <tr>
                                    <th>share</th>
                                    <th>price</th>
                                    <th>growth</th>
                                    <th>daily dividend</th>
                                    <th>investors</th>
                                    <th>time remainig</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="person-details">
                                            <div class="thumb"><img src="{{ asset('assets/images/invest/1.png') }}"
                                                    alt="image"></div>
                                            <div class="content">
                                                <span class="name">Forex Stable Income</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$10.50</span>
                                    </td>
                                    <td>
                                        <span class="growth">122% <i class="fa fa-arrow-up"></i></span>
                                    </td>
                                    <td>
                                        <span class="daily-dividend">$0.9</span>
                                    </td>
                                    <td>
                                        <span class="investors-amount">718</span>
                                    </td>
                                    <td>
                                        <span class="remaining-time">21 DAYS</span>
                                        <a href="#0" class="btn btn-primary btn-round pull-right">invest now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="person-details">
                                            <div class="thumb"><img src="{{ asset('assets/images/invest/2.png') }}"
                                                    alt="image"></div>
                                            <div class="content">
                                                <span class="name">Pavimentadora Real Ltd</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$10.50</span>
                                    </td>
                                    <td>
                                        <span class="growth">122% <i class="fa fa-arrow-up"></i></span>
                                    </td>
                                    <td>
                                        <span class="daily-dividend">$0.9</span>
                                    </td>
                                    <td>
                                        <span class="investors-amount">718</span>
                                    </td>
                                    <td>
                                        <span class="remaining-time">21 DAYS</span>
                                        <a href="#0" class="btn btn-primary btn-round pull-right">invest now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="person-details">
                                            <div class="thumb"><img src="{{ asset('assets/images/invest/3.png') }}"
                                                    alt="image"></div>
                                            <div class="content">
                                                <span class="name">Ethereum Farm</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$10.50</span>
                                    </td>
                                    <td>
                                        <span class="growth">122% <i class="fa fa-arrow-up"></i></span>
                                    </td>
                                    <td>
                                        <span class="daily-dividend">$0.9</span>
                                    </td>
                                    <td>
                                        <span class="investors-amount">718</span>
                                    </td>
                                    <td>
                                        <span class="remaining-time">21 DAYS</span>
                                        <a href="#0" class="btn btn-primary btn-round pull-right">invest now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="person-details">
                                            <div class="thumb"><img src="{{ asset('assets/images/invest/4.png') }}"
                                                    alt="image"></div>
                                            <div class="content">
                                                <span class="name">Legacinet Works</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$10.50</span>
                                    </td>
                                    <td>
                                        <span class="growth">122% <i class="fa fa-arrow-up"></i></span>
                                    </td>
                                    <td>
                                        <span class="daily-dividend">$0.9</span>
                                    </td>
                                    <td>
                                        <span class="investors-amount">718</span>
                                    </td>
                                    <td>
                                        <span class="remaining-time">21 DAYS</span>
                                        <a href="#0" class="btn btn-primary btn-round pull-right">invest now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="person-details">
                                            <div class="thumb"><img src="{{ asset('assets/images/invest/2.png') }}"
                                                    alt="image"></div>
                                            <div class="content">
                                                <span class="name">Healthcare Tech</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$10.50</span>
                                    </td>
                                    <td>
                                        <span class="growth">122% <i class="fa fa-arrow-up"></i></span>
                                    </td>
                                    <td>
                                        <span class="daily-dividend">$0.9</span>
                                    </td>
                                    <td>
                                        <span class="investors-amount">718</span>
                                    </td>
                                    <td>
                                        <span class="remaining-time">21 DAYS</span>
                                        <a href="#0" class="btn btn-primary btn-round pull-right">invest now</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area mt-50 text-center">
                        <a href="#0" class="btn btn-primary btn-hover text-small">browse more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- invest-section end -->

    <!-- offer-section start -->
    <section class="offer-section pt-120 pb-120 bg_img" data-background="{{ asset('assets/images/offer-bg.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center wow fadeIn" data-wow-duration="0.8s"
                        data-wow-delay="0.5s">
                        <span class="section-subtitle">Our mission is to help our User</span>
                        <h2 class="section-title">To Maximize Money</h2>
                        <a href="#0" class="btn btn-primary btn-hover mt-30">what we offer</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="offer-slider owl-carousel">
                        <div class="offer-item">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icons/offer/1.svg') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h3 class="title">smart deposit</h3>
                                <p>Best way t o put your idle money to work.</p>
                                <a href="#0" class="read-more-btn">read more<i
                                        class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div><!-- offer-item end -->
                        <div class="offer-item">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icons/offer/2.svg') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h3 class="title">One - Tap Invest</h3>
                                <p>Invest without net baning/debit card.</p>
                                <a href="#0" class="read-more-btn">read more<i
                                        class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div><!-- offer-item end -->
                        <div class="offer-item">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icons/offer/3.svg') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h3 class="title">invest & saving</h3>
                                <p>Grow your saving by investing as little as $5</p>
                                <a href="#0" class="read-more-btn">read more<i
                                        class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div><!-- offer-item end -->
                        <div class="offer-item">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icons/offer/1.svg') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h3 class="title">smart deposit</h3>
                                <p>Best way t o put your idle money to work.</p>
                                <a href="#0" class="read-more-btn">read more<i
                                        class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div><!-- offer-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer-section end -->

    <!-- calculate-profit-section start -->
    <section class="calculate-profit-section pt-120 pb-120">
        <div class="bg_img" data-background="{{ asset('assets/images/invest-plan.jpg') }}"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center text-white">
                        <span class="section-subtitle">Calculate the amazing profits</span>
                        <h2 class="section-title">You Can Earn</h2>
                        <p>Find out what the returns on your current investments will be valued at, in future. All our
                            issuers have obligation to pay dividends for first year regardless their financial situation
                            that your investments are 100% secured. Calculate your profit from a share using our
                            calculator:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="calculate-area wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <ul class="nav nav-tabs justify-content-around" id="calculatorTab" role="tablist">
                            <li>
                                <div class="icon"><img
                                        src="{{ asset('assets/images/icons/invest-calculate/1.svg') }}"
                                        alt="icon-image"></div>
                                <h5 class="package-name">Basic Plan</h5>
                                <span class="percentage">2%</span>
                                <a class="active" id="basic-tab" data-toggle="tab" href="#basic" role="tab"
                                    aria-controls="basic" aria-selected="true">calculate</a>
                            </li>
                            <li>
                                <div class="icon"><img
                                        src="{{ asset('assets/images/icons/invest-calculate/2.svg') }}"
                                        alt="icon-image"></div>
                                <h5 class="package-name">satandard Plan</h5>
                                <span class="percentage">3%</span>
                                <a id="satandard-tab" data-toggle="tab" href="#satandard" role="tab"
                                    aria-controls="satandard" aria-selected="false">calculate</a>
                            </li>
                            <li>
                                <div class="icon"><img
                                        src="{{ asset('assets/images/icons/invest-calculate/3.svg') }}"
                                        alt="icon-image"></div>
                                <h5 class="package-name">premium Plan</h5>
                                <span class="percentage">2%</span>
                                <a id="premium-tab" data-toggle="tab" href="#premium" role="tab"
                                    aria-controls="premium" aria-selected="false">calculate</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="calculatorTabContent">
                            <div class="tab-pane fade show active" id="basic" role="tabpanel"
                                aria-labelledby="basic-tab">
                                <div class="invest-amount-area text-center">
                                    <h4 class="title">Invest Amount</h4>
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="basic-amount" readonly>
                                    </div>
                                    <div id="slider-range-min-one" class="invest-range-slider"></div>
                                </div><!-- invest-amount-area end -->
                                <div class="plan-amount-calculate">
                                    <div class="item">
                                        <span class="caption">Basic plan</span>
                                        <span class="details">Minimum Deposit $5</span>
                                    </div>
                                    <div class="item">
                                        <span class="profit-amount">$12.67</span>
                                        <span class="profit-details">Daily Profit</span>
                                    </div>
                                    <div class="item">
                                        <span class="profit-amount">$12.67</span>
                                        <span class="profit-details">per month</span>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="invest-btn btn-round">invest now</a>
                                    </div>
                                </div><!-- plan-amount-calculate end -->
                            </div>
                            <div class="tab-pane fade" id="satandard" role="tabpanel"
                                aria-labelledby="satandard-tab">
                                <div class="invest-amount-area text-center">
                                    <h4 class="title">Invest Amount</h4>
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="satandard-amount"
                                            readonly>
                                    </div>
                                    <div id="slider-range-min-two" class="invest-range-slider"></div>
                                </div><!-- invest-amount-area end -->
                                <div class="plan-amount-calculate">
                                    <div class="item">
                                        <span class="caption">satandard plan</span>
                                        <span class="details">Minimum Deposit $15</span>
                                    </div>
                                    <div class="item">
                                        <span class="profit-amount">$12.67</span>
                                        <span class="profit-details">Daily Profit</span>
                                    </div>
                                    <div class="item">
                                        <span class="profit-amount">$12.67</span>
                                        <span class="profit-details">per month</span>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="invest-btn btn-round">invest now</a>
                                    </div>
                                </div><!-- plan-amount-calculate end -->
                            </div>
                            <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                                <div class="invest-amount-area text-center">
                                    <h4 class="title">Invest Amount</h4>
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="premium-amount" readonly>
                                    </div>
                                    <div id="slider-range-min-three" class="invest-range-slider"></div>
                                </div><!-- invest-amount-area end -->
                                <div class="plan-amount-calculate">
                                    <div class="item">
                                        <span class="caption">premium plan</span>
                                        <span class="details">Minimum Deposit $25</span>
                                    </div>
                                    <div class="item">
                                        <span class="profit-amount">$12.67</span>
                                        <span class="profit-details">Daily Profit</span>
                                    </div>
                                    <div class="item">
                                        <span class="profit-amount">$12.67</span>
                                        <span class="profit-details">per month</span>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="invest-btn btn-round">invest now</a>
                                    </div>
                                </div><!-- plan-amount-calculate end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- calculate-profit-section end -->

    <!-- deposit-withdraw-section start -->
    <section class="deposit-withdraw-section pt-120 pb-120 section-md-bg">
        <div class="circle-object"><img src="{{ asset('assets/images/elements/deposit-circle-shape.png') }}"
                alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-subtitle">Convenient money</span>
                        <h2 class="section-title">Deposit & Withdrawal</h2>
                        <p>Depositing or withdrawing money is simple.We support several payment methods, which depend on
                            what country your payment account is located in.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="dep-wth-option-area wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <span class="circle one"></span>
                        <span class="circle two"></span>
                        <span class="circle three"></span>
                        <span class="circle four"></span>
                        <a href="#0" class="card-item">
                            <span class="icon"><img
                                    src="{{ asset('assets/images/icons/payment-option/card.svg') }}"
                                    alt="image"></span>
                            <span class="caption">Credit Card</span>
                        </a><!-- card-item end -->
                        <a href="#0" class="card-item">
                            <span class="icon"><img
                                    src="{{ asset('assets/images/icons/payment-option/paypal.svg') }}"
                                    alt="image"></span>
                            <span class="caption">Credit Card</span>
                        </a><!-- card-item end -->
                        <a href="#0" class="card-item">
                            <span class="icon"><img
                                    src="{{ asset('assets/images/icons/payment-option/bitcoin.svg') }}"
                                    alt="image"></span>
                            <span class="caption">Credit Card</span>
                        </a><!-- card-item end -->
                        <a href="#0" class="card-item">
                            <span class="icon"><img
                                    src="{{ asset('assets/images/icons/payment-option/litecoin.svg') }}"
                                    alt="image"></span>
                            <span class="caption">Credit Card</span>
                        </a><!-- card-item end -->
                        <a href="#0" class="card-item">
                            <span class="icon"><img
                                    src="{{ asset('assets/images/icons/payment-option/ethereum.svg') }}"
                                    alt="image"></span>
                            <span class="caption">Credit Card</span>
                        </a><!-- card-item end -->
                        <a href="#0" class="card-item">
                            <span class="icon"><img
                                    src="{{ asset('assets/images/icons/payment-option/ripple.svg') }}"
                                    alt="image"></span>
                            <span class="caption">Credit Card</span>
                        </a><!-- card-item end -->
                        <a href="#0" class="text-btn">view all option</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{ asset('assets/images/icons/payment-option/ft1.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">No Limits</h3>
                            <p>Unlimited maximum withdrawal amount</p>
                        </div>
                    </div><!-- feature-item end -->
                    <div class="feature-item">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{ asset('assets/images/icons/payment-option/ft2.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">Withdrawal in 24 /7</h3>
                            <p>Deposit – instantaneous</p>
                        </div>
                    </div><!-- feature-item end -->
                </div>
            </div>
        </div>
    </section>
    <!-- deposit-withdraw-section end -->

    <!-- community-section start -->
    <section class="community-section bg_img pt-120" data-background="{{ asset('assets/images/community-bg.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header text-center text-white wow fadeIn" data-wow-duration="0.8s"
                        data-wow-delay="0.5s">
                        <span class="section-subtitle">We support</span>
                        <h2 class="section-title">Cryptocurrency Community</h2>
                        <p>Access a world of dynamic investment opportunities, buy into businesses you believe in and
                            share in their success.You may make additional deposits at any time. All our
                            payments are instant payments.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="community-wrapper">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="community-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/community/1.svg') }}" alt="image">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Simplicity</h3>
                                        <p>We’re eliminating complex user experiences.</p>
                                        <a href="#0" class="read-more-btn">read more<i
                                                class="icofont-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- community-item end -->
                                <div class="community-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/community/2.svg') }}" alt="image">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">security</h3>
                                        <p>Enhanced security features like multi-factor </p>
                                        <a href="#0" class="read-more-btn">read more<i
                                                class="icofont-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- community-item end -->
                                <div class="community-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/community/3.svg') }}" alt="image">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">support</h3>
                                        <p>Get all the support you need for your Investment</p>
                                        <a href="#0" class="read-more-btn">read more<i
                                                class="icofont-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- community-item end -->
                            </div>
                            <div class="col-lg-5">
                                <div class="user-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/community/user-icon.svg') }}"
                                            alt="image">
                                    </div>
                                    <span class="caption">18000+ Users</span>
                                    <div class="users-area">
                                        <span class="user-img"><img src="{{ asset('assets/images/users/s1.png') }}"
                                                alt="image"></span>
                                        <span class="user-img"><img src="{{ asset('assets/images/users/s2.png') }}"
                                                alt="image"></span>
                                        <span class="user-img"><img src="{{ asset('assets/images/users/s3.png') }}"
                                                alt="image"></span>
                                        <span class="user-img"><img src="{{ asset('assets/images/users/s4.png') }}"
                                                alt="image"></span>
                                        <span class="user-img"><img src="{{ asset('assets/images/users/s5.png') }}"
                                                alt="image"></span>
                                        <span class="user-img"><img src="{{ asset('assets/images/users/s6.png') }}"
                                                alt="image"></span>
                                        <span class="user-img"><img src="{{ asset('assets/images/users/s7.png') }}"
                                                alt="image"></span>
                                        <a href="#" class="btn btn-primary btn-round">see all</a>
                                    </div>
                                </div>
                                <div class="btn-area text-center">
                                    <a href="#0" class="btn btn-secondary">join us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- community-section end -->

    <!-- latest-transaction-section start -->
    <section class="latest-transaction-section pt-120 pb-120">
        <div class="elemets-bg" data-paroller-factor="-0.2" data-paroller-type="foreground"
            data-paroller-direction="vertical"><img src="{{ asset('assets/images/withdraw-bg.png') }}"
                alt=""></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-subtitle">Latest Transaction</span>
                        <h2 class="section-title">Withdrawals</h2>
                        <p>Our goal is to simplify investing so that anyone can be an investor.Withthis in mind, we
                            hand-pick the investments we offer on our platform.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs justify-content-center tab-nav" id="transactionTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="daily-tab" data-toggle="tab" href="#daily"
                                role="tab" aria-controls="daily" aria-selected="true">Daily</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab"
                                aria-controls="monthly" aria-selected="false">Monthly</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="transactionTabContent">
                        <div class="tab-pane fade show active" id="daily" role="tabpanel"
                            aria-labelledby="daily-tab">
                            <div class="withdraw-table-area">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>price</th>
                                            <th>Daily Dividend</th>
                                            <th>AMOUNTs</th>
                                            <th>Deposit by</th>
                                            <th>Currency</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-head="name">
                                                <div class="person-details">
                                                    <div class="thumb"><img
                                                            src="{{ asset('assets/images/withdraw/t-1.png') }}"
                                                            alt="image"></div>
                                                    <div class="content">
                                                        <span class="name">Jim Adams</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-head="price">
                                                <span class="price">$10.50</span>
                                            </td>
                                            <td data-head="daily dividend">
                                                <span class="daily-dividend">$10.50</span>
                                            </td>
                                            <td data-head="amounts">
                                                <span class="amount">$0.9</span>
                                            </td>
                                            <td data-head="Deposit by">
                                                <span class="days">21 days</span>
                                            </td>
                                            <td data-head="Currency">
                                                <img src="{{ asset('assets/images/icons/withdraw/bitcoin.png') }}"
                                                    alt="icon">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-head="name">
                                                <div class="person-details">
                                                    <div class="thumb"><img
                                                            src="{{ asset('assets/images/withdraw/t-2.png') }}"
                                                            alt="image"></div>
                                                    <div class="content">
                                                        <span class="name">Willie Barton </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-head="price">
                                                <span class="price">$10.50</span>
                                            </td>
                                            <td data-head="daily dividend">
                                                <span class="daily-dividend">$10.50</span>
                                            </td>
                                            <td data-head="amounts">
                                                <span class="amount">$0.9</span>
                                            </td>
                                            <td data-head="Deposit by">
                                                <span class="days">21 days</span>
                                            </td>
                                            <td data-head="Currency">
                                                <img src="{{ asset('assets/images/icons/withdraw/fire.png') }}"
                                                    alt="icon">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-head="name">
                                                <div class="person-details">
                                                    <div class="thumb"><img
                                                            src="{{ asset('assets/images/withdraw/t-3.png') }}"
                                                            alt="image"></div>
                                                    <div class="content">
                                                        <span class="name">Kim Mccoy </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-head="price">
                                                <span class="price">$10.50</span>
                                            </td>
                                            <td data-head="daily dividend">
                                                <span class="daily-dividend">$10.50</span>
                                            </td>
                                            <td data-head="amounts">
                                                <span class="amount">$0.9</span>
                                            </td>
                                            <td data-head="Deposit by">
                                                <span class="days">21 days</span>
                                            </td>
                                            <td data-head="Currency">
                                                <img src="{{ asset('assets/images/icons/withdraw/bitcoin.png') }}"
                                                    alt="icon">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-head="name">
                                                <div class="person-details">
                                                    <div class="thumb"><img
                                                            src="{{ asset('assets/images/withdraw/t-4.png') }}"
                                                            alt="image"></div>
                                                    <div class="content">
                                                        <span class="name">Sheryl Tran </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-head="price">
                                                <span class="price">$10.50</span>
                                            </td>
                                            <td data-head="daily dividend">
                                                <span class="daily-dividend">$10.50</span>
                                            </td>
                                            <td data-head="amounts">
                                                <span class="amount">$0.9</span>
                                            </td>
                                            <td data-head="Deposit by">
                                                <span class="days">21 days</span>
                                            </td>
                                            <td data-head="Currency">
                                                <img src="{{ asset('assets/images/icons/withdraw/fan.png') }}"
                                                    alt="icon">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-head="name">
                                                <div class="person-details">
                                                    <div class="thumb"><img
                                                            src="{{ asset('assets/images/withdraw/t-5.png') }}"
                                                            alt="image"></div>
                                                    <div class="content">
                                                        <span class="name">Jim Adams</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-head="price">
                                                <span class="price">$10.50</span>
                                            </td>
                                            <td data-head="daily dividend">
                                                <span class="daily-dividend">$10.50</span>
                                            </td>
                                            <td data-head="amounts">
                                                <span class="amount">$0.9</span>
                                            </td>
                                            <td data-head="Deposit by">
                                                <span class="days">21 days</span>
                                            </td>
                                            <td data-head="Currency">
                                                <img src="{{ asset('assets/images/icons/withdraw/dollar.png') }}"
                                                    alt="icon">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                            <div class="withdraw-table-area">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>price</th>
                                            <th>Daily Dividend</th>
                                            <th>AMOUNTs</th>
                                            <th>Deposit by</th>
                                            <th>Currency</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-head="name">
                                                <div class="person-details">
                                                    <div class="thumb"><img
                                                            src="{{ asset('assets/images/withdraw/t-1.png') }}"
                                                            alt="image"></div>
                                                    <div class="content">
                                                        <span class="name">Jim Adams</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-head="price">
                                                <span class="price">$10.50</span>
                                            </td>
                                            <td data-head="daily dividend">
                                                <span class="daily-dividend">$10.50</span>
                                            </td>
                                            <td data-head="amounts">
                                                <span class="amount">$0.9</span>
                                            </td>
                                            <td data-head="Deposit by">
                                                <span class="days">21 days</span>
                                            </td>
                                            <td data-head="Currency">
                                                <img src="{{ asset('assets/images/icons/withdraw/bitcoin.png') }}"
                                                    alt="icon">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-head="name">
                                                <div class="person-details">
                                                    <div class="thumb"><img
                                                            src="{{ asset('assets/images/withdraw/t-2.png') }}"
                                                            alt="image"></div>
                                                    <div class="content">
                                                        <span class="name">Willie Barton </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-head="price">
                                                <span class="price">$10.50</span>
                                            </td>
                                            <td data-head="daily dividend">
                                                <span class="daily-dividend">$10.50</span>
                                            </td>
                                            <td data-head="amounts">
                                                <span class="amount">$0.9</span>
                                            </td>
                                            <td data-head="Deposit by">
                                                <span class="days">21 days</span>
                                            </td>
                                            <td data-head="Currency">
                                                <img src="{{ asset('assets/images/icons/withdraw/fire.png') }}"
                                                    alt="icon">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-head="name">
                                                <div class="person-details">
                                                    <div class="thumb"><img
                                                            src="{{ asset('assets/images/withdraw/t-3.png') }}"
                                                            alt="image"></div>
                                                    <div class="content">
                                                        <span class="name">Kim Mccoy </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-head="price">
                                                <span class="price">$10.50</span>
                                            </td>
                                            <td data-head="daily dividend">
                                                <span class="daily-dividend">$10.50</span>
                                            </td>
                                            <td data-head="amounts">
                                                <span class="amount">$0.9</span>
                                            </td>
                                            <td data-head="Deposit by">
                                                <span class="days">21 days</span>
                                            </td>
                                            <td data-head="Currency">
                                                <img src="{{ asset('assets/images/icons/withdraw/bitcoin.png') }}"
                                                    alt="icon">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-head="name">
                                                <div class="person-details">
                                                    <div class="thumb"><img
                                                            src="{{ asset('assets/images/withdraw/t-4.png') }}"
                                                            alt="image"></div>
                                                    <div class="content">
                                                        <span class="name">Sheryl Tran </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-head="price">
                                                <span class="price">$10.50</span>
                                            </td>
                                            <td data-head="daily dividend">
                                                <span class="daily-dividend">$10.50</span>
                                            </td>
                                            <td data-head="amounts">
                                                <span class="amount">$0.9</span>
                                            </td>
                                            <td data-head="Deposit by">
                                                <span class="days">21 days</span>
                                            </td>
                                            <td data-head="Currency">
                                                <img src="{{ asset('assets/images/icons/withdraw/fan.png') }}"
                                                    alt="icon">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-head="name">
                                                <div class="person-details">
                                                    <div class="thumb"><img
                                                            src="{{ asset('assets/images/withdraw/t-5.png') }}"
                                                            alt="image"></div>
                                                    <div class="content">
                                                        <span class="name">Jim Adams</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-head="price">
                                                <span class="price">$10.50</span>
                                            </td>
                                            <td data-head="daily dividend">
                                                <span class="daily-dividend">$10.50</span>
                                            </td>
                                            <td data-head="amounts">
                                                <span class="amount">$0.9</span>
                                            </td>
                                            <td data-head="Deposit by">
                                                <span class="days">21 days</span>
                                            </td>
                                            <td data-head="Currency">
                                                <img src="{{ asset('assets/images/icons/withdraw/dollar.png') }}"
                                                    alt="icon">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="btn-area text-center">
                        <a href="#0" class="btn btn-primary btn-hover text-small">browse more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-transaction-section end -->

    <!-- affiliate-features-section start -->
    <section class="affiliate-features-section pt-120 pb-120">
        <div class="shape"><img src="{{ asset('assets/images/elements/affiliate-shape.png') }}" alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="affiliate-features-content text-xl-left text-center">
                        <div class="section-header">
                            <span class="section-subtitle">Earn The Big Money</span>
                            <h2 class="section-title">Affiliate Program</h2>
                            <p>Our affiliate program can increase your income by receiving percentage from the purchases
                                made by your referrals into. </p>
                        </div>
                        <p>Invite other users (for example, your friends, co-workers, etc.) to join the project. After
                            registration they will be your referrals; and if they purchase any item on our web site you
                            receive 24% reward.</p>
                        <a href="#0" class="btn btn-primary btn-hover text-small">read more</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row mb-none-30">
                        <div class="col-xl-6 col-lg-4 col-md-6">
                            <div class="affiliate-features-item text-center mb-30">
                                <div class="icon"><img
                                        src="{{ asset('assets/images/icons/affiliate-features/1.svg') }}"
                                        alt="image"></div>
                                <span class="subtitle">Enjoy unlimited</span>
                                <h3 class="title">Commissions</h3>
                                <p>The more User you refer, the more commissions we’ll pay you. Plain and simple.</p>
                            </div>
                        </div><!-- affiliate-features-item end -->
                        <div class="col-xl-6 col-lg-4 col-md-6">
                            <div class="affiliate-features-item text-center mb-30">
                                <div class="icon"><img
                                        src="{{ asset('assets/images/icons/affiliate-features/2.svg') }}"
                                        alt="image"></div>
                                <span class="subtitle">Extra Bonus and</span>
                                <h3 class="title">Promotions</h3>
                                <p>Boost your monthly earnings with additional promotional opportunities.</p>
                            </div>
                        </div><!-- affiliate-features-item end -->
                        <div class="col-xl-6 col-lg-4 col-md-6">
                            <div class="affiliate-features-item text-center mb-30">
                                <div class="icon"><img
                                        src="{{ asset('assets/images/icons/affiliate-features/3.svg') }}"
                                        alt="image"></div>
                                <span class="subtitle">Get top notch</span>
                                <h3 class="title">Support</h3>
                                <p>Maximize your earning potential with our popular amazing support center.</p>
                            </div>
                        </div><!-- affiliate-features-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- affiliate-features-section end -->

    <!-- testimonial-section start -->
    <section class="testimonial-section pt-xl-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <span class="section-subtitle">Testimonials</span>
                        <h2 class="section-title">Over 7,000 Happy Customers</h2>
                        <p>We have many happy investors invest with us .Some impresions from our Customers! PLease read
                            some of the lovely things our Customers say about us.</p>
                        <div class="btn-area">
                            <a href="#0" class="btn btn-primary text-small">join us</a>
                            <a href="#0" class="btn btn-primary text-small">what we offer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-wrapper style--one d-lg-flex flex-wrap justify-content-between d-none">
                        <div class="testimonial-single">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/testimonial/1.png') }}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>Great service! I have been worried about investing. But when I came here. I don't
                                    have to worry anymore</p>
                                <h4 class="name">Joy Kelley</h4>
                                <span class="client-details">United kingdom, 28th April,2019</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                        <div class="testimonial-single">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/testimonial/2.png') }}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>Great service! I have been worried about investing. But when I came here. I don't
                                    have to worry anymore</p>
                                <h4 class="name">Joy Kelley</h4>
                                <span class="client-details">United kingdom, 28th April,2019</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                        <div class="testimonial-single">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/testimonial/3.png') }}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>Great service! I have been worried about investing. But when I came here. I don't
                                    have to worry anymore</p>
                                <h4 class="name">Joy Kelley</h4>
                                <span class="client-details">United kingdom, 28th April,2019</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                        <div class="testimonial-single active">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/testimonial/4.png') }}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>Great service! I have been worried about investing. But when I came here. I don't
                                    have to worry anymore</p>
                                <h4 class="name">Joy Kelley</h4>
                                <span class="client-details">United kingdom, 28th April,2019</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                        <div class="testimonial-single">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/testimonial/5.png') }}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>Great service! I have been worried about investing. But when I came here. I don't
                                    have to worry anymore</p>
                                <h4 class="name">Joy Kelley</h4>
                                <span class="client-details">United kingdom, 28th April,2019</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                        <div class="testimonial-single">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/testimonial/6.png') }}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>Great service! I have been worried about investing. But when I came here. I don't
                                    have to worry anymore</p>
                                <h4 class="name">Joy Kelley</h4>
                                <span class="client-details">United kingdom, 28th April,2019</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                    </div>
                    <div class="testmonial-slider-wrapper d-lg-none mb-4">
                        <div class="testimonial-slider owl-carousel">
                            <div class="testimonial-single-two">
                                <div class="thumb"><img src="{{ asset('assets/images/testimonial/2.png') }}"
                                        alt="image"></div>
                                <h4 class="name">Kevin Ohashi</h4>
                                <span class="designation">Award winning blogger</span>
                                <p>behoof has one of the friendliest affiliate programs.They’re definitely one of the
                                    bestinvestment website in the world. I’ve been using them for a long time and have
                                    never had any problems</p>
                            </div><!-- testimonial-single-two end -->
                            <div class="testimonial-single-two">
                                <div class="thumb"><img src="{{ asset('assets/images/testimonial/3.png') }}"
                                        alt="image"></div>
                                <h4 class="name">Kevin Ohashi</h4>
                                <span class="designation">Award winning blogger</span>
                                <p>behoof has one of the friendliest affiliate programs.They’re definitely one of the
                                    bestinvestment website in the world. I’ve been using them for a long time and have
                                    never had any problems</p>
                            </div><!-- testimonial-single-two end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->

    <!-- investors-section start -->
    <section class="investors-section pt-120 pb-120">
        <div class="bg-shape bg_img" data-background="{{ asset('assets/images/investor-bg.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="section-header text-white wow fadeIn" data-wow-duration="0.8s"
                        data-wow-delay="0.5s">
                        <span class="section-subtitle">Take a look at our</span>
                        <h2 class="section-title">Top 10 Investors</h2>
                        <p>A look at the top ten investors of all time and the strategies they used to make their money.
                        </p>
                    </div>
                </div>
            </div>
            <div class="investor-slider owl-carousel">
                <div class="investor-item text-center">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/investors/1.png') }}" alt="image">
                        <a href="#0" class="icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="content">
                        <h4 class="name"><a href="#0">Sean Obrien</a></h4>
                        <span class="amount">$50,000.00</span>
                        <p>Pain by <img src="{{ asset('assets/images/icons/withdraw/bitcoin.png') }}"
                                alt="icon"></p>
                    </div>
                </div><!-- investor-item end -->
                <div class="investor-item text-center">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/investors/2.png') }}" alt="image">
                        <a href="#0" class="icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="content">
                        <h4 class="name"><a href="#0">Naomi White</a></h4>
                        <span class="amount">$43,500.00</span>
                        <p>Pain by <img src="{{ asset('assets/images/icons/withdraw/bitcoin.png') }}"
                                alt="icon"></p>
                    </div>
                </div><!-- investor-item end -->
                <div class="investor-item text-center">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/investors/3.png') }}" alt="image">
                        <a href="#0" class="icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="content">
                        <h4 class="name"><a href="#0">Tom Barker</a></h4>
                        <span class="amount">$42,000.00</span>
                        <p>Pain by <img src="{{ asset('assets/images/icons/withdraw/bitcoin.png') }}"
                                alt="icon"></p>
                    </div>
                </div><!-- investor-item end -->
                <div class="investor-item text-center">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/investors/1.png') }}" alt="image">
                        <a href="#0" class="icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="content">
                        <h4 class="name"><a href="#0">Sean Obrien</a></h4>
                        <span class="amount">$50,000.00</span>
                        <p>Pain by <img src="{{ asset('assets/images/icons/withdraw/bitcoin.png') }}"
                                alt="icon"></p>
                    </div>
                </div><!-- investor-item end -->
            </div>
        </div>
    </section>
    <!-- investors-section end -->

    <!-- contest-winner-section start  -->
    <section class="contest-winner-section pt-120 pb-120">
        <div class="shape"><img src="{{ asset('assets/images/elements/contest-shape.png') }}" alt="image">
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="contest-winner-content">
                        <div class="section-header text-lg-left text-center">
                            <span class="section-subtitle">Take a look at our latest</span>
                            <h2 class="section-title">Contest Winners</h2>
                            <p>The contest is based on sales from your referrals.The person with the most total
                                referral's revenue will get the Grand Prize. The more revenue your referrals produce the
                                bigger chance for you to be on top.</p>
                            <a href="#0" class="btn btn-primary">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="contest-winner-slider owl-carousel">
                        <div class="contest-winner-item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/contest-winner/1.png') }}" alt="image">
                                <span class="icon"><img
                                        src="{{ asset('assets/images/icons/contest-winner/trophy.svg') }}"
                                        alt="icon"></span>
                                <span class="amount">$1,000.00</span>
                                <span class="date">feb 2019</span>
                            </div>
                        </div><!-- contest-winner-item end -->
                        <div class="contest-winner-item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/contest-winner/1.png') }}" alt="image">
                                <span class="icon"><img
                                        src="{{ asset('assets/images/icons/contest-winner/trophy.svg') }}"
                                        alt="icon"></span>
                                <span class="amount">$1,000.00</span>
                                <span class="date">feb 2019</span>
                            </div>
                        </div><!-- contest-winner-item end -->
                        <div class="contest-winner-item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/contest-winner/1.png') }}" alt="image">
                                <span class="icon"><img
                                        src="{{ asset('assets/images/icons/contest-winner/trophy.svg') }}"
                                        alt="icon"></span>
                                <span class="amount">$1,000.00</span>
                                <span class="date">feb 2019</span>
                            </div>
                        </div><!-- contest-winner-item end -->
                        <div class="contest-winner-item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/contest-winner/1.png') }}" alt="image">
                                <span class="icon"><img
                                        src="{{ asset('assets/images/icons/contest-winner/trophy.svg') }}"
                                        alt="icon"></span>
                                <span class="amount">$1,000.00</span>
                                <span class="date">feb 2019</span>
                            </div>
                        </div><!-- contest-winner-item end -->
                        <div class="contest-winner-item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/contest-winner/1.png') }}" alt="image">
                                <span class="icon"><img
                                        src="{{ asset('assets/images/icons/contest-winner/trophy.svg') }}"
                                        alt="icon"></span>
                                <span class="amount">$1,000.00</span>
                                <span class="date">feb 2019</span>
                            </div>
                        </div><!-- contest-winner-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contest-winner-section end  -->

    <!-- partner-section start -->
    <section class="partner-section pt-lg-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="partner-wrapper">
                        <div class="partner-single wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.5s">
                            <div class="partner-single-inner">
                                <img src="{{ asset('assets/images/partners/1.png') }}" alt="image">
                            </div>
                        </div><!-- partner-single end -->
                        <div class="partner-single wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                            <div class="partner-single-inner">
                                <img src="{{ asset('assets/images/partners/2.png') }}" alt="image">
                            </div>
                        </div><!-- partner-single end -->
                        <div class="partner-single wow zoomIn" data-wow-duration="0.7s" data-wow-delay="0.5s">
                            <div class="partner-single-inner">
                                <img src="{{ asset('assets/images/partners/3.png') }}" alt="image">
                            </div>
                        </div><!-- partner-single end -->
                        <div class="partner-single wow zoomIn" data-wow-duration="0.9s" data-wow-delay="0.5s">
                            <div class="partner-single-inner">
                                <img src="{{ asset('assets/images/partners/4.png') }}" alt="image">
                            </div>
                        </div><!-- partner-single end -->
                        <div class="partner-single wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.5s">
                            <div class="partner-single-inner">
                                <img src="{{ asset('assets/images/partners/5.png') }}" alt="image">
                            </div>
                        </div><!-- partner-single end -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-lg-left text-center">
                        <span class="section-subtitle">Let’s see our</span>
                        <h2 class="section-title">Trusted Partners</h2>
                        <p>We’re committed to making our clients successful by becoming their partners and trusted
                            advisors .behoof believes in being your trusted partner and earning that trust through
                            confidence and performance in service and support.</p>
                        <a href="#0" class="btn btn-primary text-small">join with us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partner-section end -->

    <!-- footer-section start -->
    <footer class="footer-section">
        <div class="footer-top bg_img" data-background="{{ asset('assets/images/footer-bg.png') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-white text-center">
                            <span class="section-subtitle">Subscribe us</span>
                            <h2 class="section-title">For Newsletter</h2>
                            <p>Join 14,000+ satisfied Fast Invest customers! <a href="#0">Register</a> and
                                Subscribe to our newsletter to receive all the latest news and updates. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="subscribe-wrapper">
                            <span class="icon wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.5s"><img
                                    src="{{ asset('assets/images/icons/subscribe.png') }}" alt="icon"></span>
                            <form class="subscribe-form">
                                <input type="text" name="subs_name" id="subs_name"
                                    placeholder="Your Email Address">
                                <button type="submit" class="subs-btn">subscribe<span class="btn-icon"><img
                                            src="{{ asset('assets/images/icons/paper-plane.png') }}"
                                            alt="icon"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mb-none-30">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <h3 class="widget-title">About Behoof</h3>
                            <ul class="footer-menu-list">
                                <li><a href="#0">About us</a></li>
                                <li><a href="#0">Contact Us</a></li>
                                <li><a href="#0">Latest Blog</a></li>
                                <li><a href="#0">Authenticity Guarantee</a></li>
                                <li><a href="#0">Customer Reviews</a></li>
                                <li><a href="#0">Privacy Policy</a></li>
                                <li><a href="#0">Business License</a></li>
                            </ul>
                        </div>
                    </div><!-- footer-widget end -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <h3 class="widget-title">My Account</h3>
                            <ul class="footer-menu-list">
                                <li><a href="#0">Manage Your Account</a></li>
                                <li><a href="#0">How to Deposit</a></li>
                                <li><a href="#0">How to Withdraw</a></li>
                                <li><a href="#0">Account Varification</a></li>
                                <li><a href="#0">Safety & Security</a></li>
                                <li><a href="#0">Investments</a></li>
                                <li><a href="#0">Membership Level</a></li>
                            </ul>
                        </div>
                    </div><!-- footer-widget end -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <h3 class="widget-title">help center</h3>
                            <ul class="footer-menu-list">
                                <li><a href="#0">Investor help centre</a></li>
                                <li><a href="#0">Entrepreneur help centre</a></li>
                                <li><a href="#0">FAQ</a></li>
                                <li><a href="#0">Quick Start Guide</a></li>
                                <li><a href="#0">Associate Blog</a></li>
                                <li><a href="#0">Tutorials</a></li>
                                <li><a href="#0">Returns & Claims</a></li>
                            </ul>
                        </div>
                    </div><!-- footer-widget end -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <h3 class="widget-title">legal info</h3>
                            <ul class="footer-menu-list">
                                <li><a href="#0">Risk Warnings</a></li>
                                <li><a href="#0">Privacy Notice</a></li>
                                <li><a href="#0">Security</a></li>
                                <li><a href="#0">Terms of Service</a></li>
                                <li><a href="#0">Become Affiliate</a></li>
                                <li><a href="#0">Complaints Policy</a></li>
                            </ul>
                        </div>
                    </div><!-- footer-widget end -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="btn-area text-center">
                            <a href="#0" class="wow zoomIn" data-wow-duration="0.3s"
                                data-wow-delay="0.5s"><img src="{{ asset('assets/images/buttons/google.png') }}"
                                    alt="button"></a>
                            <a href="#0" class="wow zoomIn" data-wow-duration="0.7s"
                                data-wow-delay="0.5s"><img src="{{ asset('assets/images/buttons/apple.png') }}"
                                    alt="button"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copy-right-text text-md-left text-center mb-md-0 mb-3">Copyright © 2020.All Rights
                            Reserved By <a href="home-one.html">Behoof</a></p>
                    </div>
                    <div class="col-md-6">
                        <div class="card-list text-md-right text-center">
                            <a href="#0"><img
                                    src="{{ asset('assets/images/icons/card-options/americanexpress.png') }}"
                                    alt="image"></a>
                            <a href="#0"><img
                                    src="{{ asset('assets/images/icons/card-options/maestro.png') }}"
                                    alt="image"></a>
                            <a href="#0"><img src="{{ asset('assets/images/icons/card-options/visa.png') }}"
                                    alt="image"></a>
                            <a href="#0"><img
                                    src="{{ asset('assets/images/icons/card-options/paypal.png') }}"
                                    alt="image"></a>
                            <a href="#0"><img
                                    src="{{ asset('assets/images/icons/card-options/mastercard.png') }}"
                                    alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-section end -->

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-rocket"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->

    <script data-cfasync="false" src="{{ asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from pixner.net/behoof/demo/home-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 16:34:07 GMT -->

</html>
