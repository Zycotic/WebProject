<?php

include_once('Connection.php');


if(!$conn)
{
    echo "Failed to connect!";
    die();
}
else{
    // $course_id = $_POST['course_id'];
    $course_name = $_POST['course_name'];
    $course_code = $_POST['course_code'];
    $vid_path = $_POST['vid_path'];
    $coures_desc = $_POST['coures_desc'];
    $course_img = $_POST['course_img'];

    $sql = "INSERT INTO course (course_name,course_code,vid_path,coures_desc,course_img) VALUES ('$course_name','$course_code','$vid_path','$coures_desc','$course_img');";
    if(mysqli_query($conn,$sql))
    {
        header("Location: adminCourseForms.html");
    }
    else{
        echo "Insert Failed!";

    }

    mysqli_close($conn);

}   

?>