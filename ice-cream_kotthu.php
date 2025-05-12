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

                    
<img src="temp_image/<?=$im['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="1" value="Add cart">
                                    </div>
                                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im2['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im2['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im2['price']?>
                        </div>
                        <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="2" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im3['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im3['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im3['price']?>
                        </div>

                        <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="3" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im4['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im4['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im4['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="4" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im5['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im5['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im5['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="5" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im6['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im6['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im6['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="6" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im7['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im7['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im7['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="7" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im8['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im8['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im8['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="8" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im9['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im9['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im9['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="9" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im10['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im10['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im10['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="10" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im11['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im11['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im11['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="11" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im12['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im12['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im12['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="12" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im13['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im13['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im13['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="13" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im14['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im14['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im14['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="14" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im15['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im15['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im15['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="15" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im16['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im16['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im16['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="16" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im17['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im17['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im17['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="17" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im18['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im18['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im18['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="18" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im19['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im19['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im19['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="19" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im20['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im20['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im20['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="20" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im21['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im21['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im21['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="21" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im22['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im22['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im22['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="22" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im23['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im23['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im23['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="23" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im24['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im24['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im24['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="24" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im25['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im25['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im25['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="25" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im26['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im26['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im26['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="26" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im27['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im27['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im27['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="27" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im28['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im28['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im28['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="28" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im29['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im29['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im29['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="29" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im30['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im30['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im30['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="30" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im31['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im31['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im31['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="31" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im32['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im32['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im32['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="32" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im33['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im33['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im33['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="33" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im34['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im34['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im34['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="34" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im35['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im35['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im35['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="35" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im36['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im36['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im36['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="36" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>



        </div>
    </div>
</body>
</html>