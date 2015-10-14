<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 12-Oct-15
 * Time: 4:29 AM
 */

session_start();
if(isset($_SESSION['name']))
{
    if($_SESSION['name'] == "arvind")
    {
        $name = "Arvind";
        $temp = '../img/arvind.jpg';
    }
    elseif ($_SESSION['name'] == "isha")
    {
        $name = "isha";
        $temp = '../img/isha.jpg';
    }
    elseif ($_SESSION['name'] == "manthan")
    {
        $name = "manthan";
        $temp = '../img/manthan.jpg';
    }
    elseif ($_SESSION['name'] == "unnit")
    {
        $name = "unnit";
        $temp = '../img/unnit.jpg';
    }
    elseif ($_SESSION['name'] == "police")
    {
        $name = "police";
        $temp = '../img/police.jpg';
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
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

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
                    <li><h1 class="logo-wrapper"><a href="../index.php" class="brand-logo darken-1">E-Convoy</a></h1></li>
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
        <ul id="slide-out" class="side-nav fixed leftside-navigation collapsible collapsible-accordion">
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
                echo "<a href='policedashboard.php' class='waves-effect waves-cyan'><i class='mdi-action-dashboard'></i> Dashboard</a>";
                ?>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Tables</a>
                <div class="collapsible-body">
                    <ul>
                        <?php
                        if($_SESSION['name']=="police")
                        {

                            echo " <li><a href='New_firs_admin.php'>New FIR</a></li>";
                            echo " <li><a href='Commentedfirs.php'>Accepted FIR's</a></li>";

                        }
                        else
                        {
                            print " <li><a href='New_users_admin.php'>Registration</a>
                        </li>
                        <li><a  href='Accepted_useres_admin.php'>Accepted users</a>
                        </li>
                        <li><a href='Rejected_users_admin.php'>Rejected users</a>
                        </li>
                        <li><a href='New_firs_admin.php'>New FIR</a>
                        </li>";
                        }
                        ?>

                    </ul>
                </div>
            </li>

            <li class="li-hover"><div class="divider"></div></li>
            <li><a href="../php/logout.php"><i class='mdi-content-send'></i>Logout</a>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium  hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
    </div>
    <!-- END SIDE NAVBAR -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
    <section id="content">
        <!--start container-->
        <div class="container">
            <div class="row">
                <div class="col s12 m8 l9">
                    <table id="data-table-simple" class="responsive-table display"   width="100%">
                        <thead>
                        <?php
                        if($_SESSION['name'] == "police")
                        {
                            $conn= new mysqli('localhost','root','','econvoy');
                            $sql = "SELECT * FROM fir WHERE `Status` ='yes' && `Comment` != 'No' ";
                            $result = mysqli_query($conn,$sql);

                            print "
                            <tr>
                                <th>Name</th>
                                <th>Fir No</th>
                                <th>Complaint</th>
                                <th>Status</th>
                                <th>Comments</th>
                                <th>Update Comments</th>
                            </tr> ";

                        }
                        ?>

                        </thead>
                        <tbody>
                        <?php
                        if($_SESSION['name'] == "police")
                        {
                            while($row = mysqli_fetch_array($result)) {

                                ?>
                                <tr>
                                    <td><?=$row['P_name']?></td>
                                    <td><?=$row['uuid']?></td>
                                    <td><?=$row['C_descriptiom']?></td>
                                    <td><?=$row['Status']?></td>
                                    <td><?=$row['Comment']?></td>
                                    <td><?php $_SESSION['status']="comment";$_SESSION['fir'] =$row['uuid'];echo "<a class='modal-trigger waves-effect waves-light btn'  href='#modal1'>Comment</a>"?></td>
                                </tr>
                            <?php
                            }
                        }

                        mysqli_close($conn);
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--end container-->
    </section>
</div>
<!-- Comment Structure -->
<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Comment</h4>

        <div class="row">
            <form class="col s12" action="../php/updatetable.php" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="comment"></textarea>
                        <label for="textarea1">Status</label>
                    </div>
                    <div class="input-field col s12 ">
                        <?php $_SESSION['status'] == "comment" ?>  <button type="submit" name="update" class="btn waves-effect waves-light col s12">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
<!--Extra-->
<script type="text/javascript" src="../js/plugin.js"></script>

</body>
</html>
?>
