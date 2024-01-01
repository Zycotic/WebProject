<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Byte Tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="team.css">

</head>

<body class="data-mdb-smooth-scroll-init">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg shadow-lg">
        <div class="container">
            <div class="logo d-flex align-items-center">
                <img src="images/logo.png" alt="logo" width="50" style="margin-right: 0.5vw;">
                <a class="navbar-brand title" href="#">BYTE TUTORIAL</a>
            </div>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header text-white border-bottom">
                    <img src="images/logo.png" alt="logo" width="50" style="margin-right: 0.5vw;">
                    <h5 class="offcanvas-title title" id="offcanvasNavbarLabel">BYTE TUTORIAL</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                    <ul
                        class="navbar-nav justify-content-center justify-content-lg-end align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#events">Events</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="contact-us.php">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                        <?php
                        session_start();

                        if (isset($_SESSION['stu_Fname']) && isset($_SESSION['stu_Lname'])) {
                            echo '<span>' . $_SESSION['stu_Fname'] . ' ' . $_SESSION['stu_Lname'] . '</span>';
                            echo '<a href="logout.php" class="text-decoration-none"> <button class="nvbtn">
                            <svg style="z-index: 2;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                          <span>Logout</span>
                        </button> </a>';
                        } else {
                            echo '<a href="login.html" class="text-decoration-none"> <button class="nvbtn">
                            <svg style="z-index: 2;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                          </svg>
                          <span>Login</span>
                        </button> </a>';
                            echo '<a href="signup.html" class="text-decoration-none"> <button class="nvbtn">
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
    <!-- navbar end -->
    <main style="background: rgba(35, 4, 177, 0.05);">
        <!-- hero start -->
        <div class="hero-section px">
            <div class="hero-text">
                <h1>
                    <span>We can help your Child, Career,<br> Company</span>
                </h1>
                <h4>We have provided a training for students in 15+ universities, 5+ Schools,
                    <br>along with
                    graduates in 8 different majors, followed up <br>with our mentoring & consulting sessions.
                </h4>

                <div class="p-2">
                    <a class="btn1 smoothscroll" href="#intro-section">
                        <span>Introduction</span>
                    </a>
                    <a class="btn2 smoothscroll" href="#services-section">
                        <span>Explore Services</span>
                    </a>
                </div>
            </div>

        </div>
        <!-- hero end -->
        <!-- about start -->
        <section class="intro-section" id="about">
            <div class="container">
                <div class="row justify-content-lg-center align-items-center">

                    <div class="col-lg-6">
                        <h2 class="about mb-3 mt-4">ABOUT US</h2>
                        <!-- divider start -->
                        <div class="row justify-content-between" style="width: 33vh;">
                            <hr class="rounded">
                        </div>
                        <!-- divider end -->

                        <p>At Road Mentors, we are passionate about empowering the next generation of innovators and
                            leaders. We believe that education is the key to unlocking a better future for our students,
                            and we are committed to providing them with the best possible learning experience.</p>
                        <p> We have provided a training for students in 15+ universities, 5+ Schools, along with
                            graduates in 8 different majors, followed up with our mentoring & consulting sessions.</p>
                        <a class="btn2 smoothscroll" href="#services-section">
                            <span>Explore Services</span>
                        </a>
                    </div>

                    <div class="col-lg-6 " style="padding-left: 70px; width: 35em; ">
                        <img src="./images/hero-images-grid.png" class="img-fluid mt-5 mb-5 rounded-5 shadow">

                    </div>
                </div>
            </div>

        </section>
        <!-- about end -->
        <!-- events and news start -->
        <section id="events">
            <div class="container mt-4 mb-5 px-5">
                <div class="row">

                    <div class="col-md-8" style="height:60vh; padding-right: 3vh;">

                        <div class="row justify-content-between p-2 px-1">
                            <div class="col">
                                <h2 style="font-size:7vh; font-weight: bold;">Events</h2>
                            </div>
                            <div class="col text-end pt-2 px-3">
                                <a href="#" class="gold-line-button">All Events</a>
                            </div>
                        </div>

                        <!-- divider start -->
                        <div class="row justify-content-between">
                            <hr class="rounded">
                        </div>
                        <!-- divider end -->
                        <div class="row pb-2">
                            <div class="col-3">
                                <img src="./images/hero-images-grid.png" class="img-fluid rounded-4 w-100">
                            </div>
                            <div class="col align-content-start p-3">
                                <h4 style="font-weight: 700;">The Arab Rally Competition</h4>
                                <div class="row">
                                    <div class="col-1" style="width: 5vh;">
                                        <svg style="fill: rgb(236, 175, 8);" xmlns="http://www.w3.org/2000/svg"
                                            height="16" width="14"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path
                                                d="M400 64h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V160h352v298c0 3.3-2.7 6-6 6z" />
                                        </svg>
                                    </div>
                                    <div class="col px-0 pt-1">
                                        <p>26/03/2022 | 8:30 PM</p>
                                    </div>
                                </div>
                                <p class="text-muted">Contributing in the biggest national event for Entrepreurship and
                                    Technology where finaliest compete for prize with thousands. </p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img src="./images/hero-images-grid.png" class="img-fluid rounded-4 shadow w-100">
                            </div>
                            <div class="col align-content-start pt-3">
                                <h4 style="font-weight: 700;">The Arab Rally Competition</h4>
                                <div class="row">
                                    <div class="col-1" style="width: 5vh;">
                                        <svg style="fill: rgb(236, 175, 8);" xmlns="http://www.w3.org/2000/svg"
                                            height="16" width="14"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path
                                                d="M400 64h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V160h352v298c0 3.3-2.7 6-6 6z" />
                                        </svg>
                                    </div>
                                    <div class="col px-0 pt-1">
                                        <p>26/03/2022 | 8:30 PM</p>
                                    </div>
                                </div>
                                <p class="text-muted">Contributing in the biggest national event for Entrepreurship and
                                    Technology where finaliest compete for prize with thousands. </p>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 align-content-start px-4">
                        <div>
                            <div class="row justify-content-between p-2 px-1">
                                <div class="col">
                                    <h2 style="font-size:7vh; font-weight: bold;">News</h2>
                                </div>
                                <div class="col text-end pt-2 px-4">
                                    <a href="#" class="gold-line-button">All News</a>
                                </div>
                            </div>
                        </div>

                        <!-- divider start -->
                        <div class="row justify-content-between">
                            <hr class="rounded">
                        </div>
                        <!-- divider end -->
                        <div class="row ">
                            <div class="col align-content-start p-3">
                                <h4 style="font-weight: 700;">Announcement: New Course has been included</h4>
                                <div class="row">
                                    <div class="col-1" style="width: 5vh;">
                                        <svg style="fill: rgb(236, 175, 8);" xmlns="http://www.w3.org/2000/svg"
                                            height="16" width="14"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path
                                                d="M400 64h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V160h352v298c0 3.3-2.7 6-6 6z" />
                                        </svg>
                                    </div>
                                    <div class="col px-0 pt-1">
                                        <p>26/03/2022 | 8:30 PM</p>
                                    </div>
                                </div>
                                <p class="text-muted">
                                    The new data science course provides hands-on learning, equipping students with the
                                    tools to analyze complex datasets and derive valuable insights.
                                </p>

                            </div>
                        </div>
                        <div class="row pb-2">
                            <div class="col align-content-start p-3">
                                <h4 style="font-weight: 700;">Announcement: New Course has been included</h4>
                                <div class="row">
                                    <div class="col-1" style="width: 5vh;">
                                        <svg style="fill: rgb(236, 175, 8);" xmlns="http://www.w3.org/2000/svg"
                                            height="16" width="14"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path
                                                d="M400 64h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V160h352v298c0 3.3-2.7 6-6 6z" />
                                        </svg>
                                    </div>
                                    <div class="col px-0 pt-1">
                                        <p>26/03/2022 | 8:30 PM</p>
                                    </div>
                                </div>
                                <p class="text-muted">
                                    The new data science course provides hands-on learning, equipping students with the
                                    tools to analyze complex datasets and derive valuable insights.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- events and news end -->
        <!-- our key activites start -->
        <section class="intro-section" id="about">
            <div class="container">
                <div class="row justify-content-lg-center align-items-center">
                    <div class="col-lg-6 px-3" style="padding-left: 0px; width: 35em;">
                        <img src="./images/hero-images-grid.png" class="img-fluid mt-5 mb-5 rounded-5 shadow"
                            style="width:95%;">
                    </div>

                    <div class="col-lg-6 px-3">
                        <p style="color:rgb(236, 175, 8);" class="fs-6">OUR KEY EVENTS</p>
                        <h2 class="about mb-3 mt-1" style="width: 70vh;">Launching our Innovative Coding Bootcamp </h2>
                        <!-- divider start -->
                        <div class="row justify-content-between" style="width: 72vh;">
                            <hr class="rounded">
                        </div>
                        <!-- divider end -->
                        <p class="mt-3" style="width: 85vh;">Our curriculum is not just about teaching coding
                            languages; it's aholistic approach to empower aspiring developers with the practical skills
                            and problem-solving
                            mindset needed in the rapidly evolving tech landscape. The bootcamp incorporates the latest
                            industry trends, tools, and methodologies, ensuring that participants gain a competitive
                            edge in the field.
                        </p>
                        <a class="btn2 smoothscroll" href="#services-section">
                            <span>Explore Services</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- our key activites end -->
        <!-- counter section start -->
        <div class="counter-wrapper shadow">
            <div class="counter">
                <img src="./images/school.png" class="img-fluid" style="height: 18vh;">
                <h1 class="count" style="font-size: 5rem;" data-target="1254">0</h1>
                <p>Schools</p>
            </div>
            <div class="counter">
                <img src="./images/students.png" class="img-fluid" style="height: 18vh;">
                <h1 class="count" style="font-size: 5rem;" data-target="12168">0</h1>
                <p>Students</p>
            </div>

            <div class="counter">
                <img src="./images/boy_student.png" class="img-fluid" style="height: 18vh;">
                <h1 class="count" style="font-size: 5rem;" data-target="2172">0</h1>
                <p>Boys Enrolled</p>
            </div>
            <div class="counter">
                <img src="./images/girl_student.png" class="img-fluid" style="height: 18vh;">
                <h1 class="count" style="font-size: 5rem;" data-target="732">0</h1>
                <p>Girls Enrolled</p>
            </div>
            <div style="position: absolute; z-index: -1; opacity: 0.3;">
                <img src="images/logo.png">
            </div>
        </div>
        <!-- counter section end -->
        <!-- team start -->
        <section style="height: 40vh;" class="d-flex justify-content-between p-4">
            <div class="container1 row">
                <input type="radio" name="slider" id="item-1" checked>
                <input type="radio" name="slider" id="item-2">
                <input type="radio" name="slider" id="item-3">
                <input type="radio" name="slider" id="item-4">

                <div class="cards">
                    <label class="card d-flex justify-content-center align-items-center" for="item-1" id="song-1">
                        <img src=" images\Allam.jpeg" alt="song">
                    </label>
                    <label class="card d-flex justify-content-center align-items-center" for="item-2" id="song-2">
                        <img src=" images\Moataz.jpeg" alt="song">
                    </label>
                    <label class="card d-flex justify-content-center align-items-center" for="item-3" id="song-3">
                        <img src=" images\Muhammad.jpeg" alt="song">
                    </label>
                    <label class="card d-flex justify-content-center align-items-center" for="item-4" id="song-4">
                        <img src="images\Moharrum1.png" alt="song">
                    </label>
                </div>
                <div class="player px-5">
                    <div class="upper-part" style="height: 38px;">
                        <div class="info-area" id="test">
                            <label class="song-info" id="song-info-1">
                                <div class="title1">Allam</div>
                                <div class="sub-line">
                                    <div class="subtitle">Big Boss</div>
                                </div>
                            </label>
                            <label class="song-info" id="song-info-2">
                                <div class="title1">Moataz</div>
                                <div class="sub-line">
                                    <div class="subtitle">Software Engineer</div>
                                </div>
                            </label>
                            <label class="song-info" id="song-info-3">
                                <div class="title1">Muhammad</div>
                                <div class="sub-line">
                                    <div class="subtitle">Data Scientist</div>
                                </div>
                            </label>
                            <label class="song-info" id="song-info-4">
                                <div class="title1">Moharrum</div>
                                <div class="sub-line">
                                    <div class="subtitle">Business Developer</div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team end -->
        <!-- footer start -->
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
        <!-- footer end -->

    </main>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script>
        $('input').on('change', function () {
            $('body').toggleClass('blue');
        });

        // JavaScript code goes here
    </script>
</body>



</html>