<?php

session_start();
include_once('Connection.php');

if (!$conn) {
    echo "Failed to connect!";
    die();
} else {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];


    $sql = "SELECT * FROM student WHERE stu_email = '$Email' And stu_password = '$Password';";

    $sql1 = "SELECT course.course_name
            FROM course
            JOIN student_course ON course.course_id = student_course.course_id
            JOIN student ON student.stu_id = student_course.stu_id
            WHERE student.stu_email = '$Email';";

    $result = mysqli_query($conn, $sql1);

    if (mysqli_num_rows(mysqli_query($conn, $sql)) == 1) {
        if (mysqli_num_rows($result) > 0) {
            $courses = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $courses[] = $row['course_name'];
            }

            $_SESSION['courses'] = $courses;
        }
        echo "Login success!<br>";
        $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        $_SESSION['stu_Fname'] = $row['stu_Fname'];
        $_SESSION['stu_Lname'] = $row['stu_Lname'];
        $_SESSION['stu_email'] = $row['stu_email'];
        $_SESSION['stu_password'] = $row['stu_password'];
        header("location:index.php");
        // echo 'Welcome ' . $_SESSION['stu_Fname'] . " " . $_SESSION['stu_Lname'] . " " . $_SESSION['stu_email'] . " " . $_SESSION['stu_password'];
        // echo '<br>';
        // if (mysqli_num_rows($result) > 0) {
        //     echo 'Your courses are: ';
        //     for ($i = 0; $i < count($courses); $i++) {
        //         echo '<br>' . $_SESSION['courses'][$i];
        //     }
        // } else {
        //     echo "You aren't registered in any courses!";
        // }
    } else {
        echo "Incorrect credentials!";
    }

    mysqli_close($conn);
}
?>