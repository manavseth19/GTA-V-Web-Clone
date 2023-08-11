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
    include '../webdb/Database.php';
    ?>
    <div class="startpage">
        <h2 style="font-size: 20px; margin-bottom: 20px;">Results for: MONEY AND SERVICES</h2>
         <font size="+2">Public Sector banks:</font>
             <a href="<?php echo $cat_link=getSubCat(3,1)?>" target="_blank">
                 <div class="link">
                    <img src="/gtavweb/img/links/mas/sbi-logo.png" width="150" alt="">
                     <h2>Online Sbi</h2>
                     <p>A bank of the common man, the banker to every indian</p>
                 </div>
            </a>

             <a href="<?php echo $cat_link=getSubCat(3,2)?>" target="_blank">
                 <div class="link">
                    <img src="/gtavweb/img/links/mas/PNB-Logo.png" width="150" alt="">
                     <h2>PNB India</h2>
                     <p>The name you can bank upon</p>
                 </div>
            </a>

    <font size="+2">Private Sector banks:</font>
        <a href="<?php echo $cat_link=getSubCat(3,3)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/hdfc-bank-logo.jpg" width="150" alt="">
                <h2>HDFC bank</h2>
                <p> We Understand Your World</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(3,4)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/axis-logo.jpg" width="150" alt="">
                <h2>Axis Bank</h2>
                <p>Badhti Ka Naam Zindagi</p>
            </div>
        </a>
        <font size="+2">Real Estates:</font>
        <a href="<?php echo $cat_link=getSubCat(3,5)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/99acers-logo.jpg" width="150" alt="">
                <h2>99acres</h2>
                <p>India’s No. 1 property portal</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(3,6)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/magicbricks-logo.png" width="150" alt="">
                <h2>MagicBricks</h2>
                <p>India’s No. 1 property site</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(3,7)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/nobroker-logo.jpg" width="150" alt="">
                <h2>NoBroker</h2>
                <p>Rent,Buy,Sell</p>
                <p>Ab ki baar brokerage mat dena, NoBroker.com hai na</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(3,8)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/housing-logo.jpg" width="150" alt="">
                <h2>Housing</h2>
                <p>Look up!</p>
            </div>
        </a>

        <font size="+2">eCommerce Websites:</font>

        <a href="<?php echo $cat_link=getSubCat(3,9)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/amazon.jpg" width="150" alt="">
                <h2>Amazon</h2>
                <p>Sapno Ki Apni Dukaan.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(3,10)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/Flipkart-Logo.webp" width="150" alt="">
                <h2>Flipkart</h2>
                <p>Ab Har Wish Hogi Poori.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(3,11)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/snapdeal-logo.png" width="150" alt="">
                <h2>Snapdeal</h2>
                <p>Unbox Zindagi.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(3,12)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/Aliexpress.png" width="150" alt="">
                <h2>Aliexpress</h2>
                <p>Smarter Shopping, Better Living.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(3,13)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mas/Tatacliq.png" width="150" alt="">
                <h2>TataCliq</h2>
                <p>#New&Now.</p>
            </div>
        </a>

    </div>
</body>

</html>