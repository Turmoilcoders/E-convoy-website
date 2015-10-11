<?php
session_start();
if(isset($_SESSION['name']))
{
    if($_SESSION['name'] == "existed")
    {
        echo "<script>alert('User all ready exists')</script> ";
        unset($_SESSION['name']);

    }
    elseif($_SESSION['name'] == "logout")
    {
        echo "<script>alert('Session Expired')</script> ";
        unset($_SESSION['name']);
    }
    elseif($_SESSION['name'] == "notexisted")
    {
        echo "<script>alert('New User register yourself')</script> ";
        unset($_SESSION['name']);
    }
    elseif($_SESSION['name'] == "registred")
    {
        echo "<script>alert('Welcome user ,you have successfully registered. Login after some time as it take as while for system approval.')</script> ";
        unset($_SESSION['name']);
    }
    elseif($_SESSION['name'] == "error")
    {
        echo "<script>alert('Invalid combinations or application under scrutiny')</script> ";
        unset($_SESSION['name']);
    }
    elseif($_SESSION['name'] == "removed")
    {
        echo "<script>alert('User not approved by system.You cant use this this system.')</script> ";
        unset($_SESSION['name']);
    }
}
else
{
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>E-Convoy Admin</title>

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

<body >

<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel   white">
        <form class="login-form " action="php/login.php" method="post">
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="img/2.jpg" alt="" class="circle responsive-img valign profile-image-login">
                    <p class="center login-form-text teal-text">E-Convoy</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12 ">
                    <i class="mdi-communication-email prefix"></i>
                    <input id="username" type="text" class="active " name="username" required="">
                    <label for="username" class="center-align ">Email</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12 ">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password" name="password" required="">
                    <label for="password" >Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 ">
                  <button type="submit" name="login" class="btn waves-effect waves-light col s12">Login</button>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin medium-small"><a href="registration.php">Register Now!</a></p>
                </div>
                <div class="input-field col s6 m6 l6">
                    <p class="margin right-align medium-small"><a href="forgot.php">Forgot password ?</a></p>
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

</body>
</html>