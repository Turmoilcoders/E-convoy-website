<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 05-Oct-15
 * Time: 5:56 AM
 */
session_start();
if($_SESSION['firno'])
{
    $no = $_SESSION['firno'];
    if(isset($_POST['submit']))
    {
        $p_name = $_POST['P_name'];
        $f_name= ($_POST['F_name']);
        $p_number= ($_POST['phone_number']);
        $p_email= ($_POST['e-mail']);
        $p_add= ($_POST['Address']);
        $landmark = ($_POST['Distance_station']);
        $direction = ($_POST['Direction']);
        $time = ($_POST['Time']);
        $date = ($_POST['Date']);
        $nature = ($_POST['Nature']);
        $property = ($_POST['Property']);
        $acc_desc = ($_POST['accused_discription']);
        $w_name = ($_POST['witness']);
        $w_number = ($_POST['witness_phone_number']);
        $w_mail = ($_POST['witness_e-mail']);
        $w_add = ($_POST['W_Address']);
        $c_desc = ($_POST['comp_discription']);
        $conn= new mysqli('localhost','root','','econvoy');
        $query = "INSERT INTO `fir`(`P_name`, `P_fname`, `P_number`, `P_email`, `P_address`, `landmak`, `direction`, `time`, `date`, `nature`, `property`, `accused_desc`, `W_name`, `W_number`, `W_email`, `W_address`, `C_descriptiom`, `uuid`, `Status`, `Comment`) VALUES ('$p_name', '$f_name', '$p_number', '$p_email', '$p_add' , '$landmark', '$direction', '$time', '$date', '$nature', '$property', '$acc_desc', '$w_name', '$w_number', '$w_mail', '$w_add', '$c_desc','$no', 'No', 'No')";
        $result = mysqli_query($conn,$query);
        if ( $result )
        {
            $_SESSION['status'] = "done";
            header('Location:http://localhost:90/econvoy/status.php');
            mysqli_close($conn);

        }
        else
        {
            echo "failed";
        }
    }
}
else
{
    echo "no session value";
}
?>
