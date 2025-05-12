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

                    
<img src="temp_image/<?=$im37['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im37['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im37['price']?>
                    </div>

                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="37" value="Add cart">
                                    </div>
                                </form>



                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im38['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im38['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im38['price']?>
                        </div>
                        
                        
                        <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="38" value="Add cart">
                                    </div>
                                </form>

                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im39['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im39['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im39['price']?>
                        </div>

                        <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="39" value="Add cart">
                                    </div>
                                </form>

                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im40['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im40['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im40['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="40" value="Add cart">
                                    </div>
                                </form>


                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im41['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im41['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im41['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="41" value="Add cart">
                                    </div>
                                </form>

                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im42['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im42['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im42['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="42" value="Add cart">
                                    </div>
                                </form>

                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im43['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im43['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im43['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="43" value="Add cart">
                                    </div>
                                </form>

                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im44['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im44['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im44['price']?>
                    </div>
<form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="44" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im45['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im45['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im45['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="45" value="Add cart">
                                    </div>
                                </form>

                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im46['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im46['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im46['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="46" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im47['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im47['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im47['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="47" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im48['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im48['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im48['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="48" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im49['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im49['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im49['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="49" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im50['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im50['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im50['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="50" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im51['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im51['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im51['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="51" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im51['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im52['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im52['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="52" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im53['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im53['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im53['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="53" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im54['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im54['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im54['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="54" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im55['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im55['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im55['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="55" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im56['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im56['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im56['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="56" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im57['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im57['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im57['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="57" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im58['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im58['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im58['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="58" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im59['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im59['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im59['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="59" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im60['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im60['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im60['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="60" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im61['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im61['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im61['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="61" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im61['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im62['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im62['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="62" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im63['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im63['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im63['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="63" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im64['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im64['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im64['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="64" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im65['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im65['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im65['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="65" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im66['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im66['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im66['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="66" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im67['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im67['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im67['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="67" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im68['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im68['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im68['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="68" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im69['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im69['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im69['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="69" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im70['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im70['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im70['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="70" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im71['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im71['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im71['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="71" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im72['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im72['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im72['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="72" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>





        </div>
    </div>
</body>
</html>
