<?php
include_once('Connection.php');

if(isset($_POST['email'])) {
    $email = $_POST['email'];
    
    $sql = "SELECT COUNT(*) AS count FROM student WHERE stu_email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    
    echo $count;
}
?>