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

<?php
    error_reporting(0);
	$event = $_GET["evid"];
    $uses_this = preg_replace("/[^A-Za-z0-9\-]/", "", $event);
    $eventstring = htmlspecialchars($uses_this, ENT_QUOTES, "UTF-8");
    $event_file = file_get_contents("holdevents.json");
    $event_content = json_decode($event_file, true);
    if((strlen ( $eventstring) < 4) AND (array_key_exists($eventstring, $event_content))) {

        $flickr_id = $event_content[$eventstring][0];
        $event_title = $event_content[$eventstring][1];
        $event_date = $event_content[$eventstring][2];
        $event_location = $event_content[$eventstring][3];
        $disqus_url = $event_content[$eventstring][6];


        echo "<title>".$event_title." | Pietowski Photo</title>";
        $userid = "userID: '87413816@N04',";
        $kind = "kind: 'flickr',";
        $album = "album: '".$flickr_id."',";
        $height = "thumbnailHeight: '275 Sauto Mauto', thumbnailWidth: 'auto S90 M130',";
        $displayinfo = "thumbnailDisplayTransition: 'fadeIn',";
        $description = "displayDescription: true, thumbnailLabel: {display: false},";
        $indata = "allowHTMLinData: true,";
        $hovereffect = "thumbnailHoverEffect2: 'image_scale_1.00_1.20', fnImgDisplayed: fnOpenNewTab";



        echo"<div id='share'></div>";
        echo "<div class='eventdetails'> <a href = 'http://www.flickr.com/photos/87413816@N04/albums/".$flickr_id."' target='_blank' title='Click to view full resolution images on Flickr.'> <h1 id='event_title'>".$event_title."</h1> </a> <p class='event_detail'>".$event_date."</p> <p class='event_detail'>".$event_location."</p></div>";
        echo "<div class='setgallery' id='gallery_from_event'><div id='my_nanogallery2'></div>
        <script>
        jQuery(document).ready(function () {

            function fnOpenNewTab(e) {
                jQuery('.nGY2Viewer a').on( 'click', function(e) {
                    window.open( $(this).attr('href'), '_blank');
                    e.stopPropagation();
                    e.preventDefault();
                });
                return true;
            }

        jQuery('#my_nanogallery2').nanogallery2({
            $userid $kind $album $height $displayinfo $description $indata $hovereffect
        });
        });
        </script>
        <div id='disqus_thread'></div>
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = '".$disqus_url."';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href='https://disqus.com/?ref_noscript'>comments powered by Disqus.</a></noscript>";



        echo '<script> $("#share").jsSocials({shares: ["email", "twitter", "facebook", "googleplus", "pinterest", "stumbleupon"]});</script>';
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "<title>Page not found!</title>";
        echo "<div class='mainpage' id='setbackimage'> <div id='error_container'>";
        echo "<h1 id='error_header'>Sorry,</h1>";
        echo "<div id='error_txt_container'><br><p class='error_message'>It seems that this event does not exist. </p><a href='../events.html' style ='text-decoration:none'><p class='error_message'>But, please take a look at the events that do exist.</p></a> <br> <br> </div> <div id='overlaycontain'> <img id='code' src='error_code.png' alt='code'</div>";
        echo "</div></div>";
    }
?>

</body>
</html>
