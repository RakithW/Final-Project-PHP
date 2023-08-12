<?php
// header.php file
require './inc/header.php';

// start the session to work with session variables
session_start();

// clear all session variables
session_unset();

// destroy the session data
session_destroy();

// redirect the user to the index.php page
header('location: index.php');

// footer.php file
require './inc/footer.php';
?>