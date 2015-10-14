<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 04-Oct-15
 * Time: 1:23 AM
 */
session_start();

if(isset($_SESSION['status'])|| isset($_POST['update'])|| isset($_POST['upload']) || isset($_POST['upload_banner']))
{

    if ($_SESSION['status'] == "approved") {
        $email = $_SESSION['email'];
        $conn = new mysqli('localhost', 'root', '', 'econvoy');
        $sql = "UPDATE users SET updated_at= NOW(),Status ='yes' WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('User Table Updated')</script>";
            header('Location:http://localhost:90/econvoy/Dashboard/dashboard.php');
            mysqli_close($conn);
        } else {
            echo "<script>alert(' Fatal Error')</script>";
            header('Location:http://localhost:90/econvoy/Dashboard/dashboard.php');
            mysqli_close($conn);
        }

    }
    if ($_SESSION['status'] == "fir_approved") {
        $fir = $_SESSION['fir'];
        $conn = new mysqli('localhost', 'root', '', 'econvoy');
        $sql = "UPDATE fir SET Status = 'yes' WHERE `uuid` ='$fir' limit 1";
        $result = mysqli_query($conn, $sql);
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('User Table Updated')</script>";
            header('Location:http://localhost:90/econvoy/Dashboard/dashboard.php');
            mysqli_close($conn);
        } else {
            echo "<script>alert(' Fatal Error')</script>";
            header('Location:http://localhost:90/econvoy/Dashboard/dashboard.php');
            mysqli_close($conn);
        }

    }
    if ($_SESSION['status'] == "comment") {
        if (isset($_POST['update'])) {
            $fir = $_SESSION['fir'];
            $comment = $_POST['comment'];
            $conn = new mysqli('localhost', 'root', '', 'econvoy');
            $sql = "UPDATE fir SET `Comment` = '$comment' WHERE `uuid` ='$fir' limit 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('User Table Updated')</script>";
                mysqli_close($conn);
                header('Location:http://localhost:90/econvoy/Dashboard/dashboard.php');
                exit;

            } else {
            }
        }
    }
    if ($_SESSION['status'] == "profile") {
    if (isset($_POST['update'])) {
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];
            $about = $_POST['about'];
            $conn = new mysqli('localhost', 'root', '', 'econvoy');
            $sql = "UPDATE users SET `About` = '$about' WHERE `email` ='$email' limit 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_query($conn, $sql)) {
                mysqli_close($conn);
                header('Location:http://localhost:90/econvoy/Dashboard/userdashboard.php');
                exit;

            } else {
            }

        }
    else {

        }
    }
    if (isset($_POST['upload'])) {
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];
          //  $file_img = $_POST['file_img'];
            $filetmp = $_FILES["file_img"]["tmp_name"];
            $filename = $_FILES["file_img"]["name"];
            $filetype = $_FILES["file_img"]["type"];
            $filepath = "users_photo/".$filename;

            move_uploaded_file($filetmp,$filepath);

            $conn = new mysqli('localhost', 'root', '', 'econvoy');
            $sql = "UPDATE users SET `img` = '$filepath' WHERE `email` ='$email' limit 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_query($conn, $sql)) {
            //    echo $file_img;
                echo "<script>alert('User Table Updated')</script>";
                mysqli_close($conn);
                header('Location:http://localhost:90/econvoy/Dashboard/userdashboard.php');
                exit;
            } else {
            }
        }

    if (isset($_POST['upload_banner'])) {
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];
            //  $file_img = $_POST['file_img'];
            $filetmp = $_FILES["file_img1"]["tmp_name"];
            $filename = $_FILES["file_img1"]["name"];
            $filetype = $_FILES["file_img1"]["type"];
            $filepath = "users_photo/".$filename;

            move_uploaded_file($filetmp,$filepath);

            $conn = new mysqli('localhost', 'root', '', 'econvoy');
            $sql = "UPDATE users SET `banner` = '$filepath' WHERE `email` ='$email' limit 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_query($conn, $sql)) {
                //    echo $file_img;
                echo "<script>alert('User Table Updated')</script>";
                mysqli_close($conn);
                header('Location:http://localhost:90/econvoy/Dashboard/userdashboard.php');
                exit;
            } else {
            }

        }



}
else {
    $_SESSION['name'] = "logout";
    header('Location:http://localhost:90/econvoy');
}
?>