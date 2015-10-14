<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 15-Oct-15
 * Time: 2:23 AM
 */
session_start();
if($_SESSION['lostno'] || isset($_POST['found']))
{
    $no = $_SESSION['no'];
    if(isset($_POST['lost']))
    {
        $c_name = $_POST['c_name'];
        $c_email= ($_POST['c_email']);
        $c_pnumber= ($_POST['c_pnumber']);
        $c_ano= ($_POST['c_aadharcard']);
        $item= ($_POST['item']);
        $place = ($_POST['place']);
        $time = ($_POST['time']);
        $date = ($_POST['date']);
        $last_seen = ($_POST['last_seen']);
        $item_desc = ($_POST['item_desc']);
        $filetmp = $_FILES["lost_file"]["tmp_name"];
        $filename = $_FILES["lost_file"]["name"];
        $filetype = $_FILES["lost_file"]["type"];
        $filepath = "users_photo/".$filename;
        move_uploaded_file($filetmp,$filepath);
        $conn= new mysqli('localhost','root','','econvoy');
        $query = "INSERT INTO `lost`(`c_name`, `c_email`, `c_pnumber`, `c_aadharcard`, `item`, `place`, `date`, `time`, `last_seen`, `item_description`, `lost_file`, `lost_no`) VALUES ('$c_name', '$c_email', '$c_pnumber', '$c_aadharcard`', '$item', '$place', '$date', '$time', '$last_seen', '$item_desc', '$filepath' ,'$no')";
        $result = mysqli_query($conn,$query);
        if ( $result )
        {
            $_SESSION['status'] = "done";
            header('Location:http://localhost:90/econvoy/services/status.php');
            mysqli_close($conn);

        }
        else
        {
            echo "failed";
        }
    }
    if(isset($_POST['found'])) {

        $foundername = ($_POST['f_name']);
        $founderemail = ($_POST['f_email']);
        $foundercontact = ($_POST['f_cont_number']);
        $founderaadhar = ($_POST['f_aadharcard_number']);
        $itemname = ($_POST['Item_Found']);
        $itemdescription = ($_POST['item_description']);
        $itemlocation = ($_POST['item_location']);
        $conn= new mysqli('localhost','root','','econvoy');
        $query = "INSERT INTO `found`(`f_name`, `f_email`, `f_contactnumber`, `f_aadharnumber`, `item_name`, `item_description`, `item_location`) VALUES ('$foundername','$founderemail','$foundercontact','$founderaadhar','$itemname','$itemdescription','$itemlocation')";
        $result = mysqli_query($conn,$query);
        if ($result) {
            mysqli_close($conn);
            header('Location:http://localhost:90/econvoy/services/lost and found page.php');
        }
        else{
            echo 'Error'."<pre>{$conn->error}</pre>";
        }


    }

}

else
{
    echo "no session value";
}
?>
