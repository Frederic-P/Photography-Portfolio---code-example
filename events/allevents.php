<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Overview of all events | Pietowski Photo.</title>
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
    <script src="https://www.w3counter.com/tracker.js?id=111442"></script>
</head>
<body id="fullbody">
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
<div id="share"></div>
<div class="eventdetails">

<?php
    error_reporting(0);
    $event_file = file_get_contents("holdevents.json");
    $event_content = json_decode($event_file, true);
    $length = count($event_content) -1;
    for($length; $length >= 0; $length--){
        $evid = $length;
        $flickr_id = $event_content[$evid][0];
        $event_title = $event_content[$evid][1];
        $event_date = $event_content[$evid][2];
        $event_location = $event_content[$evid][3];
        $event_thumbnail = $event_content[$evid][4];
        $event_description = $event_content[$evid][5];

        echo '<a href="eventid.php?evid='.$length.'">
            <div class="eventcontainer">
            <img class="holdthumbnail" src="'.$event_thumbnail.'" alt='.$event_thumbnail.'>
		    <div class="holdeventtext">
                <h1 class="eventtitle">'.$event_title.'</h1>
                <p class="addinfo"> <b>Date</b>: '.$event_date.'</p>
                <p class="addinfo"> <b>Location</b>: '.$event_location.'</p>
                <p>'.$event_description.'</p></div></div></a>';
    }

 ?>
 </div>
 <script>
     $("#share").jsSocials({
         shares: ["email", "twitter", "facebook", "googleplus", "pinterest", "stumbleupon"]
     });
 </script>
</body>
</html>
