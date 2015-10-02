<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 02-Oct-15
 * Time: 11:58 PM
**/
session_start();
if(isset($_SESSION['name']))
{
    if($_SESSION['name'] == "mismatch")
    {
        echo "<script>alert('Password mismatch')</script> ";
    }
    if($_SESSION['name'] == "")
    {
    }
}
?>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Page</title>

    <!-- CORE CSS-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <style>
        html,
        body {
            height: 100%;
        }
        html {
            display: table;
            margin: auto;
        }
        body {
            display: table-cell;
            vertical-align: middle;
            background: url("img/HD-Tool-Flat-Wallpaper.jpg");
        }
    </style>
</head>

<body>
<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" action="php/register.php" method="POST">
            <div class="row">
                <div class="input-field col s12 center">
                    <h4>Register</h4>
                    <p class="center">Join to our community now !</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="username" type="text" name="name" required="">
                    <label for="username" class="center-align" >Username</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-communication-email prefix"></i>
                    <input id="email" type="email" name="email" required="">
                    <label for="email" class="center-align" >Email</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password" name="password" required="">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password-again" type="password" name="cpassword" required="">
                    <label for="password-again">Password again</label>
                </div>
            </div>
            <div class="row-margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <label>Type of User</label>
                    <br>
                    <input name="group1" type="radio" id="test1" value="student" required="" />
                        <label for="test1">Student</label>
                        <br>
                        <input name="group1" type="radio" id="test2" value="lawyer" required="" />
                        <label for="test2">Lawyer</label>
                        <br>
                        <input class="with-gap" name="group1" type="radio" id="test3" value="judicary" required=""  />
                        <label for="test3">Judiciary</label>
                        <br>
                        <input name="group1" type="radio" id="test4" value="layman" required=""/>
                        <label for="test4">Layman</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" name="register" class="btn waves-effect waves-light col s12">Register</button>
                </div>
                <div class="input-field col s12">
                    <p class="margin center medium-small sign-up">Already have an account? <a href="index.php">Login</a></p>
                </div>
            </div>
        </form>
    </div>
</div>



<!-- ================================================
  Scripts
  ================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="js/materialize.js"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.js"></script>

</body>

</html>
