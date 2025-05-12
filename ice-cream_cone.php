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
<?php include('connect_database/item_data.php');?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
    <link rel="stylesheet" type="text/css" href="css/all_items.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
</head>
<body>
    
    <div class="container my-container">
        <?php include('header.html')?>
        <div class="row my-row">
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im109['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im109['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im109['price']?>
                    </div>
                    
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="109" value="Add cart">
                                    </div>
                                </form>


                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im110['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im110['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im110['price']?>
                        </div>
                        <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="110" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im111['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im111['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im111['price']?>
                        </div>

                        <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="111" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im112['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im112['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im112['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="112" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im113['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im113['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im113['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="113" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im114['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im114['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im114['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="114" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im115['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im115['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im115['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="115" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im116['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im116['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im116['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="116" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im117['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im117['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im117['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="117" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im118['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im118['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im118['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="118" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im119['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im119['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im119['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="119" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im120['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im120['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im120['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="120" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im121['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im121['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im121['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="121" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im122['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im122['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im122['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="122" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im123['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im123['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im123['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="123" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im123['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im124['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im124['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="124" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im125['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im125['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im125['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="125" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im126['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im126['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im126['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="126" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im127['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im127['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im127['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="127" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im128['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im128['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im128['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="128" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im129['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im129['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im129['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="129" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im130['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im130['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im130['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="130" value="Add cart">
                                    </div>
                                </form>                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im131['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im131['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im131['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="131" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im132['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im132['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im132['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="132" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im133['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im133['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im133['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="133" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im133['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im134['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im134['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="134" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im135['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im135['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im135['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="135" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im136['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im136['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im136['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="136" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im137['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im137['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im137['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="137" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im138['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im138['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im138['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="138" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im139['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im139['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im139['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="139" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im140['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im140['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im140['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="140" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im141['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im141['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im141['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="141" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im142['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im142['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im142['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="142" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im143['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im143['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im143['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="143" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im144['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im144['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im144['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="144" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>





        </div>
    </div>
</body>
</html>
