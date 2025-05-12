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

                    
<img src="temp_image/<?=$im145['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im145['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im145['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="145" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im146['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im146['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im146['price']?>
                        </div>
                        <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="146" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im147['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im147['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im147['price']?>
                        </div>

                        <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="147" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im148['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im148['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im148['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="148" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im149['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im149['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im149['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="149" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im150['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im150['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im150['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="150" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im151['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im151['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im151['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="151" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im152['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im152['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im152['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="152" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im153['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im153['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im153['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="153" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im154['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im154['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im154['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="154" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im155['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im155['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im155['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="155" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im156['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im156['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im156['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="156" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im157['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im157['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im157['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="157" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im158['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im158['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im158['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="158" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im159['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im159['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im159['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="159" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im159['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im160['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im160['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="160" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im161['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im161['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im161['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="161" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im162['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im162['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im162['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="162" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im163['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im163['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im163['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="163" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im164['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im164['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im164['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="164" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im165['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im165['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im165['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="165" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im166['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im166['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im166['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="166" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im167['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im167['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im167['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="167" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im168['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im168['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im168['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="168" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im169['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im169['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im169['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="169" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im169['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im170['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im170['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="170" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im171['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im171['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im171['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="171" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im172['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im172['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im172['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="172" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im173['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im173['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im173['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="173" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im174['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im174['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im174['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="174" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im175['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im175['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im175['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="175" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im176['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im176['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im176['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="176" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im177['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im177['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im177['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="177" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im178['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im178['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im178['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="178" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im179['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im179['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im179['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="179" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im180['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im180['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im180['price']?>
                    </div>
                    <form action="connect_database/cart.php" method="POST">
                                    <input type="number" name="quen" placeholder="0" class="but_1" required/>
                                    <br><br>
                                    <div class="car">
                                        <input type="submit" name="180" value="Add cart">
                                    </div>
                                </form>
                </div>
            </div>





        </div>
    </div>
</body>
</html>
