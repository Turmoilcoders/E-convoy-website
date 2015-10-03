<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 04-Oct-15
 * Time: 1:23 AM
 */
session_start();
if(isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
    $conn= new mysqli('localhost','root','','econvoy');
    $sql = "UPDATE users SET updated_at= NOW(),Status ='yes' WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('User Table Updated')</script>";
        header('Location:http://localhost:90/econvoy/dashboard.php');
        mysqli_close($conn);
    }
    else
    {
        echo "<script>alert(' Fatal Error')</script>";
        header('Location:http://localhost:90/econvoy/dashboard.php');
        mysqli_close($conn);

    }
}
else
{
    $_SESSION['name'] = "logout";
    header('Location:http://localhost:90/econvoy');
}




?>