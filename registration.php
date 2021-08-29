<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="assets/x-icon" />

    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/bootstrap.css">
    <link rel="stylesheet" href="Css/media.css">
    <link rel="stylesheet" href="Css/style2.css">
    <link rel="stylesheet" href="Css/style3.css">

</head>

<body>
    <?php
    
    include("common.php");
    ?>

<section class="navbar-section">
        <div class="navbar-container nav-flex container-fluid">
            <div class="logo">
                <img src="assets/logo-img.png" alt="" class="logo">

            </div>
            <div class="navbar">

                <div class="icon-bar" onclick="Show()">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>

                <ul id="nav-lists">
                    <li class="close"><span onclick="Hide()">×</span></li>
                    <li><a class="underline-hover-1" href="index.html">HOME</a></li>
                    <li><a class="underline-hover-1" href="about.html">ABOUT</a></li>
                    <li><a class="underline-hover-1" href="events.html">EVENTS <span class="new">New</span></a></li>
                    <li><a class="underline-hover-1" href="news.html">NEWS</a></li>
                    <li><a class="underline-hover-1" href="gallery.html">GALLERY</a></li>
                    <li><a class="underline-hover-1" href="campus.html">CAMPUS & FACILITIES</a></li>
                    <li><a class="underline-hover-1" href="contact.html">CONTACT</a></li>
                </ul>

            </div>
        </div>
    </section>
        <!--=======================================================
        --REGISTRATION-->
        <section>
            <div class="container-fluid registration-container">
                <div class="registration-img-div">

                </div>


                <div class="registration-right-div">
                    <div class="btn-div">
                        <h4 class="fs-3 mb-3 mt-4 text-dark gradient-underline font1">Contact</h4>
                        <button class="btn btn-primary under mb-2 font2" id="btn1">Team Registration</button>
                        <button class="btn btn-primary mb-2 font2" id="btn2">Member Registeration</button>
                    </div>
                    <!--FIRST REGISTRATION FORM-->
                    <div class="registration-div d-block" id="reg1">
                        <form id="contactform" action="submit.php" method="post" class="form-tag">
                            <div class="mb-4">
                                <input type="text" name="team_name" class="form-control" id="exampleFormControlInput1" placeholder="Name of Team" required />
                            </div>

                            <div class="mb-4">
                                <input type="text" name="leader_name" class="form-control" id="exampleFormControlInput1" placeholder="Name of Leader" required />
                            </div>

                            <div class="mb-4">
                                <input type="email" class="form-control" name="email" id="formemail" placeholder="name@example.com" required />
                            </div>

                            <div class="mb-4">
                                <input type="tel" name="contact" pattern="[0-9]{10}" class="form-control" placeholder="Contact Number" required />
                            </div>

                            <div class="mb-4">
                                <input type="text" name="institute" class="form-control" id="exampleFormControlInput1" placeholder="Name of your Institute" required />
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6 phone-input-div">

                                    <input type="tel" name="racer_id" class="form-control" placeholder="Racer Id" required />
                                </div>
                                <div class="col-md-6">

                                    <input type="tel" name="licence_id" class="form-control" placeholder="Licence Number" required />
                                </div>

                            </div>

                            <button class="btn btn-dark red2" type="submit" onclick="register()">Submit</button>

                        </form>

                    </div>

                    <!--SECOND REGISTRATION FORM -->
                    <div class="registration-div d-none" id="reg2">
                        <form action="submit2.php" method="post" class="form-tag">


                            <div class="mb-4">
                                <input type="text" name="full_name" class="form-control" id="exampleFormControlInput1" placeholder="Full Name" required />
                            </div>

                            <div class="mb-4">

                                <input type="tel" name="team_code" class="form-control" placeholder="Team Code" required />
                            </div>


                            <div class="mb-4">
                                <input type="text" name="team_name" class="form-control" id="exampleFormControlInput1" placeholder="Team Name" required />
                            </div>

                            <div class="mb-4">

                                <input type="email" class="form-control" name="email" id="formemail" placeholder="name@example.com" required />
                            </div>

                            <div class="mb-4">

                                <input type="tel" name="contact" class="form-control" placeholder="Contact Number" required />
                            </div>

                            <button class="btn btn-dark red2" type="submit">Send Message</button>

                        </form>

                    </div>
                </div>



            </div>
        </section>

        <!--=============================================-->
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
                            <p class="topic text-light pb-3">Quick Links</p>
                            <p><a href="#">Home</a></p>
                            <p><a href="#about">About Us</a></p>
                            <p><a href="#gallery">Gallery</a></p>
                            <p><a href="#news">Latest News</a></p>
                            <p><a href="contact.html">Contact Us</a></p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 px-2 text-light">
                        <div class="row-col">
                            <p class="topic text-light pb-3">Contact us</p>
                            <p><i class="fas fa-phone-alt"></i> Phone:</p>
                            <p>+91 4684684111</p>
                            <p>+91 7866000000</p>
                            <p><i class="fas fa-envelope"></i> Email:</p>
                            <p><a>example@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 px-2 text-light">
                        <div class="row-last-col">
                            <p class="topic pb-3">Newsletter</p>

                            <form class="d-flex" onsubmit="subscribeNewsletter(event,this)">
                                <input class="form-control" name="subsForNewsletter" type="email" placeholder="Email" required>
                                <button class="btn btn-light" type="submit"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                            <div class="social-div">
                                <p class="pt-4 topic">Follow Us</p>

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


        <!--JS -->
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.js"></script>

        <script>
            $('#btn1').click(
                function() {
                    $('#btn1').addClass('under');
                    $('#btn2').removeClass('under');

                    $('#reg1').addClass('d-block');
                    $('#reg1').removeClass('d-none');
                    $('#reg2').addClass('d-none');
                    $('#reg2').removeClass('d-block');

                }
            );
            $('#btn2').click(
                function() {
                    $('#btn2').addClass('under');
                    $('#btn1').removeClass('under');
                    $('#reg1').removeClass('d-block');
                    $('#reg1').addClass('d-none');
                    $('#reg2').removeClass('d-none');
                    $('#reg2').addClass('d-block');

                }
            );


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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
        />
</body>

</html>