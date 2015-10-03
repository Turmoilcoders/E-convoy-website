<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 03-Oct-15
 * Time: 12:35 AM
 */
session_start();
if($_SESSION['name'] == "registred")
{
    echo "<script>alert('Welcome user ,your have successfully registered login after ome time so system approves your login.')</script> ";
}
unset($_SESSION['name']);
header('Location:http://localhost:90/econvoy/');
?>