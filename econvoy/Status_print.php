<?php
session_start();
$_SESSION['print'] = "Fir";
$_SESSION['pdf'] = "False";
if(isset($_SESSION['name']))
{
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $fir = $_POST['no'];
        $_SESSION['firno'] = $fir;
        $conn= new mysqli('localhost','root','','econvoy');
        $sql = "SELECT * FROM `fir` WHERE `P_email` = '$email' && `uuid` = '$fir' ";
        $result = mysqli_query($conn,$sql);
        if( mysqli_query($conn,$sql) )
        {

            $row = mysqli_fetch_array(mysqli_query($conn,$sql));
            if($row['Status']== "yes" && $row['Comment']== "No")
            {
                $_SESSION['pdf'] = "True";
                $_SESSION['P-name'] = $row['P_name'];
                $_SESSION['reply'] = "Report under Scrutiny!!";
            }
            elseif($row['Status']== "yes" && $row['Comment'] != "No")
            {
                $_SESSION['pdf'] = "True";
                $_SESSION['P-name'] = $row['P_name'];
                $_SESSION['reply'] = $row['Comment'];

            }
            else
            {
                $_SESSION['error'] = "error";
                header('Location:http://localhost:90/econvoy/fir.php');
                mysqli_close($conn);

            }
        }
        else
        {

            $_SESSION['error'] = "error";
            header('Location:http://localhost:90/econvoy/fir.php');
            mysqli_close($conn);

        }

    }

}
else
{
    $_SESSION['name'] = "logout";
    header('Location:http://localhost:90/econvoy/');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
        body, h1, h2, h3, h4, h5, h6{
            font-family:  serif;
        }
    </style>
</head>

<body style="background-color: #b2ebf2">
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>
                <a href="#">
                    <img src="img/logo.png">
                    E-convoy
                </a>
            </h1>
        </div>
        <div class="col-xs-6 text-right">
            <h1><?php echo $_SESSION['print']; ?> Report</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-5  text-left">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>To : <a href="#"><?php echo $_SESSION['name']; ?></a></h4>
                </div>
                <div class="panel-body">
                    <p>
                        Fir No:<?php echo $_SESSION['firno']; ?><br>
                        Date: <?php echo date("d/m/Y");  ?><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- / end client details section -->
    <div class="row text-left">
        <div class="col-xs-12">
            <p>
                <strong>
                    <h1>
                        Welcome,<br>
                    </h1>
                </strong>

            <p>This is an e-copy of fir report submitted by you to the police force.The report has been auto generated by the system.The comments of police force are: "<?php echo $_SESSION['reply']; ?>" </p>
            </p>
            <br>
            <h4>Yours Truly:</h4>
            <h5>Admin</a></h5>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-5  text-left">
            <form action="php/pdfstore.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <button type="submit" name="generate" class="btn tf-btn btn-default" onclick="window.print();">Print report</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>