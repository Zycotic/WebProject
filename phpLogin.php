<?php

include_once('Connection.php');

if(!$conn)
{
    echo "Failed to connect!";
    die();
}
else{
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];


    $sql = "SELECT * FROM user WHERE email = '$Email' And password = '$Password';";

    if(mysqli_num_rows(mysqli_query($conn,$sql)) == 1)
    {
        echo "Login success!<br>";
        $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
        echo 'Welcome '. $row['first_Name'] . " " . $row['last_Name'];
    
        //header("location:homepage.html");
    }
    else
    {
        echo "Incorrect credentials!";
    }

    mysqli_close($conn);

}
?>