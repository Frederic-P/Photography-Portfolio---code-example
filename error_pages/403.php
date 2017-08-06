<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../defaulter.css" type="text/css">
    <link rel="stylesheet" href="../nano/dist/css/nanogallery2.min.css">
    <link rel="stylesheet" href="../style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../nano/dist/jquery.nanogallery2.js"></script>
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css"/>
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css"/>
    <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="../mobile.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>403 - Forbidden access</title>
    <script src="https://www.w3counter.com/tracker.js?id=111442"></script>
</head>
<body id="fullbody">

    <?php
    header("HTTP/1.0 403 Forbidden access");
    ?>
<div class="fullcontain">
<header>
    <div class="navbar">
        <h1 class="headergreeting" ><a href="../index.html">Welcome to Pietowski Photo</a></h1>
        <ul id="headeritems">
            <li><a href="../themes/index.html">Themes</a></li>
            <li><a href="../events/index.html">Events</a></li>
            <li><a href="../contact.html">Contact</a></li>
            <li><a href="../about.html">About</a></li>
        </ul>
    </div>
</header>
</div>

<div class='mainpage' id='setbackimage'>
    <div id='error_container'>
        <h1 id='error_header'>Sorry,</h1>
        <div id='error_txt_container'>
        <br>
        <p class='error_message'>Error 403: Forbidden access. </p>
        <br>
        <br>
    </div>
    <div id='overlaycontain'>
        <img id='code' src='error_403code.png' alt='403-code'</div>
    </div>
</div>
</body>
</html>
