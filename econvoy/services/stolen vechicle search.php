<?php
session_start();
if(isset($_SESSION['name']))
{
if($_SESSION['name'] == "")
{
$_SESSION['name'] = "logout";
header('Location:http://localhost:90/econvoy/');
}
elseif($_SESSION['name'])
{

}
else
{
$_SESSION['name'] = "logout";
header('Location:http://localhost:90/econvoy/');
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
    <title>LawHub : A small contribution to Indian Government</title>
    <meta name="description" content="This is a tool based on crime and law">
    <meta name="keywords" content="indian law system,laws,law students,crime,crime analysis, crime statistics, fir, fir registration">


    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicons/favic.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../font/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="../css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="../css/userstyle.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="../js/modernizr.custom.js"></script>

</head>

<body>
<!-- Navigation
==========================================-->

<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../Dashboard/userdashboard.php">E-CONVOY</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-home" class="page-scroll">What?</a></li>
                <li><a href="#tf-fill" class="page-scroll">Fill the form</a></li>
                <li><a href="#tf-faq" class="page-scroll">FAQ</a></li>
                <li><a href="../Dashboard/userdashboard.php" class="page-scroll">Back to home</a></li>
				<li><a href="../php/logout.php" class="page-scroll">Log Out</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- What Page
==========================================-->
<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong><span class="color">"Stolen Vehicle Search"</span></strong></h1>
            
            <p>Fill the details and search your vehicle.</p>
            <a href="#tf-fill" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>

<!-- Form Page
==========================================-->

<div id="tf-fill" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">  

                <div class="section-title center">
                    <h2>Details for <strong>Your Stolen Vehicle.</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <big><em>Check if your vehicle is retrived or not.</em></big><br>
                  
                  
                </div>

                <div id="forma"><form action="php/missing.php" method="POST" enctype="multipart/form-data">
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Name</label>
                                <input type="text" name="y_name" class="form-control" id="exampleInputEmail1" placeholder="Enter the owners name.">
                            </div>
                        </div>
                    </div>
					
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Registration Numbr</label>
								<input type="number" class="form-control" id="address" placeholder="Enter the vehicles registration number.">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Vehicle Engine Number</label>
                                <input type="number" name="relation" class="form-control" id="exampleInputPassword1" placeholder="A unique number of the engine has to be entered ">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Chassis Number</label>
                                <input type="number" name="age" class="form-control" id="exampleInputPassword1" placeholder="vehicles chassis number">
                            </div>
                        </div>
                    </div>
                    


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <br><button type="submit" name="submit" class="btn tf-btn btn-default">SEARCH</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- FAQ PAGE
==========================================-->
<div id="tf-faq" class="text-center">
    <div class="container">
        <!-- FAQ SECTION WHERE QUESTION BASED ON NORMAL QUERIES-->  
		
		<div class="container">
				  <h1>Queries</h1>
				  <p>What is registration number?</p>
				  <blockquote>
					<p>Due to heavy volume of vehicle registration, the numbers were given to the RTO offices of registration as well. The third part is a 4 digit number unique to each plate. A letter(s) is prefixed when the 4 digit number runs out and then two letters and so on..</p>
					
				  </blockquote>
				</div>
				
				
		<div class="container">
				  
				  <p>What is engine Number?</p>
				  <blockquote>
					<p>Engine number may refer to an identification number marked on the engine of a vehicle or, in the case of locomotives, to the road number of the locomotive. The engine number is separate from the Vehicle Identification Number (VIN).</p>
					
				  </blockquote>
				</div>
				
		<div class="container">
				  
				  <p>What is Chassis Number?</p>
				  <blockquote>
					<p>A vehicle identification number, commonly abbreviated to VIN, or chassis number, is a unique code including a serial number, used by the automotive industry to identify individual motor vehicles, towed vehicles, motorcycles, scooters and mopeds as defined in ISO 3833. VINs were first used in 1954.</p>
					
				  </blockquote>
				</div>		
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