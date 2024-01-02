<?php

include_once('Connection.php');

if (!$conn) {
    echo "Failed to connect!";
    die();
} else {
    // Assuming you're using POST method to submit the form
    $course_code_to_remove = $_POST['stu_email'];

    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM student WHERE stu_email = ?";

    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameter
    mysqli_stmt_bind_param($stmt, "s", $course_code_to_remove);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Student removed successfully!";
    } else {
        echo "Remove Failed!";
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>