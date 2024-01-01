<?php
include_once('Connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Byte Tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="course-card.css">
</head>

<body>
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
                            <a class="nav-link" href="index.php#about">About</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="index.php#events">Events</a>
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

    <div class="container py-2">
        <div class="h1 text-center text-dark" id="pageHeaderTitle">Available Courses</div>
        <?php

        // Fetch all courses from the 'courses' table
        $coursesDetails = array();
        $sqlCourses = "SELECT * FROM course";
        $resultCourses = mysqli_query($conn, $sqlCourses);

        if (mysqli_num_rows($resultCourses) > 0) {
            while ($rowCourses = mysqli_fetch_assoc($resultCourses)) {
                // Store each course's details into an array
                $courseInfo = array(
                    'course_id' => $rowCourses['course_id'],
                    'course_name' => $rowCourses['course_name'],
                    'course_code' => $rowCourses['course_code'],
                    'course_desc' => $rowCourses['course_desc'],
                    'vid_path' => $rowCourses['vid_path'],
                    'course_img' => $rowCourses['course_img']
                );
                // Add the course details array to the main array
                $coursesDetails[] = $courseInfo;
            }
            // Store all course details array in session
            $_SESSION['coursesDetails'] = $coursesDetails;

        } else {
            echo "No courses available!";
        }
        if (isset($_SESSION['coursesDetails'])) {
            $coursesDetails = $_SESSION['coursesDetails'];
            foreach ($coursesDetails as $course) {
                echo "<article class='postcard light blue'>
                <a class='postcard__img_link' href='#'>
                    <img class='postcard__img' src='images/" . $course['course_img'] . " ' alt='Image Title' />
                </a>
                <div class='postcard__text t-dark'>
                    <h1 class='postcard__title blue'><a href='#'>" . $course['course_name'] . "</a></h1>
                    <div class='postcard__bar'></div>
                    <div class='postcard__preview-txt'>" . $course['course_desc'] . "</div>
                    <ul class='postcard__tagbox'>
                        <li class='tag__item'><i class='fas fa-tag mx-1'></i>" . $course['course_code'] . "</li>
                        <li class='tag__item play blue'>
                            <a href='#'><i class='fas fa-play mx-1'></i>Play Now</a>
                        </li>
                    </ul>
                </div>
            </article>";
            }
        }
        ?>
    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>