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
    
    
<html >
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
    <link rel="stylesheet" type="text/css" href="css/items1.css">
    <link rel="stylesheet" type="text/css" href="css/cart_cart.css">

</head>
<body>
    <div class="container my-container">
        <?php include('header.html');?>

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
            <div class="my-col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--banner-->

            </div>
    </div>
   <h1>kotthu ice-cream</h1>
   <?php include('ice-cream_kotthu.php')?>
   <h1>juice ice-cream</h1>
   <?php include('ice-cream_juice.php')?>
   <h1>Fruit ice-cream</h1>
   <?php include('ice-cream_fruit.php')?>
   <h1>cone ice-cream</h1>
   <?php include('ice-cream_cone.php')?>
   <h1>mix ice-cream</h1>
   <?php include('ice-cream_mix.php')?>
   <h1>special ice-cream</h1>
   <?php include('ice-cream_special.php')?>
    

    </div>
    <?php include('footer.html')?>
</body>
</html>