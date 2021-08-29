<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go-Kart Website</title>

    <link rel="shortcut icon" href="assets/favicon.png" type="assets/x-icon" />

    <!--CSS-->
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/bootstrap.css">
    <link rel="stylesheet" href="Css/media.css">
    <link rel="stylesheet" href="Css/owl-carousel.css">
    <link rel="stylesheet" href="Css/owlCrousel-default.css">
    <link rel="stylesheet" href="Css/slider.css">
    <link rel="stylesheet" href="Css/style2.css">
    <link rel="stylesheet" href="Css/style3.css">
    <link rel="stylesheet" href="Css/data-aos.css">

</head>

<body>
    <!--PRELOADER-->
    <div class="loader-bg">
        <div class="loader">

        </div>
        <img src="assets/loader.gif" alt="">
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section>
                        <div class="container">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-12 mx-auto">

                                        <!-- Countdown 4-->
                                        <div class="rounded bg-gradient-count text-white shadow p-5 text-center mb-5">
                                            <p class="mb-0 font-weight-bold text-uppercase">
                                                <h3 class="font1">UIT MEGA KARTING EVENT 2021</h3>
                                                <p class="font2">31 August, 2021</p>
                                                <p class="red modal-subhead text-danger">Hurry! Registrations are closing soon!</p>
                                            </p>
                                            <div id="clock-c" class="countdown d-flex justify-content-around py-3 mb-3">
                                                <span id="days"></span>
                                                <span id="hours"></span>
                                                <span id="minutes"></span>
                                                <span id="seconds"></span>
                                            </div>
                                            <a href="registration.php"> <button class="btn btn-light red2 me-2 mb-2" type="submit">Register Now</button></a>
                                            <a href="event.php"> <button class="btn btn-outline-light me-2 mb-2" type="submit">View Details</button></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>




    <!--==========================================================================-->
    <!--NAVBAR -->
    <section class="navbar-section">
        <div class="navbar-container nav-flex container-fluid">
            <div class="logo">
                <a href="index.php"> <img src="assets/logo-img.png" alt="" class="logo"></a>

            </div>
            <div class="navbar">

                <div class="icon-bar" onclick="Show()">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>

                <ul id="nav-lists">
                    <li class="close"><span onclick="Hide()">×</span></li>
                    <li><a class="underline-hover-1" href="index.php">Home</a></li>
                    <li><a class="underline-hover-1" href="about.php">About</a></li>
                    <li><a class="underline-hover-1" href="events.php">Events <span class="new">New</span></a></li>
                    <li><a class="underline-hover-1" href="news.php">News</a></li>
                    <li><a class="underline-hover-1" href="gallery.php">Gallery</a></li>
                    <li><a class="underline-hover-1" href="campus.php">Campus & Facilities</a></li>
                    <li><a class="underline-hover-1" href="contact.php">Contact</a></li>
                </ul>

            </div>
        </div>
    </section>


    <header>




        <div class="container header-container">
            <div class="row h-100">

                <div class="col-xl-7 order-2 order-xl-1">
                    <div class="header-img">
                        <img src="assets/header5.png" alt="">
                    </div>
                </div>

                <div class="col-xl-5 order-1 order-xl-2">

                    <div class="header-right">
                        <div class="header-content">
                            <button type="button" class="btn btn-outline-dark modal-btn" id="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            
                            </button>
                            <h2 data-aos="fade-up" class="red">Let's set the pace together.</h2>
                            <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium excepturi quod id eius quo illum optio dolores tenetur doloremque nemo?</p>
                            <a href="contact.php"> <button class="btn btn-light red2 me-2" type="submit">Join Club</button></a>
                            <a href="about.php"> <button class="btn btn-light" type="submit">View More</button></a>
                            <br>


                        </div>
                    </div>
                </div>


            </div>

        </div>



    </header>
    <!--===========================================================================-->
    <!--Features-->
    <section class="features-section">
        <div class="container features-section py-5">
            <div class="headings">
                <h4>WHY CHOOSE US ?</h4>
                <p class="w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur vitae distinctio ipsam. Asperiores laudantium nobis odio!</p>
            </div>
            <div class="row pt-3">

                <div class="col-6 col-md-3" data-aos="fade-up">
                    <div class="icon-div">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <p class="feature-heading font2">Qualified Coaches</p>
                    <p class="feature-content">Lorem ipsum dolor sit. dignissimos sapiente, illo dolorem placeat.</p>
                </div>

                <div class="col-6 col-md-3" data-aos="fade-up">
                    <div class="icon-div">
                        <i class="fab fa-phoenix-framework"></i>
                    </div>
                    <p class="feature-heading font2">Modern Powerful Karts</p>
                    <p class="feature-content">Lorem ipsum dolor sit. dignissimos sapiente, illo dolorem placeat.</p>
                </div>

                <div class="col-6 col-md-3" data-aos="fade-up">
                    <div class="icon-div">
                        <i class="fas fa-flag-checkered"></i>
                    </div>
                    <p class="feature-heading font2">Excellent Tracks</p>
                    <p class="feature-content">Lorem ipsum dolor sit. dignissimos sapiente, illo dolorem placeat.</p>
                </div>

                <div class="col-6 col-md-3" data-aos="fade-up">
                    <div class="icon-div">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <p class="feature-heading font2">Regular Competitions</p>
                    <p class="feature-content">Lorem ipsum dolor sit. dignissimos sapiente, illo dolorem placeat.</p>
                </div>

            </div>
        </div>
    </section>

    <!--============================================================================================-->
    <!-- GO karting event -->
    <section class="racing-section">
        <div class="container racing-container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="race-details">
                        <p class="mb-0 font-weight-bold text-uppercase">
                            <h2 class="font1 red mt-3">UIT MEGA KARTING EVENT 2021</h2>
                            <p class="">Go-Kart Racing Club Bhopal, Madhya Pradesh</p>
                            <p class="">31 August, 2021 to 30th September, 2021</p>

                            <a href="registeration.php"> <button class="btn btn-light red2 me-2" type="submit">Register Now</button></a>
                            <a href="event.php"> <button class="btn btn-outline-dark me-2" type="submit">View Details</button></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rounded bg-light text-dark shadow p-4 text-center  mt-3">
                        <p class="red modal-subhead text-danger">Hurry! Registrations are closing soon!</p>
                        <div id="rclock-c" class="race-countdown d-flex justify-content-around py-3 mb-3">
                            <span id="rdays"></span>
                            <span id="rhours"></span>
                            <span id="rminutes"></span>
                            <span id="rseconds"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================================================================================-->
    <!-- GALLERY -->
    <section class="gallery-section py-5">
        <div class="headings">
            <h4>DYNAMIC RACING EXPERIENCE</h4>
            <p class="font2">GALLERY</p>
        </div>

        <div class="gallery-div my-2">

            <div class="owl-carousel gallery-carousel owl-theme">
                <div class="item">
                    <img src="assets/gallery2.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/gallery3.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/gallery4.png" alt="">
                </div>

                <div class="item">
                    <img src="assets/gallery5.png" alt="">
                </div>

            </div>



        </div>

        <p class="gallery-page-link"> <a href="gallery.php" class="">View More <i class="fas fa-long-arrow-alt-right"></i> </a></p>





    </section>



    <!--============================================================================================-->
    <!-- Events -->
    <section class="event-section">
        <div class="container event-container py-5">
            <div class="headings">
                <h4 class="large-text">ACCELARATE YOUR RIDING STYLE</h4>
                <p class="font2">UPCOMING EVENTS</p>
            </div>

            <div class="owl-carousel event-carousel owl-theme">
                <div class="item event-div" data-aos="zoom-in">
                    <img src="assets/event1.png" alt="">
                    <div class="event-content">
                        <div class="event-date">September 18, 2021</div>
                        <div class="event-heading font2">Mega Karting Event</div>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur repellendus quam quaerat deleniti soluta praesentium.""
                        </p>
                        <button class="btn btn-outline-dark red2">Register Now  </button>
                    </div>



                </div>

                <div class="item event-div" data-aos="zoom-in">
                    <img src="assets/event2.png" alt="">
                    <div class="event-content">
                        <div class="event-date">September 18, 2021</div>
                        <div class="event-heading font2">Mega Karting Event</div>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur repellendus quam quaerat deleniti soluta praesentium.""
                        </p>
                        <button class="btn btn-outline-dark red2">Register Now  </button>
                    </div>
                </div>
                <div class="item event-div" data-aos="zoom-in">
                    <img src="assets/event3.png" alt="">
                    <div class="event-content">
                        <div class="event-date">September 18, 2021</div>
                        <div class="event-heading font2">Mega Karting Event</div>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur repellendus quam quaerat deleniti soluta praesentium.""
                        </p>
                        <button class="btn btn-outline-dark red2" type="submit">Register Now</button>
                    </div>
                </div>

                <!--Modal-->



            </div>




        </div>
    </section>

    <!--============================================================================================-->
    <!-- AWARDS -->
    <section class="award-section">
        <div class="container award-container py-5">
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="py-3 mb-3 text-light gradient-underline font1">Awards <br> & <br> Recognitions</h3>
                    <p class="text-light">ACHIEVING EXCELLENCE IN GO-KARTING</p>
                </div>

                <div class="col-sm-3">
                    <div class="award-logo-img">
                        <div class="owl-carousel award-img-carousel owl-theme">
                            <div class="item">
                                <img src="assets/award1.png" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/award2.png" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/award3.png" alt="">
                            </div>



                        </div>

                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="award-details">
                        <div class="owl-carousel award-content-carousel owl-theme">
                            <div class="item">
                                <div class="award-detail">
                                    <h3 class="award-heading font2">British Kart Championships Award 2020</h3>
                                    <p class="award-company">by Motorsport UK</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="award-detail">
                                    <h3 class="award-heading font2">National Karting Championship Award 2017</h3>
                                    <p class="award-company">by FIA</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="award-detail">
                                    <h3 class="award-heading font2">Red Bull Kart Fight 2019</h3>
                                    <p class="award-company">by Red Bull</p>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--============================================================================================-->
    <!-- Memberships -->
    <section class="membership-section">
        <div class="container membership-container py-5">
            <div class="headings mb-3">
                <h4>ALL OUR PAYMENT OPTIONS</h4>
                <p class="w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur vitae distinctio ipsam. Asperiores laudantium nobis odio!</p>
            </div>

            <div class="row m-auto ">
                <div class="col-lg-3 col-md-6">
                    <div class="plan-img-div">
                        <img src="assets/kart3-removebg-preview.png" alt="">
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 mb-1">
                    <div class="plan-div">
                        <p class="plan-subtext">Lorem ipsum dolor sit.</p>
                        <p class="plan-name font2">Basic</p>
                        <p class="plan-price"><span class="rupees-icon">₹</span> 800/-</p>
                        <ul>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                        </ul>
                        <button class="btn btn-outline-dark" type="submit">Join Now <i class="fas fa-long-arrow-alt-right"></i> </button>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-1">
                    <div class="plan-div plan-second-div">
                        <p class="plan-subtext">Lorem ipsum dolor sit.</p>
                        <p class="plan-name font2">Essential</p>
                        <p class="plan-price"><span class="rupees-icon">₹</span> 3200/-</p>
                        <ul>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                        </ul>
                        <button class="btn btn-outline-dark red2" type="submit">Join Now <i class="fas fa-long-arrow-alt-right"></i> </button>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-1">
                    <div class="plan-div">
                        <p class="plan-subtext">Lorem ipsum dolor sit.</p>
                        <p class="plan-name font2">Premium</p>
                        <p class="plan-price"><span class="rupees-icon">₹</span> 6400/-</p>
                        <ul>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                            <li> <i class="fas fa-check"></i> Lorem, ipsum dolor.</li>
                        </ul>
                        <button class="btn btn-outline-dark" type="submit">Join Now  <i class="fas fa-long-arrow-alt-right"></i></button>

                    </div>
                </div>





            </div>

        </div>
    </section>



    <!--==========================================================================-->
    <!--ABOUT US-->
    <section class="about-section">
        <div class="container about-container py-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-img-div">
                        <img src="assets/about.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-content-div">
                        <h4 class="fw-bold fs-3 py-3 mb-3 text-light gradient-underline font1" data-aos="fade-up">About Us</h4>
                        <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias numquam error, assumenda totam commodi quod suscipit dolor excepturi eum optio vitae quae impedit, dignissimos. Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Molestiae vel nulla rerum autem quisquam hic rem sapiente perspiciatis eaque minima. dolorum rerum aspernatur dolores? Molestiae sapiente accusantium quibusdam, tempora asperiores exercitationem?</p>
                        <button class="btn btn-outline-light about-btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================================================================================-->
    <!-- Testimonials -->
    <section class="testimonial-section">
        <div class="container py-5">

            <div class="row">
                <div class="col-md-3">
                    <div class="testimonial-buttons">
                        <div class="customPrevBtn">

                            <i class="fas fa-chevron-circle-left"></i>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="owl-carousel testimonial-carousel owl-theme">
                        <div class="item" data-aos="zoom-in">
                            <img src="assets/coach1.jpg" alt="">
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur eos voluptates necessitatibus inventore blanditiis, delectus perferendis dolor facere cumque fugit, eum ab sint assumenda repellendus quam quaerat deleniti
                                soluta praesentium.""
                            </p>
                            <p class="name font2">Harry Rodrigues</p>
                            <p class="designation font2">Head Coach</p>
                        </div>

                        <div class="item" data-aos="zoom-in">
                            <img src="assets/coach1.jpg" alt="">
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur eos voluptates necessitatibus inventore blanditiis, delectus perferendis dolor facere cumque fugit, eum ab sint assumenda repellendus quam quaerat deleniti
                                soluta praesentium.""
                            </p>
                            <p class="name font2">James Watson</p>
                            <p class="designation font2">Head Coach</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="testimonial-buttons next-btn">
                        <div class="customNextBtn">
                            <i class="fas fa-chevron-circle-right"></i>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>



    <!--=======================================================================-->
    <!--Latest News-->
    <section class="news-section">
        <div class="container news-container py-5">
            <div class="headings">
                <h4>LATEST NEWS COLUMN</h4>
                <p class="font2">BULLETINS</p>
            </div>



            <div class="row">
                <div class="col-md-6 mb-2 mb-md-0">
                    <div class="news-div">
                        <div class="news-img-div">

                        </div>

                        <div class="news-left-card ">
                            <p class="news-headline">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ex aperiam magnam animi expedita provident.
                            </p>
                            <p class="news-date font2">Published on: July 25, 2021</p>
                            <p class="news-details">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur deleniti expedita nesciunt eaque culpa non sequi ab officiis, quam, earum, velit iure!
                            </p>
                            <button class="btn btn-outline-dark" type="submit">Read More  <i class="fas fa-long-arrow-alt-right"></i></button>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="news-second-col">
                        <div class="side-news mb-2 mb-md-0">
                            <div class="side-img-div"></div>
                            <div class="news-card">
                                <p class="news-headline">
                                    Lorem ipsum dolor elit. Quisquam ex aperiam magnam animi expedita provident.
                                </p>
                                <p class="news-date font2">Published on: July 25, 2021</p>

                                <button class="btn btn-outline-dark" type="submit">Read More  <i class="fas fa-long-arrow-alt-right"></i></button>
                            </div>
                        </div>
                        <div class="side-news">
                            <div class="side-img-div"></div>
                            <div class="news-card">
                                <p class="news-headline">
                                    Lorem ipsum dolor elit. Quisquam ex aperiam magnam animi expedita provident.
                                </p>
                                <p class="news-date font2">Published on: July 25, 2021</p>

                                <button class="btn btn-outline-dark" type="submit">Read More  <i class="fas fa-long-arrow-alt-right"></i></button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>




    </section>

    <!--===============================================================================-->
    <!-- FOOTER --->
    <footer class="footer">

        <div class="container footer-container pt-5">
            <div class="row ">
                <div class="col-md-4 col-sm-6 col-xs-12 text-light ">
                    <div class="row-col">
                        <div class="footer-logo-img">
                            <img src="assets/logo-img.png" alt="" class="logo">
                        </div>
                        <p class="pt-3 footer-logo-txt">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem beatae quos praesentium, possimus iusto sequi accusamus error eius voluptas ab perspiciatis sed omnis quam dolore.
                        </p>

                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-xs-12 px-2 text-light">
                    <div class="row-col">
                        <p class="topic text-light pb-3 font2">Quick Links</p>
                        <p><a href="index.html">Home</a></p>
                        <p><a href="about.php">About Us</a></p>
                        <p><a href="gallery.php">Gallery</a></p>
                        <p><a href="news.php">Latest News</a></p>
                        <p><a href="contact.php">Contact Us</a></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 px-2 text-light">
                    <div class="row-col">
                        <p class="topic text-light pb-3 font2">Contact us</p>
                        <p><i class="fas fa-phone-alt"></i> Phone:</p>
                        <p>+91 4684684111</p>
                        <p>+91 7866000000</p>
                        <p><i class="fas fa-envelope"></i> Email:</p>
                        <p><a>example@gmail.com</a></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 px-2 text-light">
                    <div class="row-last-col">
                        <p class="topic pb-3 font2">Newsletter</p>

                        <form class="d-flex" onsubmit="subscribeNewsletter(event,this)">
                            <input class="form-control" name="subsForNewsletter" type="email" placeholder="Email" required>
                            <button class="btn btn-light" type="submit"><i class="fab fa-telegram-plane"></i></button>
                        </form>
                        <div class="social-div">
                            <p class="pt-4 topic font2">Follow Us</p>

                            <a href="" class="p-1"><i
                                    class="fab fa-instagram"></i> </a>
                            <a href="" class="p-1"><i
                                    class="fab fa-facebook-f"></i> </a>
                            <a href="" class="p-1"><i
                                    class="fab fa-linkedin-in"></i> </a>
                        </div>
                    </div>
                </div>


            </div>

        </div>


        <div class="copyright text-center p-3">
            <p> Copyright © 2021 All Rights Reserved by Go-Kart.</p>
        </div>
    </footer>




    <!--===============================================================================-->
    <!--JS--->
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/owl-carousel.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/coutndown.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!--Preloader Js-->
    <script>
        setTimeout(function() {
            $('.loader-bg').fadeToggle();
        }, 10500);
    </script>
    <!--DATA AOS JS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 250,
            duration: 1000,
        });
    </script>


    <script>
        var navList = document.getElementById("nav-lists");

        function Show() {
            navList.classList.add("_Menus-show");
        }

        function Hide() {
            navList.classList.remove("_Menus-show");
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#modal").trigger('click');
        });
    </script>


</body>

</html>