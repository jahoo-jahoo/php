<?php
    
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];

    }
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
        $ip_address =$_SERVER['REMOTE_ADDR'];
    }


    ?>
<!--ip match to Email-->
    <?php
    $conn=mysqli_connect('localhost','root','','ice-cream');

    $que ="select * from ip_ad where ip='$ip_address'";
    $res=mysqli_query($conn,$que);
    $im=mysqli_fetch_assoc($res);

    
    
    if (!$im) {
        
        header("Location: login.php?firstlogin_please");
      }
    ?>
    
    
<?php 
include ('connect_database/check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>category</title>
    <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
    <link rel="stylesheet" type="text/css" href="css/category.css">
    <link rel="stylesheet" type="text/css" href="css/cart_cart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container my-container">
    
        <header>
                <?php include ('header.html')?>
        </header>

        <div class="row my-row">
        <div class="my-col col-md-6 col-sm-6 col-xs-6" id="col_6">
            <a href="connect_database/delect_ip.php" id="link_1"><img src="image/icon/icon1.jpg"  id="img_1">
            Logout</a>

        </div>
        <div class="my-col col-md-6 col-sm-6 col-xs-6" id="col_6">
        <div class="text_t1">
                <span>MYCART</span>
            <div class="text_t1-content">
                <h1 id="he_1">Cart Items</h1><?php include_once('cart_v.php')?>
            </div> 
            </div>

        </div>
        
    </div>

        <div class="row my-row">
            <div class="my-col col-lg-12 col-md-12 col-sm-12 col-xs-12" id="layer_1">
                <div class="my-col col-lg-12  col-md-12 col-sm-12 col-xs-12">
                    <img src="image/other/register_ice.png" id="img_1">Frozen ICE-CREAM
                </div>
            </div>
        </div>
        <div class="row my-row" id="row_1">
            <div class="my-col col-lg-4  col-md-4 col-sm-4 col-xs-6" id="layer_3">
                <a href="ice-cream_kotthu.php"><img src="image/ice-cream/ice-cream12.jpg" id="img_2"><div class="text">Kottu Ice-cream</div> </a>
            </div>
            <div class="my-col col-lg-4 col-md-4 col-sm-4 col-xs-6" id="layer_3">
                <a href="ice-cream_juice.php"><img src="image/ice-cream/ice-cream25.jpg" id="img_2"><div class="text">Juice Ice-cream </div></a>
            </div>
            <div class="my-col col-lg-4 col-md-4 col-sm-4 col-xs-6" id="layer_3">
                <a href="ice-cream_fruit.php"><img src="image/ice-cream/ice-cream9.jpg" id="img_2"><div class="text">Fruit Ice-cream </div></a>
            </div>
            <div class="my-col col-lg-4  col-md-4 col-sm-4 col-xs-6" id="layer_3">
                <a href="ice-cream_cone.php"><img src="image/ice-cream/frozen (1).jpeg" id="img_2"><div class="text">Cone Ice-cream </div></a>
            </div>
            <div class="my-col col-lg-4 col-md-4 col-sm-4 col-xs-6" id="layer_3">
                <a href="ice-cream_mix.php"><img src="image/ice-cream/ice-cream23.jpg" id="img_2"><div class="text">Mix Ice-cream</div></a>
            </div>
            <div class="my-col col-lg-4 col-md-4 col-sm-4 col-xs-6" id="layer_3">
                <a href="ice-cream_special.php"><img src="image/ice-cream/ice-cream26.jpg" id="img_2"><div class="text">Special Ice-cream </div></a>
            </div>
        </div>

        

           
        
            <?php include('footer1.html')?>
            
    
            </div> 
    

</body>
</html>