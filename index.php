<?php
error_reporting(0);
$source = '';
$source = $_GET['utm_source'];
$medium = '';
$medium = $_GET['utm_medium'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Stuid Learning App </title>

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--Cookie Alert-->
    <link rel="stylesheet" href="assets/css/cookiealert.css">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TLFNMZT');</script>
<!-- End Google Tag Manager -->

</head>

<body class="homepage-1">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TLFNMZT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" src="assets/img/logo.png" alt="stuid logo">
                    <img class="navbar-brand-sticky" src="assets/img/logo.png" alt="stuid sticky logo">
                </a>
                <div class="header-btn">
                    <button class="enq-top" data-toggle="modal" data-target="#exampleModal0">Book a Demo
                    </button>
                </div>

                <div class="navbar-inner">
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="banner-img d-none open-md">
                            <img src="assets/img/new-banner-girl.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="welcome-form">
                            <form name="form1" method="post" action="email.php">
                                <div class="form-title text-center">
                                    <h4>Book a free class</h4>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Phone" class="form-control" name="phone" required type="tel"
                                        pattern="[0-9]{10}" maxlength="10"
                                        oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                        onchange="this.setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group form-group-btn">
                                    <input type="hidden" name="esource" value="<?php echo $source;?>">
                                    <input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                    <input type="submit" value="submit" class="form-control" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Download Btns Area Start ***** -->
        <section class="download-btn section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="dwld-box">
                            <div class="text">
                                <h2>Download The App Now!</h2>
                            </div>
                            <div class="btns">
                                <a href="#" data-toggle="modal" data-target="#exampleModal1" class="app-store mr-2"><img src="assets/img/app-dwld.png" alt=""></a>
                                <a href="#" data-toggle="modal" data-target="#exampleModal2" class="play-store"><img src="assets/img/google-dwld.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Classroom Area Start ***** -->
        <section class="class-rooms section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="stuid-head">
                            <h2>Experience a physical classroom with Stuid Learning App</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="classroom-box">
                            <h1>Learn</h1>
                            <ul>
                                <li class="d-flex">
                                    <div class="img"><img src="assets/img/icons/1.png" alt=""></div>
                                    <h4>Video Lessons</h4>
                                </li>
                                <li class="d-flex">
                                    <div class="img"><img src="assets/img/icons/2.png" alt=""></div>
                                    <h4>Audio Lessons</h4>
                                </li>
                                <li class="d-flex">
                                    <div class="img"><img src="assets/img/icons/3.png" alt=""></div>
                                    <h4>Study Materials</h4>
                                </li>
                                <li class="d-flex">
                                    <div class="img"><img src="assets/img/icons/5.png" alt=""></div>
                                    <h4>Offline Videos</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classroom-box">
                            <h1>ASK</h1>
                            <ul>
                                <li class="d-flex">
                                    <div class="img"><img src="assets/img/icons/6.png" alt=""></div>
                                    <h4>Ask Your Teacher</h4>
                                </li>
                                <li class="d-flex">
                                    <div class="img"><img src="assets/img/icons/7.png" alt=""></div>
                                    <h4>Post Your Questions</h4>
                                </li>
                                <li class="d-flex visible-hidden">
                                    <div class="img"><img src="assets/img/icons/3.png" alt=""></div>
                                    <h4>Study Materials</h4>
                                </li>
                                <li class="d-flex btn-classroom">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">Book a Free Class</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classroom-box">
                            <h1>test</h1>
                            <ul>
                                <li class="d-flex">
                                    <div class="img"><img src="assets/img/icons/8.png" alt=""></div>
                                    <h4>Unit Test</h4>
                                </li>
                                <li class="d-flex">
                                    <div class="img"><img src="assets/img/icons/9.png" alt=""></div>
                                    <h4>Previous Questions Papers</h4>
                                </li>
                                <li class="d-flex">
                                    <div class="img"><img src="assets/img/icons/10.png" alt=""></div>
                                    <h4>Test Exams</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Feature Area Start ***** -->
        <section class="featured-area section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="phone-img">
                            <img src="assets/img/phone.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="feature-details">
                            <div class="head">
                                <h2>Features in Detail</h2>
                            </div>
                            <div class="feature-boxes d-flex justify-content-between">
                                <ul>
                                    <li class="d-flex">
                                        <div class="img">
                                            <img src="assets/img/features/1.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>Learn</h3>
                                            <p>Audio, Video, And Textual
                                                Presentation Of The Concepts.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="img">
                                            <img src="assets/img/features/2.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>Practice</h3>
                                            <p>Practice To Be Perfect With Chapter
                                                Wise Tests That Are Customized To
                                                Cater To The Needs Of Every Student.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="img">
                                            <img src="assets/img/features/3.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>Reports</h3>
                                            <p>Parents can analyze the performance reports of their children.</p>
                                        </div>
                                    </li>
                                </ul>

                                <ul>
                                    <li class="d-flex">
                                        <div class="img">
                                            <img src="assets/img/features/4.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>Test</h3>
                                            <p>Evaluate What Is Learned
                                                With Test Series.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="img">
                                            <img src="assets/img/features/5.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>Monitor</h3>
                                            <p>Parents Can Monitor The
                                                Performance Of Their Ward.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="img">
                                            <img src="assets/img/features/6.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>Track</h3>
                                            <p>Keep Track Of The Learning
                                                Progress Of Your Child.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="feature-btns">
                                <div>
                                <a href="#" data-toggle="modal" data-target="#exampleModal0" class="first-btn mr-3">Book a Free class</a>
                                </div>
                                <div>
                                <a href="#" data-toggle="modal" data-target="#exampleModal0" class="second-btn">Book a Demo</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Counselling Area Start ***** -->
        <section class="counselling-area section d-flex">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center">
                    <div class="blue-area">
                        <h1>Book A Free Counselling Session And Demo</h1>
                        <div class="counselling-btn">
                            <a href="#" data-toggle="modal" data-target="#exampleModal0">Book a Demo</a>
                        </div>
                        <div class="dwld-area">
                            <p>Download The App Now!</p>
                            <div class="app-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModal1"><img src="assets/img/app-dwld.png" alt=""></a>
                                <a href="#" data-toggle="modal" data-target="#exampleModal2"><img src="assets/img/google-dwld.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="assets/img/boy-phone.png" alt="" class="phone-boy">
                    </div>
                </div>
            </div>
            <!-- <div class="counseling-img"></div> -->
            <!-- <div class="blue-area">
                <h1>Book A Free Counselling Session And Demo</h1>
                <div class="counselling-btn">
                    <a href="#" data-toggle="modal" data-target="#exampleModal0">Book a Demo</a>
                </div>
                <div class="dwld-area">
                    <p>Download The App Now!</p>
                    <div class="app-btn">
                        <a href="#" data-toggle="modal" data-target="#exampleModal1"><img src="assets/img/app-dwld.png" alt=""></a>
                        <a href="#" data-toggle="modal" data-target="#exampleModal2"><img src="assets/img/google-dwld.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="ash-area"></div> -->
        </section>

        <!-- ***** Video Area Start ***** -->
        <section class="video-section section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-area">
                            <iframe width="950" height="600" src="https://www.youtube.com/embed/pRtwK009Uys"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Testimonials Area Start ***** -->
        <section class="testi-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="testi-head">
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testi-slider owl-carousel">
                            <div class="single-testi">
                                <div class="top-testi">
                                    <div class="img">
                                        <img src="assets/img/quotes.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Rasheed is a student from class 8 and he feels that Stuid learning app has
                                            made him fall in love with learning quite literally. He is truly thankful
                                            that he can utilize the app anytime and anywhere without any constraints.
                                        </p>
                                    </div>
                                </div>
                                <div class="bottom-testi">
                                    <div class="profilepic">
                                        <img src="assets/img/men.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <p>Rasheed</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testi">
                                <div class="top-testi">
                                    <div class="img">
                                        <img src="assets/img/quotes.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Ambika of class 9 says that Stuid learning app has totally changed her life
                                            in the meantime. Now she can get her doubts immediately clarified by
                                            educators of Stuid learning app. Earlier she used to battle a lot,
                                            particularly in Math and Science. Yet, subsequent to watching the videos of
                                            Stuid learning app, she was not only able to
                                            understand every concept, but also she began scoring better marks.</p>
                                    </div>
                                </div>
                                <div class="bottom-testi">
                                    <div class="profilepic">
                                        <img src="assets/img/girl.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <p>Ambika</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testi">
                                <div class="top-testi">
                                    <div class="img">
                                        <img src="assets/img/quotes.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Kanmani of Class ten loves the visualization method for educating at Stuid learning app. Presently when she contemplates subjects like Math, she can envision and see the pragmatic use of every formula and theorem. She says that now she studies  only through Stuid learning app and she can perform astoundingly well in tests every time.</p>
                                    </div>
                                </div>
                                <div class="bottom-testi">
                                    <div class="profilepic">
                                        <img src="assets/img/girl.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <p>Kanmani</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testi">
                                <div class="top-testi">
                                    <div class="img">
                                        <img src="assets/img/quotes.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Rasheed is a student from class 8 and he feels that Stuid learning app has
                                            made him fall in love with learning quite literally. He is truly thankful
                                            that he can utilize the app anytime and anywhere without any constraints.
                                        </p>
                                    </div>
                                </div>
                                <div class="bottom-testi">
                                    <div class="profilepic">
                                        <img src="assets/img/men.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <p>Rasheed</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testi">
                                <div class="top-testi">
                                    <div class="img">
                                        <img src="assets/img/quotes.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Ambika of class 9 says that Stuid learning app has totally changed her life
                                            in the meantime. Now she can get her doubts immediately clarified by
                                            educators of Stuid learning app. Earlier she used to battle a lot,
                                            particularly in Math and Science. Yet, subsequent to watching the videos of
                                            Stuid learning app, she was not only able to
                                            understand every concept, but also she began scoring better marks.</p>
                                    </div>
                                </div>
                                <div class="bottom-testi">
                                    <div class="profilepic">
                                        <img src="assets/img/girl.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <p>Ambika</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testi">
                                <div class="top-testi">
                                    <div class="img">
                                        <img src="assets/img/quotes.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Kanmani of Class ten loves the visualization method for educating at Stuid learning app. Presently when she contemplates subjects like Math, she can envision and see the pragmatic use of every formula and theorem. She says that now she studies  only through Stuid learning app and she can perform astoundingly well in tests every time.</p>
                                    </div>
                                </div>
                                <div class="bottom-testi">
                                    <div class="profilepic">
                                        <img src="assets/img/girl.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <p>Kanmani</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testi">
                                <div class="top-testi">
                                    <div class="img">
                                        <img src="assets/img/quotes.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Rasheed is a student from class 8 and he feels that Stuid learning app has
                                            made him fall in love with learning quite literally. He is truly thankful
                                            that he can utilize the app anytime and anywhere without any constraints.
                                        </p>
                                    </div>
                                </div>
                                <div class="bottom-testi">
                                    <div class="profilepic">
                                        <img src="assets/img/men.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <p>Rasheed</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testi">
                                <div class="top-testi">
                                    <div class="img">
                                        <img src="assets/img/quotes.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Ambika of class 9 says that Stuid learning app has totally changed her life
                                            in the meantime. Now she can get her doubts immediately clarified by
                                            educators of Stuid learning app. Earlier she used to battle a lot,
                                            particularly in Math and Science. Yet, subsequent to watching the videos of
                                            Stuid learning app, she was not only able to
                                            understand every concept, but also she began scoring better marks.</p>
                                    </div>
                                </div>
                                <div class="bottom-testi">
                                    <div class="profilepic">
                                        <img src="assets/img/girl.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <p>Ambika</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testi">
                                <div class="top-testi">
                                    <div class="img">
                                        <img src="assets/img/quotes.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Kanmani of Class ten loves the visualization method for educating at Stuid learning app. Presently when she contemplates subjects like Math, she can envision and see the pragmatic use of every formula and theorem. She says that now she studies  only through Stuid learning app and she can perform astoundingly well in tests every time.</p>
                                    </div>
                                </div>
                                <div class="bottom-testi">
                                    <div class="profilepic">
                                        <img src="assets/img/girl.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <p>Kanmani</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** contact Area Start ***** -->
        <section class="contact-area section">
            <div class="contact-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-box">
                            <h3>Book A Free Class</h3>
                        </div>
                        <form name="form2" method="post" action="email.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control" name="email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="Phone" class="form-control" name="phone" required type="tel"
                                        pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="esource" value="<?php echo $source;?>">
                                        <input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                        <input type="submit" class="form-control" value="submit" name="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Footer Area Start ***** -->
        <footer>
            <div class="container">
                <div class="row footer-first">
                    <div class="col-lg-2 col-md-6">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/footer-logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="call">
                            <p>Call</p>
                            <a href="tel:+919961024500">+91 9961024500</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="call">
                            <p>Email</p>
                            <a href="mailto:support@stuidapp.com">support@stuidapp.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="app-btnss d-flex">
                            <a href="#" data-toggle="modal" data-target="#exampleModal0"><img src="assets/img/playstore-footer.png" alt=""></a>
                            <a href="#" data-toggle="modal" data-target="#exampleModal0"><img src="assets/img/appstore-footer.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            <p>Copyright &copy; 2022 Stuid App. All Rights Reserved. Deigned by <a
                                    href="http://www.theviralmafia.com/?utm_source=stuidapp" target="_blank"> <img
                                        src="assets/img/viralmafia.svg"></a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ***** Popup Area Start ***** -->
        <div class="appoint-model">
            <div class="container">
                <div class="col-12">
                    <div class="row">

                        <div class="modal fade order-model" id="exampleModal0" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog log-sign modal-mookambika" role="document">
                                <div class="col-lg-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">
                                        <!-- <h4>Limited Seats Only</h4>
                                        <h3>Get A <span>Free</span> <br> Consultation</h3>
                                        <h4>Our consultant will get in touch with you</h4> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal"
                                                aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Book a Free Class</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log"
                                                                id="profile2">
                                                                <form name="form3" method="post" action="email.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Name" name="name"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input class="form-control"
                                                                                    placeholder="Phone" name="phone"
                                                                                    required type="tel"
                                                                                    pattern="[0-9]{10}" maxlength="10"
                                                                                    oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                                                                    onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control"
                                                                                    placeholder="Email" name="email"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource"
                                                                                    value="<?php echo $source;?>">
                                                                                <input type="hidden" name="emedium"
                                                                                    value="<?php echo $medium;?>">
                                                                                <input type="submit"
                                                                                    class="form-control" value="Submit"
                                                                                    name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="modal fade order-model" id="exampleModal1" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog log-sign modal-mookambika" role="document">
                                <div class="col-lg-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">
                                        <!-- <h4>Limited Seats Only</h4>
                                        <h3>Get A <span>Free</span> <br> Consultation</h3>
                                        <h4>Our consultant will get in touch with you</h4> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal"
                                                aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Book a Free Class</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log"
                                                                id="profile2">
                                                                <form name="form4" method="post" action="emailios.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Name" name="name"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input class="form-control"
                                                                                    placeholder="Phone" name="phone"
                                                                                    required type="tel"
                                                                                    pattern="[0-9]{10}" maxlength="10"
                                                                                    oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                                                                    onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control"
                                                                                    placeholder="Email" name="email"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource"
                                                                                    value="<?php echo $source;?>">
                                                                                <input type="hidden" name="emedium"
                                                                                    value="<?php echo $medium;?>">
                                                                                <input type="submit"
                                                                                    class="form-control" value="Submit"
                                                                                    name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="modal fade order-model" id="exampleModal2" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog log-sign modal-mookambika" role="document">
                                <div class="col-lg-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">
                                        <!-- <h4>Limited Seats Only</h4>
                                        <h3>Get A <span>Free</span> <br> Consultation</h3>
                                        <h4>Our consultant will get in touch with you</h4> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal"
                                                aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Book a Free Class</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log"
                                                                id="profile2">
                                                                <form name="form5" method="post" action="emailandroid.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Name" name="name"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input class="form-control"
                                                                                    placeholder="Phone" name="phone"
                                                                                    required type="tel"
                                                                                    pattern="[0-9]{10}" maxlength="10"
                                                                                    oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                                                                    onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control"
                                                                                    placeholder="Email" name="email"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource"
                                                                                    value="<?php echo $source;?>">
                                                                                <input type="hidden" name="emedium"
                                                                                    value="<?php echo $medium;?>">
                                                                                <input type="submit"
                                                                                    class="form-control" value="Submit"
                                                                                    name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>





    <div class="cont_link_box">
        <a id="" href="tel:+919961024500" class="callnow_inte" target="_blank">
        <i class="fa fa-phone-alt" aria-hidden="true"></i>
        </a>
        <a id="" href="https://wa.me/+919961024500" class="whatsapp_inte" target="_blank">
        <i class="fab fa-whatsapp"></i>
        </a>
        </div>

    <!-- about Form-->
    <div class="modal fade popsec onload_pop" id="myModal3">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn-close pop_button" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="privacy_onload">

                            <div class="pop-privacy-box">

                                <h4>Privacy Policy</h4>

                                <p>This privacy policy applies to the website( name). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                                <h4>Cookies Policy</h4>

                                <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                            </div>

                        </div>    
                        
                    </div>

                </div>
            </div>
    </div>

    <!-- START Bootstrap-Cookie-Alert -->
    <div class="alert text-center cookiealert" role="alert">
        <b>Do you like cookies?</b> &#x1F36A; <a href="#" data-toggle="modal" data-target="#myModal3">Learn more</a>

        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            I agree
        </button>
    </div>
    <!-- END Bootstrap-Cookie-Alert -->








    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>

    <script src="assets/js/cookiealert.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $("#exampleModal0").modal('show');
            }, 7000);
        });
    </script>

</body>

</html>