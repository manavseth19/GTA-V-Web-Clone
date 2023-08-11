<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>--- EYEFOUNDIT! Look what EYE found! ---</title>
    <link rel="stylesheet" type="text/css" href="/gtavweb/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/gtavweb/css/main.css">
</head>

<body>
    <?php include '../navbar.php';
    include '../webdb/Database.php'
    ?>
    <div class="startpage">
        <h2 style="font-size: 20px; margin-bottom: 20px;">Results for: TRAVEL AND TRANSPORT</h2>
                 <font size="+2">Short travels:</font>
        <a href="<?php echo $cat_link=getSubCat(4,1)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/tat/Ola-logo.jpg" width="150" alt="">
                <h2>Olacabs</h2>
                <p>ChaloNiklo</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(4,2)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/tat/uber-logo.jpg" width="150" alt="">
                <h2>Uber</h2>
                <p>Get there. Your day belongs to you</p>
            </div>
        </a>

          <font size="+2">Travel & Hotels:</font>

        <a href="<?php echo $cat_link=getSubCat(4,3)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/tat/redbus-logo.png" width="150" alt="">
                <h2>Redbus</h2>
                <p>When you gotta go, you gotta go</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(4,4)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/tat/makemytrip-logo.jpg" width="150" alt="">
                <h2>Makemytrip</h2>
                <p>Dil toh roaming hai</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(4,5)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/tat/tripadvisor-logo.png" width="150" alt="">
                <h2>Tripadvisor</h2>
                <p>Know better. Book better. Go better</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(4,6)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/tat/flipkart-flights.jfif" width="150" alt="">
                <h2>Flipkart Flights</h2>
                <p>Book Flight tickets at lowest Airfare.</p>
                <p></p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(4,7)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/tat/expedia-logo.png" width="150" alt="">
                <h2>Expedia</h2>
                <p>Where you book matters.</p>
                <p></p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(4,8)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/tat/trivago-logo.png" width="150" alt="">
                <h2>Trivago</h2>
                <p>Trivago knows everything about hotels.</p>
                <p>Hotel Trivago!</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(4,9)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/tat/Airbnb.png" width="150" alt="">
                <h2>Airbnb</h2>
                <p>Belong Anywhere.</p>
            </div>
        </a>

    </div>
</body>

</html>