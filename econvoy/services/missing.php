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
    <title>LawHub : A small contribution to Indin Government</title>
    <meta name="description" content="This is a tool based on crime and law">
    <meta name="keywords" content="indian law system,laws,law students,crime,crime analysis, crime statistics, fir, fir registration">
    <meta name="author" content="www.unnitmetaliya.com">

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
            <h1>Check For <strong><span class="color">"MISSING PEOPLE"</span></strong></h1>
            
            <p>Fill the form and have faith in us.</p>
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
                    <h2> <strong>Missing PEOPLE.</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
				<h3>Assorted Query</h3>
                <div id="forma"><form action="php/missing.php" method="POST" enctype="multipart/form-data">
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name </label>
                                <input type="text" name="c_name" class="form-control" id="c_name" placeholder="What was the child wearing on his/her upper body">
                            </div>
                        </div>
                    </div>
					
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Found Date Range: From:</label>
								<input type="Date" name="date_from" class="form-control" id="date_from" placeholder="approximate date from when the children was found">
                            </div>
                        </div> 
                    </div>
					
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Found Date Range: To:</label>
								<input type="Date" name="date_to" class="form-control" id="date_to" placeholder="approximate date to when the children was found">
                            </div>
                        </div> 
                    </div>
					
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Age Range</label>
                                <input type="number" name="age_from" class="form-control" id="age_from" placeholder="Approximate date of the child.">
                            </div>
                        </div>
                    </div>
					
						  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dress upper </label>
                                <input type="text" name="dress_upper" class="form-control" id="dress_upper" placeholder="What was the child wearing on his/her upper body">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dress upper Color</label>
                                <input type="text" name="dress_color_upper" class="form-control" id="dress_color_upper" placeholder="what was the color of the upper body clothes">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dress Lower</label>
                                <input type="text" name="dress_lower" class="form-control" id="dress_lower" placeholder="What was the child wearing on his/her lower body ">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dress Lower Color</label>
                                <input type="text" name="dress_color_lower" class="form-control" id="dress_color_lower" placeholder="what was the color of the lower body clothes">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Build</label>
                                <input type="text" name="built" class="form-control" id="built" placeholder="how build is the body of the child">
                            </div>
                        </div>
                    </div>
					
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Complexion</label>
                                <input type="text" name="complexion" class="form-control" id="complexion" placeholder="what is the color complexion of the child">
                            </div>
                        </div>
                    </div>
					
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Face</label>
                                <input type="text" name="face" class="form-control" id="face" placeholder="what is the shape of his face. e.g oval">
                            </div>
                        </div>
                    </div>
					
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hair</label>
                                <input type="text" name="hair" class="form-control" id="hair" placeholder="Discription of the hair. e,g long - brown">
                            </div>
                        </div>
                    </div>
					
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Eyes</label>
                                <input type="text" name="eyes" class="form-control" id="eyes" placeholder="what was the color of the eyes. e.g blue">
                            </div>
                        </div>
                    </div>
					
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sex</label>
                                <input type="text" name="sex" class="form-control" id="sex" placeholder="what was the gender of the child">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <br><button type="submit" name="submit" class="btn tf-btn btn-default">Filter</button>
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
<div id="tf-faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title center text-center">
                    <h1>Frequently Asked Questions</h1>
                    <div class="line" >
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <big><em>A quidlines for form and question on it</em></big><br>
                    <small><em>If still have query contact us using contact form</em></small>
                </div>
                <table>
                    <tr>
                        <td><table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="110" valign="top"><p><strong>Question 01</strong></p></td>
                                <td width="20" valign="top"><p><strong>:</strong></p></td>
                                <td valign="top"><p><strong>Why this application has been developed?</strong></p></td>
                            </tr>
                            <tr>
                                <td valign="top"><p><strong>Answer </strong></p></td>
                                <td valign="top"><p><strong>: </strong></p></td>
                                <td valign="top"><p>World  has consistently been adopting new methodologies and technologies to enhance  ts service delivery capacity.
                                    Our endeavour has been to identify areas where   newer means can help in reducing public inconvenience.<br /><br />
                            <tr>
                                <td valign="top"><p><strong>Question 02</strong></p></td>
                                <td valign="top"><p><strong>:</strong></p></td>
                                <td valign="top"><p><strong>What is the procedure to register for a missing children?</strong></p></td>
                            </tr>
                            <tr>
                                <td valign="top"><p><strong>Answer </strong></p></td>
                                <td valign="top"><p><strong>:</strong></p></td>
                                <td valign="top"><p>Visit our website www.econvoy.com and follow the &lsquo;missing childern&rsquo; Module and fill the form. </p></td>
                            </tr>
                        </table>
                            <br clear="all" />
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="110" valign="top"><p><strong>Question 03</strong></p></td>
                                    <td width="20" valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>After registering the comlpaint of missing person. Which police station will take the responsiblity of finding the childern?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>the head of the the police offoce will allocate the work to any police officer which will then lead the case of finding the child. </p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 04</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>How will i get notification if the children is found?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>The police station will call and inform you as soon s they get any lead in the case.  </p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 05</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>How can you tell that the children is matching the discription or is the person i am finding?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>Along with all the description a photo of the deadbody will be attached to make it easy for the person to match .<strong></strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 06</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>how can i claim the children?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>You need to go to the police station where the children was registered. you need to show birth certificate and rashan card to prove that the child belongs to you. then you can claim thre child. </p></td>
                                </tr>
                                
                            </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
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