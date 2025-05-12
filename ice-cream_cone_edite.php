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
                    <div class="id_number">
                        Database Id = 109
                    </div>
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
                        <div class="id_number">
                        Database Id = 110
                    </div>
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

                        <div class="id_number">
                        Database Id = 111
                    </div>
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
                    <div class="id_number">
                        Database Id = 112
                    </div>
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
                    <div class="id_number">
                        Database Id = 113
                    </div>
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
                    <div class="id_number">
                        Database Id = 114
                    </div>
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
                    <div class="id_number">
                        Database Id = 115
                    </div>
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
                    <div class="id_number">
                        Database Id = 116
                    </div>
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
                    <div class="id_number">
                        Database Id = 117
                    </div>
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
                    <div class="id_number">
                        Database Id = 118
                    </div>
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
                    <div class="id_number">
                        Database Id = 119
                    </div>
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
                    <div class="id_number">
                        Database Id = 120
                    </div>
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
                    <div class="id_number">
                        Database Id = 121
                    </div>
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
                    <div class="id_number">
                        Database Id = 122
                    </div>
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
                    <div class="id_number">
                        Database Id = 123
                    </div>
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
                    <div class="id_number">
                        Database Id = 124
                    </div>
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
                    <div class="id_number">
                        Database Id = 125
                    </div>
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
                    <div class="id_number">
                        Database Id = 126
                    </div>
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
                    <div class="id_number">
                        Database Id = 127
                    </div>
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
                    <div class="id_number">
                        Database Id = 128
                    </div>
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
                    <div class="id_number">
                        Database Id = 129
                    </div>
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
                    <div class="id_number">
                        Database Id = 130
                    </div>
                </div>
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
                    <div class="id_number">
                        Database Id = 131
                    </div>
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
                    <div class="id_number">
                        Database Id = 132
                    </div>
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
                    <div class="id_number">
                        Database Id = 133
                    </div>
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
                    <div class="id_number">
                        Database Id = 134
                    </div>
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
                    <div class="id_number">
                        Database Id = 135
                    </div>
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
                    <div class="id_number">
                        Database Id = 136
                    </div>
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
                    <div class="id_number">
                        Database Id = 137
                    </div>
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
                    <div class="id_number">
                        Database Id = 138
                    </div>
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
                    <div class="id_number">
                        Database Id = 139
                    </div>
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
                    <div class="id_number">
                        Database Id = 140
                    </div>
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
                    <div class="id_number">
                        Database Id = 141
                    </div>
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
                    <div class="id_number">
                        Database Id = 142
                    </div>
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
                    <div class="id_number">
                        Database Id = 143
                    </div>
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
                    <div class="id_number">
                        Database Id = 144
                    </div>
                </div>
            </div>





        </div>
    </div>
</body>
</html>
