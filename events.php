<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/favicon.png" type="assets/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Css/style4.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/style3.css">
    <link rel="stylesheet" href="Css/style2.css">
    <link rel="stylesheet" href="Css/media.css">
    <script src="https://kit.fontawesome.com/ea9cae87cb.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Go Kart-event</title>
</head>

<body>
    <section class="navbar-section">
        <div class="navbar-container nav-flex container-fluid">
            <div class="logo">
                <a href="index.html"> <img src="assets/logo-img.png" alt="" class="logo"></a>

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



    <!--======================================-->

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/UuCi7XKh0jU" height="400px" class="d-block w-100" alt="...">
                <div class="d-flex flex-column carousel-caption d-flex h-100 justify-content-center align-items-center">
                    <h1 class="fw-bolder fs-1 py-lg-3 py-sm-1 font1">UIT MEGA KARTING EVENT 2021</h1>
                    <p><a href="registration.php"><button type="button" class="btn btn-lg btn-primary red2 rounded-pill mx-lg-3">Register Now</button></a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/8iLCOfVMs-k" height="400px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column h-100 justify-content-center align-items-center">
                    <h1 class="fw-bolder fs-1 py-lg-3 py-sm-1 font1">UIT MEGA KARTING EVENT 2021</h1>
                    <p><a href="registration.php"><button type="button" class="btn btn-lg btn-primary red2 rounded-pill mx-lg-3">Register Now</button></a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/nvzXUaV8uX4" height="400px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column h-100 justify-content-center align-items-center">
                    <h1 class="fw-bolder fs-1 py-lg-3 py-sm-1 font1">UIT MEGA KARTING EVENT 2021</h1>
                    <p><a href="registration.php"><button type="button" class="btn btn-lg btn-primary red2 rounded-pill mx-lg-3">Register Now</button></a>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--ABOUT-->
    <section class="about py-5">
        <div class="container">
            <h4 class="fw-bold fs-3 py-3 mb-3 text-dark gradient-underline font1">About The Event</h4>
            <h3 class="my-3 fw-bold text-center"></h3>
            <div class="about-section1">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">


                        <div class="about-content1 text-dark">
                            <p>
                                It is a Student Go-Kart design, manufacturing, and racing competition. Engineering /Diploma students from all over India register their team and compete with another team in the different rounds of the event. Indian Karting Race is a contest formulated
                                to enhance the approach of students practicing Engineering and Diploma courses. UIT go-kart championship held with a permit of FMSCI (Under Ministry of Sports) by the highly professional organizing committee and marshal,
                                scrutineer from different reputed Motorsport organizations and automobile industries.
                            </p>
                            <p>
                                UIT GO-KARTING CHAMPIONSHIP is a design, manufacturing, and racing event of go-kart under ISIE Design Regulations and FMSCI/CIK/FIA to compete with other teams all over the country from different organizations. Our objective is to promote Motorsports
                                as a profession in India, Passion, Creativity, Innovation, and practical approach based technical skills in engineering/diploma students.
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--JOIN US-->
    <section class="join">
        <div class="container py-4">
            <h4 class="fw-bold fs-3 py-3 mb-3 mt-2 text-dark gradient-underline font1">WHY JOIN US?</h4>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo possimus in fuga veritatis sequi maiores, saepe impedit harum delectus doloremque.</p>
            <div class="row my-3 mt-lg-3 mb-lg-0 text-center">
                <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="join-icon py-2"><i class="fas fa-medal fa-3x text-primary"></i></div>
                    <div class="join-head py-2">
                        <h4 class="font2">Exciting Awards</h4>
                    </div>
                    <div class="join-content py-2">Get a chance to win a free Membership to our club and cash prizes</div>
                </div>
                <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="join-icon py-2"><i class="fas fa-users fa-3x text-primary"></i></div>
                    <div class="join-head py-2">
                        <h4 class="font2">Compete with the best</h4>
                    </div>
                    <div class="join-content py-2">Showcase your skills at the international level by competing with champions.</div>
                </div>
                <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="join-icon py-2"><i class="fas fa-cogs fa-3x text-primary"></i></div>
                    <div class="join-head py-2">
                        <h4 class="font2">Design and Manufacture</h4>
                    </div>
                    <div class="join-content py-2">Get Technical and Designingexperience with free sponsorship.</div>
                </div>

            </div>
        </div>
    </section>

    <!--AWARDS-->
    <section class="awards">
        <div class="container py-4">
            <h4 class="fw-bold fs-3 py-3 mb-3 text-dark gradient-underline font1">EXCITING AWARDS</h4>
            <div class="row mt-5 pt-3 award-row">
                <div class="col-12  col-sm-4 col-lg-4 h-20 d-flex order-2 order-sm-1 flex-column align-items-center  award-card mt-2">
                    <div class="award-main shadow">
                        <div class="award-ribbon">
                            <i class="fas fa-award fa-2x text-primary"></i>
                        </div>
                        <div class="award-icon text-center">
                            <i class="fas fa-trophy fa-2x text-primary"></i>
                        </div>
                        <div class="award-content text-center">
                            <h5 class="font2">2 nd</h5>
                            <h6>Cash Prize of Rs.1 Lakhs + Trophy</h6>
                            <h6>80% Scholarship on Club Membership</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12  col-sm-4 col-lg-4 order-1 order-sm-2 h-20 d-flex flex-column align-items-center award-card mt-2">
                    <div class="award-main shadow">
                        <div class="award-ribbon">
                            <i class="fas fa-award fa-2x text-primary"></i>
                        </div>
                        <div class="award-icon text-center">
                            <i class="fas fa-trophy fa-3x text-primary"></i>
                        </div>
                        <div class="award-content text-center">
                            <h5 class="font2">1 st</h5>
                            <h6>Cash Prize of Rs.3 Lakhs + Trophy</h6>
                            <h6>100% Scholarship on Club Membership</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-4 h-20 order-3 d-flex flex-column align-items-center award-card mt-2">
                    <div class="award-main shadow">
                        <div class="award-ribbon">
                            <i class="fas fa-award fa-2x text-primary"></i>
                        </div>
                        <div class="award-icon text-center">
                            <i class="fas fa-trophy fa-1x text-primary"></i>
                        </div>
                        <div class="award-content text-center">
                            <h5 class="font2">3 rd</h5>
                            <h6>Cash Prize of Rs.50K + Trophy</h6>
                            <h6>50% Scholarship on Club Membership</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row award-row">
                <div class="col-12 col-sm-6 col-lg-6  award-card text-center mt-2 py-3">
                    <div class="award-main shadow">
                        <div class="award-ribbon">
                            <i class="fas fa-award fa-2x text-primary"></i>
                        </div>
                        <h5>Best Kart Designing Team</h5>
                        <h6>Cash Prize of 10K + Certificate</h6>
                        <h5>10% off on Club Membership</h5>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-lg-6 award-card text-center mt-2 py-3">
                    <div class="award-main shadow">
                        <div class="award-ribbon">
                            <i class="fas fa-award fa-2x text-primary"></i>
                        </div>
                        <h5>Each Participant</h5>
                        <h6>Certificates +</h6>

                        <h6>Gift Hampers</h6>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!--DOWNLOAD-->
    <section class="download ">
        <div class="container py-4">
            <h4 class="fw-bold fs-3 py-3 mb-3 text-dark gradient-underline font2">Downloads</h4>
            <table class="table table-sm table-light mx-auto table-striped">
                <thead>
                    <tr class="py-5 fs-5">
                        <th scope="col" class="px-lg-3">Document Name</th>
                        <th scope="col">Details</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td><a href="#" class="text-decoration-none text-dark fw-bold px-lg-3">Rulebook</a>

                        </td>
                        <td>containing the guidelines and rules for participating</td>
                        <td><a href="./download/rulebook.pdf" target="_blank"><button type="button" class="btn btn-primary red2 m-2">View / Download</button></a></td>


                    </tr>
                    <tr>


                        <td><a href="#" class="text-decoration-none text-dark fw-bold px-lg-3">Requirements</a>
                        </td>
                        <td>an information brochure</td>
                        <td><a href="./download/requirements.pdf" target="_blank"><button type="button" class="btn btn-primary red2 m-2">View / Download</button></a></td>

                    </tr>
                    <tr>



                        <td><a href="#" class="text-decoration-none text-dark fw-bold px-lg-3">Registration
                            & payment guide</a></td>
                        <td>Stepwise Registration & Payment process</td>
                        <td><a href="./download/regitration.pdf" target="_blank"><button type="button" class="btn btn-primary red2 m-2">View / Download</button></a></td>

                    </tr>

                </tbody>
            </table>
        </div>
    </section>

    <!--EVENT-->

    <section class="event-dates ">
        <div class="container py-4 mb-4">
            <h4 class="fw-bold fs-3 py-3 mb-3 text-dark gradient-underline font2">Event Calendar</h4>
            <div class="table-responsive">
                <table class="table table-bordered event-table ">
                    <thead>
                        <tr class="px-5 py-5">

                            <th scope="col" class="px-3">Scheduled Event</th>
                            <th scope="col" class="px-3">Timeline(Days)</th>
                            <th scope="col" class="px-3">Timeline(Hours)</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="px-2">

                            <td class="px-3">Registration</td>
                            <td class="px-3">28 Aug - 4 Sept </td>
                            <td class="px-3">12am-12am IST</td>
                        </tr>
                        <tr>

                            <td class="px-3">Round 1<br> (Innovation and Design)</td>
                            <td class="px-3">5 Sept - 10Sept </td>
                            <td class="px-3">12am-12am IST</td>
                        </tr>

                        <tr>
                            <td class="px-3">Round 2
                                <br> (Manufacturing)
                            </td class="px-3">

                            <td class="px-3">14 Sept - 24 Sept </td>
                            <td class="px-3">4pm-11pm IST</td>
                        </tr>
                        <tr>
                            <td class="px-3">Round 3
                                <br> (Race)
                            </td class="px-3">

                            <td class="px-3">28 Sept </td>
                            <td class="px-3">4pm-11pm IST</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container shadow text-center venue py-3">
                <h4 class="text-center"><i class="fas fa-map-marker-alt fa-1x px-3 text-primary"></i>Venue</h4>
                <p class="fw-bold">UIT-RGPV,Bhopal,M.P.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3664.153781087258!2d77.35946871428811!3d23.31017861136854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c663a2f02fc89%3A0x12a6b478bbd192f1!2sUniversity%20Institute%20of%20Technology%20RGPV!5e0!3m2!1sen!2sin!4v1630217102079!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    </section>

    <!--REGISTERATION-->
    <section class="registration">

        <div class="container py-4">
            <h5 class="fw-bold fs-3 py-3 mb-3 text-dark gradient-underline font2">Registration Details</h5>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Registration Details
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>There should be 20 members per team</li>
                                <li>12 (1st-2nd) year students and 8 (3rd -4th) year students </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Eligibility
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>Participants must be enrolled as degree seeking undergraduate or graduate students in any College or University. (1st-4th year) or(1st - 3rd year)

                            </li>
                            <li>A university or college may have more than one team register.</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                            Minimum Requirements
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>The team must contain 12 (1st-2nd year ) students and 8 (3rd-4th year) students</li>
                            <li>The racer of the team must have a License</li>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            Fees
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Each team will have to pay Rs.5000/- registration fee at the time of registration.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--PARTY-->

    <section class="party mt-3 ">
        <div class="container py-4">
            <h4 class="fw-bold fs-3 py-3 mb-3 text-dark gradient-underline font2">After Event Party</h4>
            <p>The thrill doesn’t have to stop when the cars leave the track! The party will be started with the greatest band "the band " performing after the racing event. We will be throwing a party for all the participants at the courtyard by GO-KART.
                Courtyard by GO-KART is the original and most exclusive after-party that follows uitgkc around the country</p>
            <div class="party-section">
                <div class="row g-1">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <img src="https://source.unsplash.com/hTv8aaPziOQ/300x400" alt="party1" class="img img-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <img src="https://source.unsplash.com/ZhQCZjr9fHo/300x400" alt="party1" class="img img-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <img src="https://source.unsplash.com/nLUb9GThIcg/300x400" alt="party1" class="img img-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <img src="https://source.unsplash.com/ZODcBkEohk8/300x400" alt="party1" class="img img-fluid">
                    </div>



                </div>
            </div>
        </div>
    </section>


    <!--PARTNERS-->
    <section class="partners ">
        <div class="container py-4">
            <h4 class="fw-bold fs-3 py-3 mb-3 text-dark gradient-underline font1">Partners</h4>
            <div class="partner-logo container d-flex flex-row flex-wrap justify-content-lg-between justify-content-sm-center align-items-center py-3">

                <div class="partner1 px-2 px-sm-3 px-lg-2  py-2 py-lg-3">
                    <img src="assets/logo1.png">
                </div>
                <div class="partner1 px-2 px-sm-3 px-lg-2  py-2 py-lg-3">
                    <img src="assets/logo2.png">
                </div>
                <div class="partner1 px-2 px-sm-3 px-lg-2 py-2 py-lg-3">
                    <img src="assets/logo3.png">
                </div>
                <div class="partner1 px-2 px-sm-3 px-lg-2 py-2 py-lg-3">
                    <img src="assets/logo4.png">
                </div>
                <div class="partner1 px-2 px-sm-3 px-lg-2 py-2 py-lg-3">
                    <img src="assets/logo5.png">
                </div>
                <div class="partner1 px-2 px-sm-3 px-lg-2 py-2 py-lg-3">
                    <img src="assets/logo6.png">
                </div>
                <div class="partner1 px-2 px-sm-3 px-lg-2 py-2 py-lg-3">
                    <img src="assets/logo7.png">
                </div>
                <div class="partner1 px-2 px-sm-3 px-lg-2 py-2 py-lg-3">
                    <img src="assets/logo8.png">
                </div>
                <div class="partner1 px-2 px-sm-3 px-lg-2 py-2 py-lg-3">
                    <img src="assets/logo9.png">
                </div>
                <div class="partner1 px-2 px-sm-3 px-lg-2 py-2 py-lg-3">
                    <img src="assets/logo10.png">
                </div>

            </div>
        </div>
    </section>


    <!--FOOTER-->
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
                        <p><a href="index.php">Home</a></p>
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


    <!-- JavaScript; -->

    <script>
        var navList = document.getElementById("nav-lists");

        function Show() {
            navList.classList.add("_Menus-show");
        }

        function Hide() {
            navList.classList.remove("_Menus-show");
        }
    </script>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>