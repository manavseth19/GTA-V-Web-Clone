<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>...EYEFIND... </title>
    <link rel="stylesheet" type="text/css" href="../gtavweb/css/reset.css">
    <link rel="stylesheet" type="text/css" href="../gtavweb/css/main.css">
   
</head>

<body>
    <?php include 'navbar.php';
    include '../gtavweb/webdb/Database.php';
    ?>
    <div class="startpage">
                 
        <div class="featured">
            <h2>EYEFIND FEATURED WEBSITES:</h2>
            <h2>*MEDIA AND ENTERTAINMENT*</h2>

          <a href="<?php echo $cat_link=getSubCat(1,8)?>" target="_blank">
            <img src="/gtavweb/img/links/mae/twitter.png" width="150" height="139" alt="">

            <a href="<?php echo $cat_link=getSubCat(1,3)?>" target="_blank">
            <img src="/gtavweb/img/links/mae/Instagram-logo.jpg" width="150" height="139" alt="">

                <a href="<?php echo $cat_link=getSubCat(1,4)?>" target="_blank">
               <img src="/gtavweb/img/links/mae/netflix-logo.jpg" width="150" height="139" alt="">

                <a href="<?php echo $cat_link=getSubCat(1,7)?>" target="_blank">
               <img src="/gtavweb/img/links/mae/amazon-logo.jpg" width="150" height="139" alt="">

                <h2>*FOOD AND DRINK*</h2>

                <a href="<?php echo $cat_link=getSubCat(2,2)?>" target="_blank">
                    <img src="/gtavweb/img/links/fad/Zomato_logo.png" width="150" height="139" alt="">

                    <a href="<?php echo $cat_link=getSubCat(2,3)?>" target="_blank">
                        <img src="/gtavweb/img/links/fad/Uber_eats_logo.jpg" width="150" height="139" alt="">

                        <a href="<?php echo $cat_link=getSubCat(2,9)?>" target="_blank">
                             <img src="/gtavweb/img/links/fad/Big-Basket.jpg" width="150" height="139" alt="">

                             <a href="<?php echo $cat_link=getSubCat(2,4)?>" target="_blank">
                                <img src="/gtavweb/img/links/fad/dunzo-logo.png" width="150" height="139" alt="">

                <h2>*MONEY AND SERVICES*</h2>

                <a href="<?php echo $cat_link=getSubCat(3,1)?>" target="_blank">
                     <img src="/gtavweb/img/links/mas/sbi-logo.png" width="150" alt="">


                       <a href="<?php echo $cat_link=getSubCat(3,3)?>" target="_blank">
                           <img src="/gtavweb/img/links/mas/hdfc-bank-logo.jpg" width="150" height="139" alt="">

                            <a href="<?php echo $cat_link=getSubCat(3,8)?>" target="_blank">
                                 <img src="/gtavweb/img/links/mas/housing-logo.jpg" width="150" height="139" alt="">

                                     <a href="<?php echo $cat_link=getSubCat(3,9)?>" target="_blank">
                                        <img src="/gtavweb/img/links/mas/amazon.jpg" width="150" height="139" alt="">


               <h2>*TRAVEL AND TRANSPORT*</h2>   

            <a href="<?php echo $cat_link=getSubCat(4,2)?>" target="_blank">
            <img src="/gtavweb/img/links/tat/uber-logo.jpg" width="150" height="139" alt="">   

            <a href="<?php echo $cat_link=getSubCat(4,4)?>" target="_blank">
                 <img src="/gtavweb/img/links/tat/makemytrip-logo.jpg" width="150" height="139" alt="">

                  <a href="<?php echo $cat_link=getSubCat(4,9)?>" target="_blank">
                     <img src="/gtavweb/img/links/tat/Airbnb.png" width="150" height="139" alt="">


            <h2>*FASHION AND HEALTH*</h2>

            <a href="<?php echo $cat_link=getSubCat(5,3)?>" target="_blank">
                <img src="/gtavweb/img/links/fah/nike-logo.png" width="150" height="139" alt="">

                 <a href="<?php echo $cat_link=getSubCat(5,8)?>" target="_blank">
                    <img src="/gtavweb/img/links/fah/amazon-fashion-logo.png" width="150" height="139" alt="">

                    <a href="<?php echo $cat_link=getSubCat(5,15)?>" target="_blank">
                        <img src="/gtavweb/img/links/fah/Patanjali-logo.jpg" width="150" height="139" alt="">

                        <a href="<?php echo $cat_link=getSubCat(5,17)?>" target="_blank">
                             <img src="/gtavweb/img/links/fah/pharmeasy.png" width="150" height="139" alt="">


    </div>
    </div>
</body>
</html>