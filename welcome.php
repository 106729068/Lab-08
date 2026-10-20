<?php
session_start();

if (isset($_SESSION['user'])) {
    include 'header.inc';

    echo '<h2>Welcome, '.

    htmlspecialchars($_SESSION['user']). '!</h2>';
    echo '<p>You have auccessfully logged in.</p>';
    include 'footer.inc';
} else {
    header('Location: login.php');
    exit();

}