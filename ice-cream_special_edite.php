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

                    
<img src="temp_image/<?=$im181['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im181['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im181['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 181
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im182['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im182['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im182['price']?>
                        </div>
                        <div class="id_number">
                        Database Id = 182
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im183['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im183['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im183['price']?>
                        </div>

                        <div class="id_number">
                        Database Id = 183
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im184['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im184['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im184['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 184
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im185['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im185['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im185['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 185
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im186['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im186['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im186['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 186
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im187['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im187['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im187['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 187
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im188['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im188['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im188['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 188
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im189['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im189['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im189['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 189
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im190['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im190['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im190['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 190
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im191['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im191['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im191['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 191
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im192['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im192['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im192['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 192
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im193['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im193['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im193['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 193
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im194['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im194['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im194['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 194
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im195['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im195['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im195['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 195
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im195['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im196['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im196['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 196
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im197['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im197['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im197['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 197
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im198['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im198['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im198['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 198
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im199['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im199['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im199['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 199
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im200['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im200['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im200['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 200
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im201['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im201['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im201['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 201
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im202['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im202['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im202['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 202
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im203['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im203['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im203['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 203
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im204['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im204['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im204['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 204
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im205['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im205['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im205['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 205
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im205['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im206['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im206['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 206
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im207['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im207['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im207['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 207
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im208['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im208['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im208['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 208
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im209['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im209['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im209['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 209
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im210['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im210['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im210['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 210
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im211['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im211['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im211['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 211
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im212['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im212['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im212['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 212
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im213['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im213['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im213['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 213
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im214['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im214['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im214['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 214
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im215['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im215['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im215['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 215
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im216['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im216['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im216['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 216
                    </div>
                </div>
            </div>





        </div>
    </div>
</body>
</html>
