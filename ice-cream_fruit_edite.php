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

                    
<img src="temp_image/<?=$im73['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im73['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im73['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 73
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im74['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im74['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im74['price']?>
                        </div>
                        <div class="id_number">
                        Database Id = 74
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
                <div class="box">
                        <div class="pic">
<img src="temp_image/<?=$im75['image']?>" id="pic">
                        </div>
                        <div class="name">
<?=$im75['item_name']?>
                        </div>
                        <div class="price">
Rs.<?=$im75['price']?>
                        </div>

                        <div class="id_number">
                        Database Id = 75
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im76['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im76['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im76['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 76
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im77['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im77['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im77['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 77
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im78['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im78['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im78['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 78
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im79['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im79['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im79['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 79
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im80['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im80['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im80['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 80
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im81['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im81['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im81['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 81
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im82['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im82['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im82['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 82
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im83['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im83['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im83['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 83
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im84['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im84['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im84['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 84
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im85['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im85['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im85['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 85
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im86['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im86['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im86['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 86
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im87['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im87['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im87['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 87
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im87['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im88['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im88['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 88
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im89['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im89['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im89['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 89
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im90['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im90['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im90['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 90
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im91['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im91['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im91['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 91
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im92['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im92['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im92['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 92
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im93['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im93['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im93['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 93
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im94['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im94['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im94['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 94
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im95['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im95['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im95['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 95
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im96['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im96['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im96['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 96
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im97['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im97['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im97['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 97
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im97['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im98['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im98['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 98
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im99['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im99['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im99['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 99
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im100['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im100['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im100['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 100
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im101['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im101['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im101['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 101
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im102['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im102['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im102['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 102
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im103['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im103['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im103['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 103
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im104['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im104['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im104['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 104
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im105['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im105['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im105['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 105
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im106['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im106['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im106['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 106
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im107['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im107['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im107['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 107
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 my-col">
            <div class="box">
                    <div class="pic">

                    
<img src="temp_image/<?=$im108['image']?>" id="pic">
                    
                    </div>
                    <div class="name">
                    
<?=$im108['item_name']?>
     
                    </div>
                    <div class="price">
Rs.<?=$im108['price']?>
                    </div>
                    <div class="id_number">
                        Database Id = 108
                    </div>
                </div>
            </div>





        </div>
    </div>
</body>
</html>
