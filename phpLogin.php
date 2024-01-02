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

    
    if (mysqli_num_rows(mysqli_query($conn, $sql)) == 1) {
        $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        $_SESSION['stu_Fname'] = $row['stu_Fname'];
        $_SESSION['stu_Lname'] = $row['stu_Lname'];
        $_SESSION['stu_email'] = $row['stu_email'];
        $_SESSION['stu_password'] = $row['stu_password'];
        if($row['stu_email'] == "Admin@gmail.com" && $row['stu_password'] == "Admin100@")
        {
            header("location:admin.html");
        }
        else{
            header("location:index.php");
        }
    } else {
        echo "Incorrect credentials!";
    }

    mysqli_close($conn);
}
?>