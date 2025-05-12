<!--<?php
    $myfile = fopen("$username.txt", "r");
    echo
    fread($myfile,filesize("&username.txt"));
    fclose($myfile);
    
?>-->
<!--ip connected online-->
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
    
    ?>
    
    



<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
    <link rel="stylesheet" type="text/css" href="css/index_home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

        <div class="container my-container">
                    <div class="row my-row">
                        <div class="col-md-9 col-sm-9 col-xs-9 my-col" id="f_row">
                            <div class="logo">
                                <img src="image/logo/Frozen.png" id="logo_image">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 my-col"  id="f_row">
                            <div class="dropdown">
                            <button id="lin"><img src="image/icon/e7.jpg" width="40px" height="40px" id="i_ii"></button>
                        
                            <div class="dropdown-content">
                                connect items
                            </div>
                            
                        </div>
                           
                    </div>
                        <div class="row my-row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <a href="index.php"><button id="bnt1">Logout</button></a>
                            </div>
                        </div>
            </div>
                <nav>
                    <div class="row my-row">
                        <div class="col-md-12 col-md-12 col-md-12 my-col">
                            <div class="row my-row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 my-col"  id="nav_b">
                                        <div class="nav_l">
                                            <a href="home_l.php" id="lin">HOME</a>
                                            
                                            <div class="dropdown">
                                                <button id="lin">ITEMS</button>
                                                <div class="dropdown-content">
                                                    <a href="#">Link 1</a>
                                                    <a href="#">Link 2</a>
                                                    <a href="#">Link 3</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <button id="lin">MENU</button>
                                                <div class="dropdown-content">
                                                    <a href="#">Link 1</a>
                                                    <a href="#">Link 2</a>
                                                    <a href="#">Link 3</a>
                                                </div>
                                            </div>
                                            
                                            <a href="about.php" id="lin">ABOUT</a>
                                            <a href="contact.php" id="lin">CONTACT</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </nav>
                
                    <div class="row my-row">
                        <div class="col-md-12 col-sm-12 col-xs-12 my-col" id="sli">






                                        <div class="slideshow-container">

                                        <div class="mySlides fade">
                                        <div class="numbertext">1 / 3</div>
                                        <img src="image/slideshow/fz (9).jpg" style="width:100%" id="ss">
                                        <div class="text">Frozen</div>
                                        </div>

                                        <div class="mySlides fade">
                                        <div class="numbertext">2 / 3</div>
                                        <img src="image/slideshow/fz (5).jpg" style="width:100%" id="ss">
                                        <div class="text">Frozen</div>
                                        </div>

                                        <div class="mySlides fade">
                                        <div class="numbertext">3 / 3</div>
                                        <img src="image/slideshow/fz (6).jpg" style="width:100%" id="ss">
                                        <div class="text">Frozen</div>
                                        </div>


                                        <div class="mySlides fade">
                                        <div class="numbertext">4 / 6</div>
                                        <img src="image/slideshow/fz (8).jpg" style="width:100%" id="ss">
                                        <div class="text">Frozen</div>
                                        </div>

                                        <div class="mySlides fade">
                                        <div class="numbertext">5 / 6</div>
                                        <img src="image/slideshow/fz (4).jpg" style="width:100%" id="ss">
                                        <div class="text">Frozen</div>
                                        </div>

                                        <div class="mySlides fade">
                                        <div class="numbertext">6 / 6</div>
                                        <img src="image/slideshow/fz (2).jpg" style="width:100%" id="ss">
                                        <div class="text">Frozen</div>
                                        </div>

                                        </div>
                                        <br>

                                        <div style="text-align:center">
                                        <span class="dot"></span> 
                                        <span class="dot"></span> 
                                        <span class="dot"></span> 

                                        <span class="dot"></span> 
                                        <span class="dot"></span> 
                                        <span class="dot"></span> 
                                        </div>





                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 my-col">
                            &nbsp;
                        </div>
                    <div class="row my-row">
                        <div class="colmd-12 col-sm-12 col-xs-12 my-col">
                            <div class="row my-row">
                                <div class="col my-col" id="te">
                                    <div class="sh">
                                        <img src="image/use/s1.jpg" id="sh1">
                                    </div>
                                </div>
                                <div class="col my-col" id="te1">
                                    <div class="layer4">
                                        <ul class="list1">
                                            <h2>Organization</h2></br>
                                            <li>Menu card</li>
                                            <li>Keep Order</li>
                                            <li>Special Price</li>
                                            <li>Our Special Pakage</li>
                                            <li>Discount</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-row">
                        <div class="col-md-12 col-sm-12 col-xs-12 my-col">
                            &nbsp;
                        </div>
                        <div class="col-md-12 col-sv-12 col-xs-12 my-col" id="fg"></br></br>
                            <h1 id="logo_txt">FROZEN-ICECREAM</h1></br></br>
                        </div>
                    </div>
                    <div class="row my-row">
                        <div class="col-md-12 col-sm-12 col-xs-12 my-col">
                        <marquee>
                            <?php
                                $con = mysqli_connect("localhost","root","","ice-cream");
                                $sql = "SELECT * FROM t_image WHERE id ";
                                $res = mysqli_query($con, $sql);

                                if (mysqli_num_rows($res) > 0){
                                    while ($images = mysqli_fetch_assoc($res)){
                                        ?>
                                        
                                        <img src="temp_image/<?=$images['img']?>" id="banner">
                            <?php } }?>
                            
                            </marquee>
                        </div>
                    </div>
                    <div class="row my-row">
                        <div class="colmd-12 col-sm-12 col-xs-12 my-col">
                            <div class="text1">
                            Open - Every Day</br>
                            Close- Only poyaday</br>
                            <marquee direction="right">contact us special order</marquee>  
                            </div>
                        </div>
                    </div>
                    <div class="row my-row">
                        <div class="col-md-12 col-sv-12 col-xs-12 my-col" id="fg"></br></br>
                            <h1 id="logo_txt">FROZEN-ICECREAM</h1></br></br>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 my-col" id="ax">
                           <h3>Week Special</h3>
                            <div class="col-md-12 col-sm-12 col-xs-12 my-col" id="ro">
                               <div class="scrollmenu"> 
                                <?php
                                    $con = mysqli_connect("localhost","root","","ice-cream");
                                    $sql = "SELECT * FROM special_image WHERE id ";
                                    $res = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($res) > 0){
                                        while ($images = mysqli_fetch_assoc($res)){
                                            ?>
                                            
                                            <img src="temp_image/<?=$images['image']?>" id="special">
                                <?php } }?>
                                
                                </div>
                                
                            </div></br></br>


                                        
                        </div>
                        <div class="col-md-12 col-sv-12 col-xs-12 my-col" id="fg"></br></br>
                            <h1 id="logo_txt">FROZEN-ICECREAM</h1></br></br>
                        </div>
                    </div></br></br>
                    <footer>  
            <div class="row my-row" id="footer">
            <div class="col-md-6 col-sm-12 col-xs-12 my-col">
                <!--footer-->
                <p>We are an innovative ice cream shop which serves
                    fresh made-to-order ice cream KOTTU. Our process will
                    change the way that you think about ice cream. Fresh
                    ingredients are blended and rapidly frozen before your eyes.
                    we are reinventing the ultimate ice cream experience..!<br><br> 
                    <img src="image/other/2.gif" id="gif">
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-5 my-col" id="menu_a">
                <div class="menu_f">
                    <ul>
                    <h2>ITEMS</h2></br>
                        <a>add1</a></br></br>
                        <a>add2</a></br></br>
                        <a>add3</a></br></br>
                        <a>add4</a></br></br>
                        <a>add5</a></br></br>
                        
                    </ul>
                </div>

            </div>
            <div class="col-md-3 col-sm-6 col-xs-5 my-col" id="menu_a">
                <div class="menu_f1">
                    <ul>
                    <h2>PAGE</h2></br>
                        <a>ADMIN</a></br></br>
                        <a>HOME</a></br></br>
                        <a>MENU</a></br></br>
                        <a>ABOUT</a></br></br>
                        <a>CONTACT</a></br></br>
                    </ul>
                </div>
            </div>
            </div>
            <div class="row my-row">
                <div class="col-md-12 col-sv-12 col-xs-12 my-col">
                    contact
                </div>
            </div>
            
            
</footer>                


                    

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
  setTimeout(showSlides, 4000); // Change image every 4 seconds


}
</script>


</body>
</html>