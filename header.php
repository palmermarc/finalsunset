<!DOCTYPE html>
<html>
<head>
  <title>Vampire Wars: The Final Sunset</title>
  <?php $orange = "#cc6600"; ?>
  <style>
    * { font-family: 'Open Sans', sans-serif; }
    body {
      background: #222 url(Camarilla_Logo.svg) no-repeat center 150px;
      background-attachment: fixed;
      background-size: contain;
      color: #fff;
      margin: 0;
      padding: 0;
    }
    a,
    a:visited {
      color: #cc6600;
    }
    p { margin-top: 0; }
    h1,h2,h3,h4,h5,h6 { font-family: 'Montserrat', sans-serif; }
    h1 {
      text-shadow: 1px 1px 1px #cc6600;
      font-size: 40px;
      line-height: 1em;
      margin: 0;
      margin-bottom: 0.5em;
      text-transform: uppercase;
    }
    #header { background-color: #000000; }
    #logo {height: 60px; font-family: 'Carter One', cursive; font-size: 40px; padding: 20px 0; color: #FFF; text-shadow: 1px 1px 13px #000000; float: left;}
    #logo img { height: 60px; }
    #copyright { text-align: center; font-style: italic; font-size: 10px; }
    .content_bin { width: 1100px; margin: 0 auto; }
    #main-content {
      padding: 40px;
      font-size: 18px;
    }
    nav {
      background-color: #000;
      margin: 0;
    }
    ul#main-menu {
      list-style-type: none;
      margin: 0;
      padding: 26px 0 0 0;
      text-align: right;
    }
    ul#main-menu li {
      display: inline-block;
      padding: 5px 10px;
      margin: 0;
    }
    ul#main-menu li:first-of-type {
      padding-left: 0;
    }

    ul#main-menu li a {
      display: block;
      padding: 8px 0;
      text-decoration: none;
    }
    #directions td {
     padding: 5px 0 5px 5px;
    }
    #directions tr td:first-of-type {
      padding-left: 5px;
      width: 35%;
    }
    #directions tbody tr:hover {
      background-color: #cc6600;
      color: #fff;
    }
    #admin p {
      margin: 0;
    }
    #admin h3 {
      margin-bottom: 0;
    }
    .question {
      font-size: 20px;
      font-weight: 700;
    }
    .answer {
      margin-bottom: 1em;
    }
    strong {
      font-weight: 700;
    }
    .clearfix {
      clear: both;
      display: table;
      height: 0;
    }
  </style>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25448617-8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-25448617-8');
  </script>
</head>
<body>
<header id="header">
  <div class="content_bin">
    <div id="logo">
      <a href="/">
        <img src="finalsunset.svg" />
      </a>
    </div>
    <nav>
      <ul id="main-menu">
        <li><a href="#">Changes</a></li>
        <li><a href="#">Clans</a></li>
        <li><a href="/directions.php">Directions</a></li>
        <li><a href="/downloads.php">Downloads</a></li>
        <li><a href="#">Misc</a></li>
        <li><a href="/newbie.php">Newbie</a></li>
        <li><a href="/questing.php">Questing</a></li>
        <li><a href="telnet://www.thefinalsunset.com:4888/" class="primary">PLAY NOW</a></li>
      </ul>
    </nav>
  </div>
  <div class="clearfix"></div>
</header>
