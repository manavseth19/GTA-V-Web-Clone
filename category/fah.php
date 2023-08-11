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
        <h2 style="font-size: 20px; margin-bottom: 20px;">Results for: FASHION AND HEALTH</h2>
        <font size="+2">Fashion Websites:</font>
        <a href="<?php echo $cat_link=getSubCat(5,1)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/Zara_Logo.png" width="150" alt="">
                <h2>Zara</h2>
                <p></p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(5,2)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/mango.jfif" width="150" alt="">
                <h2>Mango</h2>
                <p></p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(5,3)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/nike-logo.png" width="150" alt="">
                <h2>Nike</h2>
                <p>Just do it.</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(5,4)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/myntra.webp" width="150" alt="">
                <h2>Myntra</h2>
                <p>Iss baar sirf tyohar manao, shopping Myntra pe chod do.</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(5,5)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/H&M.png" width="150" alt="">
                <h2>H&M</h2>
                <p>Fashion and quality at the best price.</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(5,6)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/Nykaa.jfif" width="150" alt="">
                <h2>Nykaa</h2>
                <p>Your beauty, Our passion.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(5,7)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/firstcry.png" width="150" alt="">
                <h2>Firstcry</h2>
                <p>Bachchon ki shopping bachchon ka khel nahin.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(5,8)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/amazon-fashion-logo.png" width="150" alt="">
                <h2>Amazon Fashion</h2>
                <p>Apni Dukaan.</p>
            </div>
        </a>


        <a href="<?php echo $cat_link=getSubCat(5,9)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/flipkart-fashion-logo.png" width="150" alt="">
                <h2>Flipkart Fashion</h2>
                <p>Itna mein itnaaa milega!</p>
            </div>
        </a>


        <a href="<?php echo $cat_link=getSubCat(5,10)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/ajio.jpg" width="150" alt="">
                <h2>Ajio</h2>
                <p>Doubt is out.</p>
            </div>
        </a>

        <font size="+2">Health Websites:</font>

        <a href="<?php echo $cat_link=getSubCat(5,12)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/1mg-logo-.png" width="150" alt="">
                <h2>1mg</h2>
                <p>One App you should always have.</p>
            </div>
        </a>


        <a href="<?php echo $cat_link=getSubCat(5,13)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/webmd_logo.png" width="150" alt="">
                <h2>Webmd</h2>
                <p>Better infomation, Better health.</p>
            </div>
        </a>


        <a href="<?php echo $cat_link=getSubCat(5,14)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/Who_logo.png" width="150" alt="">
                <h2>W.H.O</h2>
                <p>Health for all.</p>
            </div>
        </a>


        <a href="<?php echo $cat_link=getSubCat(5,15)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/Patanjali-logo.jpg" width="150" alt="">
                <h2>Patanjali</h2>
                <p>Prakriti ka Ashirwad</p>
            </div>
        </a>


        <a href="<?php echo $cat_link=getSubCat(5,16)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/medlife-logo.png" width="150" alt="">
                <h2>Medlife</h2>
                <p>Obsessed with health.</p>
            </div>
        </a>


        <a href="<?php echo $cat_link=getSubCat(5,17)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fah/pharmeasy.png" width="150" alt="">
                <h2>Pharmeasy</h2>
                <p>Take it easy Pharmeasy.</p>
            </div>
        </a>

    </div>
</body>

</html>