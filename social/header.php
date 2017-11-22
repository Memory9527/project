<?php
//主界面
session_start();
echo "<!DOCTYPE html>\n<html><head>";
require_once 'config.php';
$userstr = '(Guest)';
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $loggedin = true;
    $userstr = " ($user)";
}
else $loggedin = false;

echo "<title>".APP_NAME."</title><link rel='stylesheet'" .
    "href='style.css' type='text/css'>" .
    "</head><body >" .
    "<div style='text-align:center'><canvas id='logo' width='624'" .
    "height='96'>".APP_NAME."</canvas></div>" .
    "<div class='appname'>".APP_NAME."$userstr</div>" .
    "<script src='javascript.js'></script>";
if($loggedin){
    echo "<br><ul class='menu'>" .
        "<li><a href='members.php?view=$user'>Home</a></li>" .
        "<li><a href='members.php'>Members</a></li>" .
        "<li><a href='friends.php'>Friends</a></li>" .
        "<li><a href='messages.php'>Messages</a></li>" .
        "<li><a href='profile.php'>Edit Profile</a></li>" .
        "<li><a href='logout.php'>Log out</a></li></ul><br>";
}
else{
    echo ("<br><ul class='menu'>" .
        "<li><a href='index.php'>Home</a></li>"                .
        "<li><a href='signup.php'>Sign up</a></li>"            .
        "<li><a href='login.php'>Log in</a></li></ul><br>"     .
        "<span class='info'>&#8658; You must be logged in to " .
        "view this page.</span><br><br>");
}
?>