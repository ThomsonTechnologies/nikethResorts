<?php
require_once("./model/DB.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Niketh Resorts</title>
<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
<link href="styles/main.css" rel="stylesheet" type="text/css">
<link href="styles/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="styles/jquery-ui.theme.css" rel="stylesheet" type="text/css">
<script src="./js/jquery-3.1.1.js"></script>
<script src="./js/jquery-ui.js"></script>
<script type="text/javascript" src="./js/effects.js"></script>
</head>

<body>
<div id="wrapper">
  <div id="mainbase">
    <div id="loginlinkbase">
    <table border="0" id="loginlinktable">
      <tbody>
        <tr>
          <td><h4><a href="login.php">Login</a></h4></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>

    </div>
    <main id="main">
      <header id="header">
      	<div id="logobox">
       	  <div id="logo"><img src="resources/title002.png" width="244" height="124" alt=""/></div>
        </div>
        <div id="mainnavbox">
            <div id="navTopLine" class="navline">
            <h1><img src="resources/titleSwirl.png" alt="line"></h1>
            </div>
            <div  id="navicon1" class="navicon"><img src="resources/leftNav.png"></div>
            <nav>

            <div id="menu1" class="menu"><a href="index.php">Home</a></div>
            <div id="menu2" class="menu"> <a href="about.php">About</a></div>
            <div id="menu2List" class="menuList">
              <ul id="submenu">
                <li><a href="resort.html">Resort</a></li>
                <li><a href="wayanad.html">Wayanad</a></li>
                </ul>
              </div>
            <div id="menu3" class="menu"><a href="#">Rooms</a></div>
            <div id="menu3List" class="menuList">
              <ul>
                <li id="menu3List1"><a href="rooms_suites.php">Rooms &amp; Suites</a></li>
                <li id="menu3List2"><a href="packages.php">Packages</a></li>
                <li id="menu3List3"><a href="tarrifs.php">Tarrif</a></li>
                <li id="menu3List4"><a href="rooms_suites.php">Reservation</a></li>
                </ul>
              </div>
            <div id="menu4" class="menu"><a href="events.html">Events</a></div>
            <div id="menu5" class="menu"><a href="gallary.html">Gallery</a></div>
            <div id="menu6" class="menu"><a href="contact.php">Contact</a></div>

            </nav>
            <div id="navicon2" class="navicon"><img src="resources/rightNav.png"></div>
            <div id="navBotLine" class="navline">
          	<h1><img src="resources/2lines.png" alt="line"></h1>
          	</div>
      	</div>
      </header>
