<?php

include_once('Connection.php');


if(!$conn)
{
    echo "Failed to connect!";
    die();
}
else{
    $FirstName = $_POST['stu_Fname'];
    $LastName = $_POST['stu_Lname'];
    $Email = $_POST['stu_email'];
    $Password = $_POST['stu_password'];

    $sql = "INSERT INTO student (stu_Fname,stu_Lname,stu_email,stu_password) VALUES ('$FirstName','$LastName','$Email','$Password');";
    if(mysqli_query($conn,$sql))
    {
        header("Location: admin.html");
    }
    else{
        echo "Sign Up Failed!";

    }

    mysqli_close($conn);

}   


?>

