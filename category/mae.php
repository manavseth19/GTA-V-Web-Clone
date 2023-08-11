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
        <h2 style="font-size: 20px; margin-bottom: 20px;">Results for: MEDIA AND ENTERTAINMENT</h2>
        <!--<a href="https://www.google.com/intl/en_in/gmail/about/" target="_blank" >-->

             <font size="+2">SOCIAL MEDIA:</font>

            <a href="<?php echo $cat_link=getSubCat(1,1)?>" target="_blank" > 
             <div class="link">
               <img src="/gtavweb/img/links/mae/logo-gmail.png" width="150" alt="">
               <!-- <img src=$cat_link width="150" alt="">-->
                <h2>Gmail</h2>
                <p>Get more done with Gmail</p>
                <p>Now more secure, smarter and easier to use—helping you save time and do more with your inbox.</p>
            </div>
        </a>

         <a href="<?php echo $cat_link=getSubCat(1,6)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mae/facebook-logo.png" width="150" alt="">
                <h2>Facebook</h2>
                <p>It's free and always will be.</p>
            </div>
        </a>


        <a href="<?php echo $cat_link=getSubCat(1,8)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mae/twitter.png" width="150" alt="">
                <h2>Twitter</h2>
                <p>If it's happening anywhere, it's happening on Twitter.</p>
            </div>
        </a>

         <a href="<?php echo $cat_link=getSubCat(1,11)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mae/tumblr-logo.png" width="150" alt="">
                <h2>Tumblr</h2>
                <p>Come for what you love.Stay for what you discover.</p>
            </div>
        </a>


        <a href="<?php echo $cat_link=getSubCat(1,2)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mae/WhatsApp.logo.png" height="" width="160" alt="">
                <h2>WhatsApp Web</h2>
                <p>Use WhatsApp on your computer.</p>
            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(1,3)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mae/Instagram-logo.jpg" width="150" alt="">
                <h2>Instagram</h2>
                <p>Capture and share the world's moment</p>
            </div>
        </a>

        <font size="+2">Video Hosting Site:</font>

        

        <a href="<?php echo $cat_link=getSubCat(1,4)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mae/netflix-logo.jpg" width="150" alt="">
                <h2>Netflix</h2>
                <p>See what's next</p>
                <p>Netflix and Chill</p>

            </div>
        </a>
        <a href="<?php echo $cat_link=getSubCat(1,9)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mae/hotstar-logo.png" width="150" alt="">
                <h2>Hotstar</h2>
                <p>Na life rukegi, na game rukega</p>
            </div>
        </a>

         <a href="<?php echo $cat_link=getSubCat(1,5)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mae/youtube-logo.png" width="150" alt="">
                <h2>Youtube</h2>
                <p>Broadcast Yourself</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(1,7)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mae/amazon-logo.jpg" width="150" alt="">
                <h2>Prime Video</h2>
                <p>India ka naya prime time</p>
            </div>
        </a>

        <a href="<?php echo $cat_link=getSubCat(1,10)?>" target="_blank">
            <div class="link">
                <img src="/gtavweb/img/links/mae/Zee5-logo.png" width="150" alt="">
                <h2>Zee5</h2>
                <p>Atrangi Dekho. Atrangi Raho</p>
            </div>
        </a>
        
    </div>
</body>

</html>