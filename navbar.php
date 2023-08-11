<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>...EYEFIND...</title>
    <link rel="stylesheet" type="text/css" href="/gtavweb/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/gtavweb/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>


//searchbar
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  bottom: 32px;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: none;
}

</style>
</head>

<body>

<div class="navbar">
    <div class="navbar-stuff">
             <div>
                <p style="text-align:center; font-size: 20px;margin-top: 10px; vertical-align:text-top;"></p>
                <a href="/gtavweb/index.php" title="">
                    <img class="logo" src="/gtavweb/img/eyefind-logo.png" alt="Eyefind Logo">
                </a>

                    <div class="weather">
                     
                        <div style="display: inline-block;">
                            <p style="font-size: 13px; margin-top: 5px;">Mumbai</p>
                            <?php echo date("d/m/Y");  ?>
                            <p style="text-align: right; font-size: 25px;margin-top: 10px;">SUNDAY</p>
                            <?php
                            date_default_timezone_set('Asia/Kolkata');
                             echo date("h:i")?>
                         </div>
                            <img src="/gtavweb/img/sun.png" alt="">
                    </div>
            </div>

<!--search bar-->
<!--<?
//include 'gtawebdb/searchbar.php';
?>
<form class="example" action="gtavweb/.php" >
  <input type="text" placeholder="Search.." name="search">
  <button type="submit" onSubmit="cleartext();"><i class="fa fa-search"></i></button>
</form>-->
     

 

   
    <div class="choose">
        <div class="which">
            <a href="/gtavweb/category/mae.php" title="">
                <div>
                    <img src="/gtavweb/img/navbar/phone.png" alt="MAE">
                    <p>MEDIA AND
                        <br> ENTERTAINMENT</p>
                </div>
            </a>
            <a href="/gtavweb/category/fad.php" title="">
                <div style="border-left: 1px solid #dadada">
                    <img src="/gtavweb/img/navbar/food.png" alt="FAD">
                    <p>FOOD AND
                        <br> DRINK</p>
                </div>
            </a>
            <a href="/gtavweb/category/mas.php" title="">
                <div style="border-left: 1px solid #dadada">
                    <img src="/gtavweb/img/navbar/coin.png" alt="MAS">
                    <p>MONEY AND
                        <br> SERVICES</p>
                </div>
            </a>
            <a href="/gtavweb/category/tat.php" title="">
                <div style="border-left: 1px solid #dadada">
                    <img src="/gtavweb/img/navbar/plane.png" alt="TAT">
                    <p>TRAVEL AND
                        <br> TRANSPORT</p>
                </div>
            </a>
            <a href="/gtavweb/category/fah.php" title="">
                <div style="border-left: 1px solid #dadada">
                    <img src="/gtavweb/img/navbar/bag.png" alt="FAH">
                    <p>FASHION AND
                        <br> HEALTH</p>
                </div>
            </a>
        </div>
    </div>
</div>
</div>
</body>
</html>
