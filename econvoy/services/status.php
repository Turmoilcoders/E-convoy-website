<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 05-Oct-15
 * Time: 6:50 AM
 */
session_start();
if(isset($_SESSION['name']))
{
    if( $_SESSION['error'] == "error")
    {
        $_SESSION['error'] ="";
        echo "<script> alert('Invalid combinations ')</script> ";
    }
    elseif($_SESSION['name'])
    {

    }
}
else
{
    $_SESSION['name'] = "logout";
    header('Location:http://localhost:90/econvoy/');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Convoy</title>
    <meta name="description" content="This is a tool based on crime and law">
    <meta name="keywords" content="indian law system,laws,law students,crime,crime analysis, crime statistics, fir, fir registration">


    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../font/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css"  href="../css/userstyle.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <style>


    </style>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="	background: -moz-linear-gradient(top,  rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.73) 17%, rgba(0,0,0,0.66) 35%, rgba(0,0,0,0.55) 62%, rgba(0,0,0,0.4) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.8)), color-stop(17%,rgba(0,0,0,0.73)), color-stop(35%,rgba(0,0,0,0.66)), color-stop(62%,rgba(0,0,0,0.55)), color-stop(100%,rgba(0,0,0,0.4))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* W3C */
border: none">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style=":hover{color: white;}">E-Convoy</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="page-scroll">What?</a></li>
                <li><a href="../Dashboard/userdashboard.php" class="page-scroll">Back to home</a></li>
                <li><a href="../php/logout.php" class="page-scroll">Log Out</a></li>
             </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- What Page
==========================================-->
<!-- What Page
==========================================-->
<div id="home" class="text-center" style="	background: -moz-linear-gradient(top,  rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.73) 17%, rgba(0,0,0,0.66) 35%, rgba(0,0,0,0.55) 62%, rgba(0,0,0,0.4) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.8)), color-stop(17%,rgba(0,0,0,0.73)), color-stop(35%,rgba(0,0,0,0.66)), color-stop(62%,rgba(0,0,0,0.55)), color-stop(100%,rgba(0,0,0,0.4))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* W3C */
    height: 600px;

">
    <div class="content">
        <?php
        /**
         * Created by PhpStorm.
         * User: acer
         * Date: 05-Oct-15
         * Time: 6:50 AM
         */
        $_SESSION['status'] ="done";
			if(isset($_SESSION['name']))
            {
                if($_SESSION['status'] == "done") {
                    echo '<center class="color"><br><h3> Your  '.$_SESSION['report'] .'  has been registered and you will be notified soon.</h3></center>';
                    echo '<center style="color: coral">Your '.$_SESSION['report'] .' number is <p class="color">' .$_SESSION['no']. '</p> You can check your '.$_SESSION['report'] .'  At <a href="#">Status Tab</a></center>';
                    echo '<center style="color: coral"><a href="#">Go back to home </a></center>';

                }
            }
            else
            {
                echo "hi";

            }
		?>

    </div>
</div>
<nav id="footer">
    <div class="container">
        <div class="pull-left fnav">
            <p>ALL RIGHTS RESERVED. COPYRIGHT © 2014.</p>
        </div>
        <div class="pull-right fnav">
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
</nav>


</body>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/SmoothScroll.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>

<script src="../js/owl.carousel.js"></script>

<!-- Javascripts
================================================== -->
<script type="text/javascript" src="../js/main.js"></script>

</body>
</html>

