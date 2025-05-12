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
                    <div class="id_number">
                        Database Id = 37
                    </div>
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
                        <div class="id_number">
                        Database Id = 38
                    </div>
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

                        <div class="id_number">
                        Database Id = 39
                    </div>
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
                    <div class="id_number">
                        Database Id = 40
                    </div>
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
                    <div class="id_number">
                        Database Id = 41
                    </div>
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
                    <div class="id_number">
                        Database Id = 42
                    </div>
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
                    <div class="id_number">
                        Database Id = 43
                    </div>
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
                    <div class="id_number">
                        Database Id = 44
                    </div>
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
                    <div class="id_number">
                        Database Id = 45
                    </div>
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
                    <div class="id_number">
                        Database Id = 46
                    </div>
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
                    <div class="id_number">
                        Database Id = 47
                    </div>
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
                    <div class="id_number">
                        Database Id = 48
                    </div>
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
                    <div class="id_number">
                        Database Id = 49
                    </div>
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
                    <div class="id_number">
                        Database Id = 50
                    </div>
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
                    <div class="id_number">
                        Database Id = 51
                    </div>
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
                    <div class="id_number">
                        Database Id = 52
                    </div>
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
                    <div class="id_number">
                        Database Id = 53
                    </div>
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
                    <div class="id_number">
                        Database Id = 54
                    </div>
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
                    <div class="id_number">
                        Database Id = 55
                    </div>
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
                    <div class="id_number">
                        Database Id = 56
                    </div>
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
                    <div class="id_number">
                        Database Id = 57
                    </div>
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
                    <div class="id_number">
                        Database Id = 58
                    </div>
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
                    <div class="id_number">
                        Database Id = 59
                    </div>
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
                    <div class="id_number">
                        Database Id = 60
                    </div>
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
                    <div class="id_number">
                        Database Id = 61
                    </div>
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
                    <div class="id_number">
                        Database Id = 62
                    </div>
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
                    <div class="id_number">
                        Database Id = 63
                    </div>
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
                    <div class="id_number">
                        Database Id = 64
                    </div>
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
                    <div class="id_number">
                        Database Id = 65
                    </div>
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
                    <div class="id_number">
                        Database Id = 66
                    </div>
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
                    <div class="id_number">
                        Database Id = 67
                    </div>
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
                    <div class="id_number">
                        Database Id = 68
                    </div>
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
                    <div class="id_number">
                        Database Id = 69
                    </div>
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
                    <div class="id_number">
                        Database Id = 70
                    </div>
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
                    <div class="id_number">
                        Database Id = 71
                    </div>
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
                    <div class="id_number">
                        Database Id = 72
                    </div>
                </div>
            </div>





        </div>
    </div>
</body>
</html>
