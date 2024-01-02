<?php

include_once('Connection.php');


if(!$conn)
{
    echo "Failed to connect!";
    die();
}
else{
    $FirstName = $_POST['FName'];
    $LastName = $_POST['LName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO student (stu_Fname,stu_Lname,stu_email,stu_password) VALUES ('$FirstName','$LastName','$Email','$Password');";
    if(mysqli_query($conn,$sql))
    {
        header("Location: login.html");
    }
    else{
        echo "Sign Up Failed!";

    }

    mysqli_close($conn);

}   


?>

