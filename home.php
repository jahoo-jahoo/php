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
    


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
    <link rel="stylesheet" type="text/css" href="css/home_2.css">
    <link rel="stylesheet" type="text/css" href="css/cart_cart.css">
    

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
    <div class="row my-row" id="col_1">
        <div class="my-col col-md-5 col-sm-5 col-xs-6" id="col_2">
            
        </div>
        <div class="my-col col-md-7 col-sm-12 col-xs-6" id="col_5">
            <div class="navegate">
                <nav>

                            <a href="home.php"><button class="btn">HOME</button></a>
                        <div class="dropdown1">
                            <span><button class="btn">CATEGORY</button></span>
                            <div class="dropdown1-content">
                                <p><a href="ice-cream_kotthu.php" target="_blank">kottu ice-cream</a></p>
                                <p><a href="ice-cream_juice.php" target="_blank">juice ice-cream</a></p>
                                <p><a href="ice-cream_fruit.php" target="_blank">Fruit ice-cream</a></p>
                                <p><a href="ice-cream_cone.php" target="_blank">cone ice-cream</a></p>
                                <p><a href="ice-cream_mix.php" target="_blank">mix ice-cream</a></p>
                                <p><a href="ice-cream_special.php" target="_blank">special ice-cream</a></p>
                                
                            </div>
                        </div>
                       
                       
                            <a href="items.php"> <button class="btn">ITEMS</button></a>
                            <a href="about.php"> <button class="btn">ABOUT US</button></a>
                            <a href="contact.php"><button class="btn">CONTACT</button></a>
                            

                            
                            <div class="dropdown">
                            <img src="image/icon/icon1.png" width="40px" height="40px" id="icon1"> 
                            <div class="dropdown-content">
                                <a href="home.php" id="lin_1"> HOME </a><br>
                                <a href="about.php" id="lin_1"> ABOUT US </a><br>
                                <a href="contact.php" id="lin_1"> CONTACT </a><br>
                                <a href="items.php" id="lin_1"> ITEMS </a><br>
                                <br>
                                <div class="dropdown1">
                                    <h4 id="he_4"> Category&nbsp;&#8594</h4><br>
                                    <div class="dropdown1-content">
                                        <a href="ice-cream_kotthu.php" id="lin_1">kottu ice-cream</a><br>
                                        <a href="ice-cream_juice.php" id="lin_1">juice ice-cream</a><br>
                                        <a href="ice-cream_fruit.php" id="lin_1">Fruit ice-cream</a><br>
                                        <a href="ice-cream_cone.php" id="lin_1">cone ice-cream</a><br>
                                        <a href="ice-cream_mix.php" id="lin_1">mix ice-cream</a><br>
                                        <a href="ice-cream_special.php" id="lin_1">special ice-cream</a><br>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                            </div>
                </nav>
            </div>
        </div>
    
    </div>
    <div class="row my-row">
        <div class="my-col col-md-5 col-sm-5 col-xs-12" id="col_4">
            <img src="image/logo/frozen.png" style="height: 120px;margin-top: 60px;">
                <p class="cov-title">FROZEN</p>
                <p><b style="font-size:20px">DOWN SOUTH'S FIRST ROLLED ICE CREAMERY</b><br>
                We are an innovative ice cream shop which serves
                fresh made-to-order ice cream KOTTU. Our process will
                change the way that you think about ice cream. Fresh
                ingredients are blended and rapidly frozen before your eyes.
                Your customized ice cream is ready in just seconds. Each KOTTU 
                of ice cream is a unique creation to please each customer taste. <br>
                we are reinventing the ultimate ice cream experience..!
                </p>

        </div>
        <div class="my-col col-md-7 col-sm-12 col-xs-12" id="col_3">
                        <div class="slideshow-container">

                                <div class="mySlides fade" style="text-align: center;">
                                
                                <img src="image/slideshow/slide1.png" style="width:60%">
                                <div class="text">Best Ice Cream in the Valley, Perfect</div>
                                </div>

                                <div class="mySlides fade" style="text-align: center;">
                                
                                <img src="image/slideshow/slide2.png" style="width:60%">
                                <div class="text">Best Ice Cream in the Valley, Perfect</div>
                                </div>

                                <div class="mySlides fade" style="text-align: center;">
                                
                                <img src="image/slideshow/slide3.png" style="width:60%">
                                <div class="text">Best Ice Cream in the Valley, Perfect</div>
                                </div>

                                </div>
                                <br>

                                <div id="do_t" style="text-align:center">
                                <span class="dot"></span> 
                                <span class="dot"></span> 
                                <span class="dot"></span> 
                                </div>

                                

                        </div>
                        
        </div>
        <div class="row my-row">
            <div class="my-col col-md-4 col-sm-4 col-xs-4" id="col_7">
                <h3>favourite</h3>
                <hr>
            </div>
        </div>
        <div class="row my-row">
            <div class="my-col col-md-2 col-sm-2 col-xs-2" id="layer_1">
                <h1>OPEN <h1><h5> 8:00 AM</h5><h4>TO</h4><h5>9:00 PM</h5>
            </div>
            <div class="my-col col-md-10 col-sm-10 col-xs-10" id="layer_2">
                <img src="image/ice-cream/frozen1.jpeg" id="f_img1">
                <img src="image/ice-cream/frozen2.jpg" id="f_img1">
                <img src="image/ice-cream/frozen3.jpg" id="f_img1">
                <img src="image/ice-cream/frozen4.jpg" id="f_img1">
            </div>
        </div>

        <div class="row my-row">
            <div class="my-col col-md-12 col-sm-12 col-xs-12" id="col_8">
                <p><b style="font-size:20px">DOWN SOUTH'S FIRST ROLLED ICE CREAMERY</b><br>
                We are an innovative ice cream shop which serves
                fresh made-to-order ice cream KOTTU. Our process will
                change the way that you think about ice cream. Fresh
                ingredients are blended and rapidly frozen before your eyes.
                Your customized ice cream is ready in just seconds. Each KOTTU 
                of ice cream is a unique creation to please each customer taste. <br>
                we are reinventing the ultimate ice cream experience..!
                </p>
            </div>
            <div class="my-col col-md-12 col-sm-12 col-xs-12">
                <h1 id="logo_txt">FROZEN-ICECREAM</h1>
            </div>

        </div>
        <div class="row my-row">
            <div class="my-col col-md-12 col-sm-12 col-xs-12">
                <a href="category.php"><h2 class="head_2">Store</h2></a>
            </div>
            <div class="my-col col-md-12 col-sm-12 col-xs-12" id="layer_3">
            <a href="category.php">
                <img src="image/ice-cream/frozen5.jpg" id="f_img2">
                <img src="image/ice-cream/frozen6.jpg" id="f_img2">
                <img src="image/ice-cream/frozen7.jpeg" id="f_img2">
                <img src="image/ice-cream/frozen8.jpg" id="f_img2">
                <img src="image/ice-cream/frozen9.jpg" id="f_img2"></a>
                
            </div>
        </div>
        

</div>
</div>
 



<script>
                                var slideIndex = 0;
                                showSlides();

                                function showSlides() {
                                var i;
                                var slides = document.getElementsByClassName("mySlides");
                                var dots = document.getElementsByClassName("dot");
                                for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";  
                                }
                                slideIndex++;
                                if (slideIndex > slides.length) {slideIndex = 1}    
                                for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex-1].style.display = "block";  
                                dots[slideIndex-1].className += " active";
                                setTimeout(showSlides, 3000); // Change image every 2 seconds
                                }
</script>

<?php include('footer.html');?>
</body>
</html>