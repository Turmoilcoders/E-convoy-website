<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 04-Oct-15
 * Time: 1:23 AM
 */
session_start();
if(isset($_SESSION['status'])|| isset($_POST['update']))
{
    if($_SESSION['status']=="approved")
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
    if($_SESSION['status'] == "fir_approved")
    {
        $fir = $_SESSION['fir'];
        $conn= new mysqli('localhost','root','','econvoy');
        $sql = "UPDATE fir SET Status = 'yes' WHERE `uuid` ='$fir' limit 1";
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
    if( $_SESSION['status'] == "comment")
    {
        if(isset($_POST['update'])) {
            $fir = $_SESSION['fir'];
            $comment = $_POST['comment'];
            $conn = new mysqli('localhost', 'root', '', 'econvoy');
            $sql = "UPDATE fir SET `Comment` = '$comment' WHERE `uuid` ='$fir' limit 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('User Table Updated')</script>";
                header('Location:http://localhost:90/econvoy/policedashboard.php');
                mysqli_close($conn);
            } else {
            }
        }
    }
    else{

    }

}
else
{
    $_SESSION['name'] = "logout";
    header('Location:http://localhost:90/econvoy');
}

?>