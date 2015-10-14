<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 03-Oct-15
 * Time: 3:33 AM
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
    <title>E-Convoy : A small contribution to Indin Government</title>
    <meta name="description" content="This is a tool based on crime and law">
    <meta name="keywords" content="indian law system,laws,law students,crime,crime analysis, crime statistics, Lost, Lost registration">

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
                <li><a href="#tf-found" class="page-scroll">Fill the Found form</a></li>
				<li><a href="#tf-lost" class="page-scroll">Fill the lost form</a></li>
                <li><a href="#tf-s-lost" class="page-scroll">Status</a></li>
                <li><a href="#tf-faq" class="page-scroll">FAQ</a></li>
                <li><a href="../Dashboard/userdashboard.php" class="page-scroll">Back to home</a></li>
				<li><a href="../index.php" class="page-scroll">Log Out</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- What Page
==========================================-->
<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1>Welcome on <strong><span class="color">"LOST AND FOUND"</span></strong></h1>
            <p class="lead">Lost report is important aspect in finding <strong>Items</strong> Here you can do that off line work <strong>online </strong></p>
            <a href="#tf-found" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>

<!-- Found Form Page
==========================================-->

<div id="tf-found" class="center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">  

                <div class="section-title center text-center">
                    <h2>FORM FOR <strong>FOUND ITEMS</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <big><em>A wrong filling of report is also a crime</em></big><br>
                    <small><em>We welcome genuine details</em></small>
                </div>

                <div id="forma" style="color: black ;">
                    <form action="../php/lost_found.php" method="POST" enctype="multipart/form-data">
                        <h3>Personnel Submitting item Details:</h3>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Name:</label>
								<input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter your name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Your Email</label>
                                <input type="text" name="f_email" class="form-control" id="f_email" placeholder="Enter your e-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Contact Number</label>
                                <input type="number" name="f_cont_number" class="form-control" id="f_cont_number" placeholder="Contact Number">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Aadhar card number</label>
                                <input type="number" name="f_aadharcard_number" class="form-control" id="f_aadharcard number" placeholder="15 digit personal number">
                            </div>
                        </div>
                    </div>
                      <h3>Item Description:</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >ITEM FOUND</label>
                                <input type="text" name="Item_Found" class="form-control" id="item found" placeholder="name of the item found">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="item_description" class="form-control" id="f_description" placeholder="Description of item that is found in detail">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Location </label>
                                <input type="text" name="item_location" class="form-control" id="f_location" placeholder="Nearby landmark where the item was found">
                            </div>
                        </div>
                    </div><hr>

                    <!-- Need to add a  Thanks message after submitting items and requesting them to submit item  -->


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <br><button type="submit" name="found" class="btn tf-btn btn-default">Submit</button>
                            </div>
                        </div>
                    </div>

                </form>
                </div>
            </div>
        </div>

    </div>
</div>
<br>
<br>


<!-- Lost Form Page
==========================================-->

<div id="tf-lost" class="center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">  

                <div class="section-title text-center center">
                    <h2>FORM FOR <strong>LOST ITEMS</strong></h2>
                    <div class="line center">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <big><em>A wrong filling of report is also a crime</em></big><br>
                    <small><em>We welcome genuine details</em></small>
                </div>

                <div id="forma" style="color: black">
                    <form action="../php/lost_found.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <h3>Complaint Description:</h3>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Complainant's Name:</label>
								<input type="text" class="form-control" name="c_name" id="c_name" placeholder="Enter your name" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Complainant's Email</label>
                                <input type="text" name="c_email" class="form-control" id="exampleInputEmail1" placeholder="Enter your e-mail" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Complainant's Contact Number</label>
                                <input type="number" name="c_pnumber" class="form-control" id="cont_number" placeholder="Contact Number" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Complainant's Aadhar card number</label>
                                <input type="number" name="c_aadharcard" class="form-control" id="aadharcard number" placeholder="15 digit personal number" required="">
                            </div>
                        </div>
                    </div>
                        <h3>Item Description:</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >ITEM LOST</label>
                                <input type="text" name="item" class="form-control" id="itemlost" placeholder="name of the item lost" required="">
                            </div>
                        </div>
                    </div>

					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Place of lost</label>
                                <input type="text" name="place" class="form-control" id="place" placeholder="Place where the item is lost">
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date of lost</label>
                                <input type="date" name="date" class="form-control" id="date" placeholder="Date on which the item was lost" required="">
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Time of lost</label>
                                <input type="time" name="time" class="form-control" id="time" placeholder="Time of lost(if known)" required="">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label >Last seen </label>
                                <input type="datetime" name="last_seen" class="form-control" id="lastseen" placeholder="When was the item last seen" required="">
                            </div>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Item Description</label>
                                <textarea class="form-control" name="item_description" rows="4" required=""  placeholder="Description of item that is lost in detail"></textarea>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Upload a document showing genuinity</label>
                                    <input id="photo" type="file" name="lost_file" />
                                </div>
                            </div>
                        </div>
                        <?php
                        $no = uniqid('');
                        $no ='L'.$no;
                        $_SESSION['no']=$no;
                        $_SESSION['report']="LOST REPORT";
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Lost report No :&nbsp</label>
                                    <label><?php print "<strong><p> $no </p></strong>" ;?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <br><button type="submit" name="lost" class="btn tf-btn btn-default">Submit</button>
                                </div>
                            </div>
                        </div>

                </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Status PAGE
==========================================-->
<div id="tf-s-lost">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title center text-center">
                    <h1 style="color: #FCAC45">Lost item Status</h1>
                    <div class="line" >
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <big><em>A wrong filling of report is also a crime</em></big><br>
                    <small><em>We welcome genuine details</em></small>
                </div>
                <div id="forma" style="color: black">
                    <form action="php/Lost.php" method="POST" enctype="multipart/form-data">
                        <h3>Enter Email </h3><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="P_email" class="form-control" id="name" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <h3>Enter Lost Report No</h3><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="P_no" class="form-control" id="name" placeholder="Enter Lost Report NO">
                                </div>
                            </div>
                        </div>
                        <div class="row left" >
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn tf-btn btn-default">Check status</button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="submit" name="generate" class="btn tf-btn btn-default">Get report</button>
                                </div>
                            </div>
                        </div>
                        <br><br>

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
                                <td valign="top"><p><strong>What is the procedure for lodging a report?</strong></p></td>
                            </tr>
                            <tr>
                                <td valign="top"><p><strong>Answer </strong></p></td>
                                <td valign="top"><p><strong>:</strong></p></td>
                                <td valign="top"><p>Visit   website www.econvoy.com and follow the &lsquo;Lost REPORT&rsquo; Module. </p></td>
                            </tr>
                        </table>
                            <br clear="all" />
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="110" valign="top"><p><strong>Question 03</strong></p></td>
                                    <td width="20" valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>What happens after I submit my information?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>A digitally signed &lsquo;Lost   REPORT&rsquo; will be instantaneously sent back on the complainant&rsquo; e-mail address.</p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 04</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>What is the significance of Lost No?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>The &lsquo;Lost Onine REPORT&rsquo; bears a    unique Lost Report number (LR No) about the information lodged. This Lost  Number can be used for future search and retrieval of a copy of the report.</p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 05</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>What types of complaints can be lodged?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>This service can be used    to lodge a &lsquo;Lost REPORT&rsquo; for any Item lost.<strong></strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 06</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>What types of complaints cannot be lodged?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>This is not an emergency response service and should    not be used to contact the police if: </p>
                                        <ul>
                                            <li>A crime is taking place or is in progress.</li>
                                            <li>The suspect(s) involved in the crime is/are still at    the scene or in the vicinity.</li>
                                            <li>Someone&rsquo;s life or property is in immediate danger.</li>
                                            <li>Someone has been injured in the incident. </li>
                                            <li>The report pertains to a missing person. </li>
                                            <li>Physical evidence such as blood stains, fingerprints    have been found at a suspected scene of crime. </li>
                                            <li>Missing/lost articles are related to any crime. </li>
                                        </ul>
                                        <p><strong>In the above situations    or in any other emergency: Always call 100 or contact the nearest police    station</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 07</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>I have not received an e-mail conLostmation even though I   have submitted my report.</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><ul>
                                        <li>You may have accidentally provided a wrong e-mail    address or your e-mail inbox is full. </li>
                                        <li>You may also contact admin admin@econvoy.com to check your report.</li>
                                    </ul></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 08</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>How a &lsquo;Lost REPORT&rsquo; can be verified?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>Any person can verify the    &lsquo;Lost REPORT&rsquo; by filling Lost No. in the status link of the application on the  website .<strong></strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 09</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>I am a foreigner. Can I lodge a &lsquo;Lost REPORT&rsquo; online?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>You can lodge a police report.<strong></strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 10</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>Is any investigation/enquiry done by police after lodging    of a complaint?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>Yes as it being an Lost report ,there will enquiry and investgation.<strong></strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 11</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>What are the mandatory fields in the form?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>//left as not decided</p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 12</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>What action will be taken if complainant lodged any false    report?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>False    complaint/information to the police is a punishable offence.<strong></strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 14</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>Whether the print out of report taken is to be submitted in    any police station?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>No.</p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 15</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>Whether &ldquo;Lost REPORT&rdquo; can be retrieved or not?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>Yes, it can be retrieved    through status link on the module.</p></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
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