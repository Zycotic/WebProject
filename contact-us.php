<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="contact-us.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow-lg bg-dark">
        <div class="container">
            <div class="logo d-flex align-items-center">
                <img src="images/logo.png" alt="logo" width="50" style="margin-right: 0.5vw;">
                <a class="navbar-brand title" style="color:white;" href="index.html">BYTE TUTORIAL</a>
            </div>
            <button class="navbar-toggler shadow-none border-0 bg-white" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header text-white border-bottom">
                    <img src="images/logo.png" alt="logo" width="50" style="margin-right: 0.5vw;">
                    <h5 class="offcanvas-title title" style="color:white;" id="offcanvasNavbarLabel">BYTE TUTORIAL</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                    <ul
                        class="navbar-nav justify-content-center justify-content-lg-end align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white" href="index.php#about">About</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white" href="index.php#events">Events</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white" href="">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                        <?php
                        session_start();

                        if (isset($_SESSION['stu_Fname']) && isset($_SESSION['stu_Lname'])) {
                            echo '<span class="text-white">' . $_SESSION['stu_Fname'] . ' ' . $_SESSION['stu_Lname'] . '</span>';
                            echo '<a href="logout.php" class="text-decoration-none"> <button class="nvbtn" style="color: #fff; border: 1px solid #fff;">
                            <svg style="z-index: 2;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                          <span>Logout</span>
                        </button> </a>';
                        } else {
                            echo '<a href="login.html" class="text-decoration-none"> <button class="nvbtn"  style="color: #fff; border: 1px solid #fff;">
                            <svg style="z-index: 2;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                          </svg>
                          <span>Login</span>
                        </button> </a>';
                            echo '<a href="signup.html" class="text-decoration-none"> <button class="nvbtn"  style="color: #fff; border: 1px solid #fff;">
                            <svg style="z-index: 2;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                          </svg>
                      <span>Sign Up</span>
                    </button> </a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center m-3">
        <div class="success" id="msg" hidden>
            <div class="success__icon">
                <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                        d="m12 1c-6.075 0-11 4.925-11 11s4.925 11 11 11 11-4.925 11-11-4.925-11-11-11zm4.768 9.14c.0878-.1004.1546-.21726.1966-.34383.0419-.12657.0581-.26026.0477-.39319-.0105-.13293-.0475-.26242-.1087-.38085-.0613-.11844-.1456-.22342-.2481-.30879-.1024-.08536-.2209-.14938-.3484-.18828s-.2616-.0519-.3942-.03823c-.1327.01366-.2612.05372-.3782.1178-.1169.06409-.2198.15091-.3027.25537l-4.3 5.159-2.225-2.226c-.1886-.1822-.4412-.283-.7034-.2807s-.51301.1075-.69842.2929-.29058.4362-.29285.6984c-.00228.2622.09851.5148.28067.7034l3 3c.0983.0982.2159.1748.3454.2251.1295.0502.2681.0729.4069.0665.1387-.0063.2747-.0414.3991-.1032.1244-.0617.2347-.1487.3236-.2554z"
                        fill="#393a37" fill-rule="evenodd"></path>
                </svg>
            </div>
            <div class="success__title ">Your message is sent successfully!</div>
            <div class="success__close" onclick="closeNot()"><svg height="20" viewBox="0 0 20 20" width="20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z"
                        fill="#393a37"></path>
                </svg></div>
        </div>
    </div>
    <div class="bg-contact100">
        <div class="container-contact100">
            <div class="wrap-contact100">
                <div class="contact100-pic js-tilt" data-tilt>
                    <div class="shadow-lg rounded-5"><img src="images/bytetutorials-banner.png"
                            class="shadow-lg rounded-5" alt="IMG"></div>
                </div>
                <form class="contact100-form validate-form" method="POST" onsubmit="return false;">
                    <span class="contact100-form-title"
                        style="text-shadow: 3px 5px 5px whitesmoke; text-align: center; font-size: 2.5rem; color: white">
                        Get in touch
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <input class="input100 shadow-sm" type="text" name="name" placeholder="Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 shadow-sm" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <textarea class="input100 shadow-sm" name="message" placeholder="Message"></textarea>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn shadow-lg fs-4" onclick="msgSent()">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-center text-lg-start text-white shadow rounded-top-4">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row my-4">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                    <div class="rounded-circle bg-dark shadow d-flex align-items-center justify-content-center mb-2 mx-auto"
                        style="width: 150px; height: 150px;">
                        <img src="images/logo.png" height="100" alt="" loading="lazy">
                    </div>
                    <div class="mb-4" style="text-align: center;">
                        <a class="navbar-brand title text-white" href="#">BYTE TUTORIAL</a>
                    </div>


                    <p class="text-center text-white">Homless animal shelter The budgetary unit of the Capital City
                        of
                        Warsaw</p>

                    <ul class="list-unstyled d-flex flex-row justify-content-center">
                        <li>
                            <a class="text-white px-2" href="#!">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-white px-2" href="#!">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-white ps-2" href="#!">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Animals</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>When your pet is
                                missing</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>Recently found</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>How to adopt?</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>Pets for adoption</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>Material gifts</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>Help with walks</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>Volunteer
                                activities</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Animals</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>General
                                information</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>About the
                                shelter</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>Statistic
                                data</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>Job</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>Tenders</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-chevron-right pe-3"
                                    style="color:rgb(236, 175, 8)"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Contact</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p class="text-white"><i class="fas fa-map-marker-alt pe-2 "
                                    style="color:rgb(236, 175, 8)"></i>Warsaw, 57
                                Street, Poland</p>
                        </li>
                        <li>
                            <p class="text-white"><i class="fas fa-phone pe-2 " style="color:rgb(236, 175, 8)"></i>+
                                01 234 567 89</p>
                        </li>
                        <li>
                            <p class="text-white"><i class="fas fa-envelope pe-2 mb-0 "
                                    style="color:rgb(236, 175, 8)"></i>contact@example.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    <script>
        function msgSent() {
            var message = document.getElementById("msg");
            message.removeAttribute("hidden");
        }

        function closeNot() {
            var message = document.getElementById("msg");
            message.setAttribute("hidden", "true");
        }
    </script>
</body>

</html>