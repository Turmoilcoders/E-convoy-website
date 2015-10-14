<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 12-Oct-15
 * Time: 1:12 AM
 */
if(isset($_SESSION['status']))
{
$email = $_SESSION['email'];
$conn= new mysqli('localhost','root','','econvoy');
$sql = "UPDATE fir SET Status ='Removed' WHERE p_email='$email'";
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