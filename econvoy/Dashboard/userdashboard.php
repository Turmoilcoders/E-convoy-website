<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 03-Oct-15
 * Time: 1:38 AM
 */
session_start();
$_SESSION['error']="";
$name = $_SESSION['name'];
if(isset($_SESSION['name']))
{
}
else {
    $_SESSION['name'] = "logout";
    header('Location:http://localhost:90/econvoy/');
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
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Slider
      ================================================== -->
    <link href="../css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../css/owl.theme.css" rel="stylesheet" media="screen">

</head>

<body>
<?php
$conn = new mysqli('localhost', 'root', '', 'econvoy');
$sql = "SELECT * FROM users WHERE email = '$_SESSION[email]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$temp='../php/'.$row['img'];
$banner='../php/'.$row['banner'];
?>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START HEADER -->
<header id="header" >
    <!-- start header nav-->
    <div class="navbar-fixed page-topbar">
        <nav class="indigo darken-4">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1">E-Convoy</a></h1></li>
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
                <div class="row   ">
                    <div class="col col s4 m4 l4">
                        <?php print "<img src='$temp' alt='' class='circle responsive-img valign profile-image'>";?>
                    </div>
                    <div class="col col s8 m8 l8">
                        <a class="btn-flat  waves-effect waves-light deep-orange-text  profile-btn" href="#" ><?php echo $_SESSION['name']; ?><i class="mdi-action-verified-user green-text"></i></a>
                    </div>
                </div>
            </li>
            <li class="bold active "><a href="#profile" class="waves-effect waves-cyan page-scroll"><i class="mdi-action-account-circle"></i>Profile</a>
            </li>
            <li class="bold "><a href="#update" class="waves-effect waves-cyan page-scroll"><i class="mdi-social-group-add"></i>Update Profile</a>
            </li>
            <li class="bold "><a href="#content" class="waves-effect waves-cyan page-scroll"><i class="mdi-action-dashboard"></i>About us</a>
            </li>
            <li class="bold "><a href="#content1" class="waves-effect waves-cyan page-scroll"><i class="mdi-action-explore"></i>Services</a>
            </li>
            <li class="bold "><a href="#content2" class="waves-effect waves-cyan page-scroll"><i class="mdi-editor-mode-comment"></i>Feedback</a>
            </li>
            <li class="bold"><a href="#content3" class="waves-effect waves-cyan page-scroll"><i class="mdi-social-group"></i>Team</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                </ul>
            </li>
            <li class="li-hover"><div class="divider"></div></li>
            <li><a href="../php/logout.php"><i class="mdi-content-send"></i>Logout</a>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium  hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
    </div>
    <!-- END SIDE NAVBAR -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
    <section id="profile">
        <!--start container-->
        <div class="container">

            <div id="profile-page" class="section">
                <!-- profile-page-header -->
                <div id="profile-page-header" class="card">
                    <div class="row">
                        <div class="card-image waves-effect waves-block waves-light ">
                       <?php print " <img class='activator' src='$banner'  height='150px' alt='user background'> "; ?>
                        </div>
                        <div class="card-profile-image col s6" >
                            <?php  print "<img src='$temp' alt='profile image'  class='circle responsive-img activator' height='100px' width='100px' >";?>
                        </div>
                        <div class="col s6">
                            <h4 class="card-title indigo-text text-darken-4"><?php echo $_SESSION['name'] ?></h4>
                            <p class="light-blue-text"><?php echo $_SESSION['email'];  ?></p>
                        </div>
                    </div>
                </div>
                <!--/ profile-page-header -->
                <!-- profile-page-content -->
                <div id="profile-page-content" class="row">
                    <!-- profile-page-sidebar-->
                    <div id="profile-page-sidebar" class="col s12">
                        <!-- Profile About  -->
                        <div class="card light-blue">
                            <div class="card-content white-text">
                                <span class="card-title">About Me!</span>
                                <p><?php echo $row['About'] ?></p>
                            </div>
                        </div>
                        <!-- Profile About  -->

                        <!-- Profile About Details  -->
                        <ul id="profile-page-about-details" class="collection z-depth-1">
                            <!-- <li class="collection-item">
                                <div class="row">
                                    <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Project</div>
                                    <div class="col s7 grey-text text-darken-4 right-align">ABC Name</div>
                                </div>
                            </li>
                            -->
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> Skills</div>
                                    <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Stay tuned" ?></div>
                                </div>
                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Lives in</div>
                                    <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Stay tuned" ?></div>
                                </div>
                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
                                    <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Stay tuned" ?></div>
                                </div>
                            </li>
                        </ul>
                        <!--/ Profile About Details  -->

                        <!-- Profile About
                        <div class="card amber darken-2">
                            <div class="card-content white-text center-align">
                                <p class="card-title"><i class="mdi-social-group-add"></i> 3685</p>
                                <p>Followers</p>
                            </div>
                        </div>
                        <!-- Profile About  -->
                    </div>

                    </div>
                </div>
        </div>
    <!--end container-->
    </section>

<section id="update">
    <div class="container">
        <div class="row">
            <div id="profile-page-wall" class="col s12 ">
                <!-- profile-page-wall-share -->
                <div id="profile-page-wall-share" class="row">
                    <div class="col s12">
                        <ul class="tabs tab-profile z-depth-1 light-blue">
                            <li class="tab col s3"><a class=" waves-effect waves-light active" href="#UpdateProfile"><i class="mdi-editor-border-color"></i> Update Profile</a>
                            </li>
                            <li class="tab col s3"><a class=" waves-effect waves-light" href="#AddPhotos"><i class="mdi-image-camera-alt"></i>Change!!</a>
                            </li>
                            <li class="tab col s3"><a class=" waves-effect waves-light" href="#Feedback"><i class="mdi-image-photo-album"></i>Feedback!!</a>
                            </li>
                        </ul>
                        <!-- UpdateStatus-->
                        <div id="UpdateProfile" class="tab-content col s12  grey lighten-4">
                            <div class="row">
                                <div class="input-field col s10">
                                    <?php $_SESSION['status']="profile"?>
                                    <form  action="../php/updatetable.php" method="POST">
                                        <div class="row">
                                            <div class="input-field col s12 center">
                                                <h4>Update</h4>
                                                <p class="center">Update Yourself!!</p>
                                            </div>
                                        </div>
                                        <div class="row margin center">
                                            <div class="input-field col s12 center">
                                                <i class="mdi-social-person-outline prefix"></i>
                                                <input id="About" type="text" name="about" required="">
                                                <label for="About" class="center-align" >About You</label>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field col s6">
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field col s6">
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field col s6">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 center">
                                                <button type="submit" name="update" class="btn waves-effect waves-light ">Update</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- AddPhotos -->
                        <div id="AddPhotos" class="tab-content col s12  grey lighten-4">
                            <div class="row">
                                <div class="col s6 ">
                                    <form action="../php/updatetable.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s12 center">
                                                <h4>Change the dp!</h4>
                                                <p class="center">Update Yourself!!</p>
                                            </div>
                                        </div>
                                        <div class="row margin center">
                                            <div class="input-field col s12">
                                                <input id="photo" type="file" name="file_img" />
                                            </div>
                                        </div>
                                        <div class="row center">
                                            <div class="input-field col s12">
                                                <button type="submit" name="upload" class="btn waves-effect waves-light ">Upload</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col s6">
                                    <?php $_SESSION['status1'] ="banner"?>
                                    <form action="../php/updatetable.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s12 center">
                                                <h4>Change the banner!</h4>
                                                <p class="center">Update Yourself!!</p>
                                            </div>
                                        </div>
                                        <div class="row margin center">
                                            <div class="input-field col s12">
                                                <input id="photo" type="file" name="file_img1" />
                                            </div>
                                        </div>
                                        <div class="row center">
                                            <div class="input-field col s12">
                                                <button type="submit" name="upload_banner" class="btn waves-effect waves-light ">Upload</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- CreateAlbum -->
                        <div id="Feedback" class="tab-content col s12  grey lighten-4">
                            <div class="row">
                                <div class="input-field col s6">
                                    <form class="form" action="../php/feedback.php" method="Post">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" name="feedback" placeholder="Your Feedback Please!!"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="rating" id="exampleInputEmail2" placeholder="5">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-default">Send </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ profile-page-wall-share -->
            </div>
        </div>
    </div>
</section>




<section id="content" >
        <br>
        <!--start container-->
        <div class="container" >
            <div class="row">
                <div class="col s6 center">
                    <div class="about-text responsive">
                        <div class="section-title responsive">
                            <h2>Some words <strong class="blue-text">About us</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro responsive" >
                            We are bunch of students who are eager to help the government of India in one way or another. So being in a final year of engineering, as a project we thought of making a tool that can help common man, law students, police force and laweyers in different manners. We are passionate about this project and having particular goal as well as motivation to make this project live for the government of India in coming future. We hope that the people of our nation will appriciate this step taken by us and that is the inspiration we are seeking for.
                        </p>
                        <ul class="about-list left-align">
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
                <div class="col s6 center">
                    <div class="img-circle">
                        <img src="../img/lady.png" class="circle responsive-img ">
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <br>
    <section id="content1">
        <div class="container">
            <div class="section-title " >
                <h2>Take a look at <strong class="blue-text">our services</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <p><em>The core power of <b>E-convoy </b>is our services. As you can see there are numbers of services we are providing which helps the people in most helping manner. </em></p>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col s3  service">
                    <a href="../services/lawyerhiring.php"><img src="../img/services/02.jpg" alt="..." class="circle" height="100px" width="100px">
                        <h4><strong>Lawyer Hiring</strong></h4></a>
                    <p>Hire best of Lawyers according to your preferences.</p>
                </div>

                <div class="col s3  service">
                    <a href="../services/fir.php"><img src="../img/services/03.jpg" alt="..." class="circle" height="100px" width="100px">
                        <h4><strong>FIR Registration</strong></h4></a>
                    <p>This service is currently in its Beta Version. We will let you know once it's available.</p>

                </div>

                <div class="col s3  service">
                    <a href="../services/lost%20and%20found%20page.php"><img src="../img/services/04.jpg" alt="..." class="circle " height="100px" width="100px">
                        <h4><strong>Lost & Found</strong></h4></a>
                    <p>Have you lost any of your valuables ?<br>Have you found any ?</p>

                </div>

                <div class="col s3  service">
                    <a href="../services/missing.php"><img src="../img/services/05.jpg" alt="..." class="circle " height="100px" width="100px">
                        <h4><strong>Missing</strong></h4></a>
                    <p>Look for your loved ones if they are missing. Let the world know if you found someone innocent</p>
                </div>

                <div class="col s3  service">
                    <a href="#"><img src="../img/services/08.jpg" alt="..." class="circle " height="100px" width="100px">
                        <h4><strong>People no More</strong></h4></a>
                    <p>Have you found something unusual in your backyard? Let us know.</p>
                </div>

                <div class="col s3  service">
                    <a href="../services/unclaimed%20vechicle%20search.php"><img src="../img/services/07.jpg" alt="..." class="circle " height="100px" width="100px">
                        <h4><strong>Vehicles lost and found</strong></h4></a>
                    <p>Have you found any unclaimed vehicle or lost one ? Let us know.</p>
                </div>
                <div class="col s3  service">
                    <a href="../services/information.php"><img src="../img/services/01.jpg" alt="..." class="circle " height="100px" width="100px">
                        <h4><strong>Information portal</strong></h4></a>
                    <p>Go into world of judiciary and know about courts and law  suffs.</p>
                </div>
                <div class="col s3  service">
                    <a href="#"><img src="../img/services/09.jpg" alt="..." class="circle " height="100px" width="100px">
                        <h4><strong>Things one should know</strong></h4></a>
                    <p>A portal where you get updates of various information and stuufs one should know about</p>
                </div>
            </div>
        </div>
    </section>


    <section id="content2" >
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="section-title  ">
                        <br>
                        <h4>Our user's<strong class="blue-text"> FeedBacks & Reviews</strong></h4>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-s3 col s6 offset-s3">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'econvoy');
                        $sql = "SELECT * FROM `feedback`";
                        $result = mysqli_query($conn, $sql);
                        ?>
                        <?php
                        while($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="item center ">
                                <p><?=$row['feedback']?></p>
                                <p><strong><?=$row['name'] ?></strong> <br> <?php echo "Ratings "; print $row['rating'];echo "/10"; ?><br>
                                </p>
                            </div>
                        <?php
                        }
                        mysqli_close($conn);
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section id="content3" >
        <!--start container-->
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4 >
                        MEET OUR <strong class=" blue-text ">BEAUTIFUL TEAM</strong>
                    </h4>
                    <hr>
                    <p class="text-center black-text">
                        We are small team of designers and developers with big ideas .Changes are the necessary to forward Human Being & that's what <strong>WE</strong> belive in.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col s3 ">
                    <img alt="round" class="circle responsive-img profile-image-login" src="../img/arvind.jpg" ><br/><br/>
                    <p><b>Developer</b></p>
                </div>
                <div class="col s3  ">
                    <img alt="round" class="circle responsive-img profile-image-login" src="../img/team/manthan.jpg" ><br/><br/>
                    <p ><b>Developer</b></p>
                </div>
                <div class="col s3  ">
                    <img alt="round" class="circle responsive-img valign profile-image-login" src="../img/team/isha.jpg" ><br/><br/>
                    <p ><b>Developer</b></p>
                </div>
                <div class="col s3 ">
                    <img alt="round" class="circle responsive-img profile-image-login" src="../img/unnit.jpg"  ><br/><br/>
                    <p><b>Developer</b></p>

                </div>
            </div>
        </div>
        <!--end container-->
    </section>






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
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="../js/materialize.js"></script>
<!-- nice scroll -->
<script src="../js/jquery.scrollTo.min.js"></script>
<script src="../js/jquery.nicescroll.js" type="text/javascript"></script>

<script src="../js/owl.carousel.js"></script>
<!--Extra-->
<script type="text/javascript" src="../js/plugin.js"></script>
</body>
</html>

