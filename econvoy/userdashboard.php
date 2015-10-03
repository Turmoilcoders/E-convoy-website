<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 03-Oct-15
 * Time: 1:38 AM
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
        $name = $_SESSION['name'];

    }
    else
    {
        $_SESSION['name'] = "logout";
        header('Location:http://localhost:90/econvoy/');
    }
}
else {

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
    <title>E-convoy : A small contribution to Indian Government</title>
    <meta name="description" content="This is a tool based on crime and law">
    <meta name="keywords" content="indian law system,laws,law students,crime,crime analysis, crime statistics, fir, fir registration">

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
            <a class="navbar-brand" href="#">E-CONVOY</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-home" class="page-scroll">Home</a></li>
                <li><a href="#tf-about" class="page-scroll">About</a></li>
                <li><a href="#tf-services" class="page-scroll">Services</a></li>
                <li><a href="#tf-testimonials" class="page-scroll">FeedBack & Reviews</a></li>
                <li><a href="#tf-team" class="page-scroll">Team</a></li>
                <li><a href="#tf-contact" class="page-scroll">Contact</a></li>
                <li><a href="php/logout.php" class="page-scroll">Logout</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- Home Page
==========================================-->
<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1>Welcome  <strong><span class="color">"<?php echo $name; ?>"</span></strong></h1>
            <p class="lead">This is the digital world of information about <strong>Law & Crime</strong> and a tool with <strong>extraordinary services.</strong></p>
            <a href="#tf-about" class="fa fa-angle-down page-scroll "></a>
        </div>
    </div>
</div>

<!-- About Us Page
==========================================-->
<div id="tf-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-text">
                    <div class="section-title">
                        <h4>About us</h4>
                        <h2>Some words <strong>about us</strong></h2>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                    <p class="intro">
                        We are bunch of students who are eager to help the government of India in one way or another. So being in a final year of engineering, as a project we thought of making a tool that can help common man, law students, police force and laweyers in different manners. We are passionate about this project and having particular goal as well as motivation to make this project live for the government of India in coming future. We hope that the people of our nation will appriciate this step taken by us and that is the inspiration we are seeking for.
                    </p>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Mission</strong> - <em>Make unknown things to be known</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Goal</strong> - <em>To help the government and hence the people</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Motivation</strong> - <em>The burden of current judiciary system</em>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-circle">
                    <img src="img/lady.png">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section
==========================================-->
<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Take a look at <strong>our services</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em>The core power of <b>E-convoy </b>is our services. As you can see there are numbers of services we are providing which helps the people in most helping manner. </em></small>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-3 col-sm-6 service">
                <a href="lawyerhiring.php"><img src="img/services/02.jpg" alt="..." class="img-circle team-img">
                    <h4><strong>Lawyer Hiring</strong></h4></a>
                <p>Hire best of Lawyers according to your preferences.</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <a href="fir.php"><img src="img/services/03.jpg" alt="..." class="img-circle team-img">
                    <h4><strong>FIR Registration</strong></h4></a>
                <p>This service is currently in its Beta Version. We will let you know once it's available.</p>

            </div>

            <div class="col-md-3 col-sm-6 service">
                <a href="lost%20and%20found%20page.php"><img src="img/services/04.jpg" alt="..." class="img-circle team-img">
                    <h4><strong>Lost & Found</strong></h4></a>
                <p>Have you lost any of your valuables ?<br>Have you found any ?</p>

            </div>

            <div class="col-md-3 col-sm-6 service">
                <a href="missing.php"><img src="img/services/05.jpg" alt="..." class="img-circle team-img">
                    <h4><strong>Missing Person</strong></h4></a>
                <p>Look for your loved ones if they are missing. Let the world know if you found someone innocent</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <a href="#"><img src="img/services/01.jpg" alt="..." class="img-circle team-img">
                    <h4><strong>Unidentified Dead Bodies</strong></h4></a>
                <p>Have you found something unusual in your backyard? Let us know.</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <a href="stolen%20vechicle%20search.php"><img src="img/services/06.jpg" alt="..." class="img-circle team-img">
                    <h4><strong>Stolen Vehicles</strong></h4></a>
                <p>Give us your registration details or identity of your vehicle if it is stolen or chekc in our menifest</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <a href="unclaimed%20vechicle%20search.php"><img src="img/services/07.jpg" alt="..." class="img-circle team-img">
                    <h4><strong>Unclaimed Vehicles</strong></h4></a>
                <p>Have you found any unclaimed vehicle ? Let us know.</p>
            </div>

        </div>
    </div>
</div>


<!-- Testimonials Section
==========================================-->
<div id="tf-testimonials" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2>Our user's<strong> FeedBacks & Reviews</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div class="item">
                            <h5>
                                Being a law student this site helps me a lot in my day to day activities and it keeps me aware about all the IPC section as and when I need them. I love this portal.
                            </h5>
                            <p><strong>Shyam Khanna</strong> <br>Student <br>Indian Law School</p>
                        </div>

                        <div class="item">
                            <h5>It provides better awareness to the people related to the crime stuff like how to make FIR, how to file a pitition etc. I appriciate this portal.</h5>
                            <p><strong>Shrinath Shinde</strong><br> Sub-Inspector <br> Anand Police</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Page
    ==========================================-->
<div id="tf-team" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2>Meet <strong>our team</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <div id="team" class="owl-carousel owl-theme row">
                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/unnit.jpg." alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Unnit Metaliya</h3>
                            <p>Web Developer</p>
                            <p>Changes are the necessary to forward Human Being & that's what I belive in.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/arvind.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Arvind Iyer</h3>
                            <p>Android Developer</p>
                            <p>Changes are the necessary to forward Human Being & that's what We belive in.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/manthan.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Manthan Solanky</h3>
                            <p>Documentation Head</p>
                            <p>Changes are the necessary to forward Human Being & that's what WE belive in.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/isha.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Isha Dhimmar</h3>
                            <p>Documentation Co-Head</p>
                            <p>Changes are the necessary to forward Human Being & that's what We belive in.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<!-- Contact Section
==========================================-->
<div id="tf-contact" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="section-title center">
                    <h2>Feel free to <strong>contact us</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <small><em>Provide genuine details</em></small>
                </div>

                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn tf-btn btn-default">Submit</button>
                </form>

            </div>
        </div>

    </div>
</div>

<!-- logout Section
==========================================-->


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
