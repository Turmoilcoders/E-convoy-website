<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 08-Oct-15
 * Time: 3:01 PM
 */
session_start();
if(isset($_SESSION['status']))
{
        $email = $_SESSION['email'];
        $conn= new mysqli('localhost','root','','econvoy');
        $sql = "UPDATE users SET updated_at= NOW(),Status ='Removed' WHERE email='$email'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_query($conn,$sql))
        {
            echo "<script>alert('User Table Updated')</script>";
            header('Location:http://localhost:90/econvoy/Dashboard/dashboard.php');
            mysqli_close($conn);
        }
        else
        {
            echo "<script>alert(' Fatal Error')</script>";
            header('Location:http://localhost:90/econvoy/Dashboard/dashboard.php');
            mysqli_close($conn);

        }

}
else
{
    $_SESSION['name'] = "logout";
    header('Location:http://localhost:90/econvoy');
}
?>
