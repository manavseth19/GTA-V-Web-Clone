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
        <h2 style="font-size: 20px; margin-bottom: 20px;">Results for: FOOD AND DRINKS</h2>

         <font size="+2">Food Delivery Websites:</font>

        <a href= "<?php echo $cat_link=getSubCat(2,1)?>" target="_blank">
            <div class="link">  
                <img src="/gtavweb/img/links/fad/swiggy-logo.jpg" width="150" alt="">
                <h2>Swiggy</h2>
                <p>Karo, phir jo chahe Karo!</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(2,2)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/Zomato_logo.png" width="150" alt="">
                <h2>Zomato</h2>
                <p>Discover great places to eat around you.</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(2,3)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/Uber_eats_logo.jpg" width="150" alt="">
                <h2>Ubereats</h2>
                <p>Get the food you want.</p>
            </div>
        </a>
       

        <a href="<?php echo $cat_link=getSubCat(2,5)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/faasos.png" width="150" alt="">
                <h2>Faasos</h2>
                <p>We Got Your Food.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(2,6)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/dominos_logo.png" width="150" alt="">
                <h2>Domino's</h2>
                <p>Dil, Dosti, Domino's.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(2,7)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/pizzahut.png" width="150" alt="">
                <h2>Pizza Hut</h2>
                <p>No One Outpizzas the Hut.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(2,8)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/box8-logo.png" width="150" alt="">
                <h2>Box8</h2>
                <p>We only serve food that we love to eat.</p>
            </div>
        </a>

         <font size="+2">Grocery Delivery Websites:</font>

         <a href="<?php echo $cat_link=getSubCat(2,4)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/dunzo-logo.png" width="150" alt="">
                <h2>Dunzo</h2>
                <p>Save the excuses and time.The better way to get things done,just Dunzo it!</p>
            </div>
        </a>

         <a href="<?php echo $cat_link=getSubCat(2,9)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/Big-Basket.jpg" width="150" alt="">
                <h2>Bigbasket</h2>
                <p>India's largest online supermarket.</p>
                <p>Beat the heat,shop at home,save at home!</p>
            </div>
        </a>

         <a href="<?php echo $cat_link=getSubCat(2,10)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/grofers_logo.png" width="150" alt="">
                <h2>Grofers</h2>
                <p>We get it.</p>
            </div>
        </a>

         <a href="<?php echo $cat_link=getSubCat(2,11)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/naturebasket.jpg" width="150" alt="">
                <h2>Nature's Basket</h2>
                <p>World Food store.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(2,12)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/amazon-pantry.png" width="150" alt="">
                <h2>Amazon Pantry</h2>
                <p>Everyday essentials delivered to you.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(2,13)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/dmart.jpg" width="150" alt="">
                <h2>Dmart</h2>
                <p>Daily Discounts Daily Savings.</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(2,14)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/fad/Big_Bazaar_Logo.png" width="150" alt="">
                <h2>Big Bazaar</h2>
                <p>Isse Sasta Aur Accha Kahin Nahin.</p>
            </div>
        </a>

    </div>
</body>

</html>