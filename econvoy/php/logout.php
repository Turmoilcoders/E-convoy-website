<?php
/**
 * Created by PhpStorm.
 * User: Arvind
 * Date: 03-Oct-15
 * Time: 12:35 AM
 */
session_start();
unset($_SESSION['name']);
header('Location:http://localhost:90/econvoy/');
?>