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

    $sql = "INSERT INTO user (first_Name,last_Name,email,password) VALUES ('$FirstName','$LastName','$Email','$Password');";
    if(mysqli_query($conn,$sql))
    {
        echo "Sign Up Complete";
    }
    else{
        echo "Sign Up Failed!";

    }

    mysqli_close($conn);

}   


?>

