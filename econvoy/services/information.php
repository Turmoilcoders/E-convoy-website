<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 15-Oct-15
 * Time: 4:07 AM
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
    <title>E-convoy : A small contribution to Indin Government</title>
    <meta name="description" content="This is a tool based on crime and law">
    <meta name="keywords" content="indian law system,laws,law students,crime,crime analysis, crime statistics, fir, fir registration">


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
                <li><a href="#tf-courts" class="page-scroll">Courts</a></li>
                <li><a href="#tf-ipc" class="page-scroll">IPC Section search</a></li>
                <li><a href="#tf-crime" class="page-scroll">Type of crime</a></li>
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
            <h1>A portal of <strong><span class="color">"Judiciary"</span></strong></h1>
              <a href="#tf-courts" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>

<!-- Form Page
==========================================-->

<div id="tf-courts" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="section-title left col-md-4">
                    <br>
                    <h2><strong>Supreme Court</strong></h2>
                    <div class="line text-center">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <img class="img-circle left" src="../img/services/s.jpg">
                </div>
                <div class="col-md-8 ">
                    <h4>History</h4>
                    <p class="col-sm-12">Supreme Court of India came into existence on 26th January, 1950 and is located on Tilak Marg, New Delhi. The Supreme Court of India functioned from the Parliament House till it moved to the present building. It has a 27.6 metre high dome and a spacious colonnaded verandah. For a peek inside, you'll have to obtain a visitor's pass from the front office.
                        On the 28th of January, 1950, two days after India became a Sovereign Democratic Republic, the Supreme Court came into being. The inauguration took place in the Chamber of Princes in the Parliament building which also housed India's Parliament, consisting of the Council of States and the House of the People. It was here, in this Chamber of Princes, that the Federal Court of India had sat for 12 years between 1937 and 1950. This was to be the home of the Supreme Court for years that were to follow until the Supreme Court acquired its own present premises.
                    </p>
                    <h5>Present judge</h5>
                    <p class="col-sm-12"> As per the Constitution of India, Supreme Court judges retire at age 65. H. L. Dattu is the current Chief Justice of India, after Rajendra Mal Lodha retired on 27 September 2014.</p>
                    <h5>Website</h5>
                    <p><a href="http://supremecourtofindia.nic.in/">supremecourtofindia.nic.in</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                <div class="section-title left col-md-4">
                    <br>
                    <h2><strong>High Courts</strong></h2>
                    <div class="line text-center">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <img class="img-circle left" src="../img/services/h.jpg">
                </div>
                <div class="col-md-8 ">
                    <br>
                    <br>
                    <br>
                    <p class="col-sm-12">There are 24 High Courts at the state and union territory level of India which, together with the Supreme Court of India at the national level.
                        The Madras High Court in Chennai, Bombay High Court in Mumbai, Calcutta High Court in Kolkata and Allahabad High Court in Allahabad are the oldest four High Courts in India.
                    </p>
                </div>
            </div>
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
<script type="javascript" src="../js/plugin.js"></script>

<script src="../js/owl.carousel.js"></script>

<!-- Javascripts
================================================== -->
<script type="text/javascript" src="../js/main.js"></script>

</body>
</html>