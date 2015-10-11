<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 12-Oct-15
 * Time: 3:35 AM
 */
session_start();
if (isset($_POST['submit'])) {
    //Gathering all required data
    $conn = new mysqli('localhost', 'root', '', 'econvoy');
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $comment = $_POST['feedback'];
    $rating = $_POST['rating'];
    $command = "INSERT INTO `feedback`(`name`, `email`, `feedback`, `rating`, `reply`) VALUES ('$name','$email','$comment','$rating','NO')";
    $result = mysqli_query($conn, $command);
    // check for successful store
    if ($result) {
        // get user details
        $_SESSION['status'] = "thankyou";
        mysqli_close($conn);
        header('Location:http://localhost:90/econvoy/userdashboard.php');
    }


}
?>