<?php
session_start();
if(isset($_SESSION['name']))
{
    if($_SESSION['name'] == "arvind")
    {
        $name = "Arvind";
        $temp = 'img/arvind.jpg';
    }
    elseif ($_SESSION['name'] == "isha")
    {
        $name = "isha";
        $temp = 'img/isha.jpg';
    }
    elseif ($_SESSION['name'] == "manthan")
    {
        $name = "manthan";
        $temp = 'img/manthan.jpg';
    }
    elseif ($_SESSION['name'] == "unnit")
    {
        $name = "unnit";
        $temp = 'img/unnit.jpg';
    }
    else
    {
        $_SESSION['name'] = "logout";
        header('Location:http://localhost:90/econvoy');
    }
}
else
{
    $_SESSION['name'] = "logout";
    header('Location:http://localhost:90/econvoy');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>E-convoy</title>
    <!-- CORE CSS-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START HEADER -->
<header id="header" >
    <!-- start header nav-->
    <div class="navbar-fixed page-topbar">
        <nav class="indigo darken-4">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1">E-Convoy</a></h1></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START MAIN -->
<div id="main">
    <!-- Start SIDE NAVBAR -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <div id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <?php  print "<img src='$temp' alt='' class='circle responsive-img valign profile-image'/>" ?>
                    </div>
                    <div class="col col s8 m8 l8">
                        <a class="btn-flat  waves-effect waves-light white-text profile-btn" href="#" >Admin<i class="mdi-action-verified-user"></i></a>
                    </div>
                </div>
            </li>
            <li class="bold active">
                <?php
                echo "<a href='dashboard.php' class='waves-effect waves-cyan'><i class='mdi-action-dashboard'></i> Dashboard</a>";
                ?>
            </li>
            </li>
            <li class="bold active"><a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> Team</a>
            </li>
            </li>
            <li class="bold active"><a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Tables</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                </ul>
            </li>
            <li class="li-hover"><div class="divider"></div></li>
             <li><a href="php/logout.php"><i class='mdi-content-send'></i>Logout</a>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium  hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
    </div>
    <!-- END SIDE NAVBAR -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
        <section id="content">
            <!--start container-->
            <div class="container">
                <!--card stats start-->
                <div id="card-stats">
                    <div class="row">
                        <h1 class="center ">Statistics</h1>
                        <div class="col s12 m6 l3">
                            <div class="card">
                                <div class="card-content  green white-text">
                                    <p class="card-stats-title"><i class="mdi-social-group-add"></i> Users</p>
                                    <h4 class="card-stats-number">000</h4>
                                    <p class="card-stats-compare">0% from yesterday</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card">
                                <div class="card-content purple white-text">
                                    <p class="card-stats-title"><i class="mdi-editor-attach-file"></i> Reports</p>
                                    <h4 class="card-stats-number"><?php echo "0" ?></h4>
                                    <p class="card-stats-compare"></i> 0% last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card">
                                <div class="card-content blue-grey white-text">
                                    <p class="card-stats-title"><i class="mdi-action-trending-up"></i>Today Hits</p>
                                    <h4 class="card-stats-number">000</h4>
                                    <p class="card-stats-compare"></i> 0% <span class="blue-grey-text text-lighten-5">from yesterday</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card">
                                <div class="card-content pink lighten-2 white-text">
                                    <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i>Overall</p>
                                    <h4 class="card-stats-number">000</h4>
                                    <p class="card-stats-compare"> 0% <span class="deep-purple-text text-lighten-5">from last month</span></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--card stats end-->
                <!-- //////////////////////////////////////////////////////////////////////////// -->
            </div>
            <!--end container-->
        </section>
    </div>
    <!-- END WRAPPER -->
</div>
<!-- END MAIN -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START FOOTER -->
<footer class="page-footer indigo darken-4">
    <div class="footer-copyright ">
        <div class="container ">
            Copyright © 2015 All rights reserved.
            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4">Arvind Iyer</a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<!-- ================================================
Scripts
================================================ -->
<!-- jQuery Library -->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="js/materialize.js"></script>
<!--Extra-->
<script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>

