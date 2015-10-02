<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 03-Oct-15
 * Time: 3:01 AM
 */
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
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/userstyle.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

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
            <a class="navbar-brand" href="index.html">E-CONVOY</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-home" class="page-scroll">What?</a></li>
                <li><a href="#tf-fill" class="page-scroll">Fill the form</a></li>
                <li><a href="#tf-faq" class="page-scroll">FAQ</a></li>
                <li><a href="userdashboard.php" class="page-scroll">Back to home</a></li>
                <li><a href="php/logout.php" class="page-scroll">Log Out</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- What Page
==========================================-->
<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1> <strong><span class="color">"LAWYER HIRING"</span></strong></h1>

            <p>ALL NEW PLATFORM FOR LAWYERS. NOW YOUR NEW LAWYER IS JUST A FEW CLICKS AWAY.</p>
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
                    <h2> <strong>LAWYER HIRING</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>

                </div>
                <h3>All Lawyers are verified.</h3>
                <div id="forma"><form action="php/missing.php" method="POST" enctype="multipart/form-data">


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Type of Lawyer </label>
                                    <input type="text" name="t_lawyer" class="form-control" id="t_lawyer" placeholder="which type of lawyer are you finding?">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your budget : From</label>
                                    <input type="text" name="yb_from" class="form-control" id="yb_from" placeholder="Budget from">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your budget : To</label>
                                    <input type="text" name="yb_to" class="form-control" id="yb_to" placeholder="Budget to ">
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Experience</label>
                                    <input type="text" name="l_exp" class="form-control" id="l_exp" placeholder="how much experienced lawyer do you want? eg. expert">
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
                                    <td valign="top"><p><strong>What is the procedure for finding an Lawyer?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>Visit our website www.econvoy.com and follow the &lsquo;Lawyer hiring&rsquo; Module. </p></td>
                                </tr>
                            </table>
                            <br clear="all" />
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="110" valign="top"><p><strong>Question 03</strong></p></td>
                                    <td width="20" valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>Are all lawyers verified?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>Yes. all lawyers are verified during their registration on this webpage.</p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 04</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>What type of lawyer can i find here?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>You can find all types of lawyers here.</p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 05</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>Can i read a reviw about the lawyers?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>Yes. all the lawyers review can be read in the feedback module or also before selecting the lawyer the review will be shown.<strong></strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 06</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>how can i get in contact with the lawyer?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>After you select the lawywer. his/her personal details will be given to you. also a appointment will be fixed as per the lawyer free time. where you can talk privately with the lawyer and discuss your case. </p></td>
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
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>

<script src="js/owl.carousel.js"></script>

<!-- Javascripts
================================================== -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>